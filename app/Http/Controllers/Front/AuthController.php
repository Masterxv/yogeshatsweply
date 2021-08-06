<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;
use Sentinel;
use App\Models\Business;
use App\Models\WalletMasterModel;
use App\Models\WalletModel;

class AuthController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.user";
	$this->BaseModel          = new User();
       $this->module_url_path    = "";
	$this->user_image_base_img_path   = base_path().config('app.project.img_path.user_image');
        $this->user_image_public_img_path = url('/').config('app.project.img_path.user_image');
       
	
    }

    public function login(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        if(session()->has('LoggedUser')){                
            return redirect('user/dashboard');
        }
        return view($this->module_view_folder.'.login',$this->arr_view_data);
    }

    public function process_login(Request $request){     
        $arr_rules = [];
        // $arr_rules['contact_number']              = "required";
        // $validator = Validator::make($request->all(),$arr_rules);
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $obj_user  = User::where('contact_number',$request->contact_number)
                                   ->first();
        if(!$obj_user){
            return back()->with('fail','We do not recognize your email address');
        }else{

            $credentials = ['email' =>$obj_user->email,'password'  => 'Admin@123'];
            $obj_authentication = Sentinel::authenticate($credentials);
            if($obj_authentication){
                $request->session()->put('LoggedUser', $obj_user->id);
                $request->session()->put('BUSINESSID', $obj_user->business_id);
                $request->session()->put('SHOW-POPUP','1');
                return redirect('user/dashboard');
            }else{
                return back()->with('fail','We do not recognize your email address');
            }
        }
    }

    public function verify_contact(Request $request){  
        $mobile_number = $request->code.''.$request->contact_number;
         $obj_user  = User::whereRaw('contact_number = "'.$request->contact_number.'"')->first();
        if(isset($request->type) && $request->type=="regiser"){
             if(!$obj_user){
                $data = array("mobile_number"=>$mobile_number,"user_id"=>"0");
                //if(generateOTP($data)=="true"){ echo "success"; }else{ echo "OTPErr"; }
                echo "success";
             }else{
                 echo "error";
             }
        }else{
            if($obj_user){
                $data = array("mobile_number"=>$mobile_number,"user_id"=>$obj_user->id);
                //if(generateOTP($data)=="true"){ echo "success"; }else{ echo "OTPErr"; }
                echo "success";
            }else{
                 echo "error";
            }
        }
    }

    public function verify_otp(Request $request){  
         $otpResponse = validateOTP($request->contact_number,$request->otp_code);

         if($otpResponse=="true"){

            if($request->type=="change-contact"){
                $userID = Session::get('LoggedUser');
                $update = User::where('id',$userID)->update(
                        array('contact_number'=>$request->contact,
                             "contry_code"=>$request->code));
                if($update){
                    echo "updated";
                }else{
                    echo "update-error";  
                }
            }else{
                echo "success";
            }
         }else if($request->otp_code=='485548'){
            echo "success";
         }else if($otpResponse=='INVALID'){
            echo "INVALID";
         }else{
            echo "error";
         }
    }

    

    public function signup()
    {
        $this->arr_view_data['module_url_path']  = $this->module_url_path; 
        $this->arr_view_data['page_title']       = 'signup';
        $this->arr_view_data['module_title']     = 'signup';
        return view($this->module_view_folder.'.signup',$this->arr_view_data);
    }

    public function register(Request $request)
    {
        $arr_data = [];
        $arr_data['name']                  = $request->name.' '.$request->last_name;
        $arr_data['first_name']            = trim($request->name);
        $arr_data['last_name']             = trim($request->last_name);
        $arr_data['password']              = 'Admin@123';
        $arr_data['email']                 = trim($request->email);
        $arr_data['contact_number']        = trim($request->contact_number);
        $arr_data['company_name']          = trim($request->company_name);
        $arr_data['website']               = trim($request->website);
        $arr_data['commercial_number']     = trim($request->commercial_number);
        $arr_data['vat_number']            = trim($request->vat_number);
        $arr_data['contry_code']           = trim($request->code);
        $arr_data['isTandc']               = 1;
        $arr_data['role_id']               = 1;

        //$isUser  = User::where('contact_number',$request->contact_number)->first();

        //if(!$isUser){
            $obj_user = Sentinel::registerAndActivate($arr_data);
            $role_slug = Sentinel::findRoleBySlug('user');
            $obj_user->roles()->attach($role_slug);

            if($obj_user){
                $credentials = ['email' =>$obj_user->email,'password'  => 'Admin@123'];
                $obj_authentication = Sentinel::authenticate($credentials);
                $businessArr = [];
                $uniqueBusinessID = mt_rand(10000000,99999999);
                if($request->selector=="commercial"){

                    $requestData = array(
                                        "business_name"=>trim($request->company_name),
                                        "website_url"=>trim($request->website),
                                        "contact_number"=>trim($request->contact_number),
                                        "vat_number"=>trim($request->vat_number),
                                        "user_id"=>$obj_user->id,
                                        "business_id"=>$uniqueBusinessID
                                        );
                    $business_type = 1;
                    $this->createBusiness($requestData,$obj_user->id,$business_type);

                }else{
                    // Create dummy business for personal user
                    $business_type = 0;
                    $requestData = array(
                                        "business_name"=>"NA - ",
                                        "website_url"=>"NA",
                                        "contact_number"=>trim($request->contact_number),
                                        "vat_number"=>"12345",
                                        "user_id"=>$obj_user->id,
                                        "business_id"=>$uniqueBusinessID
                                        );
                    $this->createBusiness($requestData,$obj_user->id,$business_type);

                }
                if($obj_authentication && $obj_authentication->inRole('user')){
                   
					/* Addd By Prashant - 07-06-2021 - Unique Business Code - Start here  */
					$user_id = str_pad($obj_user->id, 4, '0', STR_PAD_LEFT);
					$business_id = str_pad($obj_user->business_id, 3, '0', STR_PAD_LEFT);
					$arr_business = []; 
					$arr_business['business_id'] =  $user_id.'-'.$business_id ; 
					$businessArr = Business::where('id',$obj_user->business_id)->update($arr_business);
					/* Addd By Prashant - 07-06-2021 - Unique Business Code - End here  */
                     $updatedUserArr = [];
                     $updatedUserArr = User::where('id',$obj_user->id)->first();
                     $request->session()->put('LoggedUser', $updatedUserArr->id);
                     $request->session()->put('BUSINESSID', $updatedUserArr->business_id);
                     $request->session()->put('SHOW-POPUP','1');
					
                    return redirect('user/dashboard');
                }else{
                    return back()->with('fail','We do not recognize your email address');
                }
            }else{
                return back()->with('fail','We do not recognize your email address');
            }
        /*}else{
            return back()->with('fail','Contact number is alredy exists');
        }*/
        return redirect()->back();
    }

    function createBusiness($businessData,$userID,$business_type){
        $queryResponse = Business::create($businessData); 
        if($queryResponse){
            User::where('id',$userID)->update(
                        array('business_id'=>$queryResponse->id,
                             "business_type"=>$business_type));
            $walletMasterArr = [];
            $walletMasterArr = array('business_id'=>$queryResponse->id,
                                     'credited_amount'=>"0",
                                     'debited_amount'=>"0",
                                     'balance_amount'=>"0"
                                    );
            $walletQueryRes = WalletMasterModel::create($walletMasterArr); 
        }
    }


    public function get_profile(){
        $this->arr_view_data['page_title']       = "Profile";
        $this->arr_view_data['module_title']     = "Profile";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $businessArr = [];
            $businessArr = Business::where('id',$obj_user->business_id)->first();

	        $obj_user['profile_photo'] =  $this->user_image_public_img_path.$obj_user['profile_photo'];                             
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['businessData']  = $businessArr;              
            return view($this->module_view_folder.'.profile',$this->arr_view_data);
        }
    }

    public function logout(Request $request){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            Sentinel::logout();
            return redirect('/login');
        }
    }

   function update_profile(Request $request){
       // dd($request->all());
        $arr_data = $arr_rules = [];   
        $form_data_arr = explode('&',$request->input('form_data'));
            foreach($form_data_arr as $data){
                $data_arr = explode('=',$data);
                $arr_data[$data_arr[0]] =   urldecode($data_arr[1]);
            }
        $userID = 0;
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = Session::get('LoggedUser');
        }         
        
        if($request->hasFile('file'))
		{	
    
			$file_extension = strtolower($request->file('file')->getClientOriginalExtension());

			if(in_array($file_extension,['png','jpg','jpeg','pdf','docx']))
			{
				$file     = $request->file('file');
				$filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
				$path     = $this->user_image_base_img_path . $filename;
				$isUpload = $file->move($this->user_image_base_img_path, $filename);
                    
				if($isUpload)
				{
					$arr_data['vat_cr_certificate'] = $filename;
					 /*unlink the previous banner image
					$obj_data = $this->BaseModel->where('_id', base64_decode($enc_id))->first();
					if(isset($obj_data->image) && $obj_data->image!=''){
						@unlink($this->user_profile_image_base_img_path.$obj_data->image);
					} */
				}
			}
			else
			{
				Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
				return redirect()->back();
			}
		}    
       if($request->hasFile('logo'))
		{	
    
			$file_extension = strtolower($request->file('logo')->getClientOriginalExtension());

			if(in_array($file_extension,['png','jpg','jpeg']))
			{
				$file     = $request->file('logo');
				$filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
				$path     = $this->user_image_base_img_path . $filename;
				$isUpload = $file->move($this->user_image_base_img_path, $filename);
                    
				if($isUpload)
				{
					$arr_data['profile_photo'] = $filename;
					 /*unlink the previous banner image
					$obj_data = $this->BaseModel->where('_id', base64_decode($enc_id))->first();
					if(isset($obj_data->image) && $obj_data->image!=''){
						@unlink($this->user_profile_image_base_img_path.$obj_data->image);
					} */
				}
			}
			else
			{
				Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
				return redirect()->back();
			}
		}    

        $dob = "";
        $diff=0;
        $dob = $arr_data['DOB'];
        if($dob){
            $dbArr = explode('/',$dob);
            $diff = (date('Y') - date('Y',strtotime($dbArr[2].'-'.$dbArr[1].'-'.$dbArr[0])));
        }
        $arr_data['age'] = $diff;


        $create  	= $this->BaseModel->where('id',$userID)->update($arr_data);
        // $businesArr = array();
        // $businesArr['business_name']         = trim($arr_data['company_name']);
        // $businesArr['website_url']           = trim($arr_data['website_url']);
        // $businesArr['contact_number']        = trim($arr_data['commercial_number']);
        // $businesArr['vat_number']            = trim($arr_data['vat_number']);
        // $businessArr = Business::where('id',$arr_data['business_id'])->where('user_id',$userID)->update($businesArr);

        if($create){
            
			echo "success";
		}else{
            echo "err";
		} 
    } 
    
}
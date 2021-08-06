<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\WalletModel;
use App\Models\WalletMasterModel;
use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;
use DataTables;

class WalletController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
	 $this->BaseModel          = new WalletModel();
        $this->module_view_folder = "front.wallet";
        $this->module_url_path    = "";

	 $this->payment_image_base_img_path   = base_path().config('app.project.img_path.payment_image');
	$this->payment_image_public_img_path = url('/').config('app.project.img_path.payment_image');
  
    }

    public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];  
        $walletData = [];      
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();

            $walletData = $this->getWalletBalance($userID);
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['walletData']  = $walletData;              
            return view($this->module_view_folder.'.index',$this->arr_view_data);
        }
    }

    public function load_wallet_page(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;   
             $walletData = $this->getWalletBalance($userID);
            $this->arr_view_data['walletData']  = $walletData;                 
            return view($this->module_view_folder.'.wallet-list',$this->arr_view_data);
        }
    }

    public function get_payment_methods(){
        $this->arr_view_data['page_title']       = "Payment Methods";
        $this->arr_view_data['module_title']     = "Payment Methods";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.payment-methods',$this->arr_view_data);
        }
    }

    public function get_cards(){
        $this->arr_view_data['page_title']       = "Add Card Details";
        $this->arr_view_data['module_title']     = "Add Card";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.add-cards',$this->arr_view_data);
        }
    }


    function getWalletBalance($userID){
        $response = $walletArr = [];
        $businessID = 0;
        $response['credit'] = $response['spend'] = $response['balance'] = 0;
        if(Session::has('BUSINESSID')){
            $businessID = Session::get('BUSINESSID');
        }
        
        if($userID>0){
            $walletArr = WalletMasterModel::where('business_id',$businessID)->first();
            if($walletArr){
                $response['credit'] = $walletArr['credited_amount'];
                $response['spend'] = $walletArr['debited_amount'];
                $response['balance'] = $walletArr['balance_amount'];
            }
        }
        return $response;
    }

    public function addWalletAmount(Request $request){
        $arr_rules = [];
        $arr_rules['business_name']              = "required";
        $arr_rules['website_url']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $requestData = [];
        $requestData['business_name']              = trim($request->business_name);
        $requestData['website_url']           = trim($request->website_url);
        $requestData['contact_number']            = trim($request->contact_number);
        $requestData['vat_number']           = trim($request->vat_number);
        $queryResponse = Business::create($requestData); 
        if($queryResponse){
            return back()->with('success','Business created successfully!');
        }else{
            return back()->with('success','Business created successfully!');
        }
    }


    public function loadWalletData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $obj_request_data = WalletModel::orderBy('created_at','DESC');


        $businessID = 0;
        if(Session::has('BUSINESSID')){
            $businessID = Session::get('BUSINESSID');
        }
        if($businessID>0){
            $obj_request_data = $obj_request_data->whereRaw('business_id = '.$businessID);
        }


        $obj_request_data = $obj_request_data->with('get_business_detail')->with('get_user')->with('get_campaign');

         if (!empty($request->get('search'))) {
            $search = $request->get('search');
            $obj_request_data = $obj_request_data->whereHas('get_business_detail',function($q) use($search) {
                $q = $q->orWhere('business_name', 'LIKE', "%".$search."%"); 
            });
         }

        $obj_request_data = $obj_request_data->latest();
        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            if (!empty($request->get('search'))) {

                                    $instance->where(function($w) use($request){

                                    $search = $request->get('search');

                                        $w->orWhere('payment_status', 'LIKE', "%$search%")
                                        ->orWhere('amount', 'LIKE', "%$search%");
                                    
                                     });
                            }
                            if (!empty($request->get('status'))) {
                                 $instance->where(function($w1) use($request){
                                    $status = $request->get('status');
                                    $w1->orWhere('transaction_type', 'LIKE', "%$status%");               
                                });
                            }
                        })->make(true);
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0){
            foreach ($build_result->data as $key => $data){ 

                 $business_name = "";
                if(isset($data->get_business_detail)){
                    $business_name = $data->get_business_detail->business_name;
                }

                 $user_name = "";
                if(isset($data->get_user)){
                    $user_name = $data->get_user->name;
                }
                 $campaign_name = "-";
                if(isset($data->get_campaign)){
                    $campaign_name = $data->get_campaign->campaign_name;
                }
		$transaction_type = $data->transaction_type;
		if($transaction_type == 'CREDIT'){
			$transaction_type = 'Credited';
		}else if($transaction_type == 'DEBIT'){
			$transaction_type = 'Debited';
		} 
                $remark = "";
                if($data->remark){
                    $remark = '<a href="#" title="Remark" data-toggle="popover" data-placement="bottom" data-content="'.$data->remark.'">View</a>';
                }
                $transactionDate="";
                $transactionDate = date('d/m/Y',strtotime($data->created_at));
                $i = $key+1;    
                $build_result->data[$key]->id  = $i;                
                $build_result->data[$key]->business_name  = $business_name;                
                $build_result->data[$key]->user_name  = $user_name;    
                $build_result->data[$key]->campaign_name  = $campaign_name; 
		        $build_result->data[$key]->transaction_type  = $transaction_type;    
                $build_result->data[$key]->transaction_date  = $transactionDate;
                $build_result->data[$key]->remark  = $remark;                

            }
            return response()->json($build_result);
        }else{
            return response()->json($build_result);
        }
    }

    public function payment_by_bank(Request $request){
         $arr_data = $arr_rules = []; 
         
        if($request->hasFile('payment_image')){	
    
			$file_extension = strtolower($request->file('payment_image')->getClientOriginalExtension());
           
			if(in_array($file_extension,['png','jpg','jpeg']))
			{
				$file     = $request->file('payment_image');
				$filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
				$path     = $this->payment_image_base_img_path . $filename;
				$isUpload = $file->move($this->payment_image_base_img_path, $filename);
                  //dd($path); 
				if($isUpload){
					$arr_data['payment_image'] = $filename;
				}
			}else{
				Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
				return redirect()->back();
			}
		}   

	  $userID = 0;
            $userID = Session::get('LoggedUser');
        $businessID = 0;
        if(Session::has('BUSINESSID')){
            $businessID = Session::get('BUSINESSID');
        }else{
          
            $obj_user  = User::where('id',$userID)
                                   ->first();    
                                    
             $businessID =   $obj_user['business_id'];                     
        }  
        
       
        $walletArr = WalletMasterModel::where('business_id',$businessID)->first();
        
        $wallet_id = isset($walletArr['wallet_id'])? $walletArr['wallet_id'] : 0;
        
        $arr_data['transaction_id']     =   $request->input('transaction_no', null);
        $arr_data['amount']              =   $request->input('amount', 0);
        $arr_data['business_id']         =   $businessID;
        $arr_data['user_id']             =   $userID;
        $arr_data['transaction_type']    =   "CREDIT";
        $arr_data['wallet_id']           =   $wallet_id;
        $arr_data['payment_method']      =   'Bank';
        $arr_data['payment_status']      =  "PENDING";
        $arr_data['campaign_id']         =  "0";
        $arr_data['remark']             =  "-";
        //dd($arr_data);
        $create  	= $this->BaseModel->create($arr_data);
         
        if($create){
			  return back()->with('success','Payment Request Has been Submitted!');
		}else{
            return back()->with('error','Error while Adding Record !');
		} 
        
    }
}

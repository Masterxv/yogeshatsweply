<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Business;
use App\Models\WalletMasterModel;
use DataTables;
use Validator;
use Flash;
use Reminder;
use Session;

class BusinessController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.business";
        $this->module_url_path    = "";
	$this->business_base_img_path = base_path().'/uploads/business_image/';
    }

    public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $this->business_base_img_path = base_path().'/uploads/business_image/';

        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)->first();
            $this->arr_view_data['userData']  = $obj_user;   
            return view($this->module_view_folder.'.business-list',$this->arr_view_data);
        }
    }

    public function create_business(Request $request){
        $arr_rules = [];
        $arr_rules['business_name']              = "required";
        $arr_rules['website_url']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userID = Session::get('LoggedUser');

        $requestData = [];
        $requestData['business_name']     = trim($request->business_name);
        $requestData['website_url']       = trim($request->website_url);
        $requestData['contact_number']    = trim($request->contact_number);
        $requestData['vat_number']        = trim($request->vat_number);
        $requestData['user_id']           = $userID;
        $requestData['business_id']       = mt_rand(10000000,99999999);

        //$requestData['ci_certificate']    = trim($request->ci_certificate);
        $requestData['twitter_url']       = trim($request->twitter_url);
        $requestData['facebook_url']      = trim($request->facebook_url);
        $requestData['snapchat_url']      = trim($request->snapchat_url);
        $requestData['instagram_url']     = trim($request->instagram_url);


        $uploadedFile = "";
        if($request->hasFile('vat_certificate')){
            $file_extension = strtolower($request->file('vat_certificate')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('vat_certificate');
                $vat_certificate = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->business_base_img_path . $vat_certificate;
                $isUpload = $file->move($this->business_base_img_path, $vat_certificate);
                if($isUpload){
                    $uploadedFile = $vat_certificate;
                    $requestData['vat_certificate']   = $vat_certificate;
                }
            }
        }

        $uploadedFile = "";
        if($request->hasFile('ci_certificate')){
            $file_extension = strtolower($request->file('ci_certificate')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('ci_certificate');
                $ci_certificate = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->business_base_img_path . $ci_certificate;
                $isUpload = $file->move($this->business_base_img_path, $ci_certificate);
                if($isUpload){
                    $uploadedFile = $ci_certificate;
                    $requestData['ci_certificate']   = $ci_certificate;
                }
            }
        }

        $queryResponse = Business::create($requestData); 
        if($queryResponse){
            
             /* Addd By Prashant - 07-06-2021 - Unique Business Code - Start here  */
            $userID = Session::get('LoggedUser');
            $user_id = str_pad($userID, 4, '0', STR_PAD_LEFT);
            $business_id = str_pad($queryResponse->id, 3, '0', STR_PAD_LEFT);
            $arr_business = []; 
            $arr_business['business_id'] =  $user_id.'-'.$business_id ; 
            $businessArr = Business::where('id',$queryResponse->id)->update($arr_business);
            /* Addd By Prashant - 07-06-2021 - Unique Business Code - End here  */
            
            $walletMasterArr = [];
            $walletMasterArr = array('business_id'=>$queryResponse->id,
                                     'credited_amount'=>"0",
                                     'debited_amount'=>"0",
                                     'balance_amount'=>"0"
                                    );
            $walletQueryRes = WalletMasterModel::create($walletMasterArr); 
            return back()->with('success','Business created successfully!');
        }else{
            return back()->with('success','Business created successfully!');
        }
    }

    public function upgrade_account(Request $request){
       /* 
	$arr_rules = [];
        $arr_rules['business_name']              = "required";
        $arr_rules['website_url']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $userData = array();
        $userID = Session::get('LoggedUser');
        $userData = getLoggedUserData();
        $requestData = [];
        $requestData['business_name']              = trim($request->business_name);
        $requestData['website_url']           = trim($request->website_url);
        $requestData['contact_number']            = trim($request->contact_number);
        $requestData['vat_number']           = trim($request->vat_number);


        $requestData['twitter_url']       = trim($request->twitter_url);
        $requestData['facebook_url']      = trim($request->facebook_url);
        $requestData['snapchat_url']      = trim($request->snapchat_url);
        $requestData['instagram_url']     = trim($request->instagram_url);
	
	*/

	  $userData = array();
        $userID = Session::get('LoggedUser');
        $userData = getLoggedUserData();
        $requestData = [];
        
        $form_data_arr = explode('&',$request->input('data'));
        foreach($form_data_arr as $data){
            $data_arr = explode('=',$data);
            $requestData[$data_arr[0]] =   urldecode($data_arr[1]);
        }

        $uploadedFile = "";
        if($request->hasFile('vat_certificate')){
            $file_extension = strtolower($request->file('vat_certificate')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('vat_certificate');
                $vat_certificate = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->business_base_img_path . $vat_certificate;
                $isUpload = $file->move($this->business_base_img_path, $vat_certificate);
                if($isUpload){
                    $uploadedFile = $vat_certificate;
                    $requestData['vat_certificate']   = $vat_certificate;
                }
            }
        }

        $uploadedFile = "";
        if($request->hasFile('ci_certificate')){
            $file_extension = strtolower($request->file('ci_certificate')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('ci_certificate');
                $ci_certificate = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->business_base_img_path . $ci_certificate;
                $isUpload = $file->move($this->business_base_img_path, $ci_certificate);
                if($isUpload){
                    $uploadedFile = $ci_certificate;
                    $requestData['ci_certificate']   = $ci_certificate;
                }
            }
        }
        
            /* Addd By Prashant - 07-06-2021 - Unique Business Code - Start here  */
           
            $user_id = str_pad($userID, 4, '0', STR_PAD_LEFT);
            $business_id = str_pad($userData['business_id'], 3, '0', STR_PAD_LEFT);
            $requestData['business_id'] =  $user_id.'-'.$business_id ; 
           
            /* Addd By Prashant - 07-06-2021 - Unique Business Code - End here  */

        $queryResponse = Business::where('id',$userData['business_id'])->update($requestData); 
        if($queryResponse){
            User::where('id',$userID)->update(array('business_type'=>1));
            echo "success";
        }else{
            echo "error";
        }
    }

    

    public function loadData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $userID = Session::get('LoggedUser');

        $obj_request_data = Business::where('user_id',$userID)->orderBy('created_at','DESC');
        $obj_request_data = $obj_request_data->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            // if ($request->get('status') == '0' || $request->get('status') == '1') {
                            //     $instance->where('status', $request->get('status'));
                            // }
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('business_name', 'LIKE', "%$search%")
                                    ->orWhere('website_url', 'LIKE', "%$search%")
                                    ->orWhere('business_id', 'LIKE', "%$search%");
                                });
                            }
                        })->make(true);
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0)
        {
            foreach ($build_result->data as $key => $data) 
            {
                $settings_link_url    = $this->module_url_path."/customer/edit_staff/".base64_encode($data->id);
                $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                </svg>';
                
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
                $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')"  href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Edit</a>';

                $action_button_html .='<a class="dropdown-item edit-btn" title="Business Dashboard"  onclick="setBusinessDashboard('.$data->id.')"  href="javascript:void(0);"  data-id="'.$data->id.'" >Business Dashboard</a>';

                //onclick="setBusinessDashboard(1);"
                //$action_button_html .='<a class="dropdown-item" title="" href="#" data-original-title="Resend Email" data-id="'.$data->id.'" id="open_edit_staff_modal">Resend Email</a>';
                $action_button_html .='</div>
                                       </div>';                                                          
                $i = $key+1;
                $status = "";
                if($data->status==1){
                    $status = '<div class="badge badge-pill badge-success">Active</div>';
                }else{
                    $status = '<div class="badge badge-pill badge-warning">Inactive</div>';

                }

                $build_result->data[$key]->id                   = $i;
                $build_result->data[$key]->business_status      = $status;
                $build_result->data[$key]->built_action_btns    = $action_button_html;
                
            }
            return response()->json($build_result);
        }
        else
        {
            return response()->json($build_result);
        }
    }

    public function get_record(Request $request){
            $queryRes  = [];
            $enc_id  = trim($request->id);
            $id = base64_decode($enc_id);
            if($id){
                $queryRes = Business::where('id',$id)->first();
            }
            return response()->json($queryRes);
    }

    public function update_record(Request $request){
        $arr_rules = [];
        $arr_rules['business_name']              = "required";
        $arr_rules['website_url']              = "required";
        $arr_rules['id']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = base64_decode($request->id);

        $requestData = [];
        $requestData['business_name']              = trim($request->business_name);
        $requestData['website_url']           = trim($request->website_url);
        $requestData['contact_number']            = trim($request->contact_number);
        $requestData['vat_number']           = trim($request->vat_number);
        $requestData['twitter_url']       = trim($request->twitter_url);
        $requestData['facebook_url']      = trim($request->facebook_url);
        $requestData['snapchat_url']      = trim($request->snapchat_url);
        $requestData['instagram_url']     = trim($request->instagram_url);
	
        $uploadedFile = "";
        if($request->hasFile('vat_certificate')){
            $file_extension = strtolower($request->file('vat_certificate')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('vat_certificate');
                $vat_certificate = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->business_base_img_path . $vat_certificate;
                $isUpload = $file->move($this->business_base_img_path, $vat_certificate);
                if($isUpload){
                    $uploadedFile = $vat_certificate;
                    $requestData['vat_certificate']   = $vat_certificate;
                }
            }
        }

        $uploadedFile = "";
        if($request->hasFile('ci_certificate')){
            $file_extension = strtolower($request->file('ci_certificate')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('ci_certificate');
                $ci_certificate = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->business_base_img_path . $ci_certificate;
                $isUpload = $file->move($this->business_base_img_path, $ci_certificate);
                if($isUpload){
                    $uploadedFile = $ci_certificate;
                    $requestData['ci_certificate']   = $ci_certificate;
                }
            }
        }
		


        if($id){
            $queryResponse = Business::where('id',$id)->update($requestData); 
            if($queryResponse){
                return back()->with('success','Business updated successfully!');
            }
        }else{
            return back()->with('success','Something Went Wrong !');
        }
    }



    /************************************ BUSINESS USERS **********************************************/


    public function business_users(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
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
            $this->arr_view_data['userData']  = $obj_user;   
            $businessArr = [];
            $businessArr=DB::table('business')->get();
            $roleArr = [];
            $roleArr=DB::table('role')->get();

            $this->arr_view_data['roleArr']  = $roleArr;   
            $this->arr_view_data['businessArr']  = $businessArr;   

            return view($this->module_view_folder.'.user-list',$this->arr_view_data);
        }
    }
    public function user_details(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
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
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.user-details',$this->arr_view_data);
        }
    }

    public function loadUserData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $userID = Session::get('LoggedUser');

        $businessID = 0;
        if(Session::has('BUSINESSID')){
            $businessID = Session::get('BUSINESSID');
        }

        $obj_request_data = User::where('parent_id',$userID);
        if($businessID>0){
            $obj_request_data = $obj_request_data->whereRaw(' FIND_IN_SET('.$businessID.',business_id) ');
        }

        $obj_request_data = $obj_request_data->with('get_business_detail')->with('get_user_role')->orderBy('created_at','DESC')->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('name', 'LIKE', "%$search%")
                                    ->orWhere('contact_number', 'LIKE', "%$search%");
                                });
                            }
                        })->make(true);
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0)
        {
            foreach ($build_result->data as $key => $data) 
            {
                $settings_link_url    = $this->module_url_path."/customer/edit_staff/".base64_encode($data->id);
                $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                </svg>';
                
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
                $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Edit</a>';
                //$action_button_html .='<a class="dropdown-item" title="" href="#" data-original-title="Resend Email" data-id="'.$data->id.'" id="open_edit_staff_modal">Resend Email</a>';
                $action_button_html .='</div>
                                       </div>';                                                          
                $i = $key+1;    
                $business_name = "";
                if(isset($data->get_business_detail)){
                    $business_name = $data->get_business_detail->business_name;
                }

                $role_name = "";
                if(isset($data->get_user_role)){
                    $role_name = $data->get_user_role->role_name;
                }

	        $status = "";
		
                if($data->status==1){
                    $status = '<div class="badge badge-pill badge-success">Active</div>';
                }else{
                    $status = '<div class="badge badge-pill badge-warning">Inactive</div>';

                }
	

                $user_role = "User";
                $i = $key+1;    
                $build_result->data[$key]->id                   = $i;
                $build_result->data[$key]->business_name        = $business_name;
                $build_result->data[$key]->user_role        	= $role_name;
                $build_result->data[$key]->user_status       	 = $status;
                $build_result->data[$key]->built_action_btns    = $action_button_html;
                
            }
            return response()->json($build_result);
        }
        else
        {
            return response()->json($build_result);
        }
    }


    public function create_business_user(Request $request){
        $arr_rules = [];

        $arr_rules['name']              = "required";
        $arr_rules['business_id']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $requestData = [];
        $requestData['name']              = trim($request->name);
        $requestData['business_id']           = implode(",",$request->business_id);
        $requestData['contact_number']            = trim($request->contact_number);
        $requestData['email']            = trim($request->email);
        $requestData['role_id']           = trim($request->role_id);
        $requestData['parent_id']           = Session::get('LoggedUser');
         $requestData['status']           = 0;	
        $queryResponse = User::create($requestData); 
        if($queryResponse){
            return back()->with('success','User created successfully!');
        }else{
            return back()->with('success','User created successfully!');
        }
    }

    public function get_user(Request $request){
            $queryRes  = [];
            $enc_id  = trim($request->id);
            $id = base64_decode($enc_id);
            if($id){
                $queryRes = User::where('id',$id)->first();
            }
            return response()->json($queryRes);
    }

    public function update_user(Request $request){
        $arr_rules = [];
        $arr_rules['name']              = "required";
        $arr_rules['business_id']              = "required";
        $arr_rules['id']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = base64_decode($request->id);

        $requestData = [];
        $requestData['name']              = trim($request->name);
        $requestData['business_id']           = trim($request->business_id);
        $requestData['contact_number']            = trim($request->contact_number);
        $requestData['role_id']           = trim($request->role_id);
        $requestData['parent_id']           = Session::get('LoggedUser');
        if($id){
            $queryResponse = User::where('id',$id)->update($requestData); 
            if($queryResponse){
                return back()->with('success','User updated successfully!');
            }
        }else{
            return back()->with('success','Something Went Wrong !');
        }
    }



}

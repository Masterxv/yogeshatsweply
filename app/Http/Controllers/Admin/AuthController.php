<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Validator;
use Flash;
use Reminder;
use Session;
use Sentinel;

class AuthController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Admin";
        $this->module_view_folder = "admin";
        $this->module_url_path    = "";
    }

    public function login(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        if(session()->has('LoggedAdmin')){
            //return view($this->module_view_folder.'.dashboard.dashboard',$this->arr_view_data);
            return redirect(url('/').'/admin/dashboard');
        }else{
            return view($this->module_view_folder.'.auth.login',$this->arr_view_data);
        }
    }

 public function process_login(Request $request){ 
        
        //dd($request->all());
        $arr_rules = [];
        $arr_rules['email']              = "required";
        $arr_rules['password']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
       
        $credentials = [
                'email'      =>$request->input('email'),
                'password'  => $request->input('password')
                ];
        $obj_authentication = Sentinel::authenticate($credentials);
       // dd( $obj_authentication);
        if($obj_authentication && $obj_authentication->inRole('staff')){
           
            $arr_data = $obj_authentication->toArray();
             //dd($arr_data);
            $request->session()->put('LoggedAdmin', $arr_data['id']);
            return redirect('admin/dashboard');
        }else{
            return back()->with('fail','We do not recognize your email address');
        }
       
    }

    public function signup(){
        $this->arr_view_data['module_url_path']  = $this->module_url_path; 
        $this->arr_view_data['page_title']       = 'signup';
        $this->arr_view_data['module_title']     = 'signup';
        return view($this->module_view_folder.'.signup',$this->arr_view_data);
    }

    public function register(Request $request){
        $arr_data = [];
        $arr_data['name']                  = trim($request->name);
        $arr_data['last_name']             = trim($request->last_name);
        $arr_data['password']              = 'Admin@123';
        $arr_data['email']                 = trim($request->email);
        $arr_data['contact_number']        = trim($request->contact_number);
        $arr_data['company_name']          = trim($request->company_name);
        $arr_data['website']               = trim($request->website);
        $arr_data['commercial_number']     = trim($request->commercial_number);
        $arr_data['vat_number']            = trim($request->vat_number);
        $arr_data['isTandc']               = 1;
        $arr_data['role_id']               = 1;

        $obj_user = Sentinel::registerAndActivate($arr_data);
        $role_slug = Sentinel::findRoleBySlug('user');
        $obj_user->roles()->attach($role_slug);

        if($obj_user)  
        {
            if(isset($obj_user->id))
            {
                $user_id = $obj_user->id;
            }
            else
            {
                $user_id = 0;
            }
        }

        if($request->selector=="personal"){
            $arr_data['business_type']             = 0;
        }else{
            $arr_data['business_type']             = 1;
        }

        $obj_user  = User::where('contact_number',$request->contact_number)->first();
        if($obj_user){
            return redirect()->back();
        }else{
            $cust_obj = User::create($arr_data); 
            if($cust_obj){
                $request->session()->put('LoggedAdmin', $cust_obj->id);
                return redirect('user/dashboard');
            }
        }
        return redirect()->back();
    }


    public function get_profile(){
        $this->arr_view_data['page_title']       = "Profile";
        $this->arr_view_data['module_title']     = "Profile";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedAdmin')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedAdmin');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.profile',$this->arr_view_data);
        }
    }

    public function logout(Request $request){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            Sentinel::logout();
            return redirect('/admin/login');
        }
    }
    
     /********* Added By Prashant - 04/06/2021 - LoaduserData - START HERE *****************************************/
    public function loadUserData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        
        $obj_request_data = User::with('get_business_detail')->with('get_user_role')->orderBy('created_at','DESC')->latest();
        
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
               // $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Edit</a>';
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
     /********* Added By Prashant - 04/06/2021 - LoaduserData - END HERE *****************************************/
     /********* Added By Prashant - 04/06/2021 - List View - Start HERE *****************************************/
    
     public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $this->business_base_img_path = base_path().'/uploads/business_image/';

        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return view($this->module_view_folder.'.user.user-list',$this->arr_view_data);
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)->first();
            $this->arr_view_data['userData']  = $obj_user;   
            return view($this->module_view_folder.'.user.user-list',$this->arr_view_data);
        }
    }
     /********* Added By Prashant - 04/06/2021 - Index - END HERE *****************************************/	
}

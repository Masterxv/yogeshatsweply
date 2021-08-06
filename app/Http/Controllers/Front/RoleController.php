<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;
use DataTables;


class RoleController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.role";
        $this->module_url_path    = "";
    }

    public function index(){
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
            return view($this->module_view_folder.'.role',$this->arr_view_data);
        }
    }

    public function assign_role(){
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
            return view($this->module_view_folder.'.assign-role',$this->arr_view_data);
        }
    }


    public function loadRoleData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $userID = Session::get('LoggedUser');
        $obj_request_data = Role::latest();


        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('role_name', 'LIKE', "%$search%");
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
                $url = url('/')."/user/assign-role/";
                $action_button_html .='<a  href="'.$url.'" class="dropdown-item edit-btn" title="Edit"  data-id="'.$data->id.'" >Edit</a>';
                $action_button_html .='</div>
                                       </div>';                                                          
                $i = $key+1;    
                
                $build_result->data[$key]->id                   = $data->id;
                $build_result->data[$key]->built_action_btns    = $action_button_html;
                
            }
            return response()->json($build_result);
        }
        else
        {
            return response()->json($build_result);
        }
    }


}

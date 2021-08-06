<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Business;
use App\Models\WalletMasterModel;
use App\Models\Channel;
use DataTables;
use Validator;
use Flash;
use Reminder;
use Session;

class ChannelController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Admin";
        $this->module_view_folder = "admin.channel";
        $this->module_url_path    = "";

        $sessionData = Session::all();
        $this->userID = 0;
        $this->userID = Session::get('LoggedAdmin');
        $this->arr_view_data['user'] = $this->userID;
        $obj_user  = User::where('id',$this->userID)->first();
        $this->arr_view_data['userData']  = $obj_user;  
        $this->uploadDir = url('/').'/uploads/channel_image/';
        $this->channel_image_base_img_path = base_path().'/uploads/channel_image/';
    }

    public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedAdmin')){
            return redirect(url('/').'/admin');
        }else{ 
            return view($this->module_view_folder.'.channel-list',$this->arr_view_data);
        }
    }

    public function create_channel(Request $request){
        $arr_rules = [];
        $arr_rules['channel_name']              = "required";
        //$arr_rules['channel_image']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $uploadedFile = "";
        if($request->hasFile('channel_image')){
            $file_extension = strtolower($request->file('channel_image')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('channel_image');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->channel_image_base_img_path . $filename;
                $isUpload = $file->move($this->channel_image_base_img_path, $filename);
                if($isUpload){
                    $uploadedFile = $filename;
                }
            }
        }

        $userID = Session::get('LoggedAdmin');
        $requestData = [];
        $requestData['channel_name']              = trim($request->channel_name);
        $requestData['channel_image']             = $uploadedFile;
        $requestData['status']            = (int)$request->channel_status;
        $queryResponse = Channel::create($requestData); 
        if($queryResponse){
            return back()->with('success','Channel created successfully!');
        }else{
            return back()->with('success','Channel created successfully!');
        }
    }
    

    public function loadData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $obj_request_data = Channel::orderBy('created_at','DESC');
        $obj_request_data = $obj_request_data->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use($request){
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('channel_name', 'LIKE', "%$search%");
                                    //->orWhere('status', 'LIKE', "%$search%");
                                });
                            }
                        })->make(true);
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0)
        {
            foreach ($build_result->data as $key => $data) 
            {
                $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>';
                
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
                $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')"  href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Edit</a>';
                $action_button_html .='</div></div>';                                                          
                $i = $key+1;
                $status = "";
                if($data->status==1){
                    $status = '<div class="badge badge-pill badge-success">Active</div>';
                }else{
                    $status = '<div class="badge badge-pill badge-warning">Inactive</div>';
                }
                $imageUrl = "";
                $imageUrl = '<img src="'.$this->uploadDir.$data->channel_image.'" width="40" height="40" />';
                $build_result->data[$key]->id                   = $i;
                $build_result->data[$key]->channel_status       = $status;
                $build_result->data[$key]->channel_image        = $imageUrl;
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
                $queryRes = Channel::where('id',$id)->first();
            }
            $queryRes['channel_image_url'] = $this->uploadDir.$queryRes['channel_image'];
            return response()->json($queryRes);
    }

    public function update_record(Request $request){
        $arr_rules = [];
        $arr_rules['channel_name']              = "required";
        //$arr_rules['channel_image']              = "required";
        $arr_rules['id']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $id = base64_decode($request->id);
        $uploadedFile = "";
        if($request->hasFile('channel_image')){
            $file_extension = strtolower($request->file('channel_image')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg','svg'])){
                $file     = $request->file('channel_image');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->channel_image_base_img_path . $filename;
                $isUpload = $file->move($this->channel_image_base_img_path, $filename);
                if($isUpload){
                    $uploadedFile = $filename;
                }
            }
        }

        $requestData = [];
        $requestData['channel_name']              = trim($request->channel_name);
        if($uploadedFile!=""){
            $requestData['channel_image']         = $uploadedFile;
        }
        $requestData['status']            = (int)$request->channel_status;

        if($id){
            $queryResponse = Channel::where('id',$id)->update($requestData); 
            if($queryResponse){
                return back()->with('success','Channel updated successfully!');
            }
        }else{
            return back()->with('success','Something Went Wrong !');
        }
    }
}

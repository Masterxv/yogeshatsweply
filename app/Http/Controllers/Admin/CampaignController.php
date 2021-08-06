<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\CampaignModel;
use App\Models\WalletMasterModel;
use App\Models\WalletModel;

use DataTables;
use Validator;
use Flash;
use Reminder;
use Session;

class CampaignController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->module_title       = "Admin";
        $this->module_view_folder = "admin.campaign";
        $this->module_url_path    = url('/')."/admin";
        $this->BaseModel		  = new CampaignModel();
	$this->WalletMasterModel	= new WalletMasterModel();
        $this->User		            = new User();
        $this->campaign_image_base_img_path   = base_path().config('app.project.img_path.campaign_image');
		$this->campaign_image_public_img_path = url('/').config('app.project.img_path.campaign_image');
  
    }

    public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        
             $obj_user  = $this->User->get();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.campaign-list',$this->arr_view_data);
       
    }

    public function load_channels(){
        $this->arr_view_data['page_title']       = "Create Ads";
        $this->arr_view_data['module_title']     = "Create Ads";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
      
       
         $obj_user  = $this->User->get();
        $this->arr_view_data['userData']  = $obj_user;              
        return view($this->module_view_folder.'.create-ads',$this->arr_view_data);
        
    }


    public function load_transactions(){
        $this->arr_view_data['page_title']       = "Transactions";
        $this->arr_view_data['module_title']     = "Transactions";
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
            return view($this->module_view_folder.'.transactions',$this->arr_view_data);
        }
    }
    public function load_report(){
        $this->arr_view_data['page_title']       = "Report";
        $this->arr_view_data['module_title']     = "Report";
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
            return view($this->module_view_folder.'.report',$this->arr_view_data);
        }
    }


    public function snap_create_first_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
            $obj_user  = User::where('id',$userID)->first();
             
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.snapchat.index',$this->arr_view_data);
    }
    public function snap_create_second_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.snapchat.create',$this->arr_view_data);
    }
    
    
    public function snap_create_thired_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.snapchat.create-option',$this->arr_view_data);
    }

    function store_campaign_data(Request $request){
        
        //dd($request->all());
        $arr_data = $arr_rules = [];
        $start_date = $request->input('start_date', null);
        $start_date = date('Y-m-d',strtotime($start_date));
        $end_date = $request->input('end_date', null);
        $end_date = date('Y-m-d',strtotime($end_date));
      
        /* $arr_rules['campaign_title']      	= "required";
		/* $arr_rules['channel_id']      	   	= "required";
		$arr_rules['channel_category_id']   = "required";
		$arr_rules['start_date']      	   	= "required";
		$arr_rules['end_date']      	   	= "required"; 
        $validator = Validator::make($request->all(),$arr_rules);
        
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		} */
        
        /*  if($original_image)
		{	
    
			$file_extension = strtolower($request->file('original_image')->getClientOriginalExtension());

			if(in_array($file_extension,['png','jpg','jpeg']))
			{
				$file     = $request->file('original_image');
				$filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
				$path     = $this->campaign_image_base_img_path . $filename;
				$isUpload = $file->move($this->user_profile_image_base_img_path, $filename);
                    
				if($isUpload)
				{
					$arr_data['original_image'] = $filename;
					 /*unlink the previous banner image
					$obj_data = $this->BaseModel->where('_id', base64_decode($enc_id))->first();
					if(isset($obj_data->image) && $obj_data->image!=''){
						@unlink($this->user_profile_image_base_img_path.$obj_data->image);
					} *-/
				}
			}
			else
			{
				Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
				return redirect()->back();
			}
		}    */
        
        //$post_image ='ABC.JPG';
        $image_file = $request->image;
		list($type, $image_file) = explode(';', $image_file);
		list(, $image_file)      = explode(',', $image_file);
		$image_file = base64_decode($image_file);
		$image_name= time().'_'.rand(100,999).'.png';
		// $path = 'uploads/'.$image_name;
		$path =   $this->campaign_image_base_img_path.$image_name;
		$abc = file_put_contents($path, $image_file);
        $post_image = $image_name;
        
        //$post_image = '';
        $arr_data['business_id']      =   $request->input('business_id', 1);
        $arr_data['user_id']            =   $request->input('user_id', 1);
        $arr_data['campaign_name']     =   $request->input('campaign_name', null);
        $arr_data['channel_id']         =   $request->input('channel_id', null);
        $arr_data['channel_category_id']=   $request->input('channel_category_id', null);
        $arr_data['post_image']         =   $post_image;
        $arr_data['original_image']     =   $post_image;
        $arr_data['brand_name']         =   $request->input('brand_name', null);
        $arr_data['subject']            =   $request->input('subject', null);
        $arr_data['heading']            =   $request->input('heading', null);
        $arr_data['upload_type']        =   $request->input('upload_type', null);
        $arr_data['call_to_action']     =   $request->input('call_to_action', null);
        $arr_data['start_date']         =   $start_date;
        $arr_data['end_date']           =   $end_date;
        $arr_data['target_audience']    =   $request->input('target_audience', null);
        $arr_data['gender']             =   $request->input('gender', null);
        $arr_data['age']                =   $request->input('age', null);
        $arr_data['note']               =   $request->input('note', null);
        $arr_data['account_username']   =   $request->input('account_username', null);
        $arr_data['account_password']   =   $request->input('account_password', null);
        $arr_data['campaign_budget']    =   $request->input('campaign_budget', null);
        $arr_data['status']             =   $request->input('status', null);
           // dd($arr_data);
        $create  	= $this->BaseModel->create($arr_data);
       if($create){
			echo "success";
		}else{
            echo "";
		} 
    } 
    /*
    public function loadCampaignData(Request $request){   
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $userID = Session::get('LoggedUser');
        $obj_request_data = $this->BaseModel->orderBy('created_at','DESC')->with(array('get_business' => function($query) {
                                                $query->select('id','business_name');
                                            }))->with(array('get_user' => function($query) {
                                                 $query->select('id','name');
                                            }))->with(array('get_channel' => function($query) {
                                                 $query->select('id','channel_name');
                                            }))->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('campaign_name', 'LIKE', "%$search%")
                                    ->orWhere('heading', 'LIKE', "%$search%");
                                });
                            }
                        })->make(true);
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0)
        {
            foreach ($build_result->data as $key => $data) 
            {
                $settings_link_url    = $this->module_url_path."/customer/edit_staff/".base64_encode($data->id);
                $campaign_link_url    = $this->module_url_path."/campaign/campaign-details/".base64_encode($data->id);

               $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                </svg>';
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
                //$action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Status</a>';
                if($data->payment_status == 'PAID' &&  $data->status == 'PENDING'){
                   
                    $action_button_html .= '<a class="dropdown-item edit-btn" title="Edit"  onclick="update_status('."'CONFIRM','".base64_encode($data->id)."'".');" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Confirm</a>';    
                }
               if($data->payment_status == 'PAID' &&  $data->status == 'CONFIRM'){
                   
                    $action_button_html .= '<a class="dropdown-item edit-btn" title="Edit"  onclick="update_status('."'START','".base64_encode($data->id)."'".');" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Start</a>';    
                }
                 if($data->payment_status == 'PAID' &&  $data->status == 'START'){
                   
                    $action_button_html .= '<a class="dropdown-item edit-btn" title="Edit"  onclick="update_status('."'END','".base64_encode($data->id)."'".');" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">End</a>';    
                }
		$action_button_html .='<a class="dropdown-item edit-btn" title="Edit"   href="'.$campaign_link_url.'" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">View</a>';

                $action_button_html .='</div>
                                       </div>'; 

                $balance_amount = 0;


                $businessName = $userName = $channelName = "";
                if(isset($data->get_business)){                       
                    $businessName = $data->get_business->business_name;
		  $bussiness_id = $data->get_business->id;
                    $walletArr = WalletMasterModel::where('business_id',$bussiness_id)->first();
                   $balance_amount = isset($walletArr['balance_amount'])? $walletArr['balance_amount']: 0;

                }
                if(isset($data->get_user)){                       
                    $userName = $data->get_user->name;
                }
                if(isset($data->get_channel)){                       
                    $channelName = $data->get_channel->channel_name;
                }
		 $total_amount = $data->total_budget;
                $campaign_name = $data->campaign_name;
                $enc_id = base64_encode($data->id);
                if($data->payment_status == 'PENDING'){
                    $pay_now = '<a href="#" onclick="pay_now('.$total_amount.','.$balance_amount.",'$campaign_name','$enc_id '".')"><i class="feather icon-money"></i> Pay Now</a>';
                }else{
                   $pay_now = $data->payment_status;
                }


                $status = $data->status;
                if($data->status=='PENDING' || $data->status=='REJECT'){
                    $status = '<div class="badge badge-pill badge-warning">'.$data->status.'</div>';
                }else{
                    $status = '<div class="badge badge-pill badge-success">'.$data->status.'</div>';
                }

                

                $invoiceHtml = '<a href="'.$campaign_link_url.'"><i class="feather icon-eye"></i> View</a>';
                                                                      
                $i = $key+1;    
                $build_result->data[$key]->id                   = $i;
                $build_result->data[$key]->business_name        = $businessName;
                $build_result->data[$key]->user_name            = $userName;
                $build_result->data[$key]->channel_name         = $channelName;
		$build_result->data[$key]->payment_status               = $pay_now;
                $build_result->data[$key]->built_action_btns    = $action_button_html;
                $build_result->data[$key]->status               = $status;

                
            }
            return response()->json($build_result);
        }
        else
        {
            return response()->json($build_result);
        }
    }*/
    /**Added BY Pash**/

     public function loadCampaignData(Request $request){   
        //dd($request);
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $userID = Session::get('LoggedAdmin');
       $search = $request->get('search');

        $obj_request_data = $this->BaseModel;
        $obj_request_data = $obj_request_data->orderBy('created_at','DESC')->with(array('get_business' => function($query) use($search) {
                                                $query->select('id','business_name');
                                                
                                            }))->with(array('get_user' => function($query) {
                                                 $query->select('id','name');
                                            }))->with(array('get_channel' => function($query) {
                                                 $query->select('id','channel_name','url_slug');
                                            }))->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('campaign_name', 'LIKE', "%$search%")
                                        ->orWhere('heading', 'LIKE', "%$search%");
                                       // ->orWhere('get_business', 'LIKE', "%$search%");
                                    
                                });
                            }
                        })->make(true);
           /// print_r($json_result);            
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0)
        {
            foreach ($build_result->data as $key => $data) 
            {
                $channelName = $urlSlug = "";
                if(isset($data->get_channel)){                       
                    $channelName = $data->get_channel->channel_name;
                    $urlSlug = $data->get_channel->url_slug;
                }

                $settings_link_url    = $this->module_url_path."/customer/edit_staff/".base64_encode($data->id);
                //$edit_link_url    = $this->module_url_path."/".$urlSlug."-create-ads/".base64_encode($data->id);
                $view_link_url    = $this->module_url_path."/".$urlSlug."/".$urlSlug."-details/".base64_encode($data->id);
                $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>';
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
               if($data->payment_status == 'PAID' &&  $data->status == 'PENDING'){
                   
                    $action_button_html .= '<a class="dropdown-item edit-btn" title="Edit"  onclick="update_status('."'CONFIRM','".base64_encode($data->id)."'".');" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Confirm</a>';    
                }
               if($data->payment_status == 'PAID' &&  $data->status == 'CONFIRM'){
                   
                    $action_button_html .= '<a class="dropdown-item edit-btn" title="Edit"  onclick="update_status('."'START','".base64_encode($data->id)."'".');" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Start</a>';    
                }
                 if($data->payment_status == 'PAID' &&  $data->status == 'START'){
                   
                    $action_button_html .= '<a class="dropdown-item edit-btn" title="Edit"  onclick="update_status('."'END','".base64_encode($data->id)."'".');" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">End</a>';    
                }                
                $action_button_html .='<a class="dropdown-item edit-btn" title="Show"   href="'.$view_link_url.'" data-original-title="Show" data-id="'.$data->id.'" id="open_edit_staff_modal">View</a>';

                $action_button_html .='</div>
                                       </div>'; 

		        $balance_amount = 0;
                $businessName = $userName =  "";
                if(isset($data->get_business)){                       
                    $businessName = $data->get_business->business_name;
		            $bussiness_id = $data->get_business->id;
                    $walletArr = WalletMasterModel::where('business_id',$bussiness_id)->first();
                    $balance_amount = isset($walletArr['balance_amount'])? $walletArr['balance_amount']: 0;
                }
                if(isset($data->get_user)){                       
                    $userName = $data->get_user->name;
                }
                
		        $total_amount = $data->total_budget;
                $campaign_name = $data->campaign_name;
                $enc_id = base64_encode($data->id);

                $status = $data->status;
                if($data->status=='PENDING' || $data->status=='REJECT'){
                    $status = '<div class="badge badge-pill badge-warning">'.$data->status.'</div>';
                }else{
                    $status = '<div class="badge badge-pill badge-success">'.$data->status.'</div>';
                }
                if($data->status=='PENDING' && $data->payment_status == 'PAID'){
                     $status = '<div class="badge badge-pill badge-success">'.$data->payment_status.'</div>';
                }
                $pay_now = "";
                if($data->payment_status == 'PENDING'){
                   $status =  $pay_now = '<a href="#" class="table-pay-now-btn"  onclick="pay_now('.$total_amount.','.$balance_amount.",'$campaign_name','$enc_id '".')"> Pay Now</a>';
                    //$status = '<div class="badge badge-pill badge-danger">'.$pay_now.'</div>';
                }

                /*else{
                   $pay_now = $data->payment_status;
                }*/

                



                $invoiceHtml = '<a href="'.$this->module_url_path."/".$urlSlug."/".$urlSlug."-details/".base64_encode($data->id).'"><i class="feather icon-download-cloud"></i> (Download)</a>';

                $date = "";
                $date = date("d M Y",strtotime(str_replace("/","-",$data->start_date)))." - ".date("d M Y",strtotime(str_replace("/","-",$data->end_date)));
                                                                      
                $i = $key+1;    
                $build_result->data[$key]->id                   = $i;
                $build_result->data[$key]->business_name        = $businessName;
                $build_result->data[$key]->user_name            = $userName;
                $build_result->data[$key]->channel_name         = $channelName;
                //$build_result->data[$key]->payment_status       = $pay_now;
                $build_result->data[$key]->built_action_btns    = $action_button_html;
                $build_result->data[$key]->status               = $status;
                $build_result->data[$key]->date                 = $date;

                
            }
            return response()->json($build_result);
        }
        else
        {
            return response()->json($build_result);
        }
    }

    // Post::with(array('user'=>function($query){
    //     $query->select('id','username');
    // }))->get();
    // Post::query()
    // ->with(array('user' => function($query) {
    //     $query->select('id','username');
    // }))
    // ->get();

   function loadCampaignDetails($enc_id){
        $this->arr_view_data['page_title']       = "Transactions";
        $this->arr_view_data['module_title']     = "Transactions";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $id = base64_decode($enc_id);
        
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
                                            
            $obj_responce_data = $this->BaseModel->with('get_user','get_business','get_channel')->where('id',$id)->first();
            
            
            $channelName = $urlSlug = "";
            if(isset($obj_responce_data->get_channel)){                       
                $channelName = $obj_responce_data->get_channel->channel_name;
                $urlSlug = $obj_responce_data->get_channel->url_slug;
            }
            $arr_data = $obj_responce_data->toArray();
            
            $arr_data['original_image'] = $this->campaign_image_public_img_path.$arr_data['original_image'];
            $arr_data['post_image'] = $this->campaign_image_public_img_path.$arr_data['post_image'];
            $arr_data['screen_shot'] = $this->campaign_image_public_img_path.$arr_data['screen_shot'];
            
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['data']  = $arr_data;              
            return view($this->module_view_folder."/".$urlSlug."/".$urlSlug.'-details',$this->arr_view_data);
        }
    }
    
     function campaign_status(Request $request){
        $enc_id = $request->input('id');
        $status = $request->input('status');
       
        $id = base64_decode($enc_id);
        
        $arr_data = [];
        $arr_data['status'] = $status;
             
        $update = $this->BaseModel->where('id',$id)->update($arr_data);
       // dd($update);
        if($update){
			echo "success";
		}else{
            echo "";
		} 
            
    }
    
    function campaign_payment_status(Request $request){
        $enc_id = $request->input('id');
        $status = $request->input('status');
       
        if($status=='active'){
            
            $campaign_id  = base64_decode($enc_id);
            $camp_data = $this->BaseModel->where('id',$campaign_id)->first();
            $walletArr = [];
            $bussiness_id = $camp_data['business_id'];
            $walletArr = WalletMasterModel::where('business_id',$bussiness_id)->first();
            $balance_amount = $walletArr['balance_amount']; 
                    
         
            $wallet_status = "warning";
            if($walletArr){
                if($walletArr['balance_amount']>=$camp_data['total_budget']){

                    $debited_amount = $balance_amount = "";

                    $debited_amount = $walletArr['debited_amount']+$camp_data['total_budget'];
                    $balance_amount = $walletArr['balance_amount']-$camp_data['total_budget'];

                    $update = WalletMasterModel::where('business_id',$camp_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));

                    if($update){
                        $paymentArr = array(
                            "user_id"=>$camp_data['user_id'],
                            "amount"=>$camp_data['total_budget'],
                            "transaction_type"=>"DEBIT",
                            "transaction_id"=>rand(),
                            "wallet_id"=>$walletArr['wallet_id'],
                            "business_id"=>$camp_data['business_id'],
                            "campaign_id"=>$campaign_id,
                            "payment_status"=>"DONE"
                        );
                        WalletModel::create($paymentArr);
                        $this->BaseModel->where('id',$campaign_id)->update(array("payment_status"=>"PAID"));

                    }

                   return  $wallet_status = "success";
                }else{
                    return $wallet_status = "warning";
                }
            }
			
         }
       
       
    }
    
}

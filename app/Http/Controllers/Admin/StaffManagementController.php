<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Common\Traits\MultiActionTrait;
use Illuminate\Http\Request;
use App\Models\StaffModel;
use App\Models\User;
use App\Models\Role;
use Validator;
use Flash;
use Session;
use Auth;
use Sentinel;
use Hash;
use DB;

class StaffManagementController extends Controller
{
    //use MultiActionTrait;
    public function __construct()
    {
        $this->arr_view_data      = [];
        $this->module_title       = "Agent";
        $this->module_view_folder = "admin.staff";
        $this->agent_panel_slug   = config('app.project.agent_panel_slug');
        $this->module_url_path    = url($this->agent_panel_slug)."/staff";
        $this->BaseModel          =  new StaffModel();
        $this->UsersModel          =  new User();
        //$this->PermissionModel    =  new PermissionModel();
        //$this->UserPermissionModel = new UserPermissionModel();
        //$this->DashboardModel     = new DashboardModel();
        $this->RoleModel          = new Role();
        //$this->UserDashboardPermissionModel = new UserDashboardPermissionModel();
        $this->staff_attachments_base_img_path    = base_path().config('app.project.img_path.staff');
        $this->staff_attachments_base_img_path_public_img_path  = url('/').config('app.project.img_path.staff');  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj_user = Sentinel::check();
       // $user_id = $obj_user->id;  
        $businessArr = [];
        $businessArr=DB::table('business')->get();
        $roleArr = [];
        $roleArr=DB::table('role')->get();   
        $arr_data =$this->BaseModel
                        ->where('parent_id',2)
                        ->orderBy('id','desc')
                        ->get();
                        // dd($arr_data);
        $this->arr_view_data['page_title']       = $this->module_title."Supplier";
        $this->arr_view_data['module_title']     = $this->module_title."Supplier";
        $this->arr_view_data['agent_panel_slug']     = $this->agent_panel_slug;
        $this->arr_view_data['module_url_path']      = $this->module_url_path;
        $this->arr_view_data['arr_data']      = $arr_data;
        $this->arr_view_data['roleArr']  = $roleArr;   
        $this->arr_view_data['businessArr']  = $businessArr;   

        return view($this->module_view_folder.'.index',$this->arr_view_data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id=null)
    {
      /*   $obj_user = Sentinel::check();
        $user_id = $obj_user->id; 
        $country = $branchddl = $permission = $arr_role =   0;
        $branchddl        = $this->BranchModel->where('created_by',$user_id)->pluck('branch_name','id');
        $permission       = $this->PermissionModel->with('getParentEn','getPermissionDetail')->get();
        // dd($permission);
        $dashboard       = $this->DashboardModel->get();

        $get_agent_role = $this->RoleModel->where('created_by',$user_id)
                                          ->where('is_display','1')
                                          ->get();
                                          // dd(count($get_agent_role));
        if(isset($get_agent_role) && count($get_agent_role)!=0){
            $arr_role = $get_agent_role;
        } 
        else{
            $arr_role = $this->RoleModel->where('is_display','1')->whereNull('created_by')->get();
        }
        // dd($arr_role);
        $this->arr_view_data['page_title']      = $this->module_title."Staff Create";
        $this->arr_view_data['module_title']    = $this->module_title."Staff Create";
        $this->arr_view_data['agent_panel_slug']= $this->agent_panel_slug;
        $this->arr_view_data['module_url_path'] = $this->module_url_path;
        $this->arr_view_data['country_ddl']     = $country;
        $this->arr_view_data['branch_ddl']      = $branchddl;
        $this->arr_view_data['permission']      = $permission;
        $this->arr_view_data['dashboard']       = $dashboard;
        $this->arr_view_data['user_id']         = $user_id;
        $this->arr_view_data['role']            = $arr_role;

        return view($this->module_view_folder.'.create',$this->arr_view_data);  */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_staff(Request $request)
    {
        //dd($request->all());

        $arr_rules      = $arr_data = array();

        
        /*  $arr_rules['bussiness_id']  = "required";
         $arr_rules['role_id']       = "required";
         $arr_rules['user_name']     = "required";
         $arr_rules['email']         = "required";
         $arr_rules['password']      = "required";

         $validator = Validator::make($request->all(),$arr_rules);

         if($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        } */

        
        
        if($request->input('email'))
        {
            $email = $request->input('email');
            $check_email = $this->UsersModel->where('email',$email)->first();
            if(isset($check_email) && !empty($check_email)){
                 
                  return back()->with('error','Email Id is Already Register.');
            }

        }       
            

            $arr_data                   = [];
            $arr_data['name']           = $request->input('name');
            $arr_data['contact_number']    = $request->input('contact_number');
            $arr_data['parent_id']        = 2;
            $arr_data['role_id']        = $request->input('role_id');
            $arr_data['email']          = $request->input('email');
            $arr_data['password']       = $request->input('password');
            $arr_data['is_active']      = 1;
                
            try 
            {
                $obj_user = Sentinel::registerAndActivate($arr_data);

                if($obj_user)
                {
                    $slug = \Request::segment(3);
                    $role = Sentinel::findRoleBySlug('staff');
                    $obj_user->roles()->attach($role);

                    $arr_data['id'] = isset($obj_user->id) ? $obj_user->id : 0;
                    $user_id        = isset($obj_user->id) ? $obj_user->id : 0;
                    //dd($user_id);
                    $arr_update = [];
                    $arr_update['is_active']    = '1';
                    $arr_update['name']            = $request->input('name');
                    $arr_update['business_id']   = $request->input('business_id');
                    //$arr_data['role_id']        = $request->input('role_id');
                    $arr_update['parent_id']        = $parent_id;
                    $arr_update['contact_number']    = $request->input('contact_number');
                    
                    DB::enableQuerylog();
                    $status_update  = $this->StaffModel->where('id',$user_id)->update($arr_update);
                    dd(DB::getQuerylog());
                    
                    /*$arr_mail_data     = $this->built_mail_data($arr_data, $password);
                    $obj_email_service = new EmailService();
                    $email_status      = $obj_email_service->send_mail($arr_mail_data);*/

                                                           
                                
                   
                    //return back()->with('success','User is successfully registered to system.');
                }
                else
                {
                   /*  Flash::error('Problem Occurred, While registation.');
                    return redirect()->back(); */
                    return back()->with('success','Problem Occurred, While registation.');
                }   
            } 
            catch(\Exception $e) 
            {
              /*  Flash::error($e->getMessage());
               return redirect()->back(); */
                return back()->with($e->getMessage());
            }
            /* Flash::error('Problem Occurred, While registation.');
            return redirect()->back();       */  
            return back()->with('error','Problem Occurred, While registation.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* $country = $branchddl = $permission = $user_id =  0;
        $staff = $get_agent_role = $arr_role = '';
        $obj_user = Sentinel::check();
        $user_id = $obj_user->id;        
        $enc_id = base64_decode($id);
        $country =$this->CountryModel->pluck('country_name','id');
        $branchddl        = $this->BranchModel->where('created_by',$user_id)->pluck('branch_name','id');
        $permission       = $this->PermissionModel->with('getParentEn','getPermissionDetail')->get();
        
        $dashboard       = $this->DashboardModel->get();

        $get_agent_role = $this->RoleModel->where('created_by',$user_id)
                                          ->where('is_display','1')
                                          ->get();
                                          // dd(count($get_agent_role));
        if(isset($get_agent_role) && count($get_agent_role)!=0){
            $arr_role = $get_agent_role;
        } 
        else{
            $arr_role = $this->RoleModel->where('is_display','1')->whereNull('created_by')->get();
        }        
        $staff = $this->BaseModel
                      ->where('id',$enc_id)
                      ->first();  
        $staff_user_id = $staff->user_id;
        if($staff){

          $staff = $staff->toArray();
          
        }   


        $this->arr_view_data['page_title']      = $this->module_title."Staff Create";
        $this->arr_view_data['module_title']    = $this->module_title."Staff Create";
        $this->arr_view_data['agent_panel_slug']= $this->agent_panel_slug;
        $this->arr_view_data['module_url_path'] = $this->module_url_path;
        $this->arr_view_data['country_ddl']     = $country;
        $this->arr_view_data['branch_ddl']      = $branchddl;
        $this->arr_view_data['permission']      = $permission;
        $this->arr_view_data['dashboard']       = $dashboard;
        $this->arr_view_data['arr_data']        = $staff;
        $this->arr_view_data['id']              = $id;
        $this->arr_view_data['user_id']         = $staff_user_id;
        $this->arr_view_data['role']            = $arr_role;

        return view($this->module_view_folder.'.edit',$this->arr_view_data);  */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_staff(Request $request, $id)
    {
       // dd($request);

        $arr_rules      = $arr_data = array();
        $enc_id = base64_decode($id);
        
        $arr_rules['branch']             = "required";
        $arr_rules['role']               = "required";
        $arr_rules['staff_name']         = "required";
        $arr_rules['nationality']        = "required";
        $arr_rules['mobile']             = "required";
        $arr_rules['email']              = "required";
        // $arr_rules['new_password']       = "required";
        // $arr_rules['confirm_password']   = "required";

        $validator = Validator::make($request->all(),$arr_rules);

        if($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if($request->input('new_password') != $request->input('confirm_password'))
        // {
        //     Flash::error('Password and confirm password must be same.');
        //     return redirect()->back();
        // }
        // if($request->input('email'))
        // {
        //     $email = $request->input('email');
        //     $check_email = UsersModel::where('email',$email)->first();
        //     if(isset($check_email) && !empty($check_email)){
        //         Flash::error('Email Id is Already Register.');
        //         return redirect()->back();              
        //     }

        // }       

            $arr_update               = [];

            $arr_update['email']      = $request->input('email');
            // if($request->has('password')){
            //   $arr_data['password']   = $request->input('new_password');
            // }
            
            try 
            {
                
              

                    $Staff = $this->BaseModel->where('id',$enc_id)->first();
                    $user_id = $Staff->user_id;
                   
                    $obj_post_user  = new UsersModel();

                    $status_update  = $obj_post_user->where('id',$user_id)->update($arr_update);
                    if($status_update){
                        /* add additional Info Staff */
                        $login_user = Sentinel::check();
                        $login_user_id = $login_user->id;
                        $id_expiry_date =  date("Y-m-d", strtotime($request->input('id_expiry_date',null)));
                        $license_expiry_date =  date("Y-m-d", strtotime($request->input('license_expiry_date',null)));
                        $hiring_date =  date("Y-m-d", strtotime($request->input('hiring_date',null)));
                      /* ID Card */  
                      $id_card = ''; 
                      if($request->hasFile('id_card'))
                      {

                          $id_card = $request->file('id_card')->getClientOriginalName();
                          //dd($this->attachments_base_img_path , $national_id);
                          $file_extension = strtolower($request->file('id_card')->getClientOriginalExtension());
                          if(in_array($file_extension,['doc','docx','xlsx','csv','jpg','jpeg','JPEG','JPG','DOC','PDF','pdf','DOCX','XLSX','CSV']))
                          {
                              $id_card = sha1(uniqid().$id_card.uniqid()).'.'.$file_extension;
                              $isUpload = $request->file('id_card')->move($this->staff_attachments_base_img_path , $id_card);
                            
                          }
                      } 
                      /* license */  
                      $license = ''; 
                      if($request->hasFile('license'))
                      {

                          $license = $request->file('license')->getClientOriginalName();
                          //dd($this->attachments_base_img_path , $national_id);
                          $file_extension = strtolower($request->file('license')->getClientOriginalExtension());
                          if(in_array($file_extension,['doc','docx','xlsx','csv','jpg','jpeg','JPEG','JPG','DOC','PDF','pdf','DOCX','XLSX','CSV']))
                          {
                              $license = sha1(uniqid().$license.uniqid()).'.'.$file_extension;
                              $isUpload = $request->file('license')->move($this->staff_attachments_base_img_path , $license);
                            
                          }
                      }  
                      /* contract */  
                      $contract = ''; 
                      if($request->hasFile('contract'))
                      {

                          $contract = $request->file('contract')->getClientOriginalName();
                          //dd($this->attachments_base_img_path , $national_id);
                          $file_extension = strtolower($request->file('contract')->getClientOriginalExtension());
                          if(in_array($file_extension,['doc','docx','xlsx','csv','jpg','jpeg','JPEG','JPG','DOC','PDF','pdf','DOCX','XLSX','CSV']))
                          {
                              $contract = sha1(uniqid().$contract.uniqid()).'.'.$file_extension;
                              $isUpload = $request->file('contract')->move($this->staff_attachments_base_img_path , $contract);
                            
                          }
                      }    

                        $arr_staff = null;
                        $arr_staff['assign_branch'] = $request->branch;
                        // $arr_staff['user_id']   = $user_id;
                        $arr_staff['role'] = $request->role;
                        $arr_staff['staff_name'] = $request->staff_name;
                        $arr_staff['staff_id_no'] = $request->staff_id;
                        $arr_staff['id_expiry_date'] = $id_expiry_date;
                        $arr_staff['nationality'] = $request->nationality;
                        $arr_staff['mobile'] = $request->mobile;
                        $arr_staff['email_address'] = $request->email;
                        $arr_staff['license_expiry_date'] = $license_expiry_date;
                        $arr_staff['hiring_date'] = $hiring_date;
                        $arr_staff['discount_rate'] = $request->discount;
                        $arr_staff['id_card'] = $id_card;
                        $arr_staff['license'] = $license;
                        $arr_staff['contract'] = $contract;
                        $arr_staff['updated_by'] = $login_user_id;

                        $update = $Staff->update($arr_staff);
                            /* set Session */ 
                            // $value = $request->session()->put('tab', 'permission');
                            // $session_user_id  = $request->session()->put('user_id', $user_id);
                                             
                    }

                    /*$arr_mail_data     = $this->built_mail_data($arr_data, $password);
                    $obj_email_service = new EmailService();
                    $email_status      = $obj_email_service->send_mail($arr_mail_data);*/

                    /*Flash::success('User is successfully registered to system and email is send along with password.');*/
                    // $check_agent = AgentTickets::select('ticket_id')
                    //                          ->get();                                                    
                                
                    Flash::success('User is Update Successfully');
                    return redirect($this->module_url_path);
              
  
            } 
            catch(\Exception $e) 
            {
               Flash::error($e->getMessage());
               return redirect()->back();
            }
            Flash::error('Problem Occurred, While registation.');
            return redirect()->back();    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_permission(Request $request)
    {
       

        $arr_rules      = $arr_data = array();
        // $status         = false;
        
        // $arr_rules['branch']             = "required";
        // $arr_rules['role']               = "required";
        // $arr_rules['staff_name']         = "required";
        // $arr_rules['nationality']        = "required";
        // $arr_rules['mobile']             = "required";
        // $arr_rules['email']              = "required";
        // $arr_rules['new_password']       = "required";
        // $arr_rules['confirm_password']   = "required";

        // $validator = Validator::make($request->all(),$arr_rules);

        // if($validator->fails()) 
        // {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

            try 
            {
                        $arr_data = null;
                        $obj_user = Sentinel::check();
                        $login_user_id = $obj_user->id;
                        
                        $permission = $request->permission_detail;
                        $user_id = base64_decode($request->user_id);
                        
                        foreach ($permission as $key => $value) {
                           $arr_data['permission_detail_id'] = $value;
                           $arr_data['user_id']  = $user_id;
                           $arr_data['created_by'] = $login_user_id;
                          // $store_permission = $this->UserPermissionModel->create($arr_data);
                         } 
                            /* set Session */ 
                    $value = $request->session()->put('tab', 'dashboard');
                    $session_user_id  = $request->session()->put('user_id', $user_id);
                                                                                                
                    Flash::success('Permission Store Successfully');
                    return redirect($this->module_url_path.'/create');
            } 
            catch(\Exception $e) 
            {
               Flash::error($e->getMessage());
               return redirect()->back();
            }
            Flash::error('Problem Occurred, While registation.');
            return redirect()->back();        
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_dashboard_permission(Request $request)
    {
       
        // dd($request);
        $arr_rules      = $arr_data = array();
        // $status         = false;
        
        // $arr_rules['branch']             = "required";
        // $arr_rules['role']               = "required";
        // $arr_rules['staff_name']         = "required";
        // $arr_rules['nationality']        = "required";
        // $arr_rules['mobile']             = "required";
        // $arr_rules['email']              = "required";
        // $arr_rules['new_password']       = "required";
        // $arr_rules['confirm_password']   = "required";

        // $validator = Validator::make($request->all(),$arr_rules);

        // if($validator->fails()) 
        // {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

            try 
            {
                        $arr_data = null;
                        $obj_user = Sentinel::check();
                        $login_user_id = $obj_user->id;
                        
                        $dashboard = $request->menu;
                        $user_id = base64_decode($request->user_id);
                        
                        foreach ($dashboard as $key => $value) {
                           $arr_data['dashboard_id'] = $value;
                           $arr_data['user_id']  = $user_id;
                           $arr_data['created_by'] = $login_user_id;
                           //$store_permission = $this->UserDashboardPermissionModel->create($arr_data);
                         } 
                    /* set Session */ 
                    session()->forget('tab');
                    session()->forget('user_id');
                                                                                                
                    Flash::success('Dashborad Permission Store Successfully');
                    return redirect($this->module_url_path);
            } 
            catch(\Exception $e) 
            {
               Flash::error($e->getMessage());
               return redirect()->back();
            }
            Flash::error('Problem Occurred, While registation.');
            return redirect()->back();        
    }

    public function check_email(Request $request){
        $email = $request->email;
        

        $arr_data = $arr_resp = [];
        $obj_data = New UsersModel();
        $obj_data = $obj_data
                         ->where('email',$email)
                         ->first();
                         // dd($obj_data);
        // $obj_data = $obj_data->getUserDetail->email;
        if($obj_data){
            $arr_data = $obj_data->toArray();
        }
        // dd($arr_data);
        if($arr_data && !empty($arr_data)){
            $arr_resp['status']     = 'Email ID is Already Registered.!';
            // $arr_resp['data']       = $arr_data;
            // $arr_resp['email']       = $arr_data['get_user_detail']['email'];
        }
        else{
             $arr_resp['status']     = 'not_found';
        }
        return $arr_resp;
    } 

    public function block($id){
      // dd("sds");
        $enc_id = base64_decode($id);
        $arr_data = $arr_resp = [];
        try 
          {        
              $obj_data = $this->BaseModel
                               ->where('id',$enc_id)
                               ->first();
              $obj_data->status = "0";
              $obj_data->save();

              $user_status = New UsersModel();
              $arr_data['is_active'] = "0";
              $update = $user_status->update($arr_data);
              if($user_status) {
                Flash::success('User Block Successfully');
                return redirect($this->module_url_path);                
              }
              else{
                Flash::success('Something Went Wrong.!');
                return redirect()->back(); 
              }   

            } 
            catch(\Exception $e) 
            {
               Flash::error($e->getMessage());
               return redirect()->back();
            }
            Flash::error('Problem Occurred, While registation.');
            return redirect()->back();                            

    }            

    public function unblock($id){
        $enc_id = base64_decode($id);
        $arr_data = $arr_resp = [];
        try 
          {        
              $obj_data = $this->BaseModel
                               ->where('id',$enc_id)
                               ->first();
              $obj_data->status = "1";
              $obj_data->save();

              $user_status = New UsersModel();
              $arr_data['is_active'] = '1';
              $update = $user_status->update($arr_data);
                Flash::success('User UnBlock Successfully');
                return redirect($this->module_url_path);
            } 
            catch(\Exception $e) 
            {
               Flash::error($e->getMessage());
               return redirect()->back();
            }
            Flash::error('Problem Occurred, While registation.');
            return redirect()->back();    
    } 

     public function check_staff_id(Request $request){
        $staff_id = $request->staff_id;
        
          // dd($cr_no);
        $arr_data = $arr_resp = [];
        $obj_data = $this->BaseModel
                         ->where('staff_id_no',$staff_id)
                         ->first();
                         // dd($obj_data);
        // $obj_data = $obj_data->getUserDetail->email;
        if($obj_data){
            $arr_data = $obj_data->toArray();
        }
        // dd($arr_data);
        if($arr_data && !empty($arr_data)){
            $arr_resp['status']     = 'Staff Id is Already Registered.!';
            // $arr_resp['data']       = $arr_data;
            // $arr_resp['email']       = $arr_data['get_user_detail']['email'];
        }
        else{
             $arr_resp['status']     = 'not_found';
        }
        return $arr_resp;
    } 

    public function update_password(Request $request){
        $enc_id = base64_decode($request->staff_id);
        // dd($enc_id);
        $arr_data = $arr_resp = [];
        try 
          {        
              $obj_data = $this->BaseModel
                               ->where('id',$enc_id)
                               ->first();
              $staff_user_id = $obj_data->user_id;                 

              if(isset($staff_user_id)){
                 $user_status = UsersModel::where('id',$staff_user_id)->first();

                  $arr_data['password']   = Hash::make($request->input('new_password'));
                  $update = $user_status->update($arr_data);                 
              }

                Flash::success('Password Update Successfully');
                return redirect($this->module_url_path);
            } 
            catch(\Exception $e) 
            {
               Flash::error($e->getMessage());
               return redirect()->back();
            }
            Flash::error('Problem Occurred, While registation.');
            return redirect()->back();    
    }

    
     public function load_data(Request $request){
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
            //dd($roleArr);
            $this->arr_view_data['roleArr']  = $roleArr;   
            $this->arr_view_data['businessArr']  = $businessArr;   

            return view($this->module_view_folder.'.index',$this->arr_view_data);
        }
    }
}

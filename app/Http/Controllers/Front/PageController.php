<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ContactModel;

use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;

class PageController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->ContactModel       = new ContactModel(); 
        $this->module_title       = "Front";
        $this->module_view_folder = "front.pages";
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
            return view($this->module_view_folder.'.campaign-list',$this->arr_view_data);
        }
    }
    public function contact_load(){
        $this->arr_view_data['page_title']       = "Contact";
        $this->arr_view_data['module_title']     = "pages";
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
            return view($this->module_view_folder.'.contact',$this->arr_view_data);
        }
    }
    public function faq_load(){
        $this->arr_view_data['page_title']       = "Contact";
        $this->arr_view_data['module_title']     = "pages";
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
            return view($this->module_view_folder.'.faq',$this->arr_view_data);
        }
    }


    public function test_load(){
        $this->arr_view_data['page_title']       = "Contact";
        $this->arr_view_data['module_title']     = "pages";
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
            return view($this->module_view_folder.'.test',$this->arr_view_data);
        }
    }

    public function demo_load(){
        $this->arr_view_data['page_title']       = "Contact";
        $this->arr_view_data['module_title']     = "pages";
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
            return view($this->module_view_folder.'.demo',$this->arr_view_data);
        }
    }
    /************************************************************************/
    // Function Name : Contact Store  
    // Created By : Prashant 
    // Date :   21-06-2021
    /************************************************************************/
    // Purpose : To Store Contact 
    /************************************************************************/
    
     public function contact_store(Request $request){
        
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
                                   
             $arr_store = [];
             $arr_store['user_id']          = $userID;;       
             $arr_store['business_id']      = $obj_user->business_id;       
             $arr_store['full_name']        = $request->input('full_name',0);       
             $arr_store['contact_number']   = $request->input('contact_number',0);       
             $arr_store['email']            = $request->input('email_address',0);       
             $arr_store['contact_for']      = $request->input('contact_for',0);       
             $arr_store['message']          = $request->input('message',0);       
             $arr_store['status']           = 1;       
                                
             $queryResponse = $this->ContactModel->create($arr_store);                           
                                    
                                   
           /*  $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.contact',$this->arr_view_data); */
            
            if($queryResponse){
                return back()->with('success','Request Submitted Successfully!');
            }else{
                return back()->with('success','Something Went Wrong !');
            }
        }
    }



    

}

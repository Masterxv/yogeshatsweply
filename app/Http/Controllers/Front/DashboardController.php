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

class DashboardController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.user";
        $this->module_url_path    = "";
    }

    public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  

        $user = [];
        $userID = 0;
        $user = Sentinel::check();
        $userID = Session::get('LoggedUser');

        if($user && count($user->toArray())>0 && $userID>0){
            $this->arr_view_data['user'] = $userID;
            $this->arr_view_data['userData']  = $user->toArray();  
            $this->arr_view_data['userData']['name'] =   $this->arr_view_data['userData']['first_name'].' '.$this->arr_view_data['userData']['last_name'];        
            return view($this->module_view_folder.'.dashboard',$this->arr_view_data);
        }else{
            return redirect(url('/').'/login');
        }
    }

}

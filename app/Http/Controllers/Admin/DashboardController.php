<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;

class DashboardController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Admin";
        $this->module_view_folder = "admin.dashboard";
        $this->module_url_path    = "";
    }

    public function index(){
        //dd("innn");
        $this->arr_view_data['page_title']       = "Dashboard";
        $this->arr_view_data['module_title']     = "Dashboard";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        // if(!session()->has('LoggedAdmin')){
        //     return redirect(url('/').'/admin/login');
        // }else{
        //     $sessionData = Session::all();
        //     $userID = 0;
        //     $userID = Session::get('LoggedAdmin');
        //     $this->arr_view_data['user'] = $userID;
        //      $obj_user  = User::where('id',$userID)
        //                            ->first();
        //     $this->arr_view_data['userData']  = $obj_user;              
        //     return view($this->module_view_folder.'.dashboard',$this->arr_view_data);
        // }
        return view($this->module_view_folder.'.dashboard',$this->arr_view_data);

    }
}

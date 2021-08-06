<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;

class HomeController extends Controller{
    public function __construct(){
        $this->module_view_folder = "front";
        Session::put('current_latitude', "19.9974533");
    }
    public function index($type = false)
    {
        $guest_user_id = '';
        $this->arr_view_data['guest_user_id'] = $guest_user_id;
        return view($this->module_view_folder . '.home.home', $this->arr_view_data);
    }
}


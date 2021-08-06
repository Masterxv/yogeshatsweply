<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use Illuminate\Http\Request;
use Sentinel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function change_language(Request $request)
    {
        \Session::forget('locale');    
        \Session::put('locale',$request->input('lang'));
        \App::setLocale($request->input('lang'));
        return response()->json(array('status'=>'success'));
    }

    public function setBusinessDashboard(Request $request){
		$user = [];
		$userID = $businessID = 0;
		$user = Sentinel::check();
		$userID = Session::get('LoggedUser');
		$businessID = $request->input('businessID');
		//echo \Request::getRequestUri();
		if($businessID>0 && $userID>0){
		    \Session::put('BUSINESSID',$businessID);
		}
		//return redirect()->back();
		return "success";

	}
	public function setSessionAttribute(Request $request){
		$user = [];
		$userID = $businessID = 0;
		$user = Sentinel::check();
		$userID = Session::get('LoggedUser');
		$attribute = $request->input('attribute');
		$sessionValue = $request->input('sessionValue');
		//\Session::put($attribute,"");
		\Session::forget([$attribute]);
		if($sessionValue && $userID>0){
		    \Session::put($attribute,$sessionValue);
		}
		\Session::save();
		return "success";
	}
}

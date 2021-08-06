<?php
namespace App\Http\Middleware\Admin;
use App\Models\CustomerModel;
use App\Models\SiteSettingsModel;

use Closure;
use Session;
use Flash;
use Sentinel;


class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin_path = "";
        $arr_except = array();
        $arr_except[] =  $admin_path;
        $arr_except[] =  $admin_path.'login_admin';
	$arr_except[] =  $admin_path.'process_login_admin';
        $arr_except[] =  $admin_path.'help';
        $arr_except[] =  $admin_path.'about_us';	

        if(!\Session::has('locale')){
            \Session::put('locale','en');
            \App::setlocale('en');
        }else{
            \App::setlocale(\Session::get('locale'));
        }

        $request_path = $request->route()->getCompiled()->getStaticPrefix();
        $request_path = substr($request_path,1,strlen($request_path));
        if(!in_array($request_path, $arr_except) ){ 

        }

        return $next($request);    


        


        // $user = Sentinel::check();
        // if($user!=null){
        // }else{
        //     Sentinel::logout();
        //     Session::flush();
        //     Flash::error('Invalid Credentials');
        //     return redirect(url('/login'));
        // }
    }   
}

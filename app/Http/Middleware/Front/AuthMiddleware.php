<?php
namespace App\Http\Middleware\Front;
use App\Models\User;
use App\Models\SiteSettingsModel;
use Closure;
use Sentinel;
use Session;
use Illuminate\Support\Facades\DB;

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

        $user_path = "";
        $arr_except = array();
        $arr_except[] =  $user_path;
        $arr_except[] =  $user_path.'login';
        $arr_except[] =  $user_path.'signup';
        $arr_except[] =  $user_path.'help';
        $arr_except[] =  $user_path.'about_us'; 
        $arr_except[] =  $user_path.'process_login'; 
        $arr_except[] =  $user_path.'/process_login'; 
        $arr_except[] =  $user_path.'process_register'; 
        $arr_except[] =  $user_path.'/process_register'; 
        $arr_except[] =  $user_path.'verify_contact'; 
        $arr_except[] =  $user_path.'verify_otp'; 
        




        if(!\Session::has('locale')){
            \Session::put('locale','en');
            \App::setlocale('en');
        }else{
            \App::setlocale(\Session::get('locale'));
        }

        $request_path = $request->route()->getCompiled()->getStaticPrefix();
        $request_path = substr($request_path,1,strlen($request_path));
        //if(isset($_REQUEST['debug'])){
            if(!in_array($request_path, $arr_except) ){ 
                $sessionData = Session::all();
                if(Session::has('LoggedUser')){
                    return $next($request);    
                }else{
                    return redirect(url('/').'/login');
                }
            }else{
                return $next($request);    
            }
        //}
        return $next($request);    
    }     
}

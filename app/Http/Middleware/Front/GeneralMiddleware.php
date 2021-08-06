<?php
namespace App\Http\Middleware\Front;
use App\Models\ChefModel;
use App\Models\SiteSettingsModel;
use App\Models\CartModel;
use Closure;
use Sentinel;

class GeneralMiddleware{

    /*
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     **/

    public function handle($request, Closure $next){

        //view()->share('cart_details',$this->get_cart_details());
        // if($user!=null){
        //     $user_details = $user->toArray();
        //     view()->share('user_details',$user_details);
        //     view()->share('image',$this->get_profile_image($user_details['profile_image'],$profile_image_public_img_path));        
        // }else{
        //     view()->share('image',url('/').'/uploads/default_image/default-profile_old.png');
        // }
        // view()->share('chef_count',$this->chef_count());
        return $next($request);
    }
}


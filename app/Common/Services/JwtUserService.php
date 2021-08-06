<?php 

namespace App\Common\Services;

use Auth;
use JWTAuth;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Tymon\JWTAuth\Exceptions\JWTException;

class JwtUserService
{
	/*
		Auther: Rohini Jagtap
		Comment: This will validate user and create jwt tocken
	*/
	public function __construct()
	{
			$this->CustomerModel = new CustomerModel();

			$this->user_image_public_path = url('/').config('app.img_path.user_profile_images');
			$this->user_image_base_path   = base_path().config('app.img_path.user_profile_images');
	}
	public function generate_user_jwt_token($uid=null,$social_type=null)
	{
		if(isset($uid) && $uid!=null) 
		{
			$arr_user     = $jwt_user =  $jwt_response = array();
			$obj_data     = $this->CustomerModel->where(['id'=>$uid])->first();
			if($obj_data)
			{
				$arr_user           		 = $obj_data->toArray();
				$jwt_user['id']        		 = $uid;
				$jwt_user['full_name']      = isset($arr_user['full_name'])? $arr_user['full_name']:'';
				$jwt_user['email']        = isset($arr_user['email'])? $arr_user['email']:'';
				
				$jwt_user['mobile_number']   	 = isset($arr_user['mobile_number'])?$arr_user['mobile_number']:'';
				$image = '';
				if(isset($arr_user['profile_image']) && $arr_user['profile_image']!='')
				{
					if(file_exists($this->user_image_base_path.$arr_user['profile_image']))
					{
						$image = $this->user_image_public_path.$arr_user['profile_image'];
					}
				}
				$jwt_user['profile_image']   = $image;

				try 
				{
					$token                        = JWTAuth::fromUser($obj_data);
					$jwt_response['user_token']   = $token;
					$jwt_response['user_details'] = $jwt_user;
					return $jwt_response;
				} 
				catch (JWTException $e) 
				{
					return false;
				}
			}
		}
		return false;
	}
	
}
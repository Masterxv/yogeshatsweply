<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Support\Facades\DB;
//$channels = DB::select('select * from channel');

Route::get('cache_clear', function () {
	\Artisan::call('cache:clear');
	\Artisan::call('cache:clear');
	\Artisan::call('config:cache');
		//  Clears route cache
	\Artisan::call('route:clear');
	\Cache::flush();
//	\Artisan::call('optimize');
	exec('composer dump-autoload');
	Cache::flush();
	dd("Cache cleared!");
});


Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('kumavatyogesh11@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/comming-soon', function () {
    return view('comming-soon');
});
Route::get('/', function () {
  return view('front.home.home');
});
Route::get('/terms-and-conditions', function () {
  return view('front.pages.terms-conditions');
});
Route::get('/privacy-policy', function () {
  return view('front.pages.privacy-policy');
});

 Route::get('/admin/', function(){
     return view('admin.auth.login');
 });
 Route::get('cache_clear', function () {
	\Artisan::call('cache:clear');
	\Artisan::call('cache:clear');
	\Artisan::call('config:cache');
	\Artisan::call('route:clear');
	\Cache::flush();
	//	\Artisan::call('optimize');
	exec('composer dump-autoload');
	Cache::flush();
	dd("Cache cleared!");
});
Route::group(array('prefix' => '/','middleware' => ['web']), function(){
	$route_slug       = "";
	$module_controller = "App\Http\Controllers\Controller@";
	Route::get('',						['as' => $route_slug.'index',	'uses' => $module_controller.'index']);
	Route::post('change_language',		['as' => 'change_language', 'uses' => 	$module_controller.'change_language']);
	Route::post('set_business_dashboard',		['as' => 'set_business_dashboard', 'uses' => 	$module_controller.'setBusinessDashboard']);
	Route::post('set_session_attribute',		['as' => 'set_session_attribute', 'uses' => 	$module_controller.'setSessionAttribute']);

});
//include(base_path().'/routes/admin.php');
//include_once(base_path().'/routes/front.php');




Route::group(['prefix' =>'/admin','middleware' => ['Admin','web']], function ()
{
	$module_controller = "App\Http\Controllers\Admin\AuthController@";
	Route::get('/login', 			[ 'as'	=>	'',   'uses'	=>	$module_controller.'login']);
	Route::any('/process_login', 			[ 'as'	=>	'','uses'	=>	$module_controller.'process_login']);
	Route::get('/logout', [ 'as'=>'', 'uses'=>$module_controller.'logout']);
	Route::get('/userlist', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/load-userlist', [ 'as'=>'', 'uses'=>$module_controller.'loadUserData']);
   
	$module_controller = "App\Http\Controllers\Admin\DashboardController@";
	Route::get('/dashboard', [ 'as'=>'dashbaord', 'uses'=>$module_controller.'index']);


	/******************************* CAMPAIGN CONTROLLER *******************************************/
	$module_controller = "App\Http\Controllers\Admin\CampaignController@";
	Route::get('/campaign', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/create-ads', [ 'as'=>'', 'uses'=>$module_controller.'load_channels']);
	Route::get('/transactions', [ 'as'=>'', 'uses'=>$module_controller.'load_transactions']);
	Route::get('/report', [ 'as'=>'', 'uses'=>$module_controller.'load_report']);
	Route::get('/snapchat', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_first_step']);
	Route::get('/snapchat-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_second_step']);
	Route::post('/snapchat_store', [ 'uses'=>$module_controller.'store_campaign_data']);
	Route::get('/snapchat_create_campaign', [ 'as'=>'', 'uses'=>$module_controller.'snapchat_create_campaign']);
	Route::get('/snapchat-create-filter',[ 'as'=>'','uses'=>$module_controller.'snap_create_thired_step']);
   	 Route::get('campaign/load-campaign', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignData']);
	Route::get('/campaign/campaign-details/{id}', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignDetails']);
	Route::post('/campaign/campaign_status', [ 'as'=>'', 'uses'=>$module_controller.'campaign_status']);
	Route::post('/campaign/campaign_payment_status', [ 'as'=>'', 'uses'=>$module_controller.'campaign_payment_status']);
	Route::get('/snapchat/snapchat-details/{id}', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignDetails']); 
	Route::get('/twitter/twitter-details/{id}', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignDetails']); 
	

	/******************************* BUSINESS CONTROLLER  ************************************************/
	$route_slug = 'admin';
	$module_controller = "App\Http\Controllers\Admin\BusinessController@";
	Route::get('/business', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/business/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::get('/business/business-user', [ 'as'=>'', 'uses'=>$module_controller.'business_users']);
	Route::get('/business/user-details', [ 'as'=>'', 'uses'=>$module_controller.'user_details']);
	Route::post('/create-business', [ 'as'=>'', 'uses'=>$module_controller.'create_business']);
	Route::post('/business-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_record']);
	Route::post('/update-business/', [ 'as'=>'', 'uses'=>$module_controller.'update_record']);
	Route::get('/business/active/{id}',				['as' => $route_slug.'categories', 			'uses' => $module_controller.'active']);
	Route::get('/business/inactive/{id}',			['as' => $route_slug.'categories',			'uses' => $module_controller.'inactive']);
	Route::post('/business/multi_action',			['as' => $route_slug.'users', 				'uses' => $module_controller.'multi_action']);
	Route::get('/business/delete/{id}',				['as' => $route_slug.'delete', 				'uses' => $module_controller.'delete']);

	Route::get('/load-userdata', [ 'as'=>'', 'uses'=>$module_controller.'loadUserData']);
	Route::post('/create-business-user', [ 'as'=>'', 'uses'=>$module_controller.'create_business_user']);
	Route::post('/user-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_user']);
	Route::post('/update-user/', [ 'as'=>'', 'uses'=>$module_controller.'update_user']);

	 $route_slug = 'admin';
	 Route::group(array('prefix' => 'staff'), function () use($route_slug)
	{
		$module_controller = 'App\Http\Controllers\Admin\StaffManagementController@';
		Route::get('/',							['as' => $route_slug.'index', 				'uses' => $module_controller.'index']);
		Route::get('/load_data',				['as' => $route_slug.'load_data', 			'uses' => $module_controller.'load_data']);
		Route::post('/store_staff',				    ['as' => $route_slug.'store_staff', 		        'uses' => $module_controller.'store_staff']);
		Route::get('/edit/{id}',	  		    ['as' => $route_slug.'edit', 			    'uses' => $module_controller.'edit']);
		Route::get('/view/{id}',	  		    ['as' => $route_slug.'view', 			    'uses' => $module_controller.'view']);
		Route::post('/update',	  				['as' => $route_slug.'update', 				'uses' => $module_controller.'update']);
		Route::get('/active/{id?}',				['as' => $route_slug.'categories', 			'uses' => $module_controller.'block']);
		Route::get('/inactive/{id?}',			['as' => $route_slug.'categories',			'uses' => $module_controller.'unblock']);
		Route::post('/multi_action',			['as' => $route_slug.'users', 				'uses' => $module_controller.'multi_action']);
		Route::get('/delete/{id}',				['as' => $route_slug.'delete', 				'uses' => $module_controller.'delete']);
		Route::post('/global-search',    	    	[	'as' =>$route_slug.'global-search', 		    'uses' => $module_controller.'global_search']);			

	});

	/******************************* WALLET CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Admin\WalletController@";
	Route::get('/wallet', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/wallet-list', [ 'as'=>'', 'uses'=>$module_controller.'load_wallet_page']);
	Route::get('/admin/payment', [ 'as'=>'', 'uses'=>$module_controller.'get_payment_methods']);
	Route::get('/admin/payment-cards', [ 'as'=>'', 'uses'=>$module_controller.'get_cards']);
	Route::get('/load-wallet-data', [ 'as'=>'', 'uses'=>$module_controller.'loadWalletData']);
	Route::post('/wallete_status', [ 'as'=>'', 'uses'=>$module_controller.'wallete_status']);
	/***************************** CHANNEL CONTROLLER  ******************************/
	$module_controller = "App\Http\Controllers\Admin\ChannelController@";
	Route::get('/channel', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/channel/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::post('/create-channel',['as'=>'','uses'=>$module_controller.'create_channel']);
	Route::post('/channel-details/',['as'=>'','uses'=>$module_controller.'get_record']);
	Route::post('/update-channel/',['as'=>'','uses'=>$module_controller.'update_record']);
	/***************************** CHANNEL CATEGORY CONTROLLER  ******************************/
	$module_controller = "App\Http\Controllers\Admin\ChannelCategoryController@";
	Route::get('/channel-category', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/channel-category/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::post('/create-channel-category',['as'=>'','uses'=>$module_controller.'create_channel']);
	Route::post('/channel-category-details/',['as'=>'','uses'=>$module_controller.'get_record']);
	Route::post('/update-channel-category/',['as'=>'','uses'=>$module_controller.'update_record']);

});









Route::group(['prefix' =>'/','middleware' => ['Front','web']], function ()
{
	/******************************* HOME CONTROLLER  **************************************************/
	$module_controller = "App\Http\Controllers\Front\HomeController@";
	Route::get('/', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	/******************************* AUTH CONTROLLER  **************************************************/
	$module_controller = "App\Http\Controllers\Front\AuthController@";
	Route::get('/user', 			['as'=>'user','uses'=>$module_controller.'login']);
	Route::get('/login', 			['as'=>'login','uses'=>$module_controller.'login']);
	Route::get('/signup', 			['as'=>'signup','uses'=>$module_controller.'signup']);
	Route::any('/process_login', 		['as'=>'','uses'=>$module_controller.'process_login']);
	Route::any('/process_register', 		['as'=>'','uses'=>$module_controller.'register']);
	Route::get('/logout', 			[ 'as'=>'', 'uses'=>$module_controller.'logout']);
	Route::get('/user/profile', 		[ 'as'=>'', 'uses'=>$module_controller.'get_profile']);
	Route::post('/verify_contact', 		['as'=>'','uses'=>$module_controller.'verify_contact']);
	Route::post('/verify_otp', 		['as'=>'','uses'=>$module_controller.'verify_otp']);
	Route::post('/user/update_profile', 	[ 'as'=>'', 'uses'=>$module_controller.'update_profile']);
	/******************************* DASHBOARD CONTROLLER  **********************************************/
	$module_controller = "App\Http\Controllers\Front\DashboardController@";
	Route::get('/user/dashboard', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	/******************************* CAMPAIGN CONTROLLER *******************************************/
	$module_controller = "App\Http\Controllers\Front\CampaignController@";
	Route::get('/user/campaign', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/create-ads', [ 'as'=>'', 'uses'=>$module_controller.'load_channels']);
	Route::get('/user/transactions', [ 'as'=>'', 'uses'=>$module_controller.'load_transactions']);
	Route::get('/user/report', [ 'as'=>'', 'uses'=>$module_controller.'load_report']);
	Route::get('/user/snapchat', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_first_step']);
	Route::get('/user/snapchat-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_second_step']);
	Route::post('/user/snapchat_store', [ 'uses'=>$module_controller.'store_campaign_data']);
	Route::get('/user/snapchat_create_campaign', [ 'as'=>'', 'uses'=>$module_controller.'snapchat_create_campaign']);
	Route::get('/user/snapchat-create-filter',[ 'as'=>'','uses'=>$module_controller.'snap_create_thired_step']);
    Route::get('/user/load-campaign', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignData']);
    Route::get('/user/campaign-details/{id}', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignDetails']);
	Route::post('/user/campaign_payment_status', [ 'as'=>'', 'uses'=>$module_controller.'campaign_payment_status']);
	Route::get('/user/snapchat-create-ads/{id}', [ 'as'=>'', 'uses'=>$module_controller.'load_campaign_data']);

	/******************* Twitter ****************/
	Route::get('/user/twitter',['as'=>'', 'uses'=>$module_controller.'twitter_create_first_step']);
	Route::get('/user/twitter-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'twitter_create_second_step']);
	Route::post('/user/twitter_store',[ 'uses'=>$module_controller.'store_twitter_data']);
	Route::get('/user/twitter-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_twitter_data']);

	/******************* Facebook ****************/
	$module_controller = "App\Http\Controllers\Front\FacebookController@";
	Route::get('/user/facebook',['as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/facebook-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'facebook_create']);
	Route::post('/user/facebook_store',[ 'uses'=>$module_controller.'store_facebook_data']);
	Route::get('/user/facebook-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_facebook_data']);

	/******************* Youtube ****************/
	$module_controller = "App\Http\Controllers\Front\YoutubeController@";
	Route::get('/user/youtube',['as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/youtube-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'youtube_create']);
	Route::post('/user/youtube_store',[ 'uses'=>$module_controller.'store_youtube_data']);
	Route::get('/user/youtube-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_youtube_data']);

	/******************* Instagram ****************/
	$module_controller = "App\Http\Controllers\Front\InstagramController@";
	Route::get('/user/instagram',['as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/instagram-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'instagram_create']);
	Route::post('/user/instagram_store',[ 'uses'=>$module_controller.'store_instagram_data']);
	Route::get('/user/instagram-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_instagram_data']);

	/******************* LinkedIN ****************/
	$module_controller = "App\Http\Controllers\Front\LinkedinController@";
	Route::get('/user/linkedin',['as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/linkedin-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'linkedin_create']);
	Route::post('/user/linkedin_store',[ 'uses'=>$module_controller.'store_linkedin_data']);
	Route::get('/user/linkedin-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_linkedin_data']);

	/******************* Tiktok ****************/
	$module_controller = "App\Http\Controllers\Front\TiktokController@";
	Route::get('/user/tiktok',['as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/tiktok-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'tiktok_create']);
	Route::post('/user/tiktok_store',[ 'uses'=>$module_controller.'store_tiktok_data']);
	Route::get('/user/tiktok-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_tiktok_data']);

	/******************* Google ****************/
	$module_controller = "App\Http\Controllers\Front\GoogleController@";
	Route::get('/user/google',['as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/google-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'google_create']);
	Route::post('/user/google_store',[ 'uses'=>$module_controller.'store_google_data']);
	Route::get('/user/google-create-ads/{id}',[ 'as'=>'', 'uses'=>$module_controller.'load_google_data']);
	Route::get('/user/google-ads',['as'=>'', 'uses'=>$module_controller.'googleAds']);
	Route::post('/user/create-google-campaign',['as'=>'', 'uses'=>$module_controller.'createCampaign']);
	Route::post('/user/create-adgroup',['as'=>'', 'uses'=>$module_controller.'createAdGroup']);
	Route::post('/user/create-adkeywords',['as'=>'', 'uses'=>$module_controller.'addAdKeywords']);
	Route::post('/user/create-search-ad',['as'=>'', 'uses'=>$module_controller.'createSearchAd']);
	Route::post('/user/get-keyword-ideas',['as'=>'', 'uses'=>$module_controller.'getKeywordIdea']);
	Route::post('/user/create-google-account',['as'=>'', 'uses'=>$module_controller.'createGoogleAccount']);
	Route::post('/user/link-google-account',['as'=>'', 'uses'=>$module_controller.'linkGoogleAccount']);




	/******************************* PAGE CONTROLLER  ***************************************************/
	$module_controller = "App\Http\Controllers\Front\PageController@";
	Route::get('/user/contact', [ 'as'=>'', 'uses'=>$module_controller.'contact_load']);
	Route::get('/user/faq', [ 'as'=>'', 'uses'=>$module_controller.'faq_load']);
	Route::get('/user/test', [ 'as'=>'', 'uses'=>$module_controller.'test_load']);
	Route::get('/user/demo', [ 'as'=>'', 'uses'=>$module_controller.'demo_load']);
	Route::post('/user/contact_store', [ 'as'=>'contact_store', 'uses'=>$module_controller.'contact_store']);
	
	/******************************* WALLET CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Front\WalletController@";
	Route::get('/user/wallet', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/wallet-list', [ 'as'=>'', 'uses'=>$module_controller.'load_wallet_page']);
	Route::any('/user/payment', [ 'as'=>'', 'uses'=>$module_controller.'get_payment_methods']);
	Route::get('/user/payment-cards', [ 'as'=>'', 'uses'=>$module_controller.'get_cards']);
	Route::get('/user/load-wallet-data', [ 'as'=>'', 'uses'=>$module_controller.'loadWalletData']);
	Route::post('/user/payment_by_bank', [ 'as'=>'', 'uses'=>$module_controller.'payment_by_bank']);
	/******************************* BUSINESS CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Front\BusinessController@";
	Route::get('/user/business', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::get('/user/business-user', [ 'as'=>'', 'uses'=>$module_controller.'business_users']);
	Route::get('/user/user-details', [ 'as'=>'', 'uses'=>$module_controller.'user_details']);
	Route::post('/user/create-business', [ 'as'=>'', 'uses'=>$module_controller.'create_business']);
	Route::post('/user/business-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_record']);
	Route::post('/user/update-business/', [ 'as'=>'', 'uses'=>$module_controller.'update_record']);
	Route::post('/user/upgrade-account', [ 'as'=>'', 'uses'=>$module_controller.'upgrade_account']);
	Route::get('/user/load-userdata', [ 'as'=>'', 'uses'=>$module_controller.'loadUserData']);
	Route::post('/user/create-business-user', [ 'as'=>'', 'uses'=>$module_controller.'create_business_user']);
	Route::post('/user/user-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_user']);
	Route::post('/user/update-user/', [ 'as'=>'', 'uses'=>$module_controller.'update_user']);

	/******************************* ROLE CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Front\RoleController@";
	Route::get('/user/role', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/assign-role', [ 'as'=>'', 'uses'=>$module_controller.'assign_role']);
	Route::get('/user/load-roles', [ 'as'=>'', 'uses'=>$module_controller.'loadRoleData']);

});

<?php



Route::group(['prefix' =>'/admin','middleware' => ['Admin','web']], function ()

{

	$module_controller = "App\Http\Controllers\Admin\AuthController@";

	Route::get('/login', 			[ 'as'	=>	'',   'uses'	=>	$module_controller.'login']);

	Route::any('/process_login', 			[ 'as'	=>	'','uses'	=>	$module_controller.'process_login']);

	Route::get('/logout', [ 'as'=>'', 'uses'=>$module_controller.'logout']);



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

	



});

?>


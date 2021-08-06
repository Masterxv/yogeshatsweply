<?php

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

	Route::any('/process_login', 	['as'=>'','uses'=>$module_controller.'process_login']);

	Route::any('/process_register', ['as'=>'','uses'=>$module_controller.'register']);

	Route::get('/logout', 			[ 'as'=>'', 'uses'=>$module_controller.'logout']);

	Route::get('/user/profile', 			[ 'as'=>'', 'uses'=>$module_controller.'get_profile']);





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





	/******************************* PAGE CONTROLLER  ***************************************************/

	$module_controller = "App\Http\Controllers\Front\PageController@";

	Route::get('/user/contact', [ 'as'=>'', 'uses'=>$module_controller.'contact_load']);

	Route::get('/user/faq', [ 'as'=>'', 'uses'=>$module_controller.'faq_load']);







	/******************************* WALLET CONTROLLER  ************************************************/

	$module_controller = "App\Http\Controllers\Front\WalletController@";

	Route::get('/user/wallet', [ 'as'=>'', 'uses'=>$module_controller.'index']);

	Route::get('/user/wallet-list', [ 'as'=>'', 'uses'=>$module_controller.'load_wallet_page']);

	Route::get('/user/payment', [ 'as'=>'', 'uses'=>$module_controller.'get_payment_methods']);

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



	Route::get('/user/load-userdata', [ 'as'=>'', 'uses'=>$module_controller.'loadUserData']);

	Route::post('/user/create-business-user', [ 'as'=>'', 'uses'=>$module_controller.'create_business_user']);

	Route::post('/user/user-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_user']);

	Route::post('/user/update-user/', [ 'as'=>'', 'uses'=>$module_controller.'update_user']);







	





	/******************************* ROLE CONTROLLER  ************************************************/

	$module_controller = "App\Http\Controllers\Front\RoleController@";

	Route::get('/user/role', [ 'as'=>'', 'uses'=>$module_controller.'index']);

	Route::get('/user/assign-role', [ 'as'=>'', 'uses'=>$module_controller.'assign_role']);

	Route::get('/user/load-roles', [ 'as'=>'', 'uses'=>$module_controller.'loadRoleData']);















	/*





	$module_controller = "App\Http\Controllers\Chef\DishController@";		



		Route::get('/',				  		[	'as' =>'index', 			'uses' => $module_controller.'index']);



		Route::get('/load',		      		[	'as' =>'load', 				'uses' => $module_controller.'load_data']);



		Route::get('/create',		  		[	'as' =>'create', 			'uses' => $module_controller.'create']);



		Route::post('/store',		  		[	'as' =>'store', 			'uses' => $module_controller.'store']);



		Route::get('/edit/{id}',	  		[	'as' =>'edit', 				'uses' => $module_controller.'edit']);



		Route::get('/view/{id}',	  		[	'as' =>'view', 				'uses' => $module_controller.'view']);



		Route::post('/update/{id}',	  		[	'as' =>'update', 			'uses' => $module_controller.'update']);



		Route::get('/block/{id}',	  		[	'as' =>'block', 			'uses' => $module_controller.'block']);



		Route::get('/unblock/{id}',	  		[	'as' =>'unblock', 			'uses' => $module_controller.'unblock']);



		Route::get('/delete/{id}',	  		[	'as' =>'delete', 			'uses' => $module_controller.'delete']);



		Route::post('/multi_action',  		[	'as' =>'multi_action', 		'uses' => $module_controller.'multi_action']);



		Route::post('/update_and_activate', [	'as' =>'activate', 			'uses' => $module_controller.'update_and_activate']);



        Route::get('/activate/{id}',    	[	'as' =>'activate', 		    'uses' => $module_controller.'activate']);



		Route::get('/deactivate/{id}',    	[	'as' =>'deactivate', 		'uses' => $module_controller.'deactivate']);



		Route::get('/preferred_dish',    	[	'as' =>'deactivate', 		'uses' => $module_controller.'preferred_dish']);



		Route::post('/multi_action',    ['as' =>'multi_action', 'uses' => $module_controller.'multi_action']);



		Route::get('/get_modifiers',			['as' =>'get_modifiers',   'uses' => $module_controller.'get_modifiers']);

		



	*/



	

});

?>


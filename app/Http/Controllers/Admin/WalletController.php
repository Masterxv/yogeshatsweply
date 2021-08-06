<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\WalletModel;

use App\Models\WalletMasterModel;

use Illuminate\Support\Facades\Hash;



use Validator;

use Flash;

use Reminder;

use Session;

use DataTables;



class WalletController extends Controller{



    public function __construct(){

        //$this->EmailService       = $EmailService;

        //$this->SMSService         = $SMSService;

        $this->arr_view_data      = [];

        $this->module_title       = "Admin";

        $this->WalletModel       = new WalletModel();

        $this->WalletMasterModel       = new WalletMasterModel();

        $this->module_view_folder = "admin.wallet";

        $this->module_url_path    = "";

        $this->payment_image_base_img_path   = base_path().config('app.project.img_path.payment_image');

		$this->payment_image_public_img_path = url('/').config('app.project.img_path.payment_image');

  

    }



    public function index(){

        $this->arr_view_data['page_title']       = "login";

        $this->arr_view_data['module_title']     = "login";

        $this->arr_view_data['module_url_path']  = $this->module_url_path;  

        $sessionData = [];  

        $walletData = [];      

        if(!session()->has('LoggedAdmin')){

            //return view($this->module_view_folder.'.login',$this->arr_view_data);

            return redirect(url('/').'/login');

        }else{

            $sessionData = Session::all();

            $userID = 0;

            $userID = Session::get('LoggedAdmin');

            $this->arr_view_data['user'] = $userID;

             $obj_user  = User::where('id',$userID)

                                   ->first();



            $walletData = $this->getWalletBalance($userID);

            $this->arr_view_data['userData']  = $obj_user;              

            $this->arr_view_data['walletData']  = $walletData;              

            return view($this->module_view_folder.'.index',$this->arr_view_data);

        }

    }



    public function load_wallet_page(){

        $this->arr_view_data['page_title']       = "login";

        $this->arr_view_data['module_title']     = "login";

        $this->arr_view_data['module_url_path']  = $this->module_url_path;  

        $sessionData = [];        

        if(!session()->has('LoggedAdmin')){

            //return view($this->module_view_folder.'.login',$this->arr_view_data);

            return redirect(url('/').'/login');

        }else{

            $sessionData = Session::all();

            $userID = 0;

            $userID = Session::get('LoggedAdmin');

            $this->arr_view_data['user'] = $userID;

             $obj_user  = User::where('id',$userID)

                                   ->first();

            $this->arr_view_data['userData']  = $obj_user;   

             $walletData = $this->getWalletBalance($userID);

             //dd( $walletData);

            $this->arr_view_data['walletData']  = $walletData;                 

            return view($this->module_view_folder.'.wallet-list',$this->arr_view_data);

        }

    }



    public function get_payment_methods(){

        $this->arr_view_data['page_title']       = "Payment Methods";

        $this->arr_view_data['module_title']     = "Payment Methods";

        $this->arr_view_data['module_url_path']  = $this->module_url_path;  

        $sessionData = [];        

        if(!session()->has('LoggedAdmin')){

            //return view($this->module_view_folder.'.login',$this->arr_view_data);

            return redirect(url('/').'/login');

        }else{

            $sessionData = Session::all();

            $userID = 0;

            $userID = Session::get('LoggedAdmin');

            $this->arr_view_data['user'] = $userID;

             $obj_user  = User::where('id',$userID)

                                   ->first();

            $this->arr_view_data['userData']  = $obj_user;              

            return view($this->module_view_folder.'.payment-methods',$this->arr_view_data);

        }

    }



    public function get_cards(){

        $this->arr_view_data['page_title']       = "Add Card Details";

        $this->arr_view_data['module_title']     = "Add Card";

        $this->arr_view_data['module_url_path']  = $this->module_url_path;  

        $sessionData = [];        

        if(!session()->has('LoggedAdmin')){

            //return view($this->module_view_folder.'.login',$this->arr_view_data);

            return redirect(url('/').'/login');

        }else{

            $sessionData = Session::all();

            $userID = 0;

            $userID = Session::get('LoggedAdmin');

            $this->arr_view_data['user'] = $userID;

             $obj_user  = User::where('id',$userID)

                                   ->first();

            $this->arr_view_data['userData']  = $obj_user;              

            return view($this->module_view_folder.'.add-cards',$this->arr_view_data);

        }

    }





    function getWalletBalance($userID){

        $response = $walletArr = [];

        $businessID = 0;

        $response['credit'] = $response['spend'] = $response['balance'] = 0;

        if(Session::has('BUSINESSID')){

            $businessID = Session::get('BUSINESSID');

        }

        

        if($userID>0){

            $walletArr = WalletMasterModel::where('business_id',$businessID)->first();

            if($walletArr){

                $response['credit'] = $walletArr['credited_amount'];

                $response['spend'] = $walletArr['debited_amount'];

                $response['balance'] = $walletArr['balance_amount'];

            }

        }

        return $response;

    }



    public function addWalletAmount(Request $request){

        $arr_rules = [];

        $arr_rules['business_name']              = "required";

        $arr_rules['website_url']              = "required";

        $validator = Validator::make($request->all(),$arr_rules);

        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();

        }



        $requestData = [];

        $requestData['business_name']              = trim($request->business_name);

        $requestData['website_url']           = trim($request->website_url);

        $requestData['contact_number']            = trim($request->contact_number);

        $requestData['vat_number']           = trim($request->vat_number);

        $queryResponse = Business::create($requestData); 

        if($queryResponse){

            return back()->with('success','Business created successfully!');

        }else{

            return back()->with('success','Business created successfully!');

        }

    }





    public function loadWalletData(Request $request){   

        $build_status_btn       = '';

        $arr_data               = [];

        $arr_search_column      = $request->input('column_filter');

        $obj_request_data = WalletModel::orderBy('created_at','DESC');





        $businessID = 0;

        if(Session::has('BUSINESSID')){

            $businessID = Session::get('BUSINESSID');

        }

        if($businessID>0){

            $obj_request_data = $obj_request_data->whereRaw('business_id = '.$businessID);

        }





        $obj_request_data = $obj_request_data->with('get_business_detail')->with('get_user')->with('get_campaign');



         if (!empty($request->get('search'))) {

            $search = $request->get('search');

            $obj_request_data = $obj_request_data->whereHas('get_business_detail',function($q) use($search) {

                $q = $q->orWhere('business_name', 'LIKE', "%".$search."%"); 

            });

         }



        $obj_request_data = $obj_request_data->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {

                           if (!empty($request->get('search'))) {

                                    $instance->where(function($w) use($request){

                                    $search = $request->get('search');

                                        $w->orWhere('payment_status', 'LIKE', "%$search%")
                                        ->orWhere('amount', 'LIKE', "%$search%");
                                    
                                     });
                            }
                            if (!empty($request->get('status'))) {

                                 $instance->where(function($w1) use($request){

                                    $status = $request->get('status');

                                    $w1->orWhere('transaction_type', 'LIKE', "%$status%");               

                                });

                            }

                        })->make(true);

        $build_result   = $json_result->getData();



        if(isset($build_result->data) && sizeof($build_result->data)>0){

            foreach ($build_result->data as $key => $data){ 



                 $business_name = "";

                if(isset($data->get_business_detail)){

                    $business_name = $data->get_business_detail->business_name;

                }



                 $user_name = "";

                if(isset($data->get_user)){

                    $user_name = $data->get_user->name;

                }

                 $campaign_name = "-";

                if(isset($data->get_campaign)){

                    $campaign_name = $data->get_campaign->campaign_name;

                }
		$transaction_type = $data->transaction_type;
		if($transaction_type == 'CREDIT'){
			$transaction_type = 'Credited';
		}else if($transaction_type == 'DEBIT'){
			$transaction_type = 'Debited';
		} 

                $payment_image = $this->payment_image_public_img_path.$data->payment_image;



                 $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">

                                                        <circle cx="12" cy="12" r="1"></circle>

                                                        <circle cx="12" cy="5" r="1"></circle>

                                                        <circle cx="12" cy="19" r="1"></circle>

                                                </svg>'; 

                                                

                $action_button_html = '<div class="dropdown table-drop-action">

                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>

                                            <div class="dropdown-menu dropdown-menu-right">';

                if($data->payment_status == 'PENDING'){

                        $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Status</a>';

                

                }

                $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="view('."'$payment_image','".base64_encode($data->id)."'".')" Record" href="#" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">View</a>';



                $action_button_html .='</div></div>'; 

                

                

                $transactionDate="";

                $transactionDate = date('d/m/Y',strtotime($data->created_at));

                $i = $key+1;

                $build_result->data[$key]->id  = $i;                

                $build_result->data[$key]->business_name  = $business_name;                

                $build_result->data[$key]->user_name  = $user_name;    

                $build_result->data[$key]->campaign_name  = $campaign_name;
                $build_result->data[$key]->transaction_type  = $transaction_type;    

                $build_result->data[$key]->transaction_date  = $transactionDate;    

                $build_result->data[$key]->built_action_btns  = $action_button_html;    



            }

            return response()->json($build_result);

        }else{

            return response()->json($build_result);

        }

    }

    

    function wallete_status(Request $request){

        $enc_id = $request->input('id');

        $status = $request->input('status');

        $remark = $request->input('remark');

       

        $id = base64_decode($enc_id);

        

        $arr_data = [];

             if($status == 'active'){

                 $arr_data['payment_status'] = 'APPROVED';

                 $update = $this->WalletModel->where('id',$id)->first();

                 $wallet_id = $update['wallet_id'];

                 $walletArr = $this->WalletMasterModel->where('wallet_id',$wallet_id)->first();

                 

                 $arr_resp = [];

                 $arr_resp['credited_amount'] =  $walletArr['credited_amount'] + $update['amount'];

                 $arr_resp['balance_amount'] =  $walletArr['balance_amount'] + $update['amount'];

                 $walletArr = $this->WalletMasterModel->where('wallet_id',$wallet_id)->update($arr_resp);

                 

             }else{

                 $arr_data['payment_status'] = 'REJECT';

             }

             

             $arr_data['remark'] = $remark;

           

        $update = $this->WalletModel->where('id',$id)->update($arr_data);

       // dd($update);

       if($update){

			echo "success";

		}else{

            echo "";

		} 

                

    }

    





    



}


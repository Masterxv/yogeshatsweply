<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\CampaignModel;
use App\Models\WalletMasterModel;
use App\Models\WalletModel;
use App\Models\Channel;
use App\Models\CampaignMediaModel;

use DataTables;
use Validator;
use Flash;
use Reminder;
use Session;

class GoogleController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService; 
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.campaign";
        $this->module_url_path    = url('/')."/user";
        $this->BaseModel		  = new CampaignModel();
        $this->WalletModel		  = new WalletModel();
        $this->campaign_image_base_img_path   = base_path().config('app.project.img_path.campaign_image');
		$this->campaign_image_public_img_path = url('/').config('app.project.img_path.campaign_image');
    }

    public function index(){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;
        $obj_user  = User::where('id',$userID)->first();
         
        $this->arr_view_data['userData']  = $obj_user;              
        return view($this->module_view_folder.'.google.index',$this->arr_view_data);
    }

    public function googleAds(){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;
        $obj_user  = User::where('id',$userID)->first();
        $this->arr_view_data['userData']  = $obj_user;       
        //return  $this->module_view_folder.'.google-ads.create';  
        //$this->arr_view_data['nextTab'] = "ACCOUNT";
       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }

    public function createCampaign(Request $request){
        //dd($request);
        $googleResponse = array();
        $campaignId = 0;
        $arrResponse['message'] = "Invalid Request";
        $arrResponse['status'] = 'error';
        $arrResponse['data'] = array(); 

        $startDate = $endDate = date('Ymd');

        if($request->input('startDate')){
            $dateArr = explode('/',$request->input('startDate'));
            $startDate = $dateArr[2].''.$dateArr[1].''.$dateArr[0];
        }
        if($request->input('endDate')){
            $dateArr = explode('/',$request->input('endDate'));
            $endDate = $dateArr[2].''.$dateArr[1].''.$dateArr[0];
        }

        $parameters = array('customerId' => $request->input('customerId'),
                            'userEmail' => 'abc@mail.com',
                            'startDate' => $startDate,
                            'endDate' => $endDate,
                            'campaignName' => $request->input('campaignName'),
                            'budget'=>$request->input('budget')
                        );
       //$arrResponse = createCampaign('',$parameters);
       $arrResponse = runGoogleAdsAPI("CREATE_CAMPAIGN",$parameters);
       $arrResponse = json_decode($arrResponse,true);

       if(count($arrResponse['data'])>0){
           $campaignId = $arrResponse['data']['campaignId'];
              $request->session()->put('campaignId',$campaignId);
              $this->arr_view_data['nextTab'] = "GROUP";
       }
       $this->arr_view_data['apiResponse'] = "true";
       if($arrResponse['status']=="error"){
            $this->arr_view_data['apiResponse'] = "false";
       }

        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;
        $obj_user  = User::where('id',$userID)->first();
        $this->arr_view_data['userData']  = $obj_user;       
        $this->arr_view_data['campaignId']  = $campaignId;       
       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }

    public function createAdGroup(Request $request){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;
        $obj_user  = User::where('id',$userID)->first();
        $this->arr_view_data['userData']  = $obj_user;    


        $parameters = array('customerId' => $request->input('customerId'),
                            'campaignId' => $request->input('campaignId'),
                            'cpcBid' => $request->input('cpcBid'),
                            'adsGroupName' => $request->input('adsGroupName'),
                        );
       //$arrResponse = createAdsGroup('',$parameters);
       $arrResponse = runGoogleAdsAPI("CREATE_GROUP",$parameters);

       $arrResponse = json_decode($arrResponse,true);

       $groupId = 0;
       if(isset($arrResponse['data']) && count($arrResponse['data'])>0){
           $groupId = $arrResponse['data']['adGroupId'];
           //$request->session()->put('adGroupId',$groupId);
              $request->session()->put('adGroupId',$groupId);
              $this->arr_view_data['nextTab'] = "KEYWORD";
       }

       $this->arr_view_data['apiResponse'] = "true";
       if($arrResponse['status']=="error"){
            $this->arr_view_data['apiResponse'] = "false";
       }
        //customerId,campaignId,cpcBid,adsGroupName
        //return  $this->module_view_folder.'.google-ads.create';      
       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }
    public function addAdKeywords(Request $request){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;
        $obj_user  = User::where('id',$userID)->first();
        $this->arr_view_data['userData']  = $obj_user;       
        $keywordMatchTypeArr  = array();
        $keywordMatchTypeArr = array_filter($request->input('keywordMatchType'), 'strlen' );

        foreach($request->input('keywordText') as $key=>$keyword){
            $parameters = array('customerId' => $request->input('customerId'),
                                'adGroupId' => $request->input('adGroupId'),
                                'keywordText' => $keyword,
                                'keywordMatchType' => $keywordMatchTypeArr[$key],
                            );
           $arrResponse = runGoogleAdsAPI("ADD_GROUP_KEYWORD",$parameters);
           $arrResponse = json_decode($arrResponse,true);
       }

       $this->arr_view_data['apiResponse'] = "true";
       if(isset($arrResponse['status']) && $arrResponse['status']=="error"){
            $this->arr_view_data['apiResponse'] = "false";
       }else{
            $this->arr_view_data['nextTab'] = "AD-CREATE";
            $request->session()->put('adKeywordId',date('Ymd'));
       }

       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }
    public function createSearchAd(Request $request){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;  

        //$var > 2 ? echo "greater" : echo ""



        $parameters = array("customerId"=>$request->input('customerId'),
                                "adGroupId"=>$request->input('adGroupId'),
                                "mainHeadline"=>$request->input('mainHeadline'),
                                "headline1"=>$request->input('headline1'),
                                "headline2"=>$request->input('headline2'),
                                "headline3"=>$request->input('headline3'),
                                "description1"=>$request->input('description1'),
                                "description2"=>$request->input('description2'),
                                "finalUrlPath1"=>$request->input('finalUrlPath1'),
                                "finalUrlPath2"=>$request->input('finalUrlPath2'),
                                "finalUrl"=>$request->input('finalUrl')
                        );

        //dd($parameters);
       //$arrResponse = createAdsGroup('',$parameters);
       $arrResponse = runGoogleAdsAPI("CREATE_SEARCH_AD",$parameters);

        $arrResponse = json_decode($arrResponse,true);
        //dd($arrResponse);
       $adsId = 0;
       if(isset($arrResponse['data']) && count($arrResponse['data'])>0){
           $adsId = $arrResponse['data']['adsId'];
           $request->session()->put('searchAdId',$adsId); 
           $request->session()->put('searchAdLastId',$adsId); 
           if($adsId){
                $request->session()->put('adKeywordId',0);
                $request->session()->put('adGroupId',0);
                $request->session()->put('campaignId',0);
                $request->session()->put('searchAdId',0); 
                $request->session()->put('keywordSuggestionArr',array()); 


           }          
       }

       $this->arr_view_data['apiResponse'] = "true";
       if($arrResponse['status']=="error"){
            $this->arr_view_data['apiResponse'] = "false";
       }

       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }


    public function getKeywordIdea(Request $request){
        $userID = 0;

        $parameters = array("keywords"=>$request->input('keywords'),
                            "pageUrl"=>$request->input('pageUrl'),
                            "languageId"=>$request->input('languageId'),
                            "customerId"=>$request->input('customerId'),
                            "locationIds"=>$request->input('locationIds')
                        );

            $parameters['keywords'] = array();
            foreach($request->input('keywords') as $key) {
                if($key != ''){
                    $parameters['keywords'][] = $key;
                }
            }
            if($parameters['pageUrl']==""){
                $parameters['pageUrl'] = "";
            }
            

        //dd($parameters);
       //$arrResponse = createAdsGroup('',$parameters);
       $arrResponse = runGoogleAdsAPI("GET_KEYWORD_IDEAS",http_build_query($parameters));

       $arrResponse = json_decode($arrResponse,true);

        $this->arr_view_data['keywordSuggestionArr'] = array();

       if($arrResponse['status']=="success"){
            $this->arr_view_data['keywordSuggestionArr'] = $arrResponse['data'];
            $request->session()->put('keywordSuggestionArr',$arrResponse['data']); 
       }

       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }
    public function createGoogleAccount(Request $request){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        // $this->arr_view_data['user'] = $userID;
        // $obj_user  = User::where('id',$userID)->first();
        // $this->arr_view_data['userData']  = $obj_user;  
        $parameters = array('managerCustomerId' => $request->input('managerCustomerId'),
                            'customerName' => $request->input('customerName'),
                            'currencyCode' => $request->input('currencyCode'),
                            'timeZone' => $request->input('timeZone'),
                        );
       $arrResponse = runGoogleAdsAPI("CREATE_ACCOUNT",$parameters);
       $arrResponse = json_decode($arrResponse,true);

       $adCustomerId = 0;
       if(isset($arrResponse['data']) && count($arrResponse['data'])>0){
           $adCustomerId = $arrResponse['data']['customerId'];
           $request->session()->put('adCustomerId',$adCustomerId);
           $this->arr_view_data['nextTab'] = "CRAETE-CAMPAIGN";

       }

       $this->arr_view_data['apiResponse'] = "true";
       if(isset($arrResponse['status']) && $arrResponse['status']=="error"){
            $this->arr_view_data['apiResponse'] = "false";
       } 

       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }
    public function linkGoogleAccount(Request $request){
        $userID = 0;
        $userID = Session::get('LoggedUser');
        $this->arr_view_data['user'] = $userID;
        $obj_user  = User::where('id',$userID)->first();
        $this->arr_view_data['userData']  = $obj_user;       
        //return  $this->module_view_folder.'.google-ads.create';      
       return view($this->module_view_folder.'.google-ads.create',$this->arr_view_data);
    }





/***********************************************************************************************/
// google Campaign Functionality - By Yogesh Kumawat - Dated 31 May 2021 
/***********************************************************************************************/

    public function google_create(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.google.create',$this->arr_view_data);
    }
    function store_google_data(Request $request){    
        $campaign_id =0;
    
        $arr_data = $arr_rules = [];   
        $paymentMethod = "";
        $form_data_arr = explode('&',$request->input('form_data'));
        foreach($form_data_arr as $data){
            $data_arr = explode('=',$data);
            if($data_arr[0] == 'campaign_id' ){
                $campaign_id =   urldecode($data_arr[1]);
            }else{
                if($data_arr[0] == 'payment_method'){
                    $paymentMethod = urldecode($data_arr[1]);
                }
                if($data_arr[0] != 'wallet_amount' && $data_arr[0] != 'campaign_target_area' && $data_arr[0] != 'payment_method' ){
                    $arr_data[$data_arr[0]] =   urldecode($data_arr[1]);
                }

            } 
            
        }




        $uploadType = $request->input('upload_type');



        $start_date = $arr_data['start_date'];
        $end_date = $arr_data['end_date'];
        // Screenshot Upload
        $img = $_POST['screen_shot']; 
        if(isset($_POST['screen_shot']) && $_POST['screen_shot']!=""){ 
            $img = str_replace('data:image/png;base64,', '', $img);  
            $img = str_replace(' ', '+', $img);  
            $data = base64_decode($img); 
            $screenshot_name = uniqid().'.png'; 
            $file = $this->campaign_image_base_img_path.$screenshot_name ;  
            $success = file_put_contents($file, $data);  
            $arr_data['screen_shot'] =   $screenshot_name;
        }
        //End Screenshot upload
        
        $filesArr = [];
        if($request->hasFile('campaign_media')){
            foreach($request->file('campaign_media') as $file){
                $name = "google-".time().rand(1,100).'.'.$file->extension();
                //echo $this->campaign_image_base_img_path.$name."=====>";
                //die;
                $file->move($this->campaign_image_base_img_path, $name);  
                $filesArr[] = $name;  
            }
        }
        //dd($request->file('campaign_media'));



        
        if($request->hasFile('videofile')){
            $file_extension = strtolower($request->file('videofile')->getClientOriginalExtension());
            if(in_array($file_extension,['mp4','mov'])){
                $file     = $request->file('videofile');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->campaign_image_base_img_path . $filename;
                $isUpload = $file->move($this->campaign_image_base_img_path, $filename);
                if($isUpload){
                    $arr_data['post_image'] = $filename;
                }
            }
        }else if($request->hasFile('file')){   
            $file_extension = strtolower($request->file('file')->getClientOriginalExtension());

            if(in_array($file_extension,['png','jpg','jpeg']))
            {
                $file     = $request->file('file');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->campaign_image_base_img_path . $filename;
                $isUpload = $file->move($this->campaign_image_base_img_path, $filename);
                if($isUpload){
                    $arr_data['original_image'] = $filename;
                }
            }else{
                Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
                return redirect()->back();
            }

            $image_file = "";
            if($request->input('upload_type') == 'image' && $request->image){
                $image_file = $request->image;
                list($type, $image_file) = explode(';', $image_file);
                list(, $image_file)      = explode(',', $image_file);
                $image_file = base64_decode($image_file);
            }
            $image_name= time().'_'.rand(100,999).'.png';
            $path =   $this->campaign_image_base_img_path.$image_name;
            $abc = file_put_contents($path, $image_file);
            $post_image = $image_name;
            $arr_data['post_image'] = $post_image;
        }   
        if($request->hasFile('appicon')){
            $file_extension = strtolower($request->file('appicon')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg'])){
                $file     = $request->file('appicon');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->campaign_image_base_img_path . $filename;
                $isUpload = $file->move($this->campaign_image_base_img_path, $filename);if($isUpload){
                        $arr_data['app_icon'] = $filename;
                    }
            }
        }
        if($arr_data['business_id']==0){
            $arr_data['business_id']  = Session::get('BUSINESSID');
        }
        $arr_data['start_date']         =   $start_date;
        $arr_data['end_date']           =   $end_date;
        $arr_data['estimated_reach']    =   $arr_data['estimated_reach'];
        $arr_data['vat_amount']         =   $arr_data['vat_amount'];
        $arr_data['service_amount']     =   $arr_data['service_amount'];
        $arr_data['upload_type']        =   $request->input('upload_type', 0);
        $arr_data['target_audience']    =   $request->input('target_audience', 0);
        $arr_data['gender']             =   $request->input('gender', 0);
        $arr_data['age']                =   $request->input('age', 0);
        $arr_data['campaign_target_area']                =   $request->input('location','');
        $arr_data['campaign_budget_type'] = $request->input('campaign_budget_type', 1);
        $scall_from = '';
        if($campaign_id  != ''  && $campaign_id  != 'undefined' && $campaign_id  != null){
                $scall_from = 'update';
             $create    = $this->BaseModel->where('id',$campaign_id)->update($arr_data);
            if($filesArr){
                foreach($filesArr as $filename){
                    CampaignMediaModel::create(array("campaign_id"=>$campaign_id,
                     "media_src"=>$filename,
                     "media_type"=>$uploadType,
                     "preview_type"=>'',
                     "original_media_src"=>$filename
                    ));
                }
            }

        }else{
             $scall_from = 'create';
             $create    = $this->BaseModel->create($arr_data);
             if($filesArr){
                foreach($filesArr as $filename){
                    CampaignMediaModel::create(array("campaign_id"=>$create->id,
                     "media_src"=>$filename,
                     "media_type"=>$uploadType,
                     "preview_type"=>'',
                     "original_media_src"=>$filename
                    ));
                }
            }

        }
       
        if($create){
            if($campaign_id  != ''  && $campaign_id  != 'undefined' && $campaign_id  != null){
                $campaign_id = $campaign_id;
            }else{
                $campaign_id = $create->id;
            }
            
            $userID = Session::get('LoggedUser');
            $notificationArr = array(
                                    "title"=>"New campaign created - ".$arr_data['campaign_name'],
                                    "message"=>" New campaign created from user panel",
                                    "type"=>"CAMPAIGN_CREATE",
                                    "from_id"=>$userID,
                                    );
            addNotification($notificationArr);
            if($scall_from == 'update'){
                 $prev_data = $this->WalletModel->where('campaign_id',$campaign_id)->where('transaction_type','DEBIT')->orderBy('created_at','DESC')->first();
                    $debited_amount = $balance_amount = "";

                     $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
                     if(isset($prev_data['amount'])){
                        $debited_amount = $walletArr['debited_amount']- $prev_data['amount'];
                        $balance_amount = $walletArr['balance_amount']+ $prev_data['amount'];

                        $update = WalletMasterModel::where('business_id',$arr_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));
                        $prev_data_wallet = [];
                        $prev_data_wallet['transaction_type'] = 'CREDIT';
                        $prev_data_wallet['payment_status'] = 'DONE';
                        $prev_data_wallet['remark'] = 'Updated Campaign';
                    
                         $prev_data = $this->WalletModel->where('id',$prev_data['id'])->update($prev_data_wallet);
                }
            }
        
            $walletArr = [];
            $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
            $wallet_status = '';


            if($walletArr){
                if($walletArr['balance_amount']>=$arr_data['total_budget']){
                    
                    $debited_amount = $balance_amount = "";

                    $debited_amount = $walletArr['debited_amount']+$arr_data['total_budget'];
                    $balance_amount = $walletArr['balance_amount']-$arr_data['total_budget'];

                    $update = WalletMasterModel::where('business_id',$arr_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));

                    if($update){
                        $paymentArr = array(
                            "user_id"=>$arr_data['user_id'],
                            "amount"=>$arr_data['total_budget'],
                            "transaction_type"=>"DEBIT",
                            "transaction_id"=>rand(),
                            "wallet_id"=>$walletArr['wallet_id'],
                            "business_id"=>$arr_data['business_id'],
                            "campaign_id"=>$campaign_id
                        );
                        WalletModel::create($paymentArr);
                        $this->BaseModel->where('id',$campaign_id)->update(array("payment_status"=>"PAID"));
                        
                    }
                    
                    $count =  WalletModel::where('campaign_id',$campaign_id)->count();
                    if($count > 1 || $scall_from == 'update'){
                        $wallet_status = "updated";
                    }else{
                        $wallet_status = "success";
                    }
                }else{
                    $amountToPay   = 0;
                    $amountToPay   = $totalBudget   = $arr_data['total_budget'];
                    $walletAmount  = $walletArr['balance_amount'];

                    if($walletAmount>0){
                        $amountToPay = $amountToPay-$walletAmount;
                    }
                    $request->session()->put('AMOUNTTOPAY',$amountToPay);
                    $request->session()->put('PAYMENT-METHOD',$paymentMethod);
                    $wallet_status = "warning";
                }
            } 
            echo $wallet_status;
        }else{
            echo "err";
        } 
    } 
    function load_google_data($enc_id){
        $this->arr_view_data['page_title']       = "Transactions";
        $this->arr_view_data['module_title']     = "Transactions";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $id = base64_decode($enc_id);
        
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
            $obj_user  = User::where('id',$userID)
                                   ->first();
            $obj_responce_data = $this->BaseModel->with('get_user','get_business')->where('id',$id)->first();
            $arr_data = $obj_responce_data->toArray();
            $arr_data['original_image'] = $this->campaign_image_public_img_path.$arr_data['original_image'];
            $arr_data['post_image'] = $this->campaign_image_public_img_path.$arr_data['post_image'];
            $arr_data['screen_shot'] = $this->campaign_image_public_img_path.$arr_data['screen_shot'];
            $campaignMedia = [];
            $campaignMedia = CampaignMediaModel::where('campaign_id',$id)->get();           
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['data']  = $arr_data;     
            $this->arr_view_data['media']  = $campaignMedia;     
            return view($this->module_view_folder.'.google.create',$this->arr_view_data);
        }
    }
}

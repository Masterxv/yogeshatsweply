<?php
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Notification;
use App\Models\WalletMasterModel;
use App\Models\OTPModel;


use Illuminate\Support\Facades\Hash;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Session;

function translate($word){
    $translatedData = "";
    $translatedData = trans('auth.'.$word);
    if(strpos($translatedData,'auth.') !== false){
        return $word;
    }else{
        return $translatedData;
    }
}

function getTranslationArr(){
    $en_Arr = $ar_Arr=[];
    $row = 1;
    if (($handle = fopen(url('/')."/resources/lang/lang.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        if($num>0 && $row>1 && $data[1] && $data[2]){
            $en_Arr[$data[0]] = $data[1];
            $ar_Arr[$data[0]] = $data[2];
        }
      }
      fclose($handle);
    }
     if(Illuminate\Support\Facades\Session::get('locale')=='en'){ 
        return $en_Arr;
    }else{
        return $ar_Arr;
    }
} 

function searchTranslation($word){
    $translationArr = array();
    $translationArr = getTranslationArr();
    $result = "false";
    if(array_key_exists($word,$translationArr)){
        $result = $translationArr[$word];
    }
    echo $word.$result;
} 
function getLoggedUserData(){
    $user = $arr_view_data = [];
    $userID = 0;
    $user = Cartalyst\Sentinel\Laravel\Facades\Sentinel::check();
    $userID = Illuminate\Support\Facades\Session::get('LoggedUser');
    if($user && count($user->toArray())>0 && $userID>0){
        $arr_view_data  = $user->toArray();
        $arr_view_data['name'] =   $arr_view_data['first_name'].' '.$arr_view_data['last_name'];
    }
    return $arr_view_data;
}


function getUserDetails($userID){
    $user = $arr_view_data = $obj_user = [];
    if($userID>0){
	    $obj_user  = User::where('id',$userID)->with('get_business_detail')->orderBy('created_at','DESC')->first();
	    if($obj_user){
	        $arr_view_data['user'] = $userID;
	        $arr_view_data['userData']  = $obj_user->toArray();
            $arr_view_data['userData']['name'] =   $arr_view_data['userData']['first_name'].' '.$arr_view_data['userData']['last_name'];

	    }
	}
    return $arr_view_data;
}


function getBusinessDetails($businessID){
    $businessArr = $arr_view_data = [];
    if($businessID>0){
	    $businessArr  = Business::where('id',$businessID)->first();
	    if($businessArr){
	        $arr_view_data = $businessArr->toArray();
	    }
	}
    return $arr_view_data;
}

function getActiveBusinessList(){
    $userID = 0;
    $userID = Illuminate\Support\Facades\Session::get('LoggedUser');
    $strMobileSidebar = $str = $strPopup = "";
    $businessArr = $arr_view_data = [];
    if($userID>0){
        $businessArr  = Business::where('user_id',$userID)->get();
        $businessID = 0;
        $businessID = Session::get('BUSINESSID');
        if($businessArr){
            foreach($businessArr as $business){
                $str .= '<a class="dropdown-item" href="javascript:void(0);" onclick="setBusinessDashboard('.$business->id.')" >'.$business->business_name.'</a>';

                $strMobileSidebar .= ' <li><a href="javascript:void(0);" onclick="setBusinessDashboard('.$business->id.')" ><i class="feather icon-circle"></i><span class="menu-item">'.$business->business_name.'</span></a></li>';

                $activeClass="";
                if($businessID == $business->id){
                    $activeClass = "active-biz";
                }

                $strPopup .= '<div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="javascript:void(0);" onclick="setBusinessDashboard('.$business->id.')" >
                                    <div class="modal-business-name-section '.$activeClass.' ">
                                        <h2>'.$business->business_name.'</h2>
                                        <span>ID: '.$business->business_id.'</span>                                        
                                    </div>
                                </a>
                             </div>';
            }
        }
    }
    return array("headerDD"=>$str,"mobileDD"=>$strMobileSidebar,"popupDD"=>$strPopup,"count"=>count($businessArr));
}



function getTimeZone($latitude,$longitude)
{
    $timezone  = 'Asia/Kolkata';
    if($latitude!='' && $longitude!='')
    {
        $url = "https://maps.googleapis.com/maps/api/timezone/json?location=".$latitude.",".$longitude."&timestamp=".time()."&key=".config('app.project.google_map_api_key');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($responseJson);
        $timezone = $response->timeZoneId;
    }
    return $timezone;
}

function addNotification($data){
    $queryResponse = "";
    if($data){
        $queryResponse = Notification::create($data);
    }
    return $queryResponse;
}

function getNotification($data){
   $notificationArr  = [];
    if($id>0){
        $notificationArr  = Notification::where('from_id',$fromID)
                            ->where('to_id',$toID)
                            ->where('id',$id)
                            ->where('type',$type)->get();
    }
    return $notificationArr;
}

function getAllNotifications($data){
    $notificationArr  = [];
    $count = 0;
    $notificationArr  = Notification::where('is_read',0)->where('to_id',$data['to_id']);
    if(isset($data['from_id']) && $data['from_id']>0){
        $notificationArr = $notificationArr->where('from_id',$data['from_id']);
    }
    if(isset($data['type'])>0){
        $notificationArr = $notificationArr->where('type',$data['type']);
    }
    $countObj = $notificationArr;
    $notificationArr = $notificationArr->get();
    $count = $countObj->count();
    //$notificationArr['count'] = $count;
    return array("data"=>$notificationArr,"count"=>$count);


}

function readNotification($data){
    $updateData = [];
    $queryResponse = "";
    $updateData['is_read']=1;
    if($data['to_id']>0){
        $queryResponse = Notification::where('to_id',$data['to_id']);
        if($data['type']){
            $queryResponse = $queryResponse->where('type',$data['type']);
        }
        $queryResponse = $queryResponse->update($requestData);
    }
    if($queryResponse){
        return true;
    }else{
        return false;
    }
}

function getUserWalletBalance($userID){
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

function debugCode(){
    if(isset($_REQUEST['debug'])){
        $sessionArr = [];
        if($_REQUEST['debug']=="session"){
            //$sessionArr = Illuminate\Support\Facades\Session::all();
            dd($sessionArr);
        }else{
            print_r($_REQUEST);
            dd('inn');
        }
    }
}
if(isset($_REQUEST['debug'])){
    debugCode();
}

function generateOTP($data){
    //$ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
    $ip = getenv('HTTP_CLIENT_IP') ? getenv('HTTP_CLIENT_IP') : (getenv('HTTP_X_FORWARDED_FOR') ? getenv('HTTP_X_FORWARDED_FOR') : getenv('REMOTE_ADDR'));

    $random_number = mt_rand(100000, 999899);
    $message = $random_number."%20is%20your%20OTP%20for%20sweply";

    $msgCount = OTPModel::where('mobile_number',$data['mobile_number'])
        ->where('otp_code',$random_number)
        ->where('status',0)
        ->count(); 


    if(isset($data['mobile_number']) && $data['mobile_number']!="" && $msgCount<6){
        $data['otp_code'] = $random_number;
        $data['ip_address'] = $ip;
        $data['message_body'] = $message;

        $queryResponse = OTPModel::create($data);


        if($queryResponse){
            sendOtpSMS($data['mobile_number'],$message,$data['otp_code']);
            return "true";
        }else{
            return "false";
        }
    }else{
        return "INVALID";
    }

}

function validateOTP($mobileNumber,$otpCode){
    $queryResponse = 0;
    if($mobileNumber!="" && $otpCode!=""){
        $queryResponse = OTPModel::where('mobile_number',$mobileNumber)
        ->where('otp_code',$otpCode)
        ->where('status',0)
        ->count();
        if($queryResponse>0){
            $isOTPSent = OTPModel::where('mobile_number',$mobileNumber)
            ->where('status',0)
            ->where('otp_code',$otpCode)
            ->update(['status'=>1]);
            if($isOTPSent){
                return "true";
            }else{
                return "false";
            }
        }else{
            return "false";
        }
    }else{
        return "INVALID";
    }
}

function sendOtpSMS($mobileNumber,$message,$otpCode){
    if($mobileNumber!="" && $message!=""){
        $AppSid = "vmmajIDeg7DbepMAAt4k51QhXORBrj";
        $SenderID = "SWEPLY";
        $Body = $message;
        $Recipient = $mobileNumber; // including country code {+919657375881}
        $Authorization = "Basic QmFzaWNBdXRoVXNlck5hbWU6QmFzaWNBdXRoUGFzc3dvcmQ=";

        //echo 'http://basic.unifonic.com/rest/SMS/messages?AppSid='.$AppSid.'&SenderID='.$SenderID.'&Body='.$Body.'&Recipient='.$Recipient.'&responseType=JSON&CorrelationID=base&baseEncode=true&statusCallback=sent&async=false';

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://basic.unifonic.com/rest/SMS/messages?AppSid='.$AppSid.'&SenderID='.$SenderID.'&Body='.$Body.'&Recipient='.$Recipient.'&responseType=JSON&CorrelationID=base&baseEncode=true&statusCallback=sent&async=false',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Authorization:Basic QmFzaWNBdXRoVXNlck5hbWU6QmFzaWNBdXRoUGFzc3dvcmQ='
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        if($response){
            $isOTPSent = OTPModel::where('mobile_number',$mobileNumber)
                    ->where('status',0)
                    ->where('otp_code',$otpCode)
                    ->update(['response'=>$response]);
        }
        //return true;
    }

}
?>

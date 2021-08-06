<?php
namespace App\Common\Services;

use App\Models\SmsTemplateModel;
use App\Models\SiteSettingsModel;

class SmsService
{
	function __construct(SmsTemplateModel $sms_template_model,
                         SiteSettingsModel $site_settings_model)
    {
        $this->SmsTemplateModel  = $sms_template_model;
        $this->SiteSettingsModel = $site_settings_model;
    }

    public function send_sms_to_user($arr_data=false)
    {
    	$template_id 	= isset($arr_data['template_id'])?$arr_data['template_id']:'';
    	$phone_code 	= isset($arr_data['phone_code'])?$arr_data['phone_code']:'';
    	$mobile_no 		= isset($arr_data['mobile_no'])?$arr_data['mobile_no']:'';
    	$locale 		= isset($arr_data['locale'])?$arr_data['locale']:'';
    	$otp 			= isset($arr_data['otp'])?$arr_data['otp']:'';

    	$sms_message = $this->get_otp_message($template_id,$locale,$otp);
    	$this->send_sms($phone_code,$mobile_no,$sms_message);
        return true;
    }

    public function get_otp_message($template_id,$locale,$otp)
    {
    	$arr_template = [];
    	$otp_message = $content = '';
    	$obj_template = $this->SmsTemplateModel->where('id',$template_id)
    										   ->with(['translations'=>function($qry) use($locale){
    										   			$qry->where('locale',$locale);
    										   }])
    										   ->first();
    	if($obj_template)
    	{
    		$arr_template = $obj_template->toArray();
    	}
    	
    	$content          = isset($arr_template['translations'][0]['description'])?$arr_template['translations'][0]['description']:'';
        $otp_message          = str_replace("##OTP##",$otp,$content);

       	return $otp_message;
    }

    public function send_sms($phone_code,$mobile_no,$sms_message)
    {
        /*-------------------------Sms Credentials-----------------------------------------*/
        $obj_sms_setting = $this->SiteSettingsModel->select('sms_user_name','sms_password','sms_sender_name')->where('id','=','1')->first();
        $sms_mobile     = isset($obj_sms_setting->sms_user_name)?$obj_sms_setting->sms_user_name:0;
        $sms_password   = isset($obj_sms_setting->sms_password)?$obj_sms_setting->sms_password:0;
        $sms_sender     = isset($obj_sms_setting->sms_sender_name)?$obj_sms_setting->sms_sender_name:0;
        /*---------------------------------------------------------------------------------*/

        $mobile_no = $phone_code.$mobile_no;

         $sms_url = 'http://api.unifonic.com/wrapper/sendSMS.php?userid='.$sms_mobile.'&password='.$sms_password.'&msg='.rawurlencode($sms_message).'&encoding=UTF8&sender='.$sms_sender.'&to='.$mobile_no;

         // http://api.unifonic.com/wrapper/sendSMS.php?userid=[username]&password=[password]&msg=[english_body]&sender=[SenderID]&to=[Destination]

         // https://software.unifonic.com/en/devtools/httpApp

        $this->send_curl_sms($sms_url);
        
        return true;
    }

    function send_curl_sms($sms_url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $sms_url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);    
        curl_close($curl);
        return true;
    }

    public function old_send_sms($phone_code,$mobile_no,$sms_message)
    {
        /*-------------------------Sms Credentials-----------------------------------------*/
        $obj_sms_setting = $this->SiteSettingsModel->select('sms_user_name','sms_password','sms_sender_name')->where('id','=','1')->first();
        $sms_mobile     = isset($obj_sms_setting->sms_user_name)?$obj_sms_setting->sms_user_name:0;
        $sms_password   = isset($obj_sms_setting->sms_password)?$obj_sms_setting->sms_password:0;
        $sms_sender     = isset($obj_sms_setting->sms_sender_name)?$obj_sms_setting->sms_sender_name:0;
        /*---------------------------------------------------------------------------------*/

        $mobile_no = $phone_code.$mobile_no;

        //dd($mobile_no,$sms_message,$sms_mobile,$sms_password,$sms_sender);
 
        include("sms/includeSettings.php");         
        $mobile   = $sms_mobile;                           
        $password = $sms_password;                           
        $sender   = $sms_sender;
        $numbers  = $mobile_no;
        $msg      = $sms_message;  


        $MsgID = rand(1,99999);                 
        $timeSend = 0;                                                     
        $dateSend = 0;                                                                  
        $deleteKey = 152485;                                                                         
        $resultType = 0;                                                                                   
        $status = sendSMS($mobile, $password, $numbers, $sender, $msg, $MsgID, $timeSend, $dateSend, $deleteKey, $resultType);
    }

}
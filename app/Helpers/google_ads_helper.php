<?php
function googleTest(){
    return url('/')."/lib/sweply-google-ads/examples/ Test Google ads";
}
function runGoogleAdsAPI($action="",$parameters=array()){
      $urlArr = array();
      $urlArr = array("LINK_ACCOUNT"=>"AccountManagement/LinkManagerToClient.php",
                      "CREATE_ACCOUNT"=>"AccountManagement/CreateCustomer.php",
                      "CREATE_CAMPAIGN"=>"BasicOperations/AddCampaigns.php",
                      "CREATE_GROUP"=>"BasicOperations/AddAdGroups.php",
                      "ADD_GROUP_KEYWORD"=>"BasicOperations/AddKeywords.php",
                      "GET_CAMPAIGN_LIST"=>"BasicOperations/GetCampaigns-demo.php",
                      "GET_KEYWORD_IDEAS"=>"BasicOperations/AddCampaigns.php"
                     );

      $actionUrl = $url = "";
      $actionUrl = $urlArr[$action];
      if($actionUrl==""){
        return json_encode(array("message"=>"Not valid request","status"=>"error","data"=>array()));
      }

      $baseUrl = url('/')."/lib/sweply-google-ads/examples/";
      $url = $baseUrl.$actionUrl;
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $parameters,
      ));
      $response = curl_exec($curl);
      curl_close($curl);
  return $response;
}






















































































/*
function runGoogleAdsAPIbkp($url="",$parameters=array()){
    $baseUrl = url('/')."/lib/sweply-google-ads/examples/";
    $url = $baseUrl.$url;
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $parameters,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}






function getCampaignList($url,$parameters){
    $response = "";
    return $response = runGoogleAdsAPI($url,$parameters);
}

function createCampaign($url,$parameters){
    $response = "";
    $url="BasicOperations/AddCampaigns.php";
    return $response = runGoogleAdsAPI($url,$parameters);
}

function createAdsGroup($url,$parameters){
    //customerId,campaignId,cpcBid,adsGroupName
    $response = "";
    $url="BasicOperations/AddAdGroups.php";
    return $response = runGoogleAdsAPI($url,$parameters);
}

function addAdsKeyword($url,$parameters){
    //customerId,campaignId,cpcBid,adsGroupName
    $response = "";
    $url="BasicOperations/AddKeywords.php";
    return $response = runGoogleAdsAPI($url,$parameters);
}

function linkCustomerAccount($url,$parameters){
    $response = "";
    $url="AccountManagement/LinkManagerToClient.php";
    return $response = runGoogleAdsAPI($url,$parameters);
}

function createCustomerAccount($url,$parameters){
    $response = "";
    $url="AccountManagement/CreateCustomer.php";
    return $response = runGoogleAdsAPI($url,$parameters);
}

function getKeywordIdeas($url,$parameters){
    $response = "";
    $url="AccountManagement/CreateCustomer.php";
    return $response = runGoogleAdsAPI($url,$parameters);
}



if(isset($_REQUEST['action']) && $_REQUEST['action']!=""){
    $parameters = array();
    switch ($_REQUEST['action']) {
      case "GET_CAMPAIGN_LIST":
        $parameters = array('CUSTOMER_ID' => $_POST['CUSTOMER_ID']);
        $url="BasicOperations/GetCampaigns-demo.php";
        echo getCampaignList($url,$parameters);
      break;
      case "CREATE_CAMPAIGN":
        $parameters = array('customerId' => '5857221095',
                            'userEmail' => 'kumavatyogesh11@gmail.com',
                            'startDate' => '20210801',
                            'endDate' => '20210805',
                            'campaignName' => 'Campaign-002',
                            'budget'=>'500000'
                        );
        $url="BasicOperations/AddCampaigns.php";
        echo createCampaign($url,$parameters);
      break;

      // default:
      //   code to be executed if n is different from all labels;
    }
}

*/
?>

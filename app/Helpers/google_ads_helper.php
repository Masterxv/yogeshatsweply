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
                      "GET_KEYWORD_IDEAS"=>"BasicOperations/AddCampaigns.php",
                      "CREATE_SEARCH_AD"=>"BasicOperations\AddResponsiveSearchAd.php"
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




?>

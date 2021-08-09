<?php 
    $userData = [];
    $userData = getLoggedUserData(); 
    ?>
@extends('front.layout.dashboard-master')    
@section('main_content')

<style type="text/css">
    .diversion-section-line{position: relative;}
    .diversion-section-line:before{position: absolute;content: "";height: 100%;width: 2px;background: #dddddd;right: 0px;top: 0}
    .disable-pointer{
        pointer-events: none;
        cursor: not-allowed;
        color: #c1c1c1;
    }
</style>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="preview-ad-section ad-prive-details-bx-main google-preview-main">
            <div class="breadcrem-section">
                <h2><i class="fa fa-google" title="google"></i>Google Ad Details</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="{{url('/')}}/user/dashboard">Home <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="{{url('/')}}/user/campaign">google </a></li>                       
                    </ul>                
                </div>
                <div class="clearfix"></div>               
            </div>
            <?php
                $adCustomerId = 0;
                if(Session::has('adCustomerId')){
                    $adCustomerId = Session::get('adCustomerId');
                }
                $adCampaignId = 0;
                if(Session::has('campaignId')){
                      $adCampaignId = Session::get('campaignId');
                }
                $adGroupId = 0;
                if(Session::has('adGroupId')){
                      $adGroupId = Session::get('adGroupId');
                }
                $adKeywordId = 0;
                if(Session::has('adKeywordId')){
                      $adKeywordId = Session::get('adKeywordId');
                }
                $searchAdId = 0;
                if(Session::has('searchAdId')){
                      $searchAdId = Session::get('searchAdId');
                }

                $accountSec = $campaignSec = $groupSec = $keywordSec = $adsSec = "";
                if($adCustomerId==0){
                    $accountSec = "active";
                }else if($adCampaignId==0 && $adCustomerId>0){
                    $campaignSec = "active";
                }else if($adGroupId==0 && $adCampaignId>0){
                    $groupSec = "active";
                }else if($adKeywordId==0 && $adGroupId>0){
                    $keywordSec = "active";
                }else if($searchAdId==0 && $adKeywordId>0){
                    $adsSec = "active";
                }else{
                    $accountSec = "active";
                }

            ?>
            <div class="ad-prive-bx ad-prive-details-bx">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{$accountSec}} "  data-toggle="tab" href="#account-sec" role="tab" aria-controls="account-sec" aria-selected="true" > <span>Create/Link Ads </span>Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$campaignSec}}"  data-toggle="tab" href="#campaign-sec" role="tab" aria-controls="campaign-sec" aria-selected="true"><span>Create</span> Campaign</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{$groupSec}}"  data-toggle="tab" href="#adGroup-sec" role="tab" aria-controls="adGroup-sec" aria-selected="false"><span>Create</span> Ad Group</a> 
                            </li>   
                             <li class="nav-item">
                                <a class="nav-link {{$keywordSec}}"  data-toggle="tab" href="#keywords-sec" role="tab" aria-controls="keywords-sec" aria-selected="false"><span>Add</span> Keywords</a> 
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link {{$adsSec}}"  data-toggle="tab" href="#searchad-sec" role="tab" aria-controls="searchad-sec" aria-selected="false"><span>Create</span> Search Ad</a> 
                            </li>                     
                        </ul>
                        


                        <!-- Tab panes -->
                        <div class="tab-content pt-1">
                            <div class="tab-pane {{$accountSec}}" id="account-sec" role="tabpanel" aria-labelledby="home-tab-justified">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 diversion-section-line">
                                        <h3 style="margin-bottom: 30px">Link Google Ads Account</h3>
                                        <div class="info-main-section">
                                            <div class="info-main-header">
                                                Customer ID
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Ads Customer Id" class="form-control" id="linkCustomerId" />
                                            </div>
                                             <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" onclick="setChannelSessionAttribute('adCustomerId','','');">Link Ads Account</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <h3 style="margin-bottom: 30px">Create Google Ads Account</h3>

                                    <form method="post" action="{{url('/')}}/user/create-google-account">
                                        @csrf  
                                        <div class="info-main-section">
                                            <div class="info-main-header">
                                                Customer/Account Name
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="managerCustomerId" name="managerCustomerId" value="1333536499" />

                                                <input type="text" placeholder="Enter Customer/Account Name" class="form-control" id="customerName" name="customerName" required />
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="info-main-header">
                                                Time Zone
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter timeZone" class="form-control" id="timeZone" name="timeZone" value="Asia/Riyadh" readonly="readonly" />
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="info-main-header">
                                                Currency Code
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Currency code" class="form-control" id="currencyCode" name="currencyCode"  value="SAR" readonly="readonly" />
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <button class="btn btn-primary">Create Ads Account</button> -->
                                            <button type="submit" class="btn btn-primary" >Create Ads Account</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane {{$campaignSec}}" id="campaign-sec" role="tabpanel" aria-labelledby="profile-tab-justified">
                                <h2 style="margin: 0 0 30px 0;display: block;float: none;">Create Campaign</h2>
                                <form method="post" action="{{url('/')}}/user/create-google-campaign">
                                    @csrf                                            
                                        <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                    <div class="row">       
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label>Campaign Name</label>
                                                <input type="text" name="campaignName" class="form-control"  required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                              <div class="form-group">
                                               <label>Start Date</label>
                                               <input type="text" id="start_date" name="startDate" class="form-control datepicker" placeholder="dd/mm/yyyy" />
                                             </div>
                                         </div>
                                        <!-- <input id="start_date" name="start_date" placeholder="Select Pickup Date" type='text' class="form-control datepicker" autocomplete="off" /> -->

                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>End Date</label>
                                               <input type="text" id="end_date" name="endDate" class="form-control datepicker" placeholder="dd/mm/yyyy" />
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Budget/Day (SAR)</label>
                                               <input type="text" name="budget" class="form-control" />
                                             </div>
                                        </div>
                                     </div>     
                                     <div class="form-group">
                                       <input type="submit" name="submit"  value="Create Campaign" class="btn btn-primary" />
                                     </div>
                                </form>

                            </div>
                            <div class="tab-pane {{$groupSec}}" id="adGroup-sec" role="tabpanel" aria-labelledby="messages-tab-justified">
                                <h2 style="margin: 0 0 30px 0;display: block;float: none;">Create Ads Group</h2><br/>
                                <form method="post" action="{{url('/')}}/user/create-adgroup">
                                    @csrf

                                    <div class="row">       

                                        <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                        <input type="hidden" name="campaignId"  value="<?php echo $adCampaignId; ?>" />
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Ad Group Name</label>
                                               <input type="text" name="adsGroupName" class="form-control" required />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Max CPC Bid Amount (SAR)</label>
                                               <input type="number" name="cpcBid" min="0" max="10" class="form-control" />
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                       <input type="submit" name="submit"  value="Create Ad Group" class="btn btn-primary" />
                                     </div>
                                </form>

                                <?php 
                                $parameters = array('CUSTOMER_ID' => $adCustomerId);
                                 //echo getCampaignList($url,$parameters);
                                 echo runGoogleAdsAPI("GET_CAMPAIGN_LIST",$parameters);
                                ?>
                                
                            </div>  

                            <div class="tab-pane {{$keywordSec}}" id="keywords-sec" role="tabpanel" aria-labelledby="messages-tab-justified">
                                 <h2 style="margin: 0 0 30px 0;display: block;float: none;">Add Keywords to Ad Group</h2><br/>
                                <!-- <form method="post" action="{{url('/')}}/user/create-adkeywords">
                                    @csrf
                                    <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                    <input type="hidden" name="adGroupId"  value="<?php echo $adGroupId; ?>" />

                                    <div class="row">  
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Keyword</label>
                                               <input type="text" name="keywordText" class="form-control" required />
                                             </div>
                                         </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Keyword Match Type</label>
                                               <select class="form-control" name="keywordMatchType">
                                                    <option value="BROAD" selected="selected">BROAD</option>
                                                    <option value="EXACT">EXACT</option>
                                                    <option value="PHRASE">PHRASE</option>
                                               </select>
                                             </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                       <input type="submit" name="submit"  value="Add Ad Keyword" class="btn btn-primary" />
                                     </div>
                                </form> -->


        <form action="{{url('/')}}/user/get-keyword-ideas" method="post" name="frm">  
            @csrf
            <div class="form-group row">
                <label for="customerId" class="col-sm-2 col-form-label">Keywords</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control"  id="keywords" name="keywords[]"  placeholder="Enter keyword" />
                </div>
            </div>
            <div class="form-group row">
                <label for="customerId" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="pageUrl" name="pageUrl"  placeholder="Enter pageUrl" >
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="submit" class="btn btn-primary" value="Generate Keyword Ideas" />
                    <input type="hidden" name="opt" value="GenerateKeywordIdeas">
                    <input type="hidden" name="languageId" value="1019">
                    <input type="hidden"  id="customerId" name="customerId"  value="{{$adCustomerId}}">
                    <input type="hidden" name="locationIds[]" value="1007788"><!-- Pune -->
                    <input type="hidden" name="locationIds[]" value="2682"> <!-- SA -->
                    <input type="hidden" name="locationIds[]" value="21152"><!-- US -->
                </div>
            </div>
        </form>

        <?php
        $keywordSuggestionArr = array();

        if(Session::has('keywordSuggestionArr')){
            $keywordSuggestionArr = Session::get('keywordSuggestionArr');
        }
        //print_r($keywordSuggestionArr)

        if(count($keywordSuggestionArr)>0){
        ?>

        <form method="post" action="{{url('/')}}/user/create-adkeywords" id="keywordFrm">
            @csrf
            <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
            <input type="hidden" name="adGroupId"  value="<?php echo $adGroupId; ?>" />
                <div class="form-group">
                   <button  class="btn btn-primary" id="addKeywords" type="submit">Add Ad Keyword</button>
                 </div>
            <table class="table b-table data-table dataTable no-footer">
                <tr>
                    <th><input type="checkbox" name="checkAll" id="check-all" /></th>
                    <th>Sr.No.</th>
                    <th>Keyword</th>
                    <th>Avg Monthly Searches</th>
                    <th>Competition</th>
                    <th>Keyword Match Type <br/> <small>Match types help control which searches can trigger your ads<br/>keyword = Broad match "keyword" = Phrase match [keyword] = Exact match</small></th>
                </tr>
                <tbody>
                <?php 

                $competitionArr = array("0"=>"UNSPECIFIED","1"=>"UNKNOWN","2"=>"LOW","3"=>"MEDIUM","4"=>"HIGH");
                    $i=0;
                    foreach($keywordSuggestionArr as $D){
                        $i++;
                        echo '<tr>
                            <td><input type="checkbox" name="keywordText[]" value="'.$D['keyword'].'" class="keyword-checkbox" /></td>
                            <td>'.$i.'</td>
                            <td>'.$D['keyword'].'</td>
                            <td>'.$D['AvgMonthlySearches'].'</td>
                            <td>'.$competitionArr[$D['competition']].'</td>
                            <td><select class="form-control" name="keywordMatchType[]">
                                <option value="" selected="selected">Select Match Type</option>
                                <option value="BROAD" >BROAD</option>
                                <option value="EXACT">EXACT</option>
                                <option value="PHRASE">PHRASE</option>
                            </select></td>
                        </tr>';
                    }?>
                </tbody>
            </table>
            <?php } ?>
        </form>

                            </div> 
                            <div class="tab-pane {{$adsSec}}" id="searchad-sec" role="tabpanel" aria-labelledby="messages-tab-justified">

                                <h2 style="margin: 0 0 30px 0;display: block;float: none;">Search Ad</h2><br/>
                                <form method="post" action="{{url('/')}}/user/create-search-ad">
                                    @csrf
                                    <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                    <input type="hidden" name="adGroupId"  value="<?php echo $adGroupId; ?>" />
                                        <!-- customerId adGroupId mainHeadline headline1 headline2 description1 description2 finalUrlPath1 finalUrlPath2 finalUrl -->

                                        <style type="text/css">
                                            .googleads-head-section{margin-bottom: 5px}
                                            .googleads-head-section span{position: relative;padding-right: 15px;margin-right: 15px;font-size: 20px;color: #399dd6}
                                            .googleads-head-section span:before{content: "|";position: absolute;right: 0;top: 0}
                                            .googleads-head-section span:last-child:before{content: none}
                                            .googleads-desc-section{word-break: break-all;}
                                            .ad-prive-bx.preview-ads-mobile{width: 100%}
                                            .googleads-section-weblink{margin-bottom: 6px}
                                            .googleads-section-weblink span{font-weight: 600}
                                        </style>

                                    <div class="row">  
                                        <div class="col-sm-7 col-md-7 col-lg-7">
                                            <div class="row">  

                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                       <label>Final URL</label>
                                                       <input type="text" name="finalUrl" class="form-control" autocomplete="off" onfocus="websiteFocus();" />
                                                     </div> 
                                                 </div>
                                                 <div class="col-md-3">
                                                     <div class="form-group">
                                                       <label>Display path 1</label>
                                                       <input type="text" name="finalUrlPath1" class="form-control"  maxlength="15"  autocomplete="off" />
                                                     </div> 
                                                 </div>
                                                 <div class="col-md-3">
                                                     <div class="form-group">
                                                       <label>Display path 2</label>
                                                       <input type="text" name="finalUrlPath2" class="form-control"  maxlength="15" autocomplete="off" />
                                                     </div>
                                                 </div>

                                                <div class="col-md-12">
                                                     <div class="form-group">
                                                       <label>Main Headline</label>
                                                       <input type="text" name="mainHeadline" class="form-control" maxlength="30" required />
                                                     </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                       <label>Headline1</label>
                                                       <input type="text" name="headline1" class="form-control" maxlength="30" required />
                                                     </div>
                                                 </div>
                                                  <div class="col-md-12">
                                                     <div class="form-group">
                                                       <label>Headline2</label>
                                                       <input type="text" name="headline2" class="form-control"  maxlength="30" required />
                                                     </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                       <label>Headline3</label>
                                                       <input type="text" name="headline3" class="form-control"  maxlength="30"  />
                                                     </div>
                                                 </div>

                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                       <label>Description1</label>
                                                       <textarea name="description1" class="form-control"  maxlength="90" required></textarea>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                       <label>Description2</label>
                                                       <textarea name="description2" class="form-control"  maxlength="90" required ></textarea>
                                                     </div>
                                                 </div>

                                                 
                                             </div>
                                         </div>
                                         <div class="col-sm-5 col-md-5 col-lg-5">
                                            <div class="ad-prive-bx preview-ads-mobile twitter-preview-main">
                                                <div class="googleads-section-weblink">
                                                    <span>Ad. </span> www.sweply.com
                                                </div>
                                                <div class="googleads-head-section">
                                                    <span>Main Headline</span><span>Headline1</span><span>Headline2</span>
                                                </div>
                                                <div class="googleads-desc-section">
                                                    <p> Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                                </div>
                                            </div>
                                         </div>                                         
                                    </div>

                                     <div class="form-group">
                                       <input type="submit" name="submit"  value="Create Search Ad" class="btn btn-primary" />
                                     </div>
                                </form>

                            </div>                     
                        </div>
                    </div>

                    <?php  
                    //if(isset($_REQUEST['debug'])){
                    echo $adCustomerId.'-customer/<br/>'.$adCampaignId.'-campaign/<br/>'.$adGroupId.'-group/<br/>'.$adKeywordId.'-keyword/<br/>'.$searchAdId.'-ads/  '; 
                    //} ?>

            </div>          
        </div>
    </div>
</div>
<!-- headline 30 - 15 | description 90-4 | website path - 15 -->
    <script type="text/javascript">
        function setChannelSessionAttribute(attribute,sessionValue,channel_url){
            if(attribute=="adCustomerId"){
                sessionValue = $('#linkCustomerId').val();
            }
            var token    = "{{csrf_token()}}";
            $.ajax({
                url: "{{url('/')}}/set_session_attribute",
                type: 'post',
                data: {attribute:attribute,sessionValue:sessionValue,_token:token},
                success: function(data){
                  // window.location.href = channel_url;
                   location.reload();
                }
            });
        } 

        $(document).ready(function(){

            $("#check-all").on("click", function() {
              var all = $(this);

              if($(this).is(':checked')==true){
                  $('.keyword-checkbox').each(function() {
                       $(this).prop("checked", all.prop("checked"));
                  });
              }
              if($(this).is(':checked')==false){
                              //alert($(this).is(':checked'));

                $('.keyword-checkbox').each(function() {
                     $(this).prop('checked',false);
                });
              }
            });

            $('#addKeywords').click(function(e){
                //alert('szdada');

            });


            $(".keyword-checkbox").change(function() {
                if(this.checked) {
                    $('#addKeywords').removeAttr('disabled');
                }
            });


            $('input').each(function(){
                $(this).attr('autocomplete','off');
            });
            $('textarea[name="description1"]').on("keyup change blur",function(){
                $('.googleads-desc-section p').text($(this).val());
            });

        $('input[name="finalUrl"],input[name="finalUrlPath1"],input[name="finalUrlPath2"]').on("keyup change blur",function(){
                var finalUrl = $('input[name="finalUrl"]').val();
                finalUrl = finalUrl.replace("https://", "");
                var finalUrlPath1 = $('input[name="finalUrlPath1"]').val();
                var finalUrlPath2 = $('input[name="finalUrlPath2"]').val();
                var completePath = finalUrl;
                if(finalUrlPath1){
                    completePath = completePath+'/'+finalUrlPath1;
                }
                if(finalUrlPath2){
                    completePath = completePath+'/'+finalUrlPath2;
                }
                $('.googleads-section-weblink').html('<span>Ad. </span> '+completePath);

                $('.err-msg').remove();
                if(isUrlValid($('input[name="finalUrl"]').val())==false){
                    $('input[name="finalUrl"]').parent().append('<span class="err-msg">* Invalid URL format, e.g. https://example.com</span>');
                }
        });


        $('input[name="mainHeadline"],input[name="headline1"],input[name="headline2"]').on("keyup change blur",function(){
                var mainHeadline = $('input[name="mainHeadline"]').val();
                var headline1 = $('input[name="headline1"]').val();
                var headline2 = $('input[name="headline2"]').val();
                var completeHtml = '<span>'+mainHeadline+'</span>';
                if(headline1){
                    completeHtml = completeHtml+'<span>'+headline1+'</span>';
                }
                if(headline2){
                    completeHtml = completeHtml+'<span>'+headline2+'</span>';
                }
                $('.googleads-head-section').html(completeHtml);
        });


        $(function() {
            $( ".datepicker" ).datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'dd/mm/yyyy',
                startDate: new Date()
            });
        });


        $('#end_date,#start_date').change(function(){
                var start = $('#start_date').val();
                var end = $('#end_date').val();
                start = start.split("/");
                end = end.split("/");

                var startDay = new Date(start[2]+'-'+start[1]+'-'+(start[0]-1));
                var endDay = new Date(end[2]+'-'+end[1]+'-'+end[0]);
                var diff = new Date(endDay - startDay);
                var days = diff/1000/60/60/24;
                days = days.toFixed();
                $('#end_date').parents().find('.err-msg').remove();
                $('.date-err-msg').remove();
                if(days>0 && Math.sign(days)===1){
                    $('#end_date').parents().find('.err-msg').remove();
                }else{
                    if($('#end_date').val()){
                        $('#end_date').parent().append('<label style="bottom: -40px;color:red;" class="date-err-msg" >End date should be greater than start date </label>');
                    }
                }
           });



        });

        function websiteFocus(){
            if(!$('input[name="finalUrl"]').val() || $('input[name="finalUrl"]').val()==""){
                $('input[name="finalUrl"]').val('https://');
            }
         }
         

        function isUrlValid(url) {
            return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
    }
    </script>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-datepicker.min.css">
    <script src="{{url('/')}}/public/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
@endsection
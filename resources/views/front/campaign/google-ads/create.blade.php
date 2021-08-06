<?php 
    $userData = [];
    $userData = getLoggedUserData(); 
    ?>
@extends('front.layout.dashboard-master')    
@section('main_content')

<style type="text/css">
    .diversion-section-line{position: relative;}
    .diversion-section-line:before{position: absolute;content: "";height: 100%;width: 2px;background: #dddddd;right: 0px;top: 0}
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
            <div class="ad-prive-bx ad-prive-details-bx">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"  data-toggle="tab" href="#account-sec" role="tab" aria-controls="account-sec" aria-selected="true"> <span>Create/Link Ads </span>Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="#campaign-sec" role="tab" aria-controls="campaign-sec" aria-selected="true"><span>Create</span> Campaign</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="#adGroup-sec" role="tab" aria-controls="adGroup-sec" aria-selected="false"><span>Create</span> Ad Group</a> 
                            </li>   
                             <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="#keywords-sec" role="tab" aria-controls="keywords-sec" aria-selected="false"><span>Add</span> Keywords</a> 
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link"  data-toggle="tab" href="#searchad-sec" role="tab" aria-controls="searchad-sec" aria-selected="false"><span>Create</span> Search Ad</a> 
                            </li>                     
                        </ul>
                        


                        <!-- Tab panes -->
                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="account-sec" role="tabpanel" aria-labelledby="home-tab-justified">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 diversion-section-line">
                                        <h3 style="margin-bottom: 30px">Link Google Ads Account</h3>
                                        <div class="info-main-section">
                                            <div class="info-main-header">
                                                Customer ID

                                                <?php
                                                $adCustomerId = "";
                                                if(Session::has('adCustomerId')){
                                                   echo  $adCustomerId = Session::get('adCustomerId');
                                                }

                                                ?>
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

                                                <input type="text" placeholder="Enter Customer/Account Name" class="form-control" id="customerName" name="customerName" />
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
                            <div class="tab-pane" id="campaign-sec" role="tabpanel" aria-labelledby="profile-tab-justified">
                                <h2 style="margin: 0 0 30px 0;display: block;float: none;">Create Campaign</h2>
                                <form method="post" action="{{url('/')}}/user/create-google-campaign">
                                    @csrf                                            
                                        <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                    <div class="row">       
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                <label>Campaign Name</label>
                                                <input type="text" name="campaignName" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                              <div class="form-group">
                                               <label>Start Date</label>
                                               <input type="text" name="startDate" class="form-control" placeholder="YYYYMMDD" />
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>End Date</label>
                                               <input type="text" name="endDate" class="form-control" placeholder="YYYYMMDD" />
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Budget</label>
                                               <input type="text" name="budget" class="form-control" />
                                             </div>
                                        </div>
                                     </div>     
                                     <div class="form-group">
                                       <input type="submit" name="submit"  value="Create Campaign" class="btn btn-primary" />
                                     </div>
                                </form>

                            </div>
                            <div class="tab-pane" id="adGroup-sec" role="tabpanel" aria-labelledby="messages-tab-justified">
                                <?php
                                 $adCampaignId = 0;
                                if(Session::has('campaignId')){
                                    echo  $adCampaignId = Session::get('campaignId');
                                }
                                ?>

                                <h2 style="margin: 0 0 30px 0;display: block;float: none;">Create Ads Group</h2><br/>
                                <form method="post" action="{{url('/')}}/user/create-adgroup">
                                    @csrf

                                    <div class="row">       

                                        <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                        <input type="hidden" name="campaignId"  value="<?php echo $adCampaignId; ?>" />
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Ad Group Name</label>
                                               <input type="text" name="adsGroupName" class="form-control" />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Max CPC Bid Amount</label>
                                               <input type="text" name="cpcBid" class="form-control" />
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
                            <div class="tab-pane" id="keywords-sec" role="tabpanel" aria-labelledby="messages-tab-justified">
                                <?php
                                 $adGroupId = 0;
                                if(Session::has('adGroupId')){
                                    echo  $adGroupId = Session::get('adGroupId');
                                }
                                ?>

                                 <h2 style="margin: 0 0 30px 0;display: block;float: none;">Add Keywords to Ad Group</h2><br/>
                                <form method="post" action="{{url('/')}}/user/create-adkeywords">
                                    @csrf
                                    <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                    <input type="hidden" name="adGroupId"  value="<?php echo $adGroupId; ?>" />

                                    <div class="row">  
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Keyword</label>
                                               <input type="text" name="keywordText" class="form-control" />
                                             </div>
                                         </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Keyword Match Type</label>
                                               <select class="form-control" name="keywordMatchType">
                                                    <option value="EXACT">Select Keyword Match</option>
                                                    <option value="UNSPECIFIED">UNSPECIFIED</option>
                                                    <option value="UNKNOWN">UNKNOWN</option>
                                                    <option value="EXACT">EXACT</option>
                                                    <option value="PHRASE">PHRASE</option>
                                                    <option value="BROAD">BROAD</option>
                                               </select>
                                             </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                       <input type="submit" name="submit"  value="Add Ad Keyword" class="btn btn-primary" />
                                     </div>
                                </form>

                            </div> 
                            <div class="tab-pane" id="searchad-sec" role="tabpanel" aria-labelledby="messages-tab-justified">

                                <h2 style="margin: 0 0 30px 0;display: block;float: none;">Search Ad</h2><br/>
                                <form method="post" action="{{url('/')}}/user/create-search-ad">
                                    @csrf
                                    <input type="hidden" name="customerId"  value="<?php echo $adCustomerId; ?>" />
                                    <input type="hidden" name="adGroupId"  value="<?php echo $adGroupId; ?>" />
                                        <!-- customerId adGroupId mainHeadline headline1 headline2 description1 description2 finalUrlPath1 finalUrlPath2 finalUrl -->

                                    <div class="row">  
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Main Headline</label>
                                               <input type="text" name="mainHeadline" class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Headline1</label>
                                               <input type="text" name="headline1" class="form-control" />
                                             </div>
                                         </div>
                                          <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Headline2</label>
                                               <input type="text" name="headline2" class="form-control" />
                                             </div>
                                         </div>

                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Description1</label>
                                               <textarea name="description1" class="form-control" ></textarea>
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>Description2</label>
                                               <textarea name="description1" class="form-control" ></textarea>
                                             </div>
                                         </div>

                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>finalUrl</label>
                                               <input type="text" name="finalUrl" class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>finalUrlPath1</label>
                                               <input type="text" name="finalUrlPath1" class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-sm-3 col-md-3 col-lg-3">
                                             <div class="form-group">
                                               <label>finalUrlPath2</label>
                                               <input type="text" name="finalUrlPath2" class="form-control" />
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

            </div>          
        </div>
    </div>
</div>
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
    </script>
@endsection
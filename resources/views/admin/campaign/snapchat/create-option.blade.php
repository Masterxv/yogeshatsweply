@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="preview-ad-section">
                <div class="breadcrem-section">
                <h2>Snapchat Ad Preview</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="#">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a href="#">Create Ads <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="#">Snapchat </a></li>                       
                    </ul>
                </div>
                <div class="clearfix"></div>               
            </div>
         <div class="ad-prive-bx">
            <form action="#" class="number-tab-steps wizard-circle">
                <!-- Step 1 -->
                <h6>Step 1  </h6>
                <fieldset>
                    <div class="twitter-step-section">
                    <div class="creadte-ad-frm">
                        <div class="row">
                

                    <div class="col-sm-12 col-md-6 col-lg-12">
                        <div class="form-group">
                            
                            <label for="emailAddress1">Upload image <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose Logo file</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="emailAddress1">Google Map URL</label>
                            <input type="text" placeholder="Enter Google Map URL" class="form-control" id="emailAddress1">
                        </div>
                    </div>

                  
                   
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="emailAddress1">Start Date</label>
                            <input placeholder="Select Pickup Date " type='text' class="form-control pickadate" />
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="emailAddress1">End Date</label>
                            <input placeholder="Select End Date " type='text' class="form-control pickadate" />
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="emailAddress1">Area of target audience </label>
                            <div class="form-group">
                                <select class="select2 form-control" multiple="multiple">
                                    <option value="square">Riyadh</option>
                                    <option value="rectangle" selected>Jeddah</option>
                                    <option value="rombo">Sana'a</option>
                                    <option value="romboid">Dubai</option>
                                    <option value="trapeze">Makkah</option>
                                    <option value="traible" selected>Madina</option>
                                    <option value="polygon">Dammam</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="audience-gender-bx">
                            <h3>Select Gender</h3>
                        <fieldset>                       
                        <div class="gender-chk-bx">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" checked value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Male</span>
                            </div>
                        </div>
                        <div class="gender-chk-bx">
                            <div class="vs-checkbox-con vs-checkbox-primary">
                                <input type="checkbox" checked value="false">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="">Female</span>
                            </div>
                        </div>
                        </fieldset>
                    </div>
                </div>

                    <div class="col-sm-12 col-md-12 col-lg-12">          
                        <div class="audience-gender-bx Age-bx">
                            <h3>Age</h3>                               
                                 <div class="range-t input-bx">
                                    <div id="slider-price-range" class="slider-rang"></div>
                                    <div class="amount-no" id="slider_price_range_txt">
                                    </div>
                                </div>                              
                    </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="emailAddress1">Add Note</label>
                            <textarea class="form-control" id="basicTextarea" rows="2" placeholder="Enter Note"></textarea>
                        </div>
                    </div>                
                    </div>
                    </div>                   
                </div>
                </fieldset>

                <!-- Step 2 -->
                <h6>Step 2</h6>
                    <fieldset>
                        <div class="twitter-step-section">        
                            <div class="creadte-ad-frm">
                                <div class="form-group">
                                    <label for="emailAddress1">Username / Email used for Snapchat account</label>
                                    <input type="text" placeholder="Enter Username Name" class="form-control" id="emailAddress1">
                                </div>                    
                                    <div class="form-group">
                                        <label for="emailAddress1">Snapchat account password</label>
                                        <input type="password" placeholder="Enter Password" class="form-control" id="emailAddress1">
                                    </div>
                                    <div class="form-group bud-sar-padding">
                                        <label for="emailAddress1">Budget</label>
                                        <input type="text" placeholder="Enter Budget" class="form-control" id="emailAddress1">
                                        <span class="budget-sar">SAR</span>
                                </div>                         
                        </div>   
                    </div>

                    <div class="estamations-from-bx">
                        <div class="Estamations-left-right-bx">
                        <div class="reach-people">Estamated Reach</div>
                        <div class="reach-click"><i class="feather icon-users"></i> 40000 - 50000</div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="Estamations-left-right-bx">
                        <div class="reach-people">Service fees </div>
                        <div class="reach-click"> SAR 10</div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="Estamations-left-right-bx">
                        <div class="reach-people">VAT 15%</div>
                        <div class="reach-click"> SAR 40</div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="Estamations-left-right-bx">
                        <div class="reach-people">Total</div>
                        <div class="reach-click"> SAR 500</div>
                        <div class="clearfix"></div>
                    </div>
                    </div>

                </fieldset>

             
            </form>




         </div>
         <div class="ad-prive-bx preview-ads-mobile">  
             <img src="./app-assets/images/logo/mobile.png" alt=""/>

        </div>
        </div>
        </div>
    </div>

    <!-- END: Content-->


    @endsection

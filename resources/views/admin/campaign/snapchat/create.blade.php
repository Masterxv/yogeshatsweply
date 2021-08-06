@extends('front.layout.dashboard-master')    
@section('main_content')

<style>
.hide{display:none}
    .area-target-drop-main {position: relative}
    .area-target-drop-main .form-control{line-height: 36px;color: #d4d4d4;}
    .area-target-drop-section{height: 100px;border: 1px solid #C1C1C1;border-radius: 3px;position: absolute;top: 62px;left: 0;width: 100%;background: #ffffff;z-index: 99;display: none}
</style>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/croppie.css" />
	<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/prism.css" />
	<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/demo.css" />
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB9s91K1zHQ4zz0v9oCVPnNingRJt2SGGc&libraries=geometry"></script> 
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/map.js"> 
    </script>
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
                <form action="{{url('/')}}/user/snapchat_store" class="number-tab-steps wizard-circle" id="snapchat_creat" name='snapchat_creat' enctype="multipart/form-data">
                    <!-- Step 1 -->
                    <input type="hidden" id="channel_id" name="channel_id"  value="1"/>    
                    <input type="hidden" id="channel_category_id" name="channel_category_id"  value="1"/>    
                    <input type="hidden" id="business_id" name="business_id"  value="1"/>    
                    <input type="hidden" id="user_id" name="user_id"  value="1"/>    
                   
                    <h6>Step 1  </h6>
                    <fieldset>
                        <div class="twitter-step-section">
                            <div class="creadte-ad-frm">                                
                                <div class="form-group">
                                    <label for="campaign_name">Camping name</label>
                                    <input type="text"  placeholder="Enter Camping name" class="form-control" id="campaign_name" name="campaign_name">
                                </div> 

                                <div class="form-group">
                                    <label for="">Campgain target</label>
                                     <select class="form-control" id="campaign_target">
                                        <option value="" selected> Select target</option>
                                        <option value="Visit Website" > Visit Website</option>
                                        <option value='App install'>App install / Visit</option>                                        
                                        <option value='Awareness'>Awareness</option>     
                                        <option value='Video Views'>Video Views</option>     
                                        <option value='Call to Action'>Call to Action</option>                                       
                                    </select>
                                 </div>


                                <div class="form-group">
                                    <label for="upload_type">Upload Type</label>
                                    <select class="form-control" id="upload_type">
                                        <option>Select Upload type</option>
                                        <option value='image'>Image</option>                                        
                                        <option value='video'>Video</option>                                        
                                    </select>
                                </div>


                                <div class="form-group image-input">
                                    <label for="image">Upload image <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>  
                                <div class="form-group video-input" style="display:none;">
                                    <label for="image">Upload video <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input file_multi_video" id="videofile">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label for="heading">Heading</label>
                                    <input type="text" placeholder="Enter Heading name" class="form-control" id="heading" name="heading">
                                </div>                                
                                <div class="form-group">
                                    <label for="brand_name">Brand Name </label>
                                    <input type="text" placeholder="Enter Brand name" class="form-control" id="brand_name" name="brand_name">
                                </div> 
                                <div class="form-group">
                                    <label for="Caption">Caption</label>
                                    <input type="text" placeholder="Enter Caption" class="form-control" id="caption" name="caption">
                                </div> 

                                <div class="app-sec" style="display:none;">
                                    <div class="form-group">
                                        <label for="app_name">App Name</label>
                                        <input type="text" placeholder="Enter App Name" class="form-control" id="app_name" name="app_name">
                                    </div> 

                                    <div class="form-group image-input">
                                        <label for="image">Upload App Icon <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="app_icon">
                                            <label class="custom-file-label" for="app_icon">Choose file</label>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="android_url">Android Url</label>
                                        <input type="text" placeholder="Enter android app url" class="form-control" id="android_url" name="android_url">
                                    </div> 
                                    <div class="form-group">
                                        <label for="ios_url">Ios Url</label>
                                        <input type="text" placeholder="Enter ios app url" class="form-control" id="ios_url" name="ios_url">
                                    </div> 
                                </div>


                                <div class="form-group">
                                    <label for="call_to_action">Choose call to action Tap</label>
                                    <select class="form-control" id="call_to_action">
                                        <option value="Apply Now">Apply Now</option>
                                        <option value="Book Now">Book Now</option>
                                        <option value="Buy Ticket">Buy Ticket</option>
                                        <option value="Get Now">Get Now</option>    
                                        <option value="Listen">Listen</option>    
                                        <option value="Read">Read</option>    
                                        <option value="Sign up">Sign up</option>    
                                        <option value="Play">Play</option>    
                                        <option value="More">More</option>
                                    </select>
                                </div>
                                

                                 <div class="audience-gender-bx">
                                    <h3>Select Gender</h3>
                                    <fieldset>                       
                                        <div class="gender-chk-bx">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" id="gender" checked value="M">
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
                                                <input type="checkbox" id="gender" checked value="F">
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
                                <div class="audience-gender-bx Age-bx">
                                    <h3>Age</h3>                               
                                    <div class="range-t input-bx">
                                        <div id="slider-price-range" class="slider-rang"></div>
                                        <div class="amount-no" id="slider_price_range_txt"></div>
                                    </div>                              
                                </div>


                                <div class="form-group area-target-drop-main">
                                    <label for="target_audience">Area of target audience</label>
                                    <div class="form-control target-audience">Select area of target audience</div>
                                    <div class="area-target-drop-section" id="target_audience" >
                                            <table border="1" style="width:100%"> 
                                               <tr>
                                                <td style="display: flex;"> 
                                                    <input id="address" type="textbox" value="Riyadh">
                                                    <input id="radius" type="textbox" value="50">
                                                    <input type="button" id="geocode" value="Geocode" onclick="codeAddress()"></td>
                                              </tr> 
                                              <tr> 
                                                <td> 
                                                   <div id="map_canvas" style="width: 100%; height: 350px"></div> 
                                                </td> 
                                                <td valign="top" style="display:none;" > 
                                                   <div id="side_bar" style="width:300px;height:450px; text-decoration: underline; color: #4444ff; overflow:auto;"></div> 
                                                </td> 
                                              </tr> 
                                            </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="note">Add Note</label>
                                    <textarea class="form-control" id="note" name="note" rows="2" placeholder="Enter Note"></textarea>
                                </div>   


                                 






                                
                                <div class="form-group">
                                    <div class="demo-wrap upload-demo hide">
                                        <div class="container">
                                            <div class="grid"> 
                                                <div class="actions-close-modal" onclick="jQuery('.upload-demo').addClass('hide');jQuery('.custom-file-label').html('Choose file');">
                                                    <a href="javascript:void(0);">&times;</a>
                                                </div>                                               
                                                <div class="actions">
                                                    <a href="javascript(0);"class="btn file-btn btn-primary">
                                                        <span>Upload</span>
                                                        <input type="file" id="upload1" value="Choose a file" accept="image/*" />
                                                    </a>
                                                    <!--button class="upload-result hide ">Result</button-->
                                                </div>                                                
                                                <div class="row">
                                                    <div class="upload-msg">
                                                        Upload a file to start cropping
                                                    </div>
                                                    <div class="upload-demo-wrap">
                                                        <div id="upload-demo"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div id="preview-crop-image" style="background:#9d9d9d;width:430px;padding:50px 50px;height:775px;" class="hide"></div>
                                                </div>
                                            </div>
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
                                <!-- <div class="form-group">
                                    <label for="account_username">Username / Email used for Snapchat account</label>
                                    <input type="text" placeholder="Enter Username Name" class="form-control" id="account_username" name="account_username">
                                </div>                    
                                <div class="form-group">
                                    <label for="emailAddress1">Snapchat account password</label>
                                    <input type="password" placeholder="Enter Password" class="form-control"  id="account_password" name="account_password">
                                </div> -->

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <input id="start_date" name="start_date" placeholder="Select Pickup Date" type='text' class="form-control pickadate" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <input id="end_date" name="end_date" placeholder="Select End Date " type='text' class="form-control pickadate" />
                                        </div>
                                    </div>
                                </div>




                                
                                                                    
                                


                                <div class="form-group bud-sar-padding">
                                    <label for="campaign_budget">Budget</label>
                                    <input type="text" placeholder="Enter Budget" class="form-control" id="campaign_budget" name="campaign_budget">
                                    <span class="budget-sar">SAR</span>
                                </div>    

                                <div class="form-group">
                                    <label for="budget_duartion">Budget - Daily / Life Time</label>
                                    <select class="form-control" id="budget_duartion">
                                        <option value="Daily">Daily</option>
                                        <option value="Life Time">Life Time</option>
                                    </select>
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
                                <div class="reach-people">Sub Budget </div>
                                <div class="reach-click "> SAR 0.00</div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Service fees </div>
                                <div class="reach-click "> SAR 0.00</div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">VAT 15%</div>
                                <div class="reach-click vat_15"> SAR 0.00</div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Total Budget</div>
                                <div class="reach-click total_amount"> SAR 0.00</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </fieldset>             
                </form>
            </div>
            <div class="ad-prive-bx preview-ads-mobile">  
                <div class="mobile-black-bg"></div>
                <div class="mobile-top-time-icons-strip">
                    <div class="mobile-top-time">
                       17:24 
                    </div>
                    <div class="mobile-top-icons">
                        <span><i class="fas fa-wifi"></i></span>                        
                        <span><i class="fas fa-signal-alt"></i></span>
                        <span><i class="fal fa-battery-three-quarters"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <img src="{{url('/')}}/public/assets/images/logo/mobile.png" alt="" class="mobile-bg-img"/>
                <div class="brand-name-section-main">                    
                    <div class="brand-name-section">
                        Unimark Digital Ad
                    </div>
                     <div class="heading-section">
                        Lorem ipsum
                    </div> 
                    <div class="menu-dots-section">
                        <i class="fal fa-ellipsis-v"></i>
                    </div>                  
                </div>   
                <div class="add-img-video-section"> 
                    <img src="{{url('/')}}/public/assets/images/logo/mobile-priview-img.jpg" alt="" id="ad_image"/>
                    <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline autoplay>
                        <source src="mov_bbb.mp4" id="video_here" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>                
                </div>
                <div class="caption-txt-section-block">
                    Lorem Ipsum App Visit Name Apply Now
                </div>
                <div class="add-prive-btn">
                    <span class="btn-add-prive">Apply Now</span>
                </div> 
                <div class="app-add-prive-main">
                    <div class="app-add-prive-btn">
                        Apply Now
                    </div>
                    <div class="clearfix"></div>
                    <div class="app-add-prive">
                        <div class="app-add-icon-txt">
                            <div class="app-add-icon">
                            </div>
                            <div class="app-add-icon-txt-section">
                                <div class="app-add-icon-txt-head">
                                    App Visit Name
                                </div>
                                <div class="app-add-icon-txt-headline">
                                    Headline
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="app-add-install-btn">
                            Install
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   



                                <!-- <div class="form-group video-input" style="">
                                    <label>Upload Small Video</label>
                                    <input type="file" name="file[]" class="form-control file_multi_video " accept="video/*">
                                </div> -->
                                
                                <script>
                                    $( document ).ready(function() {
                                        var width = $(".mobile-bg-img").width();
                                        var height = $(".mobile-bg-img").height();
                                         $("#ad_video").height(height-107);
                                        $("#ad_video").width(width-34);

                                        $('#upload_type').change(function(){
                                            var mediaType = $(this).val();
                                            if(mediaType=="video"){
                                                $('#ad_image').hide();
                                                $('#ad_video').show();
                                                $('.video-input').show();
                                                $('.image-input').hide();
                                            }else{
                                                $('#ad_image').show();
                                                $('#ad_video').hide();
                                                $('.video-input').hide();
                                                $('.image-input').show();
                                            }
                                        });
                                    });
                                    $(document).on("change", ".file_multi_video", function(evt) {
                                      var $source = $('#video_here');
                                      $source[0].src = URL.createObjectURL(this.files[0]);
                                      $source.parent()[0].load();
                                    });
                                </script>
    
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/pickers/pickadate/pickadate.css">

      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    
     <!-- END: Custom CSS-->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/jquery-1.11.3.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/vendors.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/components.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery-ui.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/number-input.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/croppie/croppie.js"></script>
	<script type="text/javascript" src="{{url('/')}}/public/assets/croppie/demo.js"></script>
    
  
    
   
   
<script>

    $(document).ready(function(){        
       codeAddress(); 
    });

    /*Price Range slider Start*/
    $(function() {
        $("#slider-price-range").slider({
            range: !0,
            min: 18,
            max: 65,
            values: [25, 99],
            slide: function(s, e) {
                $("#slider_price_range_txt").html("<span class='slider_price_min'> " + e.values[0] + " - </span>  <span class='slider_price_max'>  " + e.values[1] + " </span>")
            }
        }), $("#slider_price_range_txt").html("<span class='slider_price_min'> " + $("#slider-price-range").slider("values", 0) + " - </span>  <span class='slider_price_max'> " + $("#slider-price-range").slider("values", 1) + "  </span>")
        
    
    });
    /*Price Range Slider End*/

    $(".target-audience").on("click", function(){
        $(".area-target-drop-section").slideToggle("slow");
    });
    
    $(function() {
        $('#target_audience').on("click",function(){
            initialize();
        });
       
        $('#brand_name').on("keyup change blur",function(){
             $('.heading-section').html(this.value);
        });
        $('#call_to_action').on("keyup change blur",function(){
             $('.btn-add-prive').html(this.value);
        });

        $('#heading').on("keyup change blur",function(){
           $('.brand-name-section').html(this.value);
        });
        $('#campaign_budget').on("keyup change blur",function(){
            var budget = $('#campaign_budget').val();
            var vat = parseInt(budget) * 0.15; 
            var total = parseInt(budget) + parseInt(vat);
             $('.vat_15').html("SAR "+vat);
             $('.total_amount').html("SAR "+total);
        });


	var $uploadCrop;

		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	}).then(function(){
	            		console.log('jQuery bind complete');
	            	});
	            	 $('.upload-demo').addClass('ready');
	            }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        alert("Sorry - you're browser doesn't support the FileReader API");
		    }
		}

		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 400,
				height: 700,
				type: 'Square'
			},
			enableExif: true
		});

		$('#inputGroupFile01').on('change', function () { 
			$('.upload-demo').removeClass('hide');
			readFile(this); })  ;
		$('#upload1').on('click', function (ev) {
			//alert();
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport',
				format: 'png', 
			}).then(function (resp) {
				 html = '<img src="' + resp + '" />';
                 $('.upload-demo').addClass('hide');
                $("#ad_image").attr("src",resp);
                
   				 $("#upload-success").html("Images cropped and uploaded successfully.");
  				  $("#upload-success").show();
				 var token                   = "{{csrf_token()}}"; 
			});

		});
		
		function popupResult(result) {
            var html;
            if (result.html) {
                html = result.html;
            }
            
            if (result.src) {
                $("#category_image").val(result.src);
                html = '<img src="' + result.src + '" />';
            }
            swal({
                title: '',
                html: true,
                text: html,
                allowOutsideClick: true
            });
            setTimeout(function(){
                $('.sweet-alert').css('margin', function() {
                    var top = -1 * ($(this).height() / 2),
                        left = -1 * ($(this).width() / 2);

                    return top + 'px 0 0 ' + left + 'px';
                });
            }, 1);
        }
		
    });
    
     function save_data(index){
        var business_id  = jQuery("#business_id").val();
        var user_id  = jQuery("#user_id").val();
        var channel_id  = jQuery("#channel_id").val();
        var channel_category_id = jQuery("#channel_category_id").val();
        var campaign_name = jQuery("#campaign_name").val();
        var heading = jQuery("#heading").val();
        var brand_name = jQuery("#brand_name").val();
        var campaign_target = jQuery("#campaign_target").val();
        var upload_type = jQuery("#upload_type").val();
        var call_to_action = jQuery("#call_to_action").val();
        var gender = jQuery("#gender").val();
        var note = jQuery("#note").val();
        var start_date = jQuery("#start_date").val();
        var end_date = jQuery("#end_date").val();
        var age = jQuery(".slider_price_min").html().trim()+ ' '+ jQuery(".slider_price_max").html().trim();
        var account_username = jQuery("#account_username").val();
        var account_password = jQuery("#account_password").val();
        var campaign_budget = jQuery("#campaign_budget").val();
        var original_image = jQuery("#inputGroupFile01").val();
         
        var image = $('#ad_image').attr('src');    
        var token    = "{{csrf_token()}}";
        jQuery.ajax({
                url: "{{url('/')}}/user/snapchat_store",
                type: "POST",
                data: { _token: token,"image":image,channel_id:channel_id,channel_category_id:channel_category_id,campaign_name:campaign_name,heading:heading,brand_name:brand_name,campaign_target:campaign_target,upload_type:upload_type,call_to_action:call_to_action,gender:gender,note:note,start_date:start_date,end_date:end_date,age:age,account_username:account_username,account_password:account_password,campaign_budget:campaign_budget,original_image:original_image},
                success: function (data) {
                    if(data != ''){
                        swal("Thank You!", "Campaign created successfully!", "success")
                          .then((value) => {
                                location.href = "{{url('/')}}/user/campaign/";
                        });
                    }else{
                         swal("Oops !", "Something went Wrong", "error")
                        .then((value) => {
                                //location.href = "{{url('/')}}/user/campaign/";
                        });
                    }
                }
            }); 
    }
</script>
@endsection

    

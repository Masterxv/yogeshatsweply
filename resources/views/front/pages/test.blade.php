@extends('front.layout.dashboard-master')    
@section('main_content')
<style>
    .hide{display:none!important;}
    .current{display:block!important;}
    .area-target-drop-main {position: relative}
    .area-target-drop-main .form-control{line-height: 36px;}
    .area-target-drop-section{height: auto;border: 1px solid #C1C1C1;border-radius: 3px;position: absolute;top: 62px;left: 0;width: 100%;background: #ffffff;z-index: 99;display: none}
    .area-target-drop-section table{border: none;box-shadow: none;}
    .area-target-drop-section table td {border: none;}
    .map-close-btn{position: absolute; top: -35px;right: 0px;height: 30px;width: 30px;border-radius: 50%;border: none;background:transparent;color: #000000;font-size: 23px;line-height: 0;z-index: 9;}
</style>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/croppie.css" />
<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/prism.css" />
<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/demo.css" />

<style>    
    .item {width: 100px;height: 100px;background-color: rgb(245, 230, 99);border: 10px solid rgba(136, 136, 136, .5);border-radius: 50%;touch-action: none;user-select: none;z-index: 99;position: relative;margin-left: auto;}
    .item:active {background-color: rgba(168, 218, 220, 1.00);}
    .item:hover {cursor: pointer;border-width: 20px;}
</style>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="preview-ad-section test-section-main facebook-ad-main-section">
            <div class="breadcrem-section">
                <h2>Facebook Ad Preview</h2>                
                <div class="brea-bx">
                    <ul>
                        <li><a href="{{url('/')}}/user/dashboard/">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a href="{{url('/')}}/user/create-ads">Create Ads <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="#">Facebook </a></li>                       
                    </ul>
                </div>
                <div class="clearfix"></div>               
            </div>
            <!------------------------------- PREVIEW BOX -------------------------------------->
            <div class="ad-prive-bx preview-ads-mobile twitter-preview-main facebook-preview-main" id="preview-section-bx">  
                <div class="mobile-black-bg"></div>                           
                <div class="company-user-details">
                    <div class="company-user-details-icon"></div>
                    <div class="company-user-details-info">
                        <div class="company-user-details-head">
                            Sweply marketing
                        </div>   
                        <div class="tagline-headsection">
                            Sponsored <i class="fas fa-globe-americas"></i>
                        </div>  
                        <div class="menu-section-dots">
                            <i class="fal fa-ellipsis-h"></i>
                        </div>                   
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="company-user-details-content">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
                </div>                
                <div class="images-video-section-main">
                    <div class="add-img-video-section"> 
                        <img src="{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg" alt="" id="ad_image"/>
                        <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                            <source src="#" id="video_here" type="video/mp4">
                            <source src="#" type="video/ogg">
                        </video>                
                    </div>                     
                    <div class="preview-bottom-heading-section" style="display:none;">
                        <div class="preview-bottom-heading">
                            Preview heading
                        </div>
                        <div class="preview-bottom-heading-website">
                            <i class="fas fa-link"></i> website.com
                        </div>                
                    </div>               
                    <div class="app-add-prive-main app-sec-preview">                                        
                        <div class="app-add-prive">
                            <div class="fb-add-info-section">
                                <div class="fb-add-info-website">
                                    Jammon.com
                                </div>
                                <div class="fb-add-info-headline">
                                    Headline Here
                                </div>
                                <div class="fb-add-info-description">
                                    Description | By clicking the
                                </div>
                            </div>
                            <div class="fb-add-info-btn">
                                Learn More
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------- END PREVIEW BOX -------------------------------------->

            <!------------------------------- fb sponsored message PREVIEW BOX -------------------------------------->
            <div class="ad-prive-bx preview-ads-mobile fb-sponsored-message" id="preview-section-bx">  
                <div class="mobile-black-bg"></div>                           
                <div class="company-user-details">
                    <div class="company-user-details-icon"></div>
                    <div class="company-user-details-info">
                        <div class="company-user-details-head">
                            Sweply marketing
                        </div>   
                        <div class="tagline-headsection">
                            Typically replies within a day
                        </div>                          
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="company-user-details-content">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
                </div>                
                <div class="images-video-section-main">
                    <div class="add-img-video-section"> 
                        <img src="{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg" alt="" id="ad_image"/>
                        <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                            <source src="#" id="video_here" type="video/mp4">
                            <source src="#" type="video/ogg">
                        </video>                
                    </div>                                                                           
                </div>
                <div class="company-user-details section-info-main-block">
                    <div class="company-user-details-icon"></div>
                    <div class="company-user-details-info">
                        <div class="company-user-details-head">
                            Sweply marketing
                        </div>   
                        <div class="tagline-headsection">
                            Typically replies within a day
                        </div>                          
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="fb-ads-contnet-center">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    <br>
                    <div class="create-btn">
                        <a href="javascript:void(0);">I'm inetrested</a>
                    </div>
                </div>
                
            </div>
            <!----------------------------- END fb sponsored message PREVIEW BOX -------------------------------------->

            <!-- ---------------------- Facebook slider preview ------------------------------- -->
            <div class="ad-prive-bx preview-ads-mobile twitter-preview-main facebook-preview-main" id="preview-section-bx">  
                <div class="mobile-black-bg"></div>                           
                <div class="company-user-details">
                    <div class="company-user-details-icon"></div>
                    <div class="company-user-details-info">
                        <div class="company-user-details-head">
                            Sweply marketing
                        </div>   
                        <div class="tagline-headsection">
                            Sponsored <i class="fas fa-globe-americas"></i>
                        </div>  
                        <div class="menu-section-dots">
                            <i class="fal fa-ellipsis-h"></i>
                        </div>                   
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="company-user-details-content">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
                </div>   
                <div class="swiper-container fb-slider-section">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="images-video-section-main">
                                <div class="add-img-video-section"> 
                                    <img src="{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg" alt="" id="ad_image"/>
                                    <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                                        <source src="#" id="video_here" type="video/mp4">
                                        <source src="#" type="video/ogg">
                                    </video>                
                                </div>                                                      
                                <div class="app-add-prive-main app-sec-preview">                                        
                                    <div class="app-add-prive">
                                        <div class="fb-add-info-section">
                                            <div class="fb-add-info-website">
                                                Jammon.com
                                            </div>
                                            <div class="fb-add-info-headline">
                                                Headline Here
                                            </div>
                                            <div class="fb-add-info-description">
                                                Description | By clicking the
                                            </div>
                                        </div>
                                        <div class="fb-add-info-btn">
                                            Learn More
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="images-video-section-main">
                                <div class="add-img-video-section"> 
                                    <img src="{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg" alt="" id="ad_image"/>
                                    <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                                        <source src="#" id="video_here" type="video/mp4">
                                        <source src="#" type="video/ogg">
                                    </video>                
                                </div>                                                      
                                <div class="app-add-prive-main app-sec-preview">                                        
                                    <div class="app-add-prive">
                                        <div class="fb-add-info-section">
                                            <div class="fb-add-info-website">
                                                Jammon.com
                                            </div>
                                            <div class="fb-add-info-headline">
                                                Headline Here
                                            </div>
                                            <div class="fb-add-info-description">
                                                Description | By clicking the
                                            </div>
                                        </div>
                                        <div class="fb-add-info-btn">
                                            Learn More
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="images-video-section-main">
                                <div class="add-img-video-section"> 
                                    <img src="{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg" alt="" id="ad_image"/>
                                    <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                                        <source src="#" id="video_here" type="video/mp4">
                                        <source src="#" type="video/ogg">
                                    </video>                
                                </div>                                                      
                                <div class="app-add-prive-main app-sec-preview">                                        
                                    <div class="app-add-prive">
                                        <div class="fb-add-info-section">
                                            <div class="fb-add-info-website">
                                                Jammon.com
                                            </div>
                                            <div class="fb-add-info-headline">
                                                Headline Here
                                            </div>
                                            <div class="fb-add-info-description">
                                                Description | By clicking the
                                            </div>
                                        </div>
                                        <div class="fb-add-info-btn">
                                            Learn More
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>                             
            </div>

            <!-- ---------------------- youtube mobile preview ------------------------------- -->
            <div class="ad-prive-bx preview-ads-mobile twitter-preview-main youtube-preview-main" id="preview-section-bx">
                <div class="youtube-top-video-section"></div>
                <div class="youtube-video-name-section">
                    <div class="youtube-video-name"></div>
                    <div class="youtube-video-seminame"></div>   
                    <div class="clearfix"></div>                 
                    <div class="youtube-like-dislike-section">
                        <div class="youtube-like"><i class="fas fa-thumbs-up"></i></div>
                        <div class="youtube-like">
                            <div class="youtube-like-txt"></div>
                        </div>
                        <div class="youtube-like youtube-dislike"><i class="fas fa-thumbs-up"></i></div>
                        <div class="youtube-like">
                            <div class="youtube-like-txt"></div>
                        </div>
                    </div>
                </div>                                        
                <div class="youtube-video-subscription-section">
                    <div class="youtube-subscriber-icon"></div>
                    <div class="youtube-subscriber-info">
                        <div class="youtube-subscriber-head"></div>
                        <div class="youtube-subscriber-semihead"></div>
                    </div>
                    <div class="youtube-subscriber-right"></div>
                    <div class="clearfix"></div>
                </div>  
                <div class="auto-start-section">
                    <div class="auto-start-bar"></div>
                    <div class="auto-start-btn">                        
                        <div class="auto-start-btn-circle"></div>
                    </div>
                </div> 
                <div class="main-add-preview">
                    <div class="main-add-preview-img">
                    </div>
                    <div class="main-add-preview-info">
                        <div class="main-add-preview-headline">
                            Headline
                        </div>
                        <div class="main-add-creater">
                            <span>Ad</span>Yogesh Kumavat
                        </div>
                        <div class="main-add-preview-views">
                            58 Views
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> 
            </div>
            <!----------------------------- END PREVIEW BOX -------------------------------------->
        </div>        
    </div>
</div>


<!------------------------------- Campaign Script Start ------------------------->    

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
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery-ui.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/number-input.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/croppie/croppie.js" defer></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/croppie/demo.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/htmltocanvas.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script> -->
   
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-datepicker.min.css">
<script src="{{url('/')}}/public/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

<button type="button" class=" balance-popup btn btn-primary add-form-btn btn-add-bussiness waves-effect waves-light" data-toggle="modal" data-target="#paymentMethodForm">
    <span class="text-nowrap"><span class="table-add-txt">Pay Balance</span><span class="table-add-icon"><i class="fal fa-plus"></i></span></span>
</button>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiper.min.css">
<script src="{{url('/')}}/public/assets/js/jquery-1.11.3.min.js"></script>
<!-- Swiper JS -->
<script src="{{url('/')}}/public/assets/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.fb-slider-section', {
      slidesPerView: 1.1,
      spaceBetween: 0,      
    });
  </script>
@endsection
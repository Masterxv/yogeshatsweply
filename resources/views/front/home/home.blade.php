@extends('front.layout.master')
@section('main_content')
    <div class="swiper-container home-banner-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">  
                <div class="container size-chg-cont">
                    <div class="banner-content-content">
                        <span class="banner-content-big-txt" data-wow-delay="0.1s">Start Your Digital</span>                                
                        <span class="borderd-txt-section spotlight-txt" data-wow-delay="0.7s"> Campaigns</span>
                        <span class="banner-content-big-txt now-txt" data-wow-delay="0.1s"><span class="min-yello"> in 3</span> Minuets</span>
                        <div class="more-services-btn animation-fadeinup">
                            <a href="javascript:void(0);" class="btn-more-services">Contact Us</a>
                        </div>
                    </div>
                </div>                   
                <div class="banner-img-section">
                    <img class="img-mobile-none" src="{{url('/')}}/public/assets/images/banne-1.png" alt="banner-img" />
                    <img class="img-mobile-active" src="{{url('/')}}/public/assets/images/slider-1.png" alt=""/>
                </div>
            </div>
            <div class="swiper-slide">  
                <div class="container size-chg-cont">
                    <div class="banner-content-content">
                        <span class="banner-content-big-txt" data-wow-delay="0.1s">Start Your Digital</span>                                
                        <span class="borderd-txt-section spotlight-txt" data-wow-delay="0.7s"> Campaigns</span>
                        <span class="banner-content-big-txt now-txt" data-wow-delay="0.1s"><span class="min-yello"> in 3</span> Minuets</span>
                        <div class="more-services-btn animation-fadeinup">
                            <a href="javascript:void(0);" class="btn-more-services">Contact Us</a>
                        </div>
                    </div>
                </div>                   
                <div class="banner-img-section">
                    <img class="img-mobile-none" src="{{url('/')}}/public/assets/images/banne-1.png" alt="banner-img" />
                    <img class="img-mobile-active" src="{{url('/')}}/public/assets/images/slider-1.png" alt=""/>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="sweply-services-section want-to">
        <div class="want-to-bg-img">
            <img src="{{url('/')}}/public/assets/images/want-to-img.png" alt="" />
        </div>
        <div class="container">
            <div class="sweply-services-head">I want to...
            </div>                        
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="services-box-section">
                        <div class="services-box-img">
                            <img src="{{url('/')}}/public/assets/images/digital-campaign.svg" alt="" />
                        </div>
                        <div class="for-responsive-alignment">
                        <div class="services-box-head">
                            start your digital campaign in all platforms
                        </div>
                        <div class="services-box-buy-now">
                            <a href="javascript:void(0);">
                                <span class="txt-bye-now">Buy now</span>
                                <span class="arrow-bye-now"><i class="fal fa-long-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="services-box-section">
                        <div class="services-box-img">
                            <img src="{{url('/')}}/public/assets/images/charge-your-twitter-credits.svg" alt="" />
                        </div>
                        <div class="for-responsive-alignment">
                        <div class="services-box-head">
                            Charge your Twitter Credits
                        </div>
                        <div class="services-box-buy-now">
                            <a href="javascript:void(0);">
                                <span class="txt-bye-now">Buy now</span>
                                <span class="arrow-bye-now"><i class="fal fa-long-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="services-box-section">
                        <div class="services-box-img">
                            <img src="{{url('/')}}/public/assets/images/accounts-analysis.svg" alt="" />
                        </div>
                        <div class="for-responsive-alignment">
                        <div class="services-box-head">
                            Accounts Analysis
                        </div>
                        <div class="services-box-buy-now">
                            <a href="javascript:void(0);">
                                <span class="txt-bye-now">Coming soon</span>
                                <span class="arrow-bye-now"><i class="fal fa-long-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="services-box-section">
                        <div class="services-box-img">
                            <img src="{{url('/')}}/public/assets/images/influencers-campaigns.svg" alt="" />
                        </div>
                        <div class="for-responsive-alignment">
                        <div class="services-box-head">
                            Influencers campaigns
                        </div>
                        <div class="services-box-buy-now">
                            <a href="javascript:void(0);">
                                <span class="txt-bye-now">Coming soon</span>
                                <span class="arrow-bye-now"><i class="fal fa-long-arrow-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-slider-section">
        <div class="container">
            <div class="sweply-services-head">Choose your campaign</div>        
        </div>
        <section  class="overview-block-ptb iq-amazing-tab white-bg mobile-tab-section">
            <div class="container">      
                <div class="row">              
                    <div class="col-7 col-sm-7 col-md-5 col-lg-5 main-mobile-box-main">
                        <div class="main-mobile-box">
                            <img src="{{url('/')}}/public/assets/images/mobile.png" class="mobile-img-bck" alt=""/>
                            <div class="tab-content">                                
                                <div role="snapchat" class="tab-pane active"><img src="{{url('/')}}/public/assets/images/01.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="twitter" class="tab-pane"><img src="{{url('/')}}/public/assets/images/02.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="facebook" class="tab-pane"><img src="{{url('/')}}/public/assets/images/03.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="instagram" class="tab-pane"><img src="{{url('/')}}/public/assets/images/04.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="Tiktok" class="tab-pane"><img src="{{url('/')}}/public/assets/images/05.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="google-ads" class="tab-pane"><img src="{{url('/')}}/public/assets/images/06.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="linkedin" class="tab-pane"><img src="{{url('/')}}/public/assets/images/07.jpg" class="img-responsive center-block" alt="#"></div>
                                <div role="youtube" class="tab-pane"><img src="{{url('/')}}/public/assets/images/08.jpg" class="img-responsive center-block" alt="#"></div>
                            </div>
                         </div>
                    </div>
                    <div class="col-5 col-sm-5 col-md-7 col-lg-7 mobile-tabs-main-section">
                        <ul class="mobile-tab" role="tablist">
                            <li role="snapchat" class="social-channels active">                              
                                    <img src="{{url('/')}}/public/assets/images/create-ads-snapChat.svg" alt=""/>
                                    <h2>Snapchat</h2>   
                            </li>
                            <li role="twitter" class="social-channels">                               
                                    <img src="{{url('/')}}/public/assets/images/create-ads-twitter.svg" alt=""/>
                                    <h2>Twitter</h2>      
                            </li>
                            <li role="facebook" class="social-channels">                                
                                    <img src="{{url('/')}}/public/assets/images/create-ads-facebook.svg" alt=""/>
                                    <h2>Facebook</h2>       
                            </li>  
                            <li role="instagram" class="social-channels">                                
                                    <img src="{{url('/')}}/public/assets/images/create-ads-insagram.svg" alt=""/>
                                    <h2>Instagram</h2>  
                            </li>    
                            <li role="Tiktok" class="social-channels">                                
                                    <img src="{{url('/')}}/public/assets/images/create-ads-tiktok.svg" alt=""/>
                                    <h2>Tiktok</h2>  
                              
                            </li>    
                            <li role="google-ads" class="social-channels">                                
                                    <img src="{{url('/')}}/public/assets/images/create-ads-googleAds.svg" alt=""/>
                                    <h2>Google Ads</h2> 
                            </li>    
                            <li role="linkdin" class="social-channels">                                
                                    <img src="{{url('/')}}/public/assets/images/create-ads-linkedIn.svg" alt=""/>
                                    <h2>Linkdin</h2>    
                            </li>    
                            <li role="youtube" class="social-channels">                                
                                    <img src="{{url('/')}}/public/assets/images/create-ads-toutube.svg" alt=""/>
                                    <h2>Youtube</h2>   
                            </li>                      
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-img">
            <img src="{{url('/')}}/public/assets/images/dot-bg-img.png" alt="" />
        </div>
    </div>
    <div class="video-main-section">
        <div class="container">
            <div class="video-txy-bx">
                <h2>Success story</h2>
                <h3>See how the Getty Museum promotes its video mini-series on Sweply</h3>            
            </div>
        </div>
        <div class="vdo-bx">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
    <div class="sweply-services-section our-application-setup-main ">
        <div class="container">
            <div class="sweply-services-head">
                Our Application Setup
            </div>            
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="setup-step-section">
                        <div class="setup-step-number">
                           1
                        </div>
                        <div class="setup-step-content">
                        <div class="setup-step-number-head">
                            Creative Solutions And Analysis
                        </div>
                        <div class="setup-step-number-content">
                            Learn how the predictive airfare app Hopper scaled their Facebook marketing...
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="setup-step-section">
                        <div class="setup-step-number">
                           2
                        </div>
                        <div class="setup-step-content">
                            <div class="setup-step-number-head">
                                Creative Solutions And Analysis
                            </div>
                            <div class="setup-step-number-content">
                                Learn how the predictive airfare app Hopper scaled their Facebook marketing...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="setup-step-section">
                        <div class="setup-step-number">
                          3
                        </div>
                        <div class="setup-step-content">
                            <div class="setup-step-number-head">
                                Creative Solutions And Analysis
                            </div>
                            <div class="setup-step-number-content">
                                Learn how the predictive airfare app Hopper scaled their Facebook marketing...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sweply-blog-section">
        <div class="bg-img">
            <img src="{{url('/')}}/public/assets/images/dot-bg-img.png" alt="" />
        </div>
        <div class="container">
            <div class="sweply-services-head">Our Blogs</div>            
            <div class="blog-section">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-bx">
                            <div class="blog-img">
                                <img src="{{url('/')}}/public/assets/images/blog-1.jpg" alt=""/>
                            </div>
                            <div class="blog-txt">
                                <p>Best Inspiration</p>
                                <h3>Inspiration for New Bloggers</h3>
                                <a href="javascript:void(0);" class="blog-txt-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-bx">
                            <div class="blog-img">
                                <img src="{{url('/')}}/public/assets/images/blog-2.jpg" alt=""/>
                            </div>
                            <div class="blog-txt">
                                <p>Best Inspiration</p>
                                <h3>Be strategic with your video content</h3>
                                <a href="javascript:void(0);" class="blog-txt-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="blog-bx">
                            <div class="blog-img">
                                <img src="{{url('/')}}/public/assets/images/blog-3.jpg" alt=""/>
                            </div>
                            <div class="blog-txt">
                                <p>Best Inspiration</p>
                                <h3>Inspiration for New Bloggers</h3>
                                <a href="javascript:void(0);" class="blog-txt-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sweply-services-section we-serving">
        <div class="container">
            <div class="sweply-services-head">
                What are we serving
            </div>                        
            <div class="swiper-container logos-swiper-slider">
                <div class="swiper-wrapper">                    
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-facebook-logo.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-linkedIn-logo.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-tableau-logo.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-youTube.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-twitter-logo.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-instagram-logo.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-snapchat-logo.png" alt="" /></div>
                    <div class="swiper-slide"><img src="{{url('/')}}/public/assets/images/slider-tiktok-logo.png" alt="" /></div>
                </div>            
            </div>
        </div>
    </div>
    <div class="start-advertising-section">
        <h2>Sweply can help your small, medium or large business grow.</h2>
        <div class="vdo-btn">
            <a href="#">Start Now</a>
        </div>        
        <div class="start-advertising-bg-img">
            <img src="{{url('/')}}/public/assets/images/smoke-transparent-clouds.png" alt="" />
        </div>
    </div>
   

    <div class="modal fade youtube-video-section" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">            
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <iframe src="https://www.youtube.com/embed/XQ4pG-lQ3yI" class="youtube-video" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>            
            </div>
        </div>
    </div>    
  
    <script>
        var isPaused = false;
        $(document).ready(function(){
            $('.social-channels').click(function(){
                var previewRole = $(this).attr('role');
                $('.tab-pane').removeClass('active');
                $('div[role="'+previewRole+'"]').addClass('active');
                $('.social-channels').removeClass('active');
                $(this).addClass('active');
                isPaused = true;
                //console.log('working---');
                setTimeout(function(){ isPaused = false; }, 5000);

            });
            var intervalId = window.setInterval(function(){
                  if(!isPaused) {
                    $(".social-channels.active").removeClass('active').next(".social-channels").trigger('click'); 
                    // console.log('here slide');
                    if($(".social-channels.active").length==0){
                        $(".social-channels").eq(0).trigger('click');
                    }
                }
            }, 5000);
        });
   
        function openNav() {
            document.getElementById("mySidenav").style.left = "0";
            $("body").addClass("sidnav-open menuopen");
            $(".close-wrap").addClass("cross-open-section");
            $(".sidenav").css({"opacity": "1","visibility": "visible","transition": "0.5s",});
        }
        function closeNav() {
            document.getElementById("mySidenav").style.left = "100%";
            $("body").removeClass("sidnav-open menuopen");
            $(".close-wrap").removeClass("cross-open-section");
            $(".sidenav").css({"opacity": "0","visibility": "hidden","transition": "0.5s",});
        }
    </script>    
@endsection


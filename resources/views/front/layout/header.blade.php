<!doctype html>
<?php $trl=""; if(App::getLocale()=='ar'){ $trl='dir="rtl"';}  ?>
<html  <?php echo $trl; ?> lang=en-US>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title>Sweply</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/public/assets/images/logo/Favicon.png">
    <!-- ======================================================================== -->
    <!-- Bootstrap CSS -->
    <link href="{{url('/')}}/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/sweply-home.css">
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/animate.css">
    <!--Custom Css-->
    <!--Main JS-->
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{url('/')}}/public/assets/images/logo/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <?php if(App::getLocale()=='ar'){ ?>
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiply-rtl.css">
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet">
    <?php } ?>
</head>

<body class="twitter-color">
    <?php
    $logoClass = "";
    if(Request::is('/')){ $logoClass = "home-header"; }
    ?>

    <div id="main"></div>

    <div class="header-main home-page-header">
        <div class="header-top-bar">
            <div class="header-top-bar-left">
                <a href="mailto:info@sweply.com"> <i class="fas fa-envelope"></i> info@sweply.com</a>
            </div>
            <div class="header-top-bar-right">               
                <div class="header-top-bar-language-section">
                    <?php if(App::getLocale()=='ar'){ ?>
                        <a href="javascript:void(0)" onclick="setLanguage('en')"><i class="fas fa-globe-americas"></i> English</a>
                     <?php }else{ ?>
                        <a href="javascript:void(0)" onclick="setLanguage('ar')"><i class="fas fa-globe-americas"></i> Arabic</a>
                     <?php } ?>
                </div>  
                <div class="header-top-social-section">
                    <ul>
                        <li>Follow us : </li>
                        <li><a target="_blank" href="https://www.facebook.com/sweplyhq" class="header-social-facebood"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a target="_blank" href="https://twitter.com/SweplyP" class="header-social-twiter"><i class="fab fa-twitter"></i></a></li>
                        <li><a style="color: #e4405f;" target="_blank" href="https://twitter.com/SweplyP"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/sweply" class="header-social-linkedin"><i class="fab fa-linkedin-in"></i></a>  </li>  
                        <li><a target="_black" href="javascript:void(0);" class="header-social-youtube"><i class="fab fa-youtube"></i></a></li>                       
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="header-box">
            <div class="logo-block" data-wow-delay="0.2s">
                <a href="{{url('/')}}/" class="black-logo"><img src="{{url('/')}}/public/assets/images/logo.png" alt=""></a>               
            </div>
         
            <span class="menu-icon" onclick="openNav()"><i class="fal fa-bars"></i></span>
            <a class="slide_out_area_close" href="javascript:void(0);" onclick="closeNav()">
                <span class="close-wrap">
                    <span class="close-line close-line1"></span>
                    <span class="close-line close-line2"></span>
                </span>
            </a>
            <div id="mySidenav" class="sidenav">   
                <div class="banner-img-block">
                    <img src="{{url('/')}}/public/assets/images/logo.png" alt="" />
                </div> 
                <ul class="min-menu">
                    <li><a href="{{url('/')}}/"><span>Home</span></a></li>
                    <li><a href="about-us.html"><span>About Us</span></a></li>
                    <li><a href="about-us.html"><span>Advertising</span></a></li>
                    <li><a href="about-us.html"><span>Blog</span></a></li>
                    <li><a href="about-us.html"><span>Contact Us</span></a></li>
                    <li><a href="{{url('/')}}/login"><span>Login</span></a></li>
                    <li class="campign-btn"><a href="{{url('/')}}/login"><span>Start a campaign</span></a></li>                    
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="blank-div"></div>
    </div> 

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <!-- <link rel="apple-touch-icon" href="{{url('/')}}/public/assets/images/ico/apple-icon-120.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/public/assets/images/logo/Favicon.svg">    

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/components.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/sweply-user.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/sweply.css">

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .signup-section-main{height: 100vh;padding: 50px 0;min-height:auto}
        .login-form-main input.form-control {padding-left: 15px;}
        .signup-form-section {box-shadow: 0 0 10px rgb(0 0 0 / 10%);}
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">
    <div class="signup-section-main">
        <div class="container">
            <div class="signup-form-section login-form-main">
                <div class="signup-form-head">
                    Login
                </div>
                <div class="signup-form-semihead">
                    Please Login to your account. 
                </div>    
                <form method="POST" action="{{url('/')}}/admin/process_login" >  
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">                
                            <div class="form-group">
                                <label>Email ID</label>
                                <div style="position: relative;">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email ID" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div style="position: relative;">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password">
                                    <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                                </div>
                            </div>
                        </div>                    
                    </div>                
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <!-- <a href="dashboard.html" class="btn-more-services">Login</a> -->
                        <button class="btn-more-services" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="login-man-img">
        <img src="{{url('/')}}/public/assets/images/logo/Signup-man.png" alt="" />
    </div>
</body>
</html>
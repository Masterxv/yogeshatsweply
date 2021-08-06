
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
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/sweply-dev/public/assets/images/logo/Favicon.png">
    <!-- BEGIN: Theme CSS-->
     <link rel="shortcut icon" type="image/x-icon" href="http://localhost/sweply-dev/public/assets/images/logo/Favicon.png">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/sweply-user.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{url('/')}}/public/assets/vendors/js/vendors.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/charts/apexcharts.min.js"></script>    
    <script src="{{url('/')}}/public/assets/js/scripts/components.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/select/form-select2.js"></script>  
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/number-input.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--- Datatable ---->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">
   
    <div id="header">
         <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
                <div class="navbar-wrapper">
                    <div class="navbar-container content">
                        <div class="navbar-collapse" id="navbar-mobile">
                            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                                class="ficon feather icon-menu"></i></a></li>
                                </ul>

                                <ul class="nav navbar-nav">
                                    <!-- <li>
                                        <div class="create-btn"><a href="{{url('/')}}/user/create-ads/">Create Ads</a></div>
                                    </li> -->
                                </ul>
                            </div>
                            <ul class="nav navbar-nav float-right">
                                <li class="dropdown-language nav-item">
                                    <a class="nav-link" id="dropdown-flag" href="#" aria-haspopup="true" aria-expanded="false">
                                        <span class="selected-language">
                                            <img src="{{url('/')}}/public/assets/images/logo/flag-arb.png"/> <span class="select-language-txt">English</span>
                                        </span>
                                    </a>                                    
                                </li>

                                <?php 
                                $notificationArr = [];
                                $notificationArr['count'] = 0;

                                $notificationArr = getAllNotifications(array("to_id"=>0));

                                ?>
                                
                                <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                        data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                            class="badge badge-pill badge-primary badge-up">{{$notificationArr['count']}}</span></a>
                                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                        <li class="dropdown-menu-header">
                                            <div class="dropdown-header m-0 p-2">
                                                <h3 class="white">{{$notificationArr['count']}} New</h3><span class="notification-title">App Notifications</span>
                                                    
                                            </div>
                                        </li>

                                        <?php if(count($notificationArr['data'])>0){ 
                                            foreach($notificationArr['data'] as $notification){

                                            ?>
                                        <li class="scrollable-container media-list">
                                            <a class="d-flex justify-content-between" href="javascript:void(0)">
                                                <div class="media d-flex align-items-start">
                                                    <div class="media-left"><i
                                                            class="feather icon-plus-square font-medium-5 primary"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="primary media-heading"><?php echo $notification->title; ?>!</h6><small
                                                            class="notification-text"><?php echo $notification->message; ?></small>
                                                    </div>
                                                    <small>
                                                        <time class="media-meta">
                                                            <?php 
                                                            $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($notification->created_at);
                                                             $hours = $seconds/60/60;

                                                            echo date('d M Y',strtotime($notification->created_at)); ?>
                                                        </time></small>                                                
                                                </div>
                                            </a>
                                        </li>
                                        <?php } 
                                            }  
                                        ?>
                                       
                                        <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                                href="javascript:void(0)">View all notifications</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="dropdown dropdown-user nav-item"><a
                                        class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                                            
                                           </span><span class="user-status">Available</span></div><span><img
                                                class="round" src="{{url('/')}}/public/assets/images/profile.png"
                                                alt="avatar" height="40" width="40"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                            href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a
                                            class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                            Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                            href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('/')}}/admin/logout"><i
                                                class="feather icon-power"></i> Logout</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
        </nav>
    </div>   
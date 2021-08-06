<div id="left-menu">
        <!-- BEGIN: Main Menu-->
        <div class="left-menu-section-main" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="index.html">
                            <div class="brand-logo"><img src="{{url('/')}}/public/assets/images/logo/logo.png" alt="" /> </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item"><a href="{{url('/')}}/admin/dashboard/"><i class="fal fa-tachometer-alt-fast"></i><span class="menu-title" data-i18n="Email">Dashboard</span></a></li>
                     <li class=" nav-item"><a href="staff"><i class="fal fa-user"></i><span class="menu-title" data-i18n="Email">Staff</span></a></li>
                     <li class=" nav-item"><a href="{{url('/')}}/admin/business/" ><i class="fal fa-briefcase"></i><span class="menu-title" data-i18n="User">Business</span></a>
                        </li>
                    
                    <li class=" nav-item"><a href="{{url('/')}}/admin/campaign"><i class="fal fa-bullhorn"></i><span class="menu-title" >Campaigns</span></a></li>
                    <li class=" nav-item hide"><a href="#" class="nav-item-link"><i class="fal fa-video-plus"></i><span class="menu-title" data-i18n="User">Create Ads</span> <!-- <i class="fal fa-angle-down"></i> --></a>                    
                        <ul class="menu-content">
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Twitter</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Snapchat</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Instagram</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Facebook</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">linkedin</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Tiktok</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Google Ads</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Youtube</span></a></li>
                        </ul>
                    </li>
                    <li class=" nav-item hide"><a href="#"><i class="fal fa-file-invoice"></i><span class="menu-title" >Reports</span></a></li>
                    <li class=" nav-item"><a href="{{url('/')}}/admin/wallet-list/"><i class="fal fa-wallet"></i><span class="menu-title" >Wallet</span></a></li>
                    <li class=" nav-item"><a href="{{url('/')}}/admin/channel/"><i class="fal fa-peace"></i><span class="menu-title" >Channel</span></a></li>
                    <li class=" nav-item"><a href="{{url('/')}}/admin/channel-category/"><i class="fal fa-peace"></i><span class="menu-title" >Channel Category</span></a></li>

                    <li class=" nav-item hide"><a href="#"><i class="fal fa-user-cog"></i><span class="menu-title" >Profile Setting</span></a> </li>
                    <li class=" nav-item hide"><a href="#" class="nav-item-link"><i class="fal fa-credit-card"></i><span class="menu-title"data-i18n="User">Billing & Payment</span> <!-- <i class="fal fa-angle-down"></i> --></a>                    
                        <ul class="menu-content">
                            <li><a href="{{url('/')}}/admin/wallet-list/"><i class="feather icon-circle"></i><span class="menu-item">Wallet</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Transactions</span></a></li>
                            <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item">Payment Method</span></a></li>

                        </ul>
                    </li>
                    
                    <li class=" nav-item hide"><a href="#" class="nav-item-link"><i class="fal fa-user-headset"></i><span class="menu-title"data-i18n="User">Help Center</span> <!-- <i class="fal fa-angle-down"></i> --></a>
                        <ul class="menu-content">
                            <li><a href="faq.html"><i class="feather icon-circle"></i><span class="menu-item">FAQ</span></a></li>
                            <li><a href="contact-us.html"><i class="feather icon-circle"></i><span class="menu-item">Contact Us</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('/')}}/admin/userlist" class="nav-item-link">
                            <i class="fal fa-user"></i>
                            <span class="menu-title"data-i18n="User">Manage User</span> 
                        </a>                        
                    </li>
                    <li class=" nav-item"><a href="{{url('/')}}/admin/logout"><i class="fal fa-sign-out-alt"></i><span class="menu-title" >Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->
    </div>  

    <script>
        $(document).ready(function(){
            $(".nav-item-link").on("click", function(){                
                $(this).siblings(".menu-content").slideToggle("slow");        
                $(this).parent().siblings().find(".menu-content").slideUp("slow");
                $(this).toggleClass("inner-menu-open");
                $(this).parent().siblings().find(".nav-item-link").removeClass("inner-menu-open");
            });    
        });
    </script>

    

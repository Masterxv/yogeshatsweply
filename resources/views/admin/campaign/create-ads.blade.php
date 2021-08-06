@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="type-boxes">
                                <div class="title-bx">
                                    <h3>Create Ads</h3>
                                    <p>How would you like to create today?</p>
                                </div>

                                <div class="all-social-box-width">

                                    <div class="select-ads-type">
                                        <a href="{{url('/')}}/user/snapchat">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-6-snapchat.svg" alt="" />
                                            <h2>Snapchat</h2>
                                        </a>
                                    </div>

                                    <div class="select-ads-type">
                                        <a href="create-ads-twitter.html">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-2-twitter.svg" alt="" />
                                            <h2>Twitter</h2>
                                        </a>
                                    </div>

                                    <div class="select-ads-type">
                                        <a href="create-ads-privew-instagram.html">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-5-instagram.svg" alt="" />
                                            <h2>Instagram</h2>
                                        </a>
                                    </div>
                                    <div class="select-ads-type">
                                        <a href="create-ads-privew-tiktok.html">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-7-tik-tok.svg" alt="" />
                                            <h2>Tiktok</h2>
                                        </a>
                                    </div>
                                    <div class="select-ads-type">
                                        <a href="#">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-4-google-ads.svg" alt="" />
                                            <h2>Google Ads</h2>
                                        </a>
                                    </div>
                                    <div class="select-ads-type">
                                        <a href="#">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-3-linkedin.svg" alt="" />
                                            <h2>linkedin</h2>
                                        </a>
                                    </div>
                                    <div class="select-ads-type">
                                        <a href="create-ads-facebook.html">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-1-facebook.svg" alt="" />
                                            <h2>Facebook</h2>
                                        </a>
                                    </div>
                                    <div class="select-ads-type">
                                        <a href="create-ads-youtube.html">
                                            <img src="{{url('/')}}/public/assets/images/logo/ads-8-youtube.svg" alt="" />
                                            <h2>Youtube</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- page users view end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection

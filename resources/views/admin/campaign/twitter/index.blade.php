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
                    <!-- account start -->                        
                    <div class="type-boxes snap-chat-section">
                        <div class="snapchat-main-width twitter-width">
                            <div class="title-bx">
                                <h3>What is your advertising goal?</h3>
                                <p>How would you like to create today?</p>
                            </div>
                                <div class="select-ads-type">  
                                    <a  href="{{url('/')}}/user/twitter-create-ads" id="visits-bx-1" onclick="setSessionAttribute('channel_category_id',1)">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-1.svg" alt=""/>
                                        <h2>Promote a tweet</h2>                        
                                    </a>
                                </div>
                                <div class="select-ads-type"> 
                                    <a  href="{{url('/')}}/user/twitter-create-ads" id="visits-bx-2" onclick="setSessionAttribute('channel_category_id',2)">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-2.svg" alt=""/>
                                        <h2>Increase  Account Followers</h2>                  
                                    </a>    
                                </div>
                            </div>
                        </div>                           
                    </div>                        
                </section>
            </div>
        </div>
    </div>
<!-- </div>
</div>
</div> -->
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @endsection

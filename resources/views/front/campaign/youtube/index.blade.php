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
                        <div class="snapchat-main-width 
                        youtube-width">
                            <div class="title-bx">
                                <h3>What is your advertising goal?</h3>
                                <p>How would you like to create today?</p>
                            </div>
                            <?php $URL = url('/')."/user/youtube-create-ads"; ?>
                                <div class="select-ads-type">  
                                    <a   id="visits-bx-1" onclick="setChannelSessionAttribute('ADS_TYPE','skipable','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-1.svg" alt=""/>
                                        <h2>Skipable Ads</h2>                        
                                    </a>
                                </div>
                                <div class="select-ads-type">  
                                    <a   id="visits-bx-1" onclick="setChannelSessionAttribute('ADS_TYPE','non-skipable','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-2.svg" alt=""/>
                                        <h2>Non-Skipable Ads </h2>                        
                                    </a>
                                </div>
                            
                                <br/>
                                

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

    <script type="text/javascript">
        function setChannelSessionAttribute(attribute,sessionValue,channel_url){
            var token    = "{{csrf_token()}}";
            $.ajax({
                url: "{{url('/')}}/set_session_attribute",
                type: 'post',
                data: {attribute:attribute,sessionValue:sessionValue,_token:token},
                success: function(data){
                   window.location.href = channel_url;
                }
            });
        } 
    </script>
    @endsection

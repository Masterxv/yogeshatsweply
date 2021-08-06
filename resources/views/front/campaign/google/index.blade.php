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
                        <div class="snapchat-main-width google-width">
                            <div class="title-bx">
                                <h3>What is your advertising goal?</h3>
                                <p>How would you like to create today?</p>
                            </div>
                            <?php $URL = url('/')."/user/google-create-ads"; ?>
                                <div class="select-ads-type">  
                                    <a  href="javascript:void(0);" id="visits-bx-1" onclick="setChannelSessionAttribute('ADS_TYPE','Awareness','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-1.svg" alt=""/>
                                        <h2>Brand Awareness</h2>                        
                                    </a>
                                </div>
                                <div class="select-ads-type">  
                                    <a  href="javascript:void(0);" id="visits-bx-1" onclick="setChannelSessionAttribute('ADS_TYPE','Traffic','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-2.svg" alt=""/>
                                        <h2>Traffic </h2>                        
                                    </a>
                                </div>
                                <div class="select-ads-type">  
                                    <a  href="javascript:void(0);" id="visits-bx-1" onclick="setChannelSessionAttribute('ADS_TYPE','Engagement','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-1.svg" alt=""/>
                                        <h2>Engagement </h2>                        
                                    </a>
                                </div>
                                <br/>
                                <div class="select-ads-type">  
                                    <a  href="javascript:void(0);" id="visits-bx-1" onclick="setChannelSessionAttribute('ADS_TYPE','App-Install','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-1.svg" alt=""/>
                                        <h2>App Install </h2>                        
                                    </a>
                                </div>
                                <div class="select-ads-type"> 
                                    <a  href="javascript:void(0);" id="visits-bx-2" onclick="setChannelSessionAttribute('ADS_TYPE','Lead-Generation','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-2.svg" alt=""/>
                                        <h2>Lead Generation</h2>                  
                                    </a>    
                                </div>
                                <div class="select-ads-type"> 
                                    <a  href="javascript:void(0);" id="visits-bx-2" onclick="setChannelSessionAttribute('ADS_TYPE','Messages','<?php echo $URL; ?>')">
                                        <img src="{{url('/')}}/public/assets/images/logo/snap-1.svg" alt=""/>
                                        <h2>Messages</h2>                  
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

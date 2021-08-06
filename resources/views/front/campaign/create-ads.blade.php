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
                    <div class="type-boxes">
                        <div class="title-bx">
                            <h3>Create Ads</h3>
                            <p>How would you like to create today?</p>
                        </div>

                        <div class="all-social-box-width">

                            <?php
                            $allowedChannels = array('Twitter');
                            //$allowedChannels = array('Snapchat','Twitter','Facebook','YouTube');
                            $attribute = "'channel_id'";
                            if(isset($channel_list)){
                                foreach($channel_list as $channel){
                                    $ActiveClass = "active";
                                    if(in_array($channel->channel_name,$allowedChannels)){
                                        //if($channel->channel_name=="Snapchat" || $channel->channel_name=="Twitter"){
                                        $url = url('/').'/user/'.$channel->url_slug;
                                        $ActiveClass="active";
                                    }else{
                                        $url = "javascript:void(0);";
                                        $ActiveClass="";

                                    }
                                    $url = "'".$url."'";
                                    echo '<div class="select-ads-type '.$ActiveClass.' " >
                                        <a shref="'.$url.'"  channel-id="'.$channel->id.'"   onclick="setChannelSessionAttribute('.$attribute.','.$channel->id.','.$url.')" >
                                            <img src="'.url('/').'/uploads/channel_image/'.$channel->channel_image.'" alt="" />
                                            <h2>'.$channel->channel_name.'</h2>
                                            <span class="coming-soon-section">Coming soon</span>
                                        </a>
                                    </div>'; 
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </section>
                <!-- page users view end -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function setChannelSessionAttribute(attribute,sessionValue,channel_url){
            var token    = "{{csrf_token()}}";
            $.ajax({
                url: "{{url('/')}}/set_session_attribute",
                type: 'post',
                data: {attribute:attribute,sessionValue:sessionValue,_token:token},
                success: function(data){
                   //location.reload();
                   window.location.href = channel_url;

                }
            });
        } 
    </script>
    <!-- END: Content-->
    @endsection

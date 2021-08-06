@extends('front.layout.dashboard-master')    
@section('main_content')
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="preview-ad-section ad-prive-details-bx-main">
            <div class="breadcrem-section">
                <h2><i class="fa fa-twitter" title="Twitter"></i>Twitter Ad Details</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="{{url('/')}}/user/dashboard">Home <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="{{url('/')}}/user/campaign">Twitter </a></li>                       
                    </ul>                </div>
                <div class="clearfix"></div>               
            </div>
			<div class="ad-prive-bx ad-prive-details-bx">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true"> <span>Ads</span> Information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="true"><span>Ads</span> Media</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-just" role="tab" aria-controls="messages-just" aria-selected="false"><span>Ads</span> Budget</a> 
							</li>						
						</ul>
						


						<!-- Tab panes -->
						<div class="tab-content pt-1">
							<div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												User Name
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_user'])? $data['get_user']['name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Email
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_user'])? $data['get_user']['email']: '-'; ?>
												
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Mobile Number
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_user'])? $data['get_user']['contact_number']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Business Name
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_business'])? $data['get_business']['business_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Camping Name
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_name'])? $data['campaign_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Campgain target
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_target'])? $data['campaign_target']: '-'; 
												$web = $app = 'hide';
													if($data['campaign_target'] != 'Visit Website'){
														$web = 'hide';
													}else if($data['campaign_target'] != 'App install'){
														$app = 'hide';
													}else{
														$web = $app = '';
													}
												?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $web; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												Website Url 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['website'])? $data['website']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $app; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												App Name 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['app_name'])? $data['app_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $app; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												Android Link 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['android_url'])? $data['android_url']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $app; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												iOS Link 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['ios_url'])? $data['ios_url']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Upload Type
											</div>
											<div class="info-main-content">
												<?php echo isset($data['upload_type'])? $data['upload_type']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>					
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Heading
											</div>
											<div class="info-main-content">
												<?php echo isset($data['heading'])? $data['heading']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<?php if($data['website_url']!=""){ ?>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Website Link
											</div>
											<div class="info-main-content">
												<?php echo isset($data['website_url'])? $data['website_url']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								<?php } ?>
									<?php if($data['call_to_action']!=""){ ?>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Call to action Tap
											</div>
											<div class="info-main-content">
												<?php echo isset($data['call_to_action'])? $data['call_to_action']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<?php } ?>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Gender
											</div>
											<div class="info-main-content">
												<?php echo isset($data['gender'])? $data['gender']: '-'; ?>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Age
											</div>
											<div class="info-main-content">
												<?php echo isset($data['age'])? $data['age']: '-'; ?>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Area of target audience
											</div>
											<div class="info-main-content">
												<?php echo $data['campaign_target_area']; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>									
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Start Date
											</div>
											<div class="info-main-content">
												<?php echo isset($data['start_date'])? $data['start_date'] : '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												End Date
											</div>
											<div class="info-main-content">
												<?php echo isset($data['end_date'])? $data['end_date']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Budget
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_budget'])? "SAR ".number_format($data['campaign_budget'],2): '-'; ?> 
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Budget - Daily / Life Time
											</div>
											<div class="info-main-content">
												<?php $campaign_budget_type =  isset($data['campaign_budget_type'])? $data['campaign_budget_type']: '-'; 
												if($campaign_budget_type == '1'){
													echo "Daily";
												}else{
													echo "Lifetime";
												}
												
												?> 
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="row textarea-content-section">
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												What's Happening
											</div>
											<div class="info-main-content">
												<?php echo isset($data['post_message'])? $data['post_message']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Note
											</div>
											<div class="info-main-content">
												<?php echo isset($data['note'])? $data['note']: '-'; ?>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
								<div class="details-uploaded-section">								
									<div class="info-main-section">
										<div class="info-main-header">
											Uploaded <?php if($data['upload_type']=='video'){
														echo 'Video'; 
													 }else{
													  	echo 'Image'; 
													 } ?>
										</div>
										<div class="info-main-content">
											<?php if($data['preview_type']=="carousel" && isset($data['campaign_media_croped'])){ 
												foreach($data['campaign_media_croped'] as $croppedMedia){
													if($data['upload_type']=='video'){ ?>
														<div class="uploaded-img-main">
															<div class="uploaded-img">
																<video id="ad_video" style="background-color: black; object-fit: cover;height:570px; width:296px;"  loop playsinline muted >
																	<source src="<?php echo $croppedMedia; ?>" id="video_here" type="video/mp4">
																</video>  
															</div>
															Original Video 
															<a href="<?php echo $croppedMedia; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
														</div>
													<?php }else{ ?>

														<div class="uploaded-img-main">
															<div class="uploaded-img">
																<img id="original_file_display" src="<?php echo $croppedMedia; ?>">
															</div>
															Original
															<a href="<?php echo $croppedMedia; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
														</div>


													<?php }
												}
											 }else{ ?>

												<?php if($data['upload_type']=='video'){ ?>
												<div class="uploaded-img-main">
													<div class="uploaded-img">
														<video id="ad_video" style="background-color: black; object-fit: cover;height:570px; width:296px;"  loop playsinline muted >
															<source src="<?php echo $data['post_image']; ?>" id="video_here" type="video/mp4">
															<source src="movie.ogg" type="video/ogg">
														</video>  
													</div>
													Original Video 
													<a href="<?php echo $data['post_image']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
												</div>

												<?php }else{ ?>

												<div class="uploaded-img-main">
													<div class="uploaded-img">
														<img id="original_file_display" src="<?php echo $data['original_image']; ?>">
													</div>
													Original
													<a href="<?php echo $data['original_image']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
												</div>
												<div class="uploaded-img-main">
													<div class="uploaded-img">
														<img id="original_file_display" src="<?php echo $data['post_image']; ?>">												
													</div>
													Croped 
													<a href="<?php echo $data['post_image']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
												</div>

												<?php } ?>
												<?php 
												if(isset($data['app_icon']) && $data['app_icon']!=""){ ?>
												<div class="uploaded-img-main">
													<div class="uploaded-img">
														<img id="original_file_display" src="<?php echo $data['app_icon']; ?>">
														App Icon <a href="<?php echo $data['app_icon']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
													</div>
													App Icon
												</div>
												<?php } ?>

											<?php } ?>
										</div>
										<div class="clearfix"></div>
									</div>								
								</div>
							</div>
							<div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
								<div class="estamations-from-bx prive-estamations-calculation">
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Estamated Reach</div>
										 <div class="reach-click"><i class="feather icon-users"></i><?php echo $data['estimated_reach']; ?></div> 
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Sub Budget </div>
										<div class="reach-click subtotal"> SAR <?php echo number_format($data['sub_budget'],2); ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Service fees </div>
										<div class="reach-click "> SAR <?php echo number_format($data['service_amount'],2); ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">VAT 15%</div>
										<div class="reach-click vat_15"> SAR <?php echo number_format($data['vat_amount'],2); ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Total Budget</div>
										<div class="reach-click total_amount"> SAR <?php echo number_format($data['total_budget'],2); ?></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>						
						</div>
					</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="ad-prive-bx preview-ads-mobile twitter-preview-main" id="preview-section-bx">  
		                <div class="mobile-black-bg"></div>
		                <!-- <div class="mobile-top-time-icons-strip">
		                    <div class="mobile-top-time">
		                       17:24 
		                    </div>
		                    <div class="mobile-top-icons">
		                        <span><i class="fas fa-wifi"></i></span>                        
		                        <span><i class="fas fa-signal-alt"></i></span>
		                        <span><i class="fal fa-battery-three-quarters"></i></span>
		                    </div>
		                    <div class="clearfix"></div>
		                </div> -->
		                <!-- <img src="{{url('/')}}/public/assets/images/logo/mobile.png" alt="" class="mobile-bg-img"/> -->
		                <div class="company-user-details">
		                    <div class="company-user-details-icon"> <i class="fa fa-twitter" title="Twitter"></i> </div>
		                    <div class="company-user-details-info">
		                        <div class="company-user-details-head">
		                            Sweply marketing
		                        </div>
		                        <div class="company-user-details-content">
		                        	<?php if($data['post_message']!=""){
		                        		echo $data['post_message'];
		                        	}else{ ?>
		                            	What's Happening ?
		                        	<?php } ?>
		                        </div>
		                    </div>
		                    <div class="clearfix"></div>
		                </div>
		                


		                <?php 
							$sliderStr = "";
							if($data['preview_type']=="carousel" && isset($data['campaign_media_croped'])){
								//$data['campaign_media']
								foreach($data['campaign_media_croped'] as $croppedMedia){
									if($data['media_type'] == "image"){
										$sliderStr .= '<div class="swiper-slide"><img src="'.$croppedMedia.'" alt="" /></div>';
									}else{
										$sliderStr .= '<div class="swiper-slide"><video style="background-color:black;object-fit: cover;width: 100% !important;height:216px !important" loop playsinline muted autoplay><source src="'.$croppedMedia.'" type="video/mp4"><source src="'.$croppedMedia.'" type="video/ogg"></video></div>';
									}
								}
								?>
								<!----------------------------------->
								<div class="slider-img-video-section" >
									<div class="swiper-container images-slider-twitter">
								    	<div class="swiper-wrapper">
								    		<?php echo $sliderStr; ?>
								    	</div>
								    	<!-- Add Pagination -->
								    	<div class="swiper-pagination"></div>
									</div>
								</div>
								<!----------------------------------->
								<?php
							}else{ ?>
								<div class="images-video-section-main">
				                    <div class="add-img-video-section"> 
				                        <?php if($data['upload_type']=='video'){ ?>
					                        <video id="ad_video" style="background-color: black; object-fit: cover;height:250px;width:100%;" loop playsinline muted autoplay>
					                            <source src="<?php echo $data['post_image']; ?>" id="video_here" type="video/mp4">
					                            <source src="#" type="video/ogg">
					                        </video>
				                        <?php }else{ ?>
				                        	<img src="{{$data['post_image']}}" id="ad_image"/>
				                        <?php } ?>                
				                    </div> 
				                    <?php if($data['campaign_target'] != 'App install' ){ ?>
				                    <div class="preview-bottom-heading-section">
				                        <div class="preview-bottom-heading">
				                            <?php echo $data['heading']; ?>
				                        </div>
				                        <div class="preview-bottom-heading-website">
				                            <i class="fas fa-link"></i> <span id="weburl"><?php echo $data['website_url']; ?></span>
				                        </div>                
				                    </div>
				                    <?php }else if($data['campaign_target'] == 'App install'){ ?>               
				                    <div class="app-add-prive-main app-sec-preview">
				                        <div class="app-add-prive">
				                            <div class="app-add-icon-txt"> 
				                                <div class="app-add-icon">
				                                    <img src="{{url('/')}}/public/assets/images/logo/app-icon.png" id="app-ico">
				                                </div>                           
				                                <div class="app-add-icon-txt-section">
				                                    <div class="app-add-icon-txt-head">
				                                        {{$data['app_name']}}
				                                    </div>
				                                    <div class="app-add-icon-txt-headline">
				                                    <i class="fas fa-star active-star"></i>
				                                    <i class="fas fa-star active-star"></i>
				                                    <i class="fas fa-star active-star"></i>
				                                    <i class="fas fa-star active-star"></i>
				                                    <i class="fas fa-star"></i> 75.8K reviews
				                                    </div>
				                                    <div class="app-add-icon-txt-headline">
				                                        Free . Finance
				                                    </div>
				                                </div>
				                                <div class="clearfix"></div>
				                            </div>
				                            <div class="app-add-install-btn" style="text-align:center;">
				                                {{$data['call_to_action']}}
				                            </div>
				                            <div class="clearfix"></div>
				                        </div>
				                    </div>
				                	<?php } ?>
		                		</div>
							<?php } ?>

							<div class="icon-section-block-messages">
			                    <div class="icon-section-chat-block">
			                        <i class="fal fa-comment"></i> 216
			                    </div>
			                    <div class="icon-section-chat-block">
			                        <i class="fal fa-retweet"></i> 347
			                    </div>
			                    <div class="icon-section-chat-block">
			                        <i class="fal fa-heart"></i> 3989
			                    </div>
			                    <div class="icon-section-chat-block">
			                        <i class="fal fa-sign-out"></i> 420
			                    </div>
			                </div>
			                <div class="promoted-section-ad">
			                    <i class="fas fa-external-link-square"></i> Promoted
			                </div>

		            </div>
					</div>

				</div>
			</div>			
		</div>
	</div>
</div>
    @endsection

<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('.company-user-details-content').html($('.company-user-details-content').html().replace(/(@\S+)/, '<span style="color: blue">$1</span>'));
 //        $('.company-user-details-content').html($('.company-user-details-content').html().replace(/(#\S+)/, '<span style="color: blue">$1</span>'));
	// });
</script>


<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiper.min.css">
<!-- Swiper JS -->
<script src="{{url('/')}}/public/assets/js/swiper.min.js"></script>
<script>
    var swiper;

    setTimeout(function(){ initSlder(); }, 4000);

    function initSlder(){
        swiper = new Swiper('.images-slider-twitter', {
          slidesPerView: 1,
          spaceBetween: 1,
          centeredSlides: true,  
          loop:true, 
          //slidesPerView: 'auto'
          //freeMode: true,       
        });   
        console.log('slide started');
    }
   </script>
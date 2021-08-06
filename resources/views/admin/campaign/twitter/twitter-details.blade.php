@extends('admin.layout.master')    
@section('main_content')
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="preview-ad-section ad-prive-details-bx-main">
            <div class="breadcrem-section">
                <h2>Twitter Ad Details</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="{{url('/')}}/admin/dashboard">Home <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="{{url('/')}}/admin/campaign">Twitter </a></li>                       
                    </ul>                </div>
                <div class="clearfix"></div>               
            </div>
			<div class="ad-prive-bx ad-prive-details-bx">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">Ads Information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="true">Ads Media</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-just" role="tab" aria-controls="messages-just" aria-selected="false">Ads Budget</a> 
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
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Brand Name
											</div>
											<div class="info-main-content">
												
												<?php echo isset($data['brand_name'])? $data['brand_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>									
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
												Caption
											</div>
											<div class="info-main-content">
												<?php echo isset($data['caption'])? $data['caption']: '-'; ?>
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

											<?php if($data['upload_type']=='video'){ ?>
											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<!-- <img id="original_file_display" src="<?php //echo $data['post_image']; ?>"> -->
													<video id="ad_video" style="background-color:black;object-fit: cover;" loop playsinline muted autoplay>
                        								<source src="<?php echo $data['post_image']; ?>" id="video_here" type="video/mp4">
                        								<source src="movie.ogg" type="video/ogg">
                    								</video>  
												</div>
												Original Video 
												<!-- <button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button> -->
												<a href="<?php echo $data['post_image']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>

											</div>
											
											<?php }else{ ?>

											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<img id="original_file_display" src="<?php echo $data['original_image']; ?>">
												</div>
												Original 
												<!-- <button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button> -->
												<a href="<?php echo $data['original_image']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>
											</div>
											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<img id="original_file_display" src="<?php echo $data['post_image']; ?>">												
												</div>
												Croped 
												<a href="<?php echo $data['post_image']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>

												<!-- <button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button> -->
											</div>

											<?php } ?>
											<?php 
											if(isset($data['app_icon']) && $data['app_icon']!=""){ ?>
											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<img id="original_file_display" src="<?php echo $data['app_icon']; ?>">
													<!-- <button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button> -->
													App Icon <a href="<?php echo $data['app_icon']; ?>"  class="uploaded-img-download"  download><i class="fal fa-download"></i></a>

												</div>
												App Icon
											</div>
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
						<div class="ad-prive-bx preview-ads-mobile" id="preview-section-bx">  

		<!-------------------------------------------------------------->
		<?php //if(isset($_REQUEST['debug'])){ ?>
                <div class="mobile-black-bg"></div>
                <div class="mobile-top-time-icons-strip">
                    <div class="mobile-top-time"> 17:24 </div>
                    <div class="mobile-top-icons">
                        <span><i class="fas fa-wifi"></i></span>                        
                        <span><i class="fas fa-signal-alt"></i></span>
                        <span><i class="fal fa-battery-three-quarters"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <img src="{{url('/')}}/public/assets/images/logo/mobile.png" alt="" class="mobile-bg-img">
                <div class="brand-name-section-main">                    
                    <div class="brand-name-section">
                        <span><?php echo isset($data['brand_name'])? $data['brand_name']: '-'; ?></span>
                    </div>
                    <div class="clearfix"></div>
                     <div class="heading-section">
                        <span><?php echo isset($data['heading'])? $data['heading']: '-'; ?></span>
                    </div> 
                    <div class="menu-dots-section">
                        <span><i class="fal fa-ellipsis-v"></i></span>
                    </div>                  
                </div>   
                <div class="add-img-video-section"> 
                	<?php if($data['upload_type']=="image"){ ?>
                    <img src="<?php echo $data['post_image']; ?>" alt="" id="ad_image">
                <?php }else{ ?>
                    <video id="ad_video" style="background-color: black; object-fit: cover; height:570px; width:296px;" loop="" playsinline="" muted="" autoplay="">
                        <source src="<?php echo $data['post_image']; ?>" id="video_here" type="video/mp4">
                        <source src="#" type="video/ogg">
                    </video> 
                <?php } ?>               
                </div>
                <?php if($data['caption']!=""){ ?>
	                <div class="caption-txt-section-block"  >
	                   <?php echo isset($data['caption'])? $data['caption']: '-'; ?>
	                </div>
                <?php } ?>
                <?php if(($data['campaign_target']!="App install" ||  $data['campaign_target']!="App visit") &&  $data['call_to_action']!=""){ ?>
                <div class="add-prive-btn website-sec-preview" >
                    <span class="btn-add-prive"><?php echo isset($data['call_to_action'])? $data['call_to_action']: '-'; ?></span>
                </div> 
            	<?php } ?>

            <?php if($data['app_name']!="" && $data['app_icon']!=""){ ?>
                <!------App Section ------>
                <div class="app-add-prive-main app-sec-preview" >
                    <div class="app-add-prive-btn">
                        <?php echo isset($data['call_to_action'])? $data['call_to_action']: '-'; ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="app-add-prive">
                        <div class="app-add-icon-txt">
                            <div class="app-add-icon">
                                <img src="<?php echo $data['app_icon']; ?>" id="app-ico">
                            </div>
                            <div class="app-add-icon-txt-section">
                                <div class="app-add-icon-txt-head">
									<?php echo isset($data['app_name'])? $data['app_name']: '-'; ?>
								</div>
                                <div class="app-add-icon-txt-headline">
                                    <?php echo isset($data['heading'])? $data['heading']: '-'; ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="app-add-install-btn">
                            <?php echo ($data['campaign_target']=="App install")? 'Install':'Visit'; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php }

        	/*}else{ ?>
				<img src="<?php echo $data['screen_shot']; ?>" alt="" />
            <?php }*/ ?>
<!-------------------------------------------------------------->








						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
    @endsection


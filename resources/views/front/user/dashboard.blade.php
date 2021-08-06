@extends('front.layout.dashboard-master')    

@section('main_content')
<!-- BEGIN: Content-->
<?php if(!isset($userData)){$userData = []; } ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row ml--5 mr--5">
                        <div class="col-lg-6 col-md-12 col-sm-12 pl-5 pr-5">
                            <div style="height: 229px;min-height: auto;" class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center dash-name-section">
                                       
                                        <img src="{{url('/')}}/public/assets/images/logo/decore-right.png" class="img-right" alt="
                                           card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0 bck-white">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">Hello <?php echo $userData["name"]; ?>,</h1>
                                            <!-- <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p> -->
                                            <?php 
                                                $businessArr = [];
                                                if(Session::has('BUSINESSID')){
                                                    $businessArr = getBusinessDetails(Session::get('BUSINESSID'));
                                                    echo '<p><strong>Active Business : </strong>'.$businessArr['business_name'].'</p>';
                                                }
                                            ?>
                                            
                                            
                                            <!-- <button class="btn btn-info" onclick="setBusinessDashboard(1);">Business change</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 pl-5 pr-5">
                            <div class="card wallet-bx">
                                <div class="wallet-balance-bx">
                                    <div class="wallet-sub-bx">
                                    <?php
                                    $walletData = array();
                                    $walletData['balance'] = 0;
                                    $walletData = getUserWalletBalance($userData["id"]); ?>    
                                        <div class="sar-amt-img">                   
                                            <img src="{{url('/')}}/public/assets/images/logo/wallet-balance.svg" alt="">                           
                                        </div>
                                        <div class="sar-amt-main">
                                            <div class="wallet-amt">SAR <?php echo number_format($walletData['balance'],2); ?></div>
                                            <p class="mb-0">Wallet Balance</p>
                                        </div>
                                    </div>                       
                                </div>                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12 pl-5 pr-5">
                            <div class="card wallet-bx">
                                <div class="wallet-sub-bx manager-information">
                                    <div class="wallet-icon-bx">
                                       <img src="{{url('/')}}/public/assets/images/logo/avatar-s-1-old.jpg" alt=""/>
                                    </div>  
                                    <div class="sar-amt-main">                                  
                                        <div class="wallet-amt">Nikhil Pawar</div>
                                        <div class="wallet-name">Account Manager</div>
                                        <p class="">
                                            <a href="tel:+966 555154580">+966 555154580</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="help-btn-bx">
                                    <a style="width: 100%;" href="#"
                                        class="btn btn-primary shadow waves-effect waves-light mb-2">Hi ! Need some
                                        help? </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml--5 mr--5">
                        <div class="col-md-6 col-12 pl-5 pr-5">
                            <div style="height: 425px;" class="card graph-section-block avg-traffic-graph">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div
                                                class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Traffic</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">View Details <i
                                                        class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div
                                                class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-0"
                                                        type="button" id="dropdownItem5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Campaign
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Eid Campaign</a>
                                                        <a class="dropdown-item" href="#">Summer Offers</a>
                                                        <a class="dropdown-item" href="#">Free Delivery</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart"></div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <p class="mb-0">Impressions: 100000</p>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                        aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">clicks: 100K</p>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                        aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Engagement: 100000</p>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                        aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Results: 50%</p>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 pl-5 pr-5">
                            <div style="height: 425px;" class="card graph-section-block">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Campaign Dashboard </h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button"
                                            id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">23</h1>
                                                <small>Total Campaigns</small>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">Active Campaign</p>
                                                <span class="font-large-1">4</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Finished Campaign</p>
                                                <span class="font-large-1">14</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Review Campaign</p>
                                                <span class="font-large-1">5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height ml--5 mr--5">
                        <div class="col-lg-4 col-12 pl-5 pr-5">
                            <div class="card graph-section-block card-graph-fixed-height">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4>Campaigns History</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button"
                                            id="dropdownItem2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="product-order-chart"></div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                                                <span class="text-bold-600 ml-50">Snapchat</span>
                                            </div>
                                            <div class="product-result">
                                                <span>23043</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                                                <span class="text-bold-600 ml-50">Twitter</span>
                                            </div>
                                            <div class="product-result">
                                                <span>14658</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                                                <span class="text-bold-600 ml-50">Instagram</span>
                                            </div>
                                            <div class="product-result">
                                                <span>4758</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 pl-5 pr-5">
                            <div class="card graph-section-block card-graph-fixed-height">
                                <div class="card-header d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title">Total Spendings</h4>
                                        <p class="text-muted mt-25 mb-0">Last 6 months</p>
                                    </div>
                                    <p class="mb-0"><i
                                            class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i>
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0">
                                        <div id="sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 pl-5 pr-5">
                            <div class="card card-graph-fixed-height card-graph-fixed-height-scroll dash-noti-height-remove">
                                <div class="card-header">
                                    <h4 class="card-title">Notifications</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Campaigns Started</p>
                                                    <span class="font-small-3">campaign back to School started with
                                                        total budget 1000 SAR</span>
                                                </div>
                                                <small class="text-muted">25 mins ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Campaigns Report March</p>
                                                    <span class="font-small-3">March campaigns report ready to be
                                                        download in report section</span>
                                                </div>
                                                <small class="text-muted">15 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Campaign Progress</p>
                                                    <span class="font-small-3">Campaign clothing in progress , you can
                                                        check real time status in report section </span>
                                                </div>
                                                <small class="text-muted">28 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-danger">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Account Manager</p>
                                                    <span class="font-small-3">Account manager - Ibrahim Mutahar</span>
                                                </div>
                                                <small class="text-muted">20 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Campaign Ended</p>
                                                    <span class="font-small-3">Campaign Eid - 2020 Ended </span>
                                                </div>
                                                <small class="text-muted">25 days ago</small>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml--5 mr--5">
                        <div class="col-12 pl-5 pr-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Campaign Summery</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr style="background: #f4f4f4;">
                                                    <th>Campaign</th>
                                                    <th>Status</th>
                                                    <th>Platform</th>
                                                    <th>Payment Method</th>
                                                    <th>Budget</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#879985</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td>Facebook</td>
                                                    <td>Bank Transfer</td>
                                                    <td>
                                                        <span>234 SAR</span>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#156897</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-warning mr-50"></i>Pending
                                                    </td>
                                                    <td>Twitter</td>
                                                    <td>Credit Card</td>
                                                    <td>
                                                        <span>234 SAR</span>

                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#568975</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td>Snapchat</td>
                                                    <td>Wallet</td>
                                                    <td>
                                                        <span>234 SAR</span>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#245689</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-danger mr-50"></i>Canceled
                                                    </td>
                                                    <td>Tiktok</td>
                                                    <td>Wallet</td>
                                                    <td>
                                                        <span>234 SAR</span>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <!-- <div class="drag-target"></div> -->
        <script src="{{url('/')}}/public/assets/js/scripts/pages/dashboard-analytics.js"></script>


<?php 
if(Session::get('SHOW-POPUP')){ 
    $isShowPopup = 0;
    $isShowPopup = Session::get('SHOW-POPUP');
    if($isShowPopup==1){ ?>
        <script type="text/javascript">
        $(document).ready(function(){
             $('[data-target="#multi-business-select"]').attr('data-backdrop','static');
             $('[data-target="#multi-business-select"]').trigger('click');
        });
        </script>
        <?php 
    }
    Session::put('SHOW-POPUP','0');
} ?>
@endsection

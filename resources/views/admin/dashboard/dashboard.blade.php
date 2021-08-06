@extends('admin.layout.master')    

@section('main_content')
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics" class="six-box-section">
                    <div class="row ml--5 mr--5">

                        <div class="col-lg-2 col-sm-6 col-12 dashboard-analytics-col pl-5 pr-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                        <h3 class="text-bold-500 mb-0">5000</h3>
                                        <p>Total Campaigns</p>
                                    </div>
                                    <div class="avatar yellow-bck p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fal fa-bullhorn"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12 dashboard-analytics-col pl-5 pr-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                        <h3 class="text-bold-500 mb-0">500</h3>
                                        <p>Customer</p>
                                    </div>
                                    <div class="avatar yellow-bck p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fal fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12 dashboard-analytics-col pl-5 pr-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                        <h3 class="text-bold-500 mb-0">150</h3>
                                        <p>Active Campaigns</p>
                                    </div>
                                    <div class="avatar yellow-bck p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fal fa-bullhorn"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12 dashboard-analytics-col pl-5 pr-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>

                                        <h3 class="text-bold-500 mb-0">SAR 50000</h3>
                                        <p>Sale</p>
                                    </div>
                                    <div class="avatar yellow-bck p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-cpu"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12 dashboard-analytics-col pl-5 pr-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>

                                        <h3 class="text-bold-500 mb-0">45</h3>
                                        <p>Prime Customer</p>
                                    </div>
                                    <div class="avatar yellow-bck p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fal fa-crown"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12 dashboard-analytics-col pl-5 pr-5">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>

                                        <h3 class="text-bold-500 mb-0">SAR 25000</h3>
                                        <p>Profit</p>
                                    </div>
                                    <div class="avatar yellow-bck p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fal fa-sack-dollar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Dashboard Analytics end -->

                <div class="content-body">
                    <!-- apex charts section start -->
                    <section id="apexchart" class="card-height-manage">
                        <div class="row ml--5 mr--5">
                            <!-- Line Chart -->
                            <div class="col-lg-4 col-md-12 apexchart-50 pl-5 pr-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Last 10 Days Income</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bar Chart -->
                            <div class="col-lg-4 col-md-12 apexchart-50 pl-5 pr-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Last 12 Month Transition</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="bar-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pie Chart -->
                            <div class="col-lg-4 col-md-12 apexchart-50 pl-5 pr-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Total Sale</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="pie-chart" class="mx-auto"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Donut Chart -->
                            <div class="col-lg-4 col-md-12 apexchart-50 pl-5 pr-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Collection Amount </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="donut-chart" class="mx-auto"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 apexchart-50 pl-5 pr-5">                                
                                <section id="chartjs-charts">      
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Top 5 Campaigns</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pl-0">
                                                <div class="height-300">
                                                    <canvas id="bar-chart-1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>                         
                            </div>
                            <!--<div class="col-lg-4 col-12 apexchart-50 pl-5 pr-5">
                                <div class="card recent-booking-box">
                                    <div class="card-header">
                                        <h4 class="card-title">Upcoming Campaigns</h4>
                                        <h6><a href="#">See All</a> </h6>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="activity-timeline timeline-left list-unstyled">
                                                <li>
                                                    <div class="timeline-icon bg-primary">
                                                    <i class="fal fa-bullhorn"></i>
                                                    </div>
                                                    <div class="timeline-info">
                                                        <p class="font-weight-bold mb-0">Ibrahim Mutahar</p>                                                   
                                                        <span class="font-small-3"><span>Campaigns Type :</span> Twitter</span>
                                                    </div>
                                                    <small class="text-muted">02 April 2021 to 05 April 2021 (3Days)</small>
                                                </li>
                                                <li>
                                                    <div class="timeline-icon bg-primary">
                                                    <i class="fal fa-bullhorn"></i>
                                                    </div>
                                                    <div class="timeline-info">
                                                        <p class="font-weight-bold mb-0">Ibrahim Mutahar</p>                                                   
                                                        <span class="font-small-3"><span>Campaigns Type :</span> Twitter</span>
                                                    </div>
                                                    <small class="text-muted">02 April 2021 to 05 April 2021 (3Days)</small>
                                                </li>
                                                <li>
                                                    <div class="timeline-icon bg-primary">
                                                    <i class="fal fa-bullhorn"></i>
                                                    </div>
                                                    <div class="timeline-info">
                                                        <p class="font-weight-bold mb-0">Ibrahim Mutahar</p>                                                   
                                                        <span class="font-small-3"><span>Campaigns Type :</span> Twitter</span>
                                                    </div>
                                                    <small class="text-muted">02 April 2021 to 05 April 2021 (3Days)</small>
                                                </li>
                                                <li>
                                                    <div class="timeline-icon bg-primary">
                                                    <i class="fal fa-bullhorn"></i>
                                                    </div>
                                                    <div class="timeline-info">
                                                        <p class="font-weight-bold mb-0">Ibrahim Mutahar</p>                                                   
                                                        <span class="font-small-3"><span>Campaigns Type :</span> Twitter</span>
                                                    </div>
                                                    <small class="text-muted">02 April 2021 to 05 April 2021 (3Days)</small>
                                                </li>
                                                <li>
                                                    <div class="timeline-icon bg-primary">
                                                    <i class="fal fa-bullhorn"></i>
                                                    </div>
                                                    <div class="timeline-info">
                                                        <p class="font-weight-bold mb-0">Ibrahim Mutahar</p>                                                   
                                                        <span class="font-small-3"><span>Campaigns Type :</span> Twitter</span>
                                                    </div>
                                                    <small class="text-muted">02 April 2021 to 05 April 2021 (3Days)</small>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>                  
                    </section>
                

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('/')}}/public/assets/vendors/js/charts/apexcharts.min.js"></script>    
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS--> 

    <!-- BEGIN: Page JS-->
    <script src="{{url('/')}}/public/assets/js/scripts/charts/chart-apex.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('/')}}/public/assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS--> 

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('/')}}/public/assets/vendors/js/charts/chart.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('/')}}/public/assets/js/scripts/charts/chart-chartjs.js"></script>

    @endsection



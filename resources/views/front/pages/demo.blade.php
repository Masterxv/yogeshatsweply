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
                <div class="card all-side-padding">
                    <!-- page users view start -->
                    <section class="page-users-view">
                    <div class="wallet-main-width twitter-charge-user-section buy-twitter-credits-main">
                        <div class="buy-twitter-title-bx">
                        <h2>Buy twitter credits</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="row ml--5 mr--5">
                            <div class="col-sm-3 col-md-3 col-lg-3 ">
                                <div class="wallet-balance-bx wallet-balance-section-main">
                                    <div class="wallet-sub-bx">
                                        <div class="sar-amt-img">
                                            <img src="{{url('/')}}/public/assets/images/logo/digital-campaign.svg" alt=""/>
                                        </div>
                                        <div class="sar-amt-main">
                                            <div class="wallet-amt">Start your digital campaign in all platforms abc  </div>
                                            <a data-toggle="modal" data-target="#inlineForm" class="buy-twitter-credit">Buy Now <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <span class="coming-soon-section">Coming soon</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 ">
                                <div class="wallet-balance-bx wallet-balance-section-main">
                                    <div class="wallet-sub-bx">
                                        <div class="sar-amt-img">
                                            <img src="{{url('/')}}/public/assets/images/logo/charge-your-twitter-credits.svg" alt=""/>
                                        </div>
                                        <div class="sar-amt-main">
                                            <div class="wallet-amt">Charge your Twitter Credits  </div>
                                            <a href="#" class="buy-twitter-credit">Buy Now <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                        <span class="coming-soon-section">Coming soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </section>
                    <!-- page users view end -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="modal fade modal-padding-change buy-twitter-credits-modal" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Buy twitter credits</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                    <div class="modal-body">
                        <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group ">
                                <label for="campaign_budget">Twitter Credit </label>
                                <input type="text" placeholder="Enter twitter credit" class="form-control" >
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group bud-sar-padding">
                                <label for="campaign_budget">Amount</label>
                                <input type="text" placeholder="Enter twitter credit" class="form-control" >
                                <span class="budget-sar">SAR</span>
                            </div>
                        </div>
                        </div>

                        <div class="estamations-from-bx">

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Sub Budget </div>
                                <div class="reach-click subtotal"> SAR 0.00</div>
                                <input type="hidden" name="sub_budget" value="0">
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Service fees </div>
                                <div class="reach-click service_amount"> SAR 0.00</div>
                                <input type="hidden" name="service_amount" value="0">
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">VAT 15%</div>
                                <div class="reach-click vat_15"> SAR 0.00</div>
                                <input type="hidden" name="vat_amount" value="0">
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx bold-total-amt">
                                <div class="reach-people">Total Budget</div>
                                <div class="reach-click total_amount"> SAR 0.00</div>
                                <input type="hidden" name="total_budget" value="0">
                                <div class="clearfix"></div>
                                <input type="hidden" class="payment-method" name="payment_method">
                            </div>
                        </div>


                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary validate-frm">Submit</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>

    @endsection

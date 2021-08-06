@extends('front.layout.dashboard-master')    
@section('main_content')
     <!-- BEGIN: Content-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">        
                    <div class="wallet-main-width online-payment-bx save-card-section">                
                    <div class="wallet-balance-bx">
                        <a href="#">
                        <div class="wallet-sub-bx">     
                            <div class="bank-card-logo"><img src="{{url('/')}}/public/assets/images/logo/axis-bank-logo.png" alt=""/> </div>                     
                           <div class="bank-name">Axis Bank</div>       
                           <div class="bank-card-no">5540 XXXX XXXX 2458</div>                     
                            <div class="card-exp-date">24/2027</div>      
                            <div class="bard-card"><img src="{{url('/')}}/public/assets/images/logo/master-card.png" alt=""/></div>           
                            <div class="card-dlt-btn"><i class="feather icon-trash-2"></i></div>           
                        </div> 
                    </a>                      
                    </div>
                    <div class="wallet-balance-bx">
                        <a href="#">
                        <div class="wallet-sub-bx">     
                            <div class="bank-card-logo"><img src="{{url('/')}}/public/assets/images/logo/bank-1.png" alt=""/> </div>                     
                           <div class="bank-name">Bank Al Rajihi</div>       
                           <div class="bank-card-no">5540 XXXX XXXX 2458</div>                     
                            <div class="card-exp-date">14/2026</div>      
                            <div class="bard-card"><img src="{{url('/')}}/public/assets/images/logo/master-card.png" alt=""/></div>           
                            <div class="card-dlt-btn"><i class="feather icon-trash-2"></i></div>           
                        </div> 
                    </a>                      
                    </div>      
                    
                    <!-- <div style="text-align: center; " class="wallet-balance-bx add-card-bank-bx">
                        <a href="#">
                        <div class="wallet-sub-bx">     
                            <i class="feather icon-plus-circle"></i>
                         <div class="add-new-bank">Add New Bank</div>          
                        </div> 
                    </a>                      
                    </div>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection


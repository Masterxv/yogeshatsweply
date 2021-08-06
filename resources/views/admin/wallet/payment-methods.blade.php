@extends('front.layout.dashboard-master')    
@section('main_content')
     <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">        
                    <div class="wallet-main-width online-payment-bx">
                    <div class="wallet-balance-bx">
                        <a href="#">
                            <div class="wallet-sub-bx">                          
                                <img src="{{url('/')}}/public/assets/images/logo/online-payment.svg" alt=""/>                           
                                <div class="wallet-amt">Online payment </div>                            
                            </div> 
                        </a>                      
                    </div>                
                    <div class="wallet-balance-bx">
                        <a href="{{url('/')}}/user/payment-cards">
                        <div class="wallet-sub-bx">                          
                            <img src="{{url('/')}}/public/assets/images/logo/online-payment.svg" alt=""/>                           
                            <div class="wallet-amt">Credit Card saved</div>                            
                        </div> 
                    </a>                      
                    </div>
                    <div class="wallet-balance-bx">
                        <a data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="wallet-sub-bx">                       
                            <img src="{{url('/')}}/public/assets/images/logo/bank-transfer.svg" alt=""/>                           
                            <div class="wallet-amt">Bank Transfer Details</div>                            
                        </div> 
                    </a>                             
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- Modal -->
         <div class="modal fade bank-transfers-pop-up bank-details modal-padding-change" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Bank Details </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="deatils-bank-bx">
                            <div class="bank-img">
                                <img src="{{url('/')}}/public/assets/images/logo/bank-1.png" alt=""/>
                            </div>
                           <div class="bank-deatils-axis">
                            <div class="bank-name-deatils-bx">
                                <div class="bank-name-title">Bank Name :</div>
                                <div class="bank-name-proper">Bank Al Rajihi</div>
                            </div>
                            <div class="bank-name-deatils-bx">
                                <div class="bank-name-title">Account Number :</div>
                                <div class="bank-name-proper">912010022689202</div>
                            </div>
                            <div class="bank-name-deatils-bx">
                                <div class="bank-name-title">Country :</div>
                                <div class="bank-name-proper">Saudi Arabia</div>
                            </div>                            
                           </div>
                        </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="deatils-bank-bx border-none-right">
                            <div class="bank-img">
                                <img src="{{url('/')}}/public/assets/images/logo/bank-2.png" alt=""/>
                            </div>
                           <div class="bank-deatils-axis">
                            <div class="bank-name-deatils-bx">
                                <div class="bank-name-title">Bank Name :</div>
                                <div class="bank-name-proper">Bank Al Bilad</div>
                            </div>
                            <div class="bank-name-deatils-bx">
                                <div class="bank-name-title">Account Number :</div>
                                <div class="bank-name-proper">912010022689202</div>
                            </div>
                            <div class="bank-name-deatils-bx">
                                <div class="bank-name-title">Country :</div>
                                <div class="bank-name-proper">Saudi Arabia</div>
                            </div>                            
                           </div>
                        </div>
                        </div>                       
                       </div>



                    <div class="recpit-alrt">*NOTE: please upload PDF transfer details after transferring so we can quickly charge your wallet</div>
                       <div class="upload-recpit-bx">                      
                            <div class="form-group">
                                <label for="emailAddress1">Bank Transaction Receipt</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose Receipt file</label>
                                </div>
                            </div>                       
                       </div>

                       <div class="transfers-btn receipt-submit">
                       <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                    </div>
                  
                </div>
            </div>
        </div>

    @endsection


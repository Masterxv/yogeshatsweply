@extends('front.layout.dashboard-master')    
@section('main_content')
<style>
    .hide{display:none;}
</style>
     <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">  
                    <?php 
                    $amountToPay = $paymentMethod = "";
                    if(Session::get('AMOUNTTOPAY')){
                    $amountToPay   = Session::get('AMOUNTTOPAY'); 
                    }
                if(Session::get('PAYMENT-METHOD')){
                    $paymentMethod = Session::get('PAYMENT-METHOD'); 
                    }

                if(\Request::has('payment_amount') && \Request::has('payment-method')){ 
                    Session::put('AMOUNTTOPAY',\Request::get('payment_amount'));
                    Session::put('PAYMENT-METHOD',\Request::get('payment-method'));
                    $amountToPay = \Request::get('payment_amount');
                    $paymentMethod = \Request::get('payment-method');
                }
                ?>       

                <div class="wallet-main-width online-payment-bx">
                    <div class="row ml--5 mr--5">
                        <div class="col-sm-4 col-md-4 col-lg-4 pl-5 pr-5">
                            <div class="wallet-balance-bx">
                                <a href="#">
                                    <div class="wallet-sub-bx">                          
                                        <img src="{{url('/')}}/public/assets/images/logo/online-payment.svg" alt=""/>                           
                                        <div class="wallet-amt">Online payment </div>                            
                                    </div> 
                                </a>                      
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 pl-5 pr-5 hide">
                            <div class="wallet-balance-bx">
                                <a href="{{url('/')}}/user/payment-cards">
                                    <div class="wallet-sub-bx">                          
                                        <img src="{{url('/')}}/public/assets/images/logo/online-payment.svg" alt=""/>                           
                                        <div class="wallet-amt">Credit Card saved</div>
                                    </div> 
                                </a>                      
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 pl-5 pr-5">
                            <div class="wallet-balance-bx">
                                <a data-toggle="modal" data-target="#exampleModalCenter" class="bank-transfer">
                                    <div class="wallet-sub-bx">                       
                                        <img src="{{url('/')}}/public/assets/images/logo/bank-transfer-details.svg" alt=""/>                           
                                        <div class="wallet-amt">Bank Transfer Details</div>
                                    </div> 
                                </a>                             
                            </div>                    
                        </div>
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
                      <form action="{{ url('/')}}/user/payment_by_bank" method="POST" enctype="multipart/form-data" >  
                        @csrf
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Transaction No. </label>					
                                        <input type="text" id="transaction_no"  name="transaction_no" placeholder=" Transaction Number" class="form-control" required />
                                    </div>   
                                </div>  
                                <div class="col-md-6">                                      
                                     <div class="form-group">
                                        <label>Amount </label>					
                                        <input type="text" id="amount"  name="amount" placeholder=" Transaction Amount" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"   required />
                                    </div> 
                                </div> 
                            </div> 
                       </div>
                        <div class="upload-recpit-bx">                      
                            <div class="form-group">
                                <label for="file">Bank Transaction Receipt</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="payment_image" name="payment_image" onchange="showname()" />
                                    <label class="custom-file-label" for="file">Choose Receipt file</label>
                                </div>
                            </div>                       
                       </div>

                       <div class="transfers-btn receipt-submit">
                       <button type="button" onclick='payment_by_bank();' class="btn btn-primary request-now" >Submit</button>
                       <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
                    </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- <body>
            <p>
                <input type="file" id="fileInput" multiple onchange="showname()"/>
            </p>    
        </body> -->


        <script type="text/javascript">

            $(document).ready(function(){
                 $(document).on('click', '.request-now', function(){ 
                    //jQuery('div.loader-section-main').show();
                 });

                <?php if($amountToPay != "" && $paymentMethod=="BANKTRANSFER"){ ?>
                        $('.bank-transfer').trigger('click');
                        $('#amount').val('<?php echo $amountToPay ?>');
                <?php } ?>

            });

            function payment_by_bank(){
            $('.err-msg').remove();
            var transaction_no = $('#transaction_no').val(); 
            var amount = $('#amount').val(); 

            if(transaction_no != '' &&  amount != ''){
                var file_data = $('#payment_image').prop('files')[0]; 
                var token    = "{{csrf_token()}}";

                var form_data = new FormData();   

                form_data.append('payment_image', file_data);
                form_data.append('transaction_no', transaction_no);
                form_data.append('amount', amount);
                form_data.append('_token', token);

                jQuery.ajax({
                    url: "{{url('/')}}/user/payment_by_bank",
                    dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',
                    beforeSend: function () {
                        $('.loader-section-main').show();
                        console.log("Starting...");
                    },
                    complete: function () {
                        $('.loader-section-main').hide();
                        console.log("Complete!");
                    },
                    success: function (data) {

                        if(data != ''){
                            swal("Thank You!", "Your Payment Request has been Submitted!", "success")
                                .then((value) => {
                                    location.href = "{{url('/')}}/user/wallet/";
                            });
                        }else{
                                swal("Oops !", "Something went Wrong", "error")
                            .then((value) => {
                                    //location.href = "{{url('/')}}/user/profile/";
                            });
                        }
                    }
                });  
            }else{
                //swal("Oops !", "Something went Wrong", "error");
                if($('#transaction_no').val()==""){
                    $('#transaction_no').parent().append('<label class="err-msg">Please fill transaction number </label>');
                }
                if($('#amount').val()==""){
                    $('#amount').parent().append('<label class="err-msg">Please fill transaction amount </label>');
                }
                return false;
            }
            //hideLoader();
            $('.loader-section-main').hide();


        }
        function showname () {
              var name = document.getElementById('payment_image'); 
              $('.custom-file-label').text(name.files.item(0).name);
        }

        $('#transaction_no,#amount').keyup(function(){
            $('.err-msg').remove();
        });
 </script>
<?php
//Session::put('AMOUNTTOPAY',"0");
Session::put('PAYMENT-METHOD',"");
?>
    @endsection

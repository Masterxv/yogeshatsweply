@extends('front.layout.dashboard-master')    
@section('main_content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">       
            <div class="content-body">
                <div>   
                @include('flash-message')   
                    <div class="card mb-0 padding-left-right"> 
                        <div class="m-2">
                            <div class="row">
                                <div class="users-list-filter col-6">
                                    <div class="breadcrumb-main-bx">      
                                        <h3>Campaign</h3>
                                        <div class="breadcrumb-wrapper ">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{url('/')}}/user/dashboard">Home</a>
                                                </li>
                                                <li class="breadcrumb-item active">Campaign
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-6">
                                    <div class="search-action-btn">
                                        <div class="filtter-btn">
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Filter 
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                     
                                                        <a class="dropdown-item sort-btn" rel="week" href="#">Week</a>
                                                        <a class="dropdown-item sort-btn" rel="month" href="#">Month</a>
                                                        <a class="dropdown-item sort-btn" rel="year" href="#">Year</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="search-filter-bx">
                                            <div class="search-bar">                               
                                                <input placeholder="Common Search" type="text" class="form-control round" id="myInputTextField">
                                                <div class="form-control-position">
                                                    <i class="feather icon-search px-1"></i>
                                                </div>                                                                   
                                            </div>
                                        </div>
                                        <div class="" style="margin-top: -3px;">
                                            <a href="{{url('/')}}/user/create-ads" class="btn btn-primary add-form-btn btn-add-bussiness" >
                                                <span class="text-nowrap"><span class="table-add-txt">Add Campaign</span><span class="table-add-icon"><i class="fal fa-plus"></i></span></span>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        <div class="position-relative table-responsive">
                            <table class="table b-table data-table">                            
                                <thead role="rowgroup" class="">                                
                                    <tr role="row" class="">
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
                                            <div>Sr.no</div>
                                        </th>
				                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
                                            <div>Channel</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
                                            <div>Campaign</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
                                            <div>Target</div>
                                        </th>
                                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Date</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>Budget</div>
                                        </th>
                                         <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Status</div>
                                        </th>
                                        
                                           <!-- <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Payment Status</div>
                                        </th> -->
                                       
                                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Action</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody role="rowgroup">
                                </tbody>                            
                            </table>
                        </div>
                        <div class="mx-2 mb-2 showing-entries-section">
                            <div class="row">
                                <div class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span class="text-muted">Showing 1 to 10 of 50 entries</span>
                                </div>							
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade text-left defaultSize-modal modal-padding-change" id="payment_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel33">Confirm Payment</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="#" method="POST" id="payment_status">
                <input type="hidden" id="campaign_id" name="campaign_id" />
				@csrf
				<div class="modal-body">
					
                        <div class="form-group">
                            <label>Campaign Name </label>	
                            <div class="form-control" id="campaign_name">New 01</div>	
                            <input type="hidden"  name="campaign_name" />
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Campaign Budget </label>					
                                        <div class="form-control" id="budget">32000</div>	
                                        <input type="hidden"  name="budget" placeholder=" Campaign Budget" class="form-control">
                                    </div>   
                                </div>  
                                <div class="col-md-6">                                      
                                     <div class="form-group">
                                        <label>Wallet Amount </label>
                                        <div class="form-control" id="wallet_amount">5000</div>	
                                         <input type="hidden"   name="wallet_amount" placeholder=" wallet_amount" class="form-control">
                                    </div> 
                                </div> 
                            </div> 
                        </div>   
				</div>
				<div class="modal-footer">
					<!-- <button type="submit" class="btn btn-primary">Submit</button> 
					<button type="button" class="btn btn-primary validate-frm">Submit</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>-->
                    <button type="button" class="btn btn-primary  " onclick="update_payment_status('active');">Confirm</button>
                    <!-- <button type="button" class="btn btn-primary "onclick="update_payment_status('reject');" >Reject</button> -->				
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        /* $('.payment-options').change(function(){
             $('.payment-method').val($(this).val());
         });*/
        var table = $('.data-table').DataTable({
            "bDestroy": true,
            processing: true,
            serverSide: true,
            ajax: {
              url: "{{url('/')}}/user/load-campaign",
              data: function (d) {
                    d.status = $('#status').val(),
                    d.search = $('input[type="search"]').val()
                }
            },
             bAutoWidth: false, 
             "ordering": false,
             "bInfo":false,
             "bLengthChange": false,
             "paging": true,
             "bPaginate": false,
             "pageLength": 15,
            columns: [
                {data: 'id', name: 'id'},
	            {data: 'channel_name', name: 'channel_name',className: 'text-align-center channel-icon'},
                {data: 'campaign_name', name: 'campaign_name'},
                {data: 'campaign_target', name: 'campaign_target',className: 'text-align-center'},
                //{data: 'heading', name: 'heading'},
                {data: 'date', name: 'date',className: 'text-align-center'},
                {data: 'total_budget', name: 'total_budget',className: 'text-align-right'},
                {data: 'status', name: 'status',className: 'text-align-center'},
                //{data: 'payment_status', name: 'payment_status'},
                {data: 'built_action_btns', name: 'built_action_btns',className: 'text-align-center'},
            ]
        });
        
        $('#status').change(function(){
            table.draw();
        });

        oTable = $('.data-table').DataTable();   
        $('#myInputTextField').keyup(function(){
              oTable.search($(this).val()).draw() ;
        })

         $.fn.dataTable.ext.errMode = 'none';

        $('.data-table').on( 'error.dt', function ( e, settings, techNote, message ) {
             console.log( 'An error has been reported by DataTables: ', message );
        } ) ;

        $('.edit-btn').click(function(){
            alert($(this).attr('data-id')); 
        });
    });

	/****** Pay Now  -  Prashant - 15-05-2021 ******/
     function pay_now(budget,wallet_amount,campaign_name,id){
        <?php 
            Session::put('AMOUNTTOPAY','0');
            Session::put('PAYMENT-METHOD','0');
        ?>
         
		/* if(budget < wallet_amount){
            jQuery('#payment_status #campaign_id').val(id);
            jQuery('#payment_status #budget').text(budget);
            jQuery('#payment_status #wallet_amount').text(wallet_amount);
            jQuery('#payment_status #campaign_name').text(campaign_name);
            jQuery('input[name="budget"]').val(budget);
            jQuery('input[name="wallet_amount"]').val(wallet_amount);
            jQuery('input[name="campaign_name"]').val(campaign_name);
           $('#payment_model').modal('show');
		}else{ */
            $('.balance-popup').trigger('click');
            jQuery('#campaign_id').val(id);
            jQuery('input[name="budget"]').val(budget);
            jQuery('input[name="wallet_amount"]').val(wallet_amount);
            jQuery('input[name="campaign_name"]').val(campaign_name);
            $('.campaign-budget').text(budget);
            var paymentAmount = budget;
            var paymentAmountInclWallet = budget;
            if(wallet_amount > 0 ){
                paymentAmountInclWallet = paymentAmountInclWallet-wallet_amount;
            }else{
                $('.payment-method-wallet').hide();
            }
            $('.payment-amount').text(paymentAmount);
            $('.payment-amount-incl-wallet').text(paymentAmountInclWallet);
            $('#amountToPay').val(paymentAmount);
            $('.wallet_amount_opt').text(wallet_amount);

            if(wallet_amount >= paymentAmount ){
                $('button.confirm-payment').hide();
                $('button.direct-payment').show();
                $('.payment-method-sec').hide();
            }else{
                $('button.confirm-payment').show();
                $('button.direct-payment').hide();
            }
	}

    
       /****** Update payment Status  -  Prashant - 15-05-2021 ******/
    function update_payment_status(status){
        $('#balance-modal-section').modal('hide');
        var recordID = jQuery('#payment_status #campaign_id').val();
        
		if(recordID){
            //alert(recordID);
			$.ajax({
	            url:'{{url("/")}}/user/campaign_payment_status',
	            type :'post',
	            data :{ 'id': recordID,'status':status,'_token':'<?php echo csrf_token();?>'},
	            success:function(data)
	            {
	            	if(data != ''){
                    swal("Thank You!", "Campaign Payment Done Successfully!", "success")
                        .then((value) => {
                            location.href = "{{url('/')}}/user/campaign/";
                    });
                }else{
                        swal("Oops !", "Something went Wrong", "error")
                    .then((value) => {
                            //location.href = "{{url('/')}}/user/campaign/";
                    });
                }
	            }
	        });
		}
	}

</script>


<!-----$('.balance-popup').trigger('click');----->
<button type="button" style="display:none;" class=" balance-popup btn btn-primary add-form-btn btn-add-bussiness waves-effect waves-light" data-toggle="modal" data-target="#paymentMethodForm">
    <span class="text-nowrap"><span class="table-add-txt">Pay Balance</span><span class="table-add-icon"><i class="fal fa-plus"></i></span></span>
</button>
<div class="modal fade text-left defaultSize-modal modal-padding-change balance-modal-section" id="paymentMethodForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Select Payment Method</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/')}}/user/payment/" method="GET" id="payment_confirm_popup">
                <input type="hidden" id="campaign_id" name="campaign_id" />
                <!-- @csrf -->
                <input type="hidden" name="payment_amount" id="amountToPay" class="form-control" />
                <div class="modal-body">
                    <div class="form-group">
                        <label>
                            Amount to pay : <span class="campaign-budget">00</span>
                        </label>                    
                        <div class="amount-to-pay-section" style="display:none;">
                            <div class="amount-to-pay-left">
                                <div class="campaign-budget">00</div>
                                <div class="payment-amount-incl-wallet">00</div>

                                <span>Campaign value</span>
                            </div>
                            <div class="amount-to-pay-left  amount-to-pay-right">
                                <div class="payment-amount">00</div>
                                <span>Need to pay</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Choose payment method</label>    
                        <div class="payment-method-section">
                            <div class="audience-gender-bx payment-method-wallet">
                                <div class="gender-chk-bx">
                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                        <input type="checkbox" id="wallet_payment"  value="WALLET">
                                        <span class="vs-checkbox">
                                            <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                            </span>
                                        </span>
                                        <span class=""><span class="checkbox-span"><i class="fal fa-wallet"></i></span> Wallet Balance :<i class="wallet_amount_opt" style="font-weight: 600;color:#399dd6; " >  00</i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="radio-btns payment-method-sec">                                  
                                <div class="radio-btn">
                                    <input type="radio" class="payment-options" id="f-option" name="payment-method" value="BANKTRANSFER">
                                    <label for="f-option"><span><i class="fal fa-university"></i></span>Bank transfer</label>
                                    <div class="check"></div>
                                </div>
                                <div class="radio-btn">
                                    <input type="radio" class="payment-options" id="s-option" name="payment-method" value="ONLINE">
                                    <label for="s-option"><span><i class="fal fa-credit-card"></i></span>Online payment</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <input type="hidden" class="payment-method" name="payment_method" value="BANKTRANSFER" /> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary confirm-payment" >Pay Now</button>
                    <button type="button" class="btn btn-primary direct-payment " onclick="update_payment_status('active');">Confirm</button>
                    <button type="button" class="btn btn-primary cancel-payment" data-dismiss="modal" >Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#wallet_payment").change(function() {
            var wallet_amount = parseFloat(jQuery('input[name="wallet_amount"]').val());
            var amountToPay = parseFloat($('.payment-amount').text());
            var amountToPayInclWallet = parseFloat($('.payment-amount-incl-wallet').text());
            if(wallet_amount<amountToPay){
                if(this.checked){
                    $('#amountToPay').val(amountToPayInclWallet);
                    $('.campaign-budget').text(amountToPayInclWallet);
                }else{
                    $('#amountToPay').val(amountToPay);
                    $('.campaign-budget').text(amountToPay);
                }
            }else{
                $('.payment-method-sec').hide();
            }

        });
    });
</script>

@endsection
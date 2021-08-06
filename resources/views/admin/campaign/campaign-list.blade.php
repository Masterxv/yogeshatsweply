@extends('admin.layout.master')    
@section('main_content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">       
            <div class="content-body">
                <div>   
                @include('flash-message')   
                    <div class="card mb-0  padding-left-right no-add-button"> 
                        <div class="m-2">
                            <div class="row">
                                <div class="users-list-filter col-6">
                                    <div class="breadcrumb-main-bx">      
                                        <h3>Campaign</h3>
                                        <div class="breadcrumb-wrapper ">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{url('/')}}/admin/dashboard">Home</a>
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
                                                    <button class="btn btn-warning dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Filter 
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                     
                                                        <a class="dropdown-item" href="#">Week</a>
                                                        <a class="dropdown-item" href="#">Month</a>
                                                        <a class="dropdown-item" href="#">Year</a>
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
                                        <div class="hide">
                                            <a href="{{url('/')}}/admin/create-ads" class="btn btn-primary add-form-btn btn-add-bussiness" >
                                                <span class="text-nowrap">Add Campaign</span>
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
                                            <div>ID</div>
                                        <!-- </th>
				    <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>Business</div>
                                        </th> -->
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
                                            <div>Ad Channel</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
                                            <div>Campaign</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                            <div>Campaign Target</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                            <div>Heading</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>Budget (SAR)</div>
                                        </th>
				    <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Campaign Status</div>
                                        </th>
                                        <!-- <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>User</div>
                                        </th> -->
                                       
                                        
                                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Payment Status</div>
                                        </th>
                                        
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

<!-- Modal -->
<div class="modal fade text-left defaultSize-modal modal-padding-change" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel33">Change Status</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="#" method="POST" id="campaign_status">
                <input type="hidden" id="campaign_id" name="campaign_id" />
				@csrf
				<div class="modal-body">
					
					
					<div class="form-group">
						
                        <button type="button" class="btn btn-primary  " onclick="update_status('CONFIRM');">CONFIRM</button>
                        <!-- <button type="button" class="btn btn-primary "onclick="update_status('REJECT');" >REJECT</button> -->
                        <button type="button" class="btn btn-primary "onclick="update_status('START');" >START</button>
                        <button type="button" class="btn btn-primary "onclick="update_status('END');" >END</button>
                    </div>
									
				</div>
				<div class="modal-footer">
					<!-- <button type="submit" class="btn btn-primary">Submit</button> 
					<button type="button" class="btn btn-primary validate-frm">Submit</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>-->
					
				</div>
			</form>
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
		 <input type="hidden" id="budget" name="budget" />

 <input type="hidden" id="wallet_amount" name="wallet_amount" />


				@csrf
				<div class="modal-body">
                    <div class="cam-confirm-payment-bx">
                        <div class="pay-cam-bx">
                            <div class="pay-cam-name">  Campaign Name :</div>
                            <div class="pay-cam-details campaign_name">  </div>
                             </div>
                             <div class="pay-cam-bx">
                            <div class="pay-cam-name">Campaign Budget :</div>
                            <div class="pay-cam-details budget">00</div>
                             </div>

                             <div class="pay-cam-bx">
                            <div class="pay-cam-name">Wallet Amount :</div>
                            <div class="pay-cam-details wallet_amount"> 00 </div>
                             </div>
                    </div>
					
                        <!-- <div class="form-group">
                            <label>Campaign Name </label>		
                            <input type="text" id="campaign_name" name="campaign_name" />
                        </div>
                          <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Campaign Budget </label>					
                                        <input type="text" id="budget"  name="budget" placeholder=" Campaign Budget" class="form-control">
                                    </div>   
                                </div>  
                                <div class="col-md-12">                                      
                                     <div class="form-group">
                                        <label>Wallet Amount </label>					
                                        <input type="text" id="wallet_amount"  name="wallet_amount" placeholder=" wallet_amount" class="form-control">
                                    </div> 
                                </div> 
                            </div> 
                        </div> -->
                    
					<!-- <div class="form-group">
						
                        <button type="button" class="btn btn-primary  " onclick="update_payment_status('active');">Confirm</button>
                        <button type="button" class="btn btn-primary "onclick="update_payment_status('reject');" >Reject</button>
                    </div> -->
									
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
        var table = $('.data-table').DataTable({
            "bDestroy": true,
            processing: true,
            serverSide: true,
            ajax: {
              url: "{{url('/')}}/admin/campaign/load-campaign",
              data: function (d) {
                    d.status = $('#status').val(),
                    d.search = $('input[type="search"]').val()
                }
            },
             bAutoWidth: false, 
             "ordering": false,
             "bInfo":true,
             "bLengthChange": false,
             "paging": true,
             "bPaginate": true,
             "pageLength": 15,
            
            columns: [
                {data: 'id', name: 'id'},
	       //{data: 'business_name', name: 'business_name'},

                {data: 'channel_name', name: 'channel_name'},
                {data: 'campaign_name', name: 'campaign_name'},
                {data: 'campaign_target', name: 'campaign_target'},

                {data: 'heading', name: 'heading'},
                {data: 'total_budget', name: 'total_budget'},
	    	    {data: 'status', name: 'status'},
                
                {data: 'payment_status', name: 'payment_status'},
                
                {data: 'built_action_btns', name: 'built_action_btns'},

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
        
         $('.showing-entries-section').addClass('hide');
        
    });
    
    /****** Pay Now  -  Prashant - 15-05-2021 ******/
     function pay_now(budget,wallet_amount,campaign_name,id){
         
		if(budget < wallet_amount){
            jQuery('#payment_status #campaign_id').val(id);
            jQuery('#payment_status .budget').html(budget);
            jQuery('#payment_status .wallet_amount').html(wallet_amount);
            jQuery('#payment_status .campaign_name').html(campaign_name);
           $('#payment_model').modal('show');
		}else{
                swal("Oops !", "Wallet Balance is Low", "error")
                    .then((value) => {
                          //  location.href = "{{url('/')}}/admin/wallet-list/";
                    }); 
        }
	}
     /****** Change Status  -  Prashant - 14-05-2021 ******/
    function edit(recordID){
		if(recordID){
            jQuery('#campaign_status #campaign_id').val(recordID);
           $('#inlineForm').modal('show');
		}
	}
     /****** Update Status  -  Prashant - 14-05-2021 ******/
    function update_status(status){
        $('#inlineForm').modal('hide');
        var recordID = jQuery('#campaign_status #campaign_id').val();
        
		if(recordID){
            //alert(recordID);
			$.ajax({
	            url:'{{url("/")}}/admin/campaign/campaign_status',
	            type :'post',
	            data :{ 'id': recordID,'status':status,'_token':'<?php echo csrf_token();?>'},
	            success:function(data)
	            {
	            	if(data != ''){
                    swal("Thank You!", "Campaign Staus Changed successfully!", "success")
                        .then((value) => {
                            location.href = "{{url('/')}}/admin/campaign/";
                    });
                }else{
                        swal("Oops !", "Something went Wrong", "error")
                    .then((value) => {
                            //location.href = "{{url('/')}}/admin/campaign/";
                    });
                }
	            }
	        });
		}
	}
    
    
      /****** Update payment Status  -  Prashant - 15-05-2021 ******/
    function update_payment_status(status){
        $('#payment_model').modal('hide');
        var recordID = jQuery('#payment_status #campaign_id').val();
        
		if(recordID){
            //alert(recordID);
			$.ajax({
	            url:'{{url("/")}}/admin/campaign/campaign_payment_status',
	            type :'post',
	            data :{ 'id': recordID,'status':status,'_token':'<?php echo csrf_token();?>'},
	            success:function(data)
	            {
	            	if(data != ''){
                    swal("Thank You!", "Campaign Payment Done Successfully!", "success")
                        .then((value) => {
                            location.href = "{{url('/')}}/admin/campaign/";
                    });
                }else{
                        swal("Oops !", "Something went Wrong", "error")
                    .then((value) => {
                            //location.href = "{{url('/')}}/admin/campaign/";
                    });
                }
	            }
	        });
		}
	}


</script>

@endsection
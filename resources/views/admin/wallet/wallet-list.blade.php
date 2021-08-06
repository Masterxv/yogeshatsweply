@extends('admin.layout.master')      

@section('main_content')

    <!-- BEGIN: Content-->

<style>

.hide{display:none!important;}

</style>

    <div class="app-content content">

        <div class="content-overlay"></div>

        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">            

            <div class="content-body">         

                <div class="wallet-main-width">                

                    <div class="wallet-balance-bx hide">

                        <div class="wallet-sub-bx">                       

                            <img src="{{url('/')}}/public/assets/images/logo/wallet-img-2.svg" alt=""/>                           

                            <div class="wallet-amt">SAR {{number_format($walletData['balance'],2)}}</div>

                            <p class="mb-0">Wallet Balance</p>

                        </div>                       

                    </div>



                    <div class="wallet-balance-bx hide">

                        <div class="wallet-sub-bx">

                            <!-- <div class="wallet-icon-bx">

                                <i class="fal fa-charging-station"></i>

                            </div>                             -->



                            <img src="{{url('/')}}/public/assets/images/logo/wallet-img.svg" alt=""/>

                            <a style="width: 100%; color: #fff;" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary shadow waves-effect waves-light mt-2">Charge you wallet </a>

                           

                        </div>

                       

                    </div>

                    <div class="clearfix"></div>

                </div>



                <div class="card mb-0 padding-left-right no-add-button">	

                <div class="m-2">

						<div class="row">

							<div class="users-list-filter col-6">

								<div class="breadcrumb-main-bx">      

			                        <h3> Transactions</h3>

			                        <div class="breadcrumb-wrapper ">

			                            <ol class="breadcrumb">

			                                <li class="breadcrumb-item"><a href="{{url('/')}}/user/dashboard">Home</a>

			                                </li>

			                                <li class="breadcrumb-item active"> Transactions

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

                                                <button class="btn btn-warning dropdown-toggle waves-effect waves-light filter-obj" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                    Type 

                                                </button>

                                                <div class="dropdown-menu filter-obj-option" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">

                                                    <a class="dropdown-item" href="#" value="CREDIT">Credit</a>

                                                    <a class="dropdown-item" href="#" value="DEBIT">Debit</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

									<div class="search-filter-bx">

										<div class="search-bar">                               

											<input placeholder="Common Search" type="text" class="form-control round" id="myInputTextField" />

											<div class="form-control-position">

												<i class="feather icon-search px-1"></i>

											</div>

										</div>

									</div>									

                                    <!-- <div class="filtter-btn" >

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

                                    </div> -->
                                    

								</div>

							</div>

						</div>

					</div>

                    <section id="basic-datatable" class="contracts-table-section">                        

                        <div class="card-content contract-table-section">                                    

                            <div class="table-responsive">

                                <table class="table table-striped zero-configuration dataTable data-table  ">

                                    <thead>

                                        <tr>

                                            <th>ID</th>

                                            <th>Business</th>

                                            <th>Customer Name</th>

                                            <th>Transaction Type</th>

                                            <th>Amount</th>

                                            <th>Campaign</th>

                                            <th>Transaction Date</th>

                                            <th>Payment Status</th>

                                            <th>Action</th>

                                          

                                                

                                        </tr>

                                    </thead>

                                    <tbody>

                                    </tbody>

                                </table>

                            </div>                                    

                        </div>                                

                    </section>

                </div>               

            </div>

        </div>

    </div>

    <!-- END: Content-->



    <!-- Modal -->

    <div class="modal fade bank-transfers-pop-up charge-pop modal-padding-change" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalCenterTitle">How Much Charge Your Wallet</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="form-group bud-sar-padding">

                        <label for="emailAddress1">Enter Amount</label>

                        <input type="text" placeholder="Enter Amount" class="form-control" id="emailAddress1">

                        <span class="budget-sar">SAR</span>

                    </div>

                    <!-- <div class="form-group bud-sar-padding width-sar-chg">

                        <label for="emailAddress1">Enter Amount</label>

                        <input type="text" placeholder="Enter Amount" class="form-control" id="emailAddress1">

                        <span class="budget-sar">SAR</span>

                    </div> -->

                    <div class="transfers-btn">                  

                        <a class="btn btn-primary" href="wallet-payment-options.html">Charge Wallet</a>

                    </div>

                </div>              

            </div>

        </div>

    </div>

    <div class="sidenav-overlay"></div>

    <div class="drag-target"></div>



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

			<form action="#" method="POST" id="wallete_status">

                <input type="hidden" id="wallete_id" name="wallete_id" />

				@csrf

				<div class="modal-body">

					

					<div class="form-group">

						<label>Remark: </label>					

						<input type="text"  id="remark"  name="remark" placeholder="Enter Description" class="form-control">

					</div>

					<div class="form-group">

						

                        <button type="button" class="btn btn-primary  " onclick="update_status('active');">Approve</button>

                        <button type="button" class="btn btn-primary "onclick="update_status('reject');" >Reject</button>

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

<div class="modal fade text-left defaultSize-modal modal-padding-change" id="showimage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel33">Payment</h4>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">

					<span aria-hidden="true">&times;</span>

				</button>

			</div>

			<form action="#" method="POST" id="wallete_status">

                <input type="hidden" id="wallete_id" name="wallete_id" />

				@csrf

				<div class="modal-body">

					

					<div class="form-group">

						<img src="" id="payment_image" width="400px" height="500px" />

					</div>

					

									

				</div>

				<div class="modal-footer">

					<!-- <button type="submit" class="btn btn-primary">Submit</button> 

					<button type="button" class="btn btn-primary validate-frm">Submit</button>-->

					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

					

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

              url: "{{url('/')}}/admin/load-wallet-data",

              data: function (d) {

                    d.status = $('.filter-obj').attr('value'),

                    d.search = $('input[type="search"]').val()

                }

            },

             bAutoWidth: false, 

             "ordering": false,

             "bInfo":false,

            "bLengthChange": false,

            "paging": true,

            "bPaginate": false,

            "pageLength": 5,

            columns: [

                {data: 'id', name: 'transaction_id'},

                {data: 'business_name', name: 'business_name'},

                {data: 'user_name', name: 'user_name'},

                {data: 'transaction_type', name: 'transaction_type'},

                {data: 'amount', name: 'amount'},

                {data: 'campaign_name', name: 'campaign_name'},

                {data: 'transaction_date', name: 'transaction_date'},

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

        $('.filter-obj-option a').click(function(){

            $('.filter-obj').text($(this).attr('value'));

            $('.filter-obj').attr('value',$(this).attr('value'));

            table.draw();

        });

    });



    function edit(recordID){

		if(recordID){

            jQuery('#wallete_status #wallete_id').val(recordID);

           $('#inlineForm').modal('show');

		}

	}

    

    function view(src,recordID){

       

		if(recordID){

            //jQuery('#wallete_status #wallete_id').val(recordID);

            jQuery('#showimage #payment_image').attr('src',src);

            

           $('#showimage').modal('show');

		}

	}

    

    function update_status(status){

        $('#inlineForm').modal('hide');

        var recordID = jQuery('#wallete_status #wallete_id').val();

        var remark = jQuery('#wallete_status #remark').val();

        

		if(recordID){

            //alert(recordID);

			$.ajax({

	            url:'{{url("/")}}/admin/wallete_status',

	            type :'post',

	            data :{ 'id': recordID,'status':status,'remark':remark,'_token':'<?php echo csrf_token();?>'},

	            success:function(data)

	            {

	            	if(data != ''){

                    swal("Thank You!", "Wallet Updated successfully!", "success")

                        .then((value) => {

                            location.href = "{{url('/')}}/admin/wallet-list/";

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

    @endsection


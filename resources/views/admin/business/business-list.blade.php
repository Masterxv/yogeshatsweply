@extends('admin.layout.master')    
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
			                        <h3>Business</h3>
			                        <div class="breadcrumb-wrapper ">
			                            <ol class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('/')}}/admin/dashboard">Home</a>
			                                </li>
			                                <li class="breadcrumb-item active">Business
			                                </li>
			                            </ol>
			                        </div>
		                        </div>
							</div>	
							<div class="col-6">
								<div class="search-action-btn">
									<div class="search-filter-bx">
										<div class="search-bar">                               
											<input placeholder="Common Search" type="text" class="form-control round" id="myInputTextField">
											<div class="form-control-position">
												<i class="feather icon-search px-1"></i>
											</div>                                                                   
										</div>
									</div>
									<div class="">
										<button type="button" class="btn btn-primary add-form-btn btn-add-bussiness"  data-toggle="modal" data-target="#inlineForm">											
											<span class="text-nowrap"><span class="table-add-txt">Add Business</span><span class="table-add-icon"><i class="fal fa-plus"></i></span></span>
										</button>
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
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Business</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
										<div>Website</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
										<div>Status</div>
									</th>
									<th role="columnheader" scope="col" aria-colindex="6" class="" style="text-align: center">
										<div>Actions</div>
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
				<h4 class="modal-title" id="myModalLabel33">Add Business</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('/')}}/admin/create-business" method="POST" id="businessFrm">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label>Company Name: </label>					
						<input type="text" name="business_name" placeholder="Company Name" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Website: </label>					
						<input type="text" name="website_url" placeholder="Website" class="form-control">
					</div>
					<div class="form-group">
						<label>Commercial Numbe: </label>					
						<input type="text" placeholder="Commercial Number" name="contact_number" class="form-control">
					</div>	
					<div class="form-group">
						<label>Vat Number: </label>					
						<input type="text" placeholder="Vat Number" name="vat_number" class="form-control">
					</div>					
				</div>
				<div class="modal-footer">
					<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
					<button type="button" class="btn btn-primary validate-frm">Submit</button>
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
	          url: "{{url('/')}}/admin/business/load-data",
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
			  "pageLength": 5,
	        columns: [
	            {data: 'id', name: 'id'},
	            {data: 'business_name', name: 'business_name'},
	            {data: 'website_url', name: 'website_url'},
	            {data: 'business_status', name: 'business_status'},
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


        $('.validate-frm').click(function(){
        	$('.err-msg').remove();
        	var flag = 0;
        	if($('input[name="business_name"]').val()=="" || $('input[name="business_name"]').val()=="undefined"){
        		flag = 1;
        		$('input[name="business_name"]').parent().append('<span class="err-msg">Please enter business name</span>');
        	}
        	if(flag==0){
        		$('#businessFrm').submit();
        	}
        });
	});

	
	function edit(recordID){
		if(recordID){
			$.ajax({
	            url:'{{url("/")}}/admin/business-details',
	            type :'post',
	            data :{ 'id': recordID,'_token':'<?php echo csrf_token();?>'},
	            success:function(data)
	            {
	            	if(data){

		            	$('.btn-add-bussiness').trigger('click');
		            	$('.err-msg').remove();
		            	$('input[name="business_name"]').val(data.business_name);
		            	$('input[name="website_url"]').val(data.website_url);
		            	$('input[name="contact_number"]').val(data.contact_number);
		            	$('input[name="vat_number"]').val(data.vat_number);
		            	$('#businessFrm').append('<input type="hidden" name="id" value="'+btoa(data.id)+'" />');
		            	$('#businessFrm').attr('action','{{url("/")}}/admin/update-business');

		            }
	            	console.log(data);
	            }
	        });
		}
	}


</script>

@endsection
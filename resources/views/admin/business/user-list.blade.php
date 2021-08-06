@extends('admin.layout.dashboard-master')    
@section('main_content')
    <div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">		
		<div class="content-body">
			<div>	
			@include('flash-message')   
			
				<div class="card mb-0">					
					<div class="m-2">
						<div class="row">
							<div class="users-list-filter col-6">
								<div class="breadcrumb-main-bx">      
			                        <h3> Team</h3>
			                        <div class="breadcrumb-wrapper ">
			                            <ol class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('/')}}/admin/dashboard">Home</a>
			                                </li>
			                                <li class="breadcrumb-item active">Business Team 
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
											<span class="text-nowrap">Add User</span>
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
									<!-- <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
										<div>ID</div>
									</th> -->
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
										<div>Name</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
										<div>Contact</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Business</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Role</div>
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
				<h4 class="modal-title" id="myModalLabel33">Add User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('/')}}/admin/create-business-user" method="POST" id="businessFrm">
				@csrf
				<div class="modal-body">
					
					<div class="form-group">
						<label >Business: </label>	
						<select class="form-control" name="business_id" required >
							<option value="">Select Business</option>
							<?php foreach($businessArr as $business){
								echo '<option value="'.$business->id.'">'.$business->business_name.'</option>';
							 } ?>
						</select>				
					</div>
					<div class="form-group">
						<label >User Role: </label>	
						<select class="form-control" name="role_id" required >
							<option value="">Select Role</option>
							<?php foreach($roleArr as $role){
								echo '<option value="'.$role->id.'">'.$role->role_name.'</option>';
							 } ?>
						</select>				
					</div>
					<div class="form-group">
						<label>User Name: </label>					
						<input type="text" name="name" placeholder="User Name" class="form-control">
					</div>
					<div class="form-group">
						<label>Contact Number: </label>					
						<input type="text" placeholder="Contact Number" name="contact_number" class="form-control">
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
	          url: "{{url('/')}}/admin/load-userdata",
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
	            /*{data: 'id', name: 'id'},*/
	            {data: 'name', name: 'name'},
	            {data: 'contact_number', name: 'contact_number'},
	            {data: 'business_name', name: 'business_name'},
	            {data: 'user_role', name: 'user_role'},
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
        	if($('input[name="name"]').val()=="" || $('input[name="name"]').val()=="undefined"){
        		flag = 1;
        		$('input[name="name"]').parent().append('<span class="err-msg">Please enter user name</span>');
        	}
        	if($('select[name="business_id"]').val()=="" || $('select[name="business_id"]').val()=="undefined"){
        		flag = 1;
        		$('select[name="business_id"]').parent().append('<span class="err-msg">Please select business</span>');
        	}
        	if($('select[name="role_id"]').val()=="" || $('select[name="role_id"]').val()=="undefined"){
        		flag = 1;
        		$('select[name="role_id"]').parent().append('<span class="err-msg">Please select role</span>');
        	}
        	if(flag==0){
        		$('#businessFrm').submit();
        	}
        });
	});

	function edit(recordID){
		if(recordID){
			$.ajax({
	            url:'{{url("/")}}/admin/user-details',
	            type :'post',
	            data :{ 'id': recordID,'_token':'<?php echo csrf_token();?>'},
	            success:function(data)
	            {
	            	if(data){

		            	$('.btn-add-bussiness').trigger('click');
		            	$('.err-msg').remove();
		            	$('input[name="name"]').val(data.name);
		            	$('input[name="contact_number"]').val(data.contact_number);
		            	$('select[name="business_id"]').val(data.business_id);
		            	$('select[name="role_id"]').val(data.role_id);
		            	$('#businessFrm').append('<input type="hidden" name="id" value="'+btoa(data.id)+'" />');
		            	$('#businessFrm').attr('action','{{url("/")}}/admin/update-user');

		            }
	            	console.log(data);
	            }
	        });
		}
	}


</script>
@endsection
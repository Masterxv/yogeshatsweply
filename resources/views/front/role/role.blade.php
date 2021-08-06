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
			                        <h3>Role</h3>
			                        <div class="breadcrumb-wrapper ">
			                            <ol class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('/')}}/user/dashboard">Home</a>
			                                </li>
			                                <li class="breadcrumb-item active">Role
			                                </li>
			                            </ol>
			                        </div>
		                        </div>
							</div>	
							<div class="col-6">
								<div class="search-action-btn">
									<!-- <div class="search-filter-bx">
										<div class="search-bar">                               
											<input placeholder="Common Search" type="text" class="form-control round" id="myInputTextField">
											<div class="form-control-position">
												<i class="feather icon-search px-1"></i>
											</div>                                                                   
										</div>
									</div> -->
									<div class="">
										<a href="{{url('/')}}/user/assign-role/" class="btn btn-primary add-form-btn btn-add-bussiness" >
											<span class="text-nowrap">Add Role</span>
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
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Role</div>
									</th>
									<th role="columnheader" scope="col" aria-colindex="6" class="" style="text-align: center;">
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
<script type="text/javascript">
	$(document).ready(function(){
	    var table = $('.data-table').DataTable({
			"bDestroy": true,
	        processing: true,
	        serverSide: true,
	        ajax: {
	          url: "{{url('/')}}/user/load-roles",
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
	            {data: 'role_name', name: 'role_name'},
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
	});

</script>

@endsection
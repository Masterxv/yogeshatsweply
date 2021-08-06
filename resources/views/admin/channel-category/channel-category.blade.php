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
			                        <h3>Channel Category</h3>
			                        <div class="breadcrumb-wrapper ">
			                            <ol class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('/')}}/admin/dashboard">Home</a>
			                                </li>
			                                <li class="breadcrumb-item active">Channel Category
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
											<span class="text-nowrap"><span class="table-add-txt">Add Channel Category</span><span class="table-add-icon"><i class="fal fa-plus"></i></span></span>
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
										<div>Icon</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Category Name</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
										<div>Ad Channel Name</div>
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
							<!-- <div class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span class="text-muted">Showing 1 to 10 of 50 entries</span>
							</div>	 -->						
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
				<h4 class="modal-title" id="myModalLabel33">Add Category</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('/')}}/admin/create-channel-category" method="POST" id="channelFrm" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="form-group">
						<label>Category Name: </label>					
						<input type="text" name="category_name" placeholder="Category Name" class="form-control" required />
					</div>

					<div class="form-group image-input">
                        <label for="image">Category image <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="category_image" id="inputGroupFile01" accept="image/*" />
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div> 

                    <div class="uploaded-img-main" style="display:none;">
	                    <div class="uploaded-img">
	                        <img id='original_file_display' src="" />
	                        <!-- <span class="close-img">&times;</span> -->
	                    </div>
	                </div>

	                <div class="form-group">
                        <label for="upload_type">Ad Channel</label>
                        <select class="form-control" name="channel_id" id="channel_id">
                        	<option value="">Select Channel</option>
                        	<?php 
                        	$channelArr = DB::table('channel')->get();
	                        if($channelArr){
	                        	foreach($channelArr as $channel){
                            		echo '<option value="'.$channel->id.'">'.$channel->channel_name.'</option>';
	                        	}
	                        }
                        	?>
                        </select>
                    </div>
					<div class="form-group">
                        <label for="upload_type">Status</label>
                        <select class="form-control" name="category_status" id="category_status">
                            <option value='1'>Active</option>
                            <option value='0'>InActive</option>
                        </select>
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
	          url: "{{url('/')}}/admin/channel-category/load-data",
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
	            {data: 'category_image', name: 'category_image'},
	            {data: 'category_name', name: 'category_name'},
	            {data: 'channel_name', name: 'channel_name'},
	            {data: 'category_status', name: 'category_status'},
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
        	if($('input[name="channel_name"]').val()=="" || $('input[name="category_name"]').val()=="undefined"){
        		flag = 1;
        		$('input[name="category_name"]').parent().append('<span class="err-msg">Please enter category name</span>');
        	}
        	if(flag==0){
        		$('#channelFrm').submit();
        	}
        });

        $('#inputGroupFile01').on('change', function () { 
			$('.upload-demo').removeClass('hide');
			readFile(this); 
            $(this).next('.err-msg').remove();
        });

	});

	
	function edit(recordID){
		if(recordID){
			$.ajax({
	            url:'{{url("/")}}/admin/channel-category-details',
	            type :'post',
	            data :{ 'id': recordID,'_token':'<?php echo csrf_token();?>'},
	            success:function(data)
	            {
	            	if(data){

		            	$('.btn-add-bussiness').trigger('click');
		            	$('.err-msg').remove();
		            	$('input[name="category_name"]').val(data.category_name);
		            	$('#category_status').val(data.status);
		            	$('#channel_id').val(data.channel_id);
		            	$('#channelFrm').append('<input type="hidden" name="id" value="'+btoa(data.id)+'" />');
		            	$('#channelFrm').attr('action','{{url("/")}}/admin/update-channel-category');
		            	jQuery(".uploaded-img-main").show();
	            		jQuery("#original_file_display").attr("src",data.category_image_url);
		            	jQuery(".custom-file-label").text(data.category_image);
		            }
	            	console.log(data);
	            }
	        });
		}
	}

	function readFile(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
    		reader.onload = function(){
    			jQuery(".uploaded-img-main").show();
	            jQuery("#original_file_display").attr("src",reader.result);
    		};
    		reader.readAsDataURL(event.target.files[0]);
    	    var filename =  input.files[0].name;
    	    jQuery(".custom-file-label").text(filename);
            
        }else {
	        alert("Sorry - you're browser doesn't support the FileReader API");
	    }
	}


</script>

@endsection
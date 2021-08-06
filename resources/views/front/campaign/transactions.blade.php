@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="card mb-0 padding-left-right">					
					<div class="m-2">
						<div class="row">
							<div class="users-list-filter col-6">
								<div class="breadcrumb-main-bx">      
			                        <h3>Transactions</h3>
			                        <div class="breadcrumb-wrapper ">
			                            <ol class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('/')}}/user/dashboard">Home</a>
			                                </li>
			                                <li class="breadcrumb-item active">Transactions
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
								</div>
							</div>
						</div>
					</div>
                    <section id="basic-datatable" class="contracts-table-section">
                        <div class="card-content contract-table-section">
                            <div class="table-responsive">
                                <table class="table table-striped zero-configuration dataTable ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Transaction ID</th>
                                            <th>Customer Name</th>
                                            <th>Transaction Date</th>
                                            <th>Transaction Type</th>
                                            <th>Transaction Value</th>                                                       
                                            <th>Invoice </th>                                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2020202020</td>
                                            <td>Ibrahim Mutahar</td>  
                                            <td>22/02/2021</td>                                                          
                                            <td>Bank Transfer</td>                                                       
                                            <td>SAR 4500.00</td>
                                            <td><a href="#"><i class="feather icon-download-cloud"></i> (Download)</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2020202052</td>
                                            <td>Ibrahim Mutahar</td>   
                                            <td>16/03/2021</td>                                                         
                                            <td>Credit Card</td>                                                       
                                            <td>SAR 1800.00</td>
                                            <td><a href="#"><i class="feather icon-download-cloud"></i> (Download)</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                                        
                        </div>                        
                    </section>
                    <div class="mx-2 mb-2"></div>	
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection

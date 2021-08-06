@extends('front.layout.dashboard-master')
@section('main_content')
    <div class="app-content content">
	   <div class="content-overlay"></div>
	   <div class="header-navbar-shadow"></div>
	   <div class="content-wrapper">		
	        <div class="content-body">			
                <div class="card padding-left-right">	
                <div class="m-2 assign-role-main-section">
						<div class="row">
							<div class="users-list-filter col-6">
								<div class="breadcrumb-main-bx">      
			                        <h3>Permissions</h3>
			                        <div class="breadcrumb-wrapper ">
			                            <ol class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="http://192.168.1.10/sweply-dev/user/dashboard">Home</a>
			                                </li>
			                                <li class="breadcrumb-item active">Permissions
			                                </li>
			                            </ol>
			                        </div>
		                        </div>
							</div>	
							<div class="col-6 set-section">
								<div class="search-action-btn">
                                    <div class="users-list-role-main">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <input placeholder="Add role name" type="text" class="form-control round">
                                        </div>
                                    </div>									                                   
									<div class="hide-btn-for-mobile">
                                        <button type="button" class="btn btn-primary" style="float: right">
                                            <span class="text-nowrap">Set Permission</span>
                                        </button>
									</div>
								</div>
							</div>
						</div>
					</div>						                    
                    <div class="mb-0 table-responsive">
                        <table role="table" aria-busy="false" aria-colcount="5" class="table b-table" id="__BVID__874">		
                            <thead role="rowgroup" class="">
                                <tr role="row" style="background: #f8f8f8" class="">
                                    <th role="columnheader" scope="col" aria-colindex="1" class="">
                                        <div>Module</div>
                                    </th>
                                    <th role="columnheader" scope="col" aria-colindex="2" class="">
                                        <div>Select All</div>
                                    </th>
                                    <th role="columnheader" scope="col" aria-colindex="3" class="">
                                        <div>Add</div>
                                    </th>
                                    <th role="columnheader" scope="col" aria-colindex="4" class="">
                                        <div>Edit</div>
                                    </th>
                                    <th role="columnheader" scope="col" aria-colindex="5" class="">
                                        <div>Delete</div>
                                    </th>
                                    <th role="columnheader" scope="col" aria-colindex="6" class="">
                                        <div>View</div>
                                    </th>
                                    <th role="columnheader" scope="col" aria-colindex="7" class="">
                                        <div>List</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody role="rowgroup">
                                <!---->
                                <tr role="row" class="">
                                    <td aria-colindex="1" role="cell" class="">FAQ</td>
                                    <td aria-colindex="2" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="3" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="4" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="5" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="6" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="7" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr role="row" class="">
                                    <td aria-colindex="1" role="cell" class="">Blog post</td>
                                    <td aria-colindex="2" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="3" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="4" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="5" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="6" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="7" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr role="row" class="">
                                    <td aria-colindex="1" role="cell" class="">Author</td>
                                    <td aria-colindex="2" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="3" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="4" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="5" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="6" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="7" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr role="row" class="">
                                    <td aria-colindex="1" role="cell" class="">Contributor</td>
                                    <td aria-colindex="2" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="3" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="4" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="5" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="6" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="7" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr role="row" class="">
                                    <td aria-colindex="1" role="cell" class="">User</td>
                                    <td aria-colindex="2" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="3" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="4" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="5" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="6" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                    <td aria-colindex="7" role="cell" class="">
                                        <fieldset>
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </td>
                                </tr>										
                            </tbody>									
                        </table>
                        <button type="button" class="btn btn-primary" style="float: right;margin:0 0 15px 15px">
                            <span class="text-nowrap">Set Permission</span>
                        </button>
                        <div class="clearfix"></div>
                    </div>							
                </div>								
		    </div>
	   </div>
    </div>
@endsection


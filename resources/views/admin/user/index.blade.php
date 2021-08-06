@extends('admin.layout.master')    
@section('main_content')
    <div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<!---->
		<div class="content-body">
			<div data-v-32017d0f="">				
				<div data-v-32017d0f="" class="card">					
					<div class="card-header pb-50">
						<h5> Filters </h5>
					</div>
					<div class="card-body">												
                        <div class="users-list-filter">
                            <form>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label for="users-list-role">Role</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="users-list-role">
                                                <option value="">All</option>
                                                <option value="user">User</option>
                                                <option value="staff">Staff</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label for="users-list-status">Plan</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="users-list-status">
                                                <option value="">All</option>
                                                <option value="Active">Active</option>
                                                <option value="Blocked">Blocked</option>
                                                <option value="deactivated">Deactivated</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label for="users-list-verified">Status</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" id="users-list-verified">
                                                <option value="">All</option>
                                                <option value="true">Yes</option>
                                                <option value="false">No</option>
                                            </select>
                                        </fieldset>
                                    </div>                                    
                                </div>
                            </form>
                        </div>						
					</div>					
				</div>
				<div data-v-32017d0f="" class="card mb-0">					
					<div data-v-32017d0f="" class="m-2">
						<div data-v-32017d0f="" class="row">
							<div data-v-32017d0f="" class="d-flex align-items-center justify-content-start mb-1 mb-md-0 col-md-6 col-12"></div>
							<div data-v-32017d0f="" class="col-md-6 col-12">
								<div data-v-32017d0f="" class="d-flex align-items-center justify-content-end">
									<input data-v-32017d0f="" type="text" placeholder="Search..." class="d-inline-block mr-1 form-control" id="__BVID__647">
									<button data-v-32017d0f="" type="button" class="btn btn-primary"><span data-v-32017d0f="" class="text-nowrap">Add User</span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div data-v-32017d0f="" class="position-relative table-responsive">
						<table role="table" aria-busy="false" aria-colcount="6" class="table b-table" id="__BVID__648">
							<!---->
							<!---->
							<thead role="rowgroup" class="">
								<!---->
								<tr role="row" class="">
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
										<div>User</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Email</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
										<div>Role</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="4" aria-sort="none" class="">
										<div>Plan</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
										<div>Status</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" aria-colindex="6" class="">
										<div>Actions</div><span class="sr-only"> (Click to clear sorting)</span>
									</th>
								</tr>
							</thead>
							<tbody role="rowgroup">
								<!---->
								<tr role="row" id="__BVID__648__row_50" data-pk="50" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/50" class="b-avatar badge-light-info rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/50" class="font-weight-bold d-block text-nowrap" target="_self"> Beverlie Krabbe </a><small data-v-32017d0f="" class="text-muted">@bkrabbe1d</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">bkrabbe1d@home.pl</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-edit-2 text-info">
												<path data-v-32017d0f="" d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">editor</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Company</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-success badge-pill"> active </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__711">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__711__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__711__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/50" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/50" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_49" data-pk="49" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/49" class="b-avatar badge-light-primary rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>PD</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/49" class="font-weight-bold d-block text-nowrap" target="_self"> Paulie Durber </a><small data-v-32017d0f="" class="text-muted">@pdurber1c</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">pdurber1c@gov.uk</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-user text-primary">
												<path data-v-32017d0f="" d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
												<circle data-v-32017d0f="" cx="12" cy="7" r="4"></circle>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">subscriber</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__726">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__726__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__726__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/49" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/49" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_48" data-pk="48" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/48" class="b-avatar badge-light-danger rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>OW</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/48" class="font-weight-bold d-block text-nowrap" target="_self"> Onfre Wind </a><small data-v-32017d0f="" class="text-muted">@owind1b</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">owind1b@yandex.ru</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-server text-danger">
												<rect data-v-32017d0f="" x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
												<rect data-v-32017d0f="" x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
												<line data-v-32017d0f="" x1="6" y1="6" x2="6.01" y2="6"></line>
												<line data-v-32017d0f="" x1="6" y1="18" x2="6.01" y2="18"></line>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">admin</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Basic</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__741">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__741__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__741__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/48" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/48" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_47" data-pk="47" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/47" class="b-avatar badge-light-danger rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/47" class="font-weight-bold d-block text-nowrap" target="_self"> Karena Courtliff </a><small data-v-32017d0f="" class="text-muted">@kcourtliff1a</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">kcourtliff1a@bbc.co.uk</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-server text-danger">
												<rect data-v-32017d0f="" x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
												<rect data-v-32017d0f="" x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
												<line data-v-32017d0f="" x1="6" y1="6" x2="6.01" y2="6"></line>
												<line data-v-32017d0f="" x1="6" y1="18" x2="6.01" y2="18"></line>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">admin</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Basic</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-success badge-pill"> active </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__756">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__756__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__756__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/47" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/47" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_46" data-pk="46" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/46" class="b-avatar badge-light-success rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>SO</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/46" class="font-weight-bold d-block text-nowrap" target="_self"> Saunder Offner </a><small data-v-32017d0f="" class="text-muted">@soffner19</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">soffner19@mac.com</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-database text-success">
												<ellipse data-v-32017d0f="" cx="12" cy="5" rx="9" ry="3"></ellipse>
												<path data-v-32017d0f="" d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
												<path data-v-32017d0f="" d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">maintainer</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Enterprise</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__771">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__771__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__771__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/46" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/46" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_45" data-pk="45" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/45" class="b-avatar badge-light-primary rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/45" class="font-weight-bold d-block text-nowrap" target="_self"> Corrie Perot </a><small data-v-32017d0f="" class="text-muted">@cperot18</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">cperot18@goo.ne.jp</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-user text-primary">
												<path data-v-32017d0f="" d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
												<circle data-v-32017d0f="" cx="12" cy="7" r="4"></circle>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">subscriber</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__786">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__786__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__786__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/45" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/45" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_44" data-pk="44" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/44" class="b-avatar badge-light-warning rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>VK</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/44" class="font-weight-bold d-block text-nowrap" target="_self"> Vladamir Koschek </a><small data-v-32017d0f="" class="text-muted">@vkoschek17</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">vkoschek17@abc.net.au</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-settings text-warning">
												<circle data-v-32017d0f="" cx="12" cy="12" r="3"></circle>
												<path data-v-32017d0f="" d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">author</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-success badge-pill"> active </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__801">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__801__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__801__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/44" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/44" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_43" data-pk="43" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/43" class="b-avatar badge-light-danger rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>MM</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/43" class="font-weight-bold d-block text-nowrap" target="_self"> Micaela McNirlan </a><small data-v-32017d0f="" class="text-muted">@mmcnirlan16</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">mmcnirlan16@hc360.com</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-server text-danger">
												<rect data-v-32017d0f="" x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
												<rect data-v-32017d0f="" x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
												<line data-v-32017d0f="" x1="6" y1="6" x2="6.01" y2="6"></line>
												<line data-v-32017d0f="" x1="6" y1="18" x2="6.01" y2="18"></line>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">admin</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Basic</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__816">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__816__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__816__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/43" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/43" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_42" data-pk="42" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/42" class="b-avatar badge-light-info rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>BR</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/42" class="font-weight-bold d-block text-nowrap" target="_self"> Benedetto Rossiter </a><small data-v-32017d0f="" class="text-muted">@brossiter15</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">brossiter15@craigslist.org</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-edit-2 text-info">
												<path data-v-32017d0f="" d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">editor</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__831">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__831__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__831__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/42" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/42" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_41" data-pk="41" class="">
									<td aria-colindex="1" role="cell" class="">
										<div data-v-32017d0f="" class="media">
											<div data-v-32017d0f="" class="media-aside align-self-center"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/41" class="b-avatar badge-light-success rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>EB</span></span><!----></a>
											</div>
											<div data-v-32017d0f="" class="media-body"><a data-v-32017d0f="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/41" class="font-weight-bold d-block text-nowrap" target="_self"> Edwina Baldetti </a><small data-v-32017d0f="" class="text-muted">@ebaldetti14</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">ebaldetti14@theguardian.com</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-32017d0f="" class="text-nowrap">
											<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-database text-success">
												<ellipse data-v-32017d0f="" cx="12" cy="5" rx="9" ry="3"></ellipse>
												<path data-v-32017d0f="" d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
												<path data-v-32017d0f="" d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
											</svg><span data-v-32017d0f="" class="align-text-top text-capitalize">maintainer</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-32017d0f="" class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div data-v-32017d0f="" class="dropdown b-dropdown btn-group" id="__BVID__846">
											<!---->
											<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link dropdown-toggle-no-caret" id="__BVID__846__BV_toggle_">
												<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
													<circle data-v-32017d0f="" cx="12" cy="12" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="5" r="1"></circle>
													<circle data-v-32017d0f="" cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__846__BV_toggle_">
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/41" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path data-v-32017d0f="" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline data-v-32017d0f="" points="14 2 14 8 20 8"></polyline>
															<line data-v-32017d0f="" x1="16" y1="13" x2="8" y2="13"></line>
															<line data-v-32017d0f="" x1="16" y1="17" x2="8" y2="17"></line>
															<polyline data-v-32017d0f="" points="10 9 9 9 8 9"></polyline>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Details</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/41" class="dropdown-item" role="menuitem" target="_self">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
															<path data-v-32017d0f="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
															<path data-v-32017d0f="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Edit</span>
													</a>
												</li>
												<li data-v-32017d0f="" role="presentation">
													<a role="menuitem" href="#" target="_self" class="dropdown-item">
														<svg data-v-32017d0f="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
															<polyline data-v-32017d0f="" points="3 6 5 6 21 6"></polyline>
															<path data-v-32017d0f="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
														</svg><span data-v-32017d0f="" class="align-middle ml-50">Delete</span>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<!---->
								<!---->
							</tbody>
							<!---->
						</table>
					</div>
					<div data-v-32017d0f="" class="mx-2 mb-2">
						<div data-v-32017d0f="" class="row">
							<div data-v-32017d0f="" class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span data-v-32017d0f="" class="text-muted">Showing 1 to 10 of 50 entries</span>
							</div>							
						</div>
					</div>
					<!---->
					<!---->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@extends('front.layout.dashboard-master')    
@section('main_content')
    <div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<!---->
		<div class="content-body">
			<div>
				<!---->
				<div class="row">
					<div class="col-md-7 col-lg-8 col-xl-9 col-12">
						<div class="card">
							<!---->
							<!---->
							<div class="card-body">
								<!---->
								<!---->
								<div class="row">
									<div class="d-flex justify-content-between flex-column col-xl-6 col-21">
										<div class="d-flex justify-content-start"><span class="b-avatar badge-light-info rounded" style="width: 104px; height: 104px;"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar" style="width: 100%;border-radius: .357rem!important;">
											<!---->
											</span>
											<div class="d-flex flex-column ml-1">
												<div class="mb-1">
													<h4 class="mb-0"> Beverlie Krabbe </h4><span class="card-text">bkrabbe1d@home.pl</span>
												</div>
												<div class="d-flex flex-wrap"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/edit/50" class="btn btn-primary" target="_self"> Edit </a>
													<button type="button" class="btn ml-1 btn-outline-danger">Delete</button>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mt-2">
											<div class="d-flex align-items-center mr-2"><span class="b-avatar badge-light-primary rounded"><span class="b-avatar-custom"><svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></span>
												<!---->
												</span>
												<div class="ml-1">
													<h5 class="mb-0"> 23.3k </h5><small>Monthly Sales</small>
												</div>
											</div>
											<div class="d-flex align-items-center"><span class="b-avatar badge-light-success rounded"><span class="b-avatar-custom"><svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span>
												<!---->
												</span>
												<div class="ml-1">
													<h5 class="mb-0"> $99.87k </h5><small>Annual Profit</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-12">
										<table class="mt-2 mt-xl-0 w-100">
											<tr>
												<th class="pb-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-75 feather feather-user">
														<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
														<circle cx="12" cy="7" r="4"></circle>
													</svg><span class="font-weight-bold">Username</span>
												</th>
												<td class="pb-50">bkrabbe1d</td>
											</tr>
											<tr>
												<th class="pb-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-75 feather feather-check">
														<polyline points="20 6 9 17 4 12"></polyline>
													</svg><span class="font-weight-bold">Status</span>
												</th>
												<td class="pb-50 text-capitalize">active</td>
											</tr>
											<tr>
												<th class="pb-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-75 feather feather-star">
														<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
													</svg><span class="font-weight-bold">Role</span>
												</th>
												<td class="pb-50 text-capitalize">editor</td>
											</tr>
											<tr>
												<th class="pb-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-75 feather feather-flag">
														<path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
														<line x1="4" y1="22" x2="4" y2="15"></line>
													</svg><span class="font-weight-bold">Country</span>
												</th>
												<td class="pb-50">China</td>
											</tr>
											<tr>
												<th>
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-75 feather feather-phone">
														<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
													</svg><span class="font-weight-bold">Contact</span>
												</th>
												<td>(397) 294-5153</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<!---->
							<!---->
						</div>
					</div>
					<div class="col-md-5 col-lg-4 col-xl-3 col-12">
						<div class="card border-primary">
							<!---->
							<!---->
							<div class="card-header d-flex justify-content-between align-items-center pt-75 pb-25">
								<h5 class="mb-0"> Current Plan </h5><span class="badge badge-light-primary"> Basic </span><small class="text-muted w-100">July 22, 2021</small>
							</div>
							<div class="card-body">
								<!---->
								<!---->
								<ul class="list-unstyled my-1">
									<li><span class="align-middle">5 Users</span>
									</li>
									<li class="my-25"><span class="align-middle">10 GB storage</span>
									</li>
									<li><span class="align-middle">Basic Support</span>
									</li>
								</ul>
								<button type="button" class="btn btn-primary btn-block">Upgrade Plan</button>
							</div>
							<!---->
							<!---->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="card">
							<!---->
							<!---->
							<div class="card-body">
								<h4 class="card-title">User Timeline</h4>
								<!---->
								<ul data-v-879a380c="" class="app-timeline">
									<li data-v-4d50203e="" class="timeline-item timeline-variant-primary" data-v-879a380c="">
										<div data-v-4d50203e="" class="timeline-item-point"></div>
										<div data-v-4d50203e="" class="d-flex flex-sm-row flex-column flex-wrap justify-content-between mb-1 mb-sm-0">
											<h6 data-v-4d50203e="">12 Invoices have been paid</h6><small data-v-4d50203e="" class="text-muted">12 min ago</small>
										</div>
										<p data-v-4d50203e="">Invoices have been paid to the company.</p>
										<p data-v-4d50203e="" class="mb-0">
											<img data-v-4d50203e="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAABdCAYAAADzCKvfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMTgwMTE3NDA3MjA2ODExODA4M0IxNEM4MzdEODk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyQTY5RDZFNjk2NDUxMUU5QjgzM0NGNjBGOUVEM0JBMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyQTY5RDZFNTk2NDUxMUU5QjgzM0NGNjBGOUVEM0JBMSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDE4MDExNzQwNzIwNjgxMTgwODNCMTRDODM3RDg5NTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MDExNzQwNzIwNjgxMTgwODNCMTRDODM3RDg5NTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4beZrOAAAF7klEQVR42uydCWwUVRjH/zs7sy03RG3wSNFYsChRFJCmIRIkEeUQiYaAiBIFISWLCBEPUCLEKAgkdAGNFxAPgkIIJLoRFUnwQFHSRDCBoqhNEQmoaFm6O5ffN2+2uy3aUizH7nxf8vp2Znaafb/3nTM7b0Ou64Kl3jRLHNu+g7ep9UQeSAio1nU9XhCJHGjNeTr/SdTXR23bZhBR5JHwdKdMM0ZdZWvA6PXJZEk2EE3TEAqFchsGabvjOOnNKIFBa8Dolm3P4BMZQyQSyXkgLAwklYHSAIb2xNtFIvEWoaR9ihYO5wWQpqLRmBw1xqhFYOpdt7qwoKBZjdEanJKmIR8lTJOtG0aDxpiWNYNdRouONt9FpwnXCIzvWxgMa0+8fWFhPLBQ0gHEIJ9pplIeGAouSCSTaF9QEA8sFM+UyL+wxiR9jbFJYxKuW0IaE/tXnxIUYd8ZITB+SPHyM87T8h5KS1GUTUnPpB8KzMmT0cBAsRvnK41MydOYNBjH6XnCB5O35hP2UwxO5Dja2H4+1hSengXGYTCJRDRvHS0P1qbo4mkLRRpuZsunRSlUx/JWU3juqdZhB9J6oHkdacgsCkljXDIhTvWd5gumBv8TiDyFw3CY/Uwz77HYr/hQApennFb2KwgEikARKAJFoAgUgSJQBIpAESgCRaCICBSBIlAEikARKAJFoDSRkJkSKGkx9lXBGGJA79wBxrAu0Or+ECh48RFgJ/dzgEQC4VXzBQoOfKH6Hr2Au6LAnq8ECo6lPwV9jB7XiE/xpLvfn/ibb/gCXYsuCCjn9wb7JX3ozx7gSC1/uxm4vIdoCq69WfU/EJhvtwNFVwgUlN6k+k0fAO98CRT3FCi4rr/qf0MmCgUdill6I9Als20VCxQVcUaW+1oDuJECgeJJWjv2Utq/a5tA0ZIngTfWZHYsnSVQwpteyzhZls17YXzzaYChuA4Q8zVj+dOeT/Fk4aTzfinhvEExtr4L7Ib3LWD73pnAivfVga2HoFc+HkQoLrBkono5dzKcjp1hlt1Grx9U++atgLF+ZbCgGB+uBz7z8UyZm8lTnloFTBuuNibNhLF6UUAKQvYlL/ha8sR9sLLqHZeKQmvJRuipkRSVPgEq5sHYsRmYvZwyvSRwuAb4/QhQn6BGkatdB6qXLqMaqj/Mq3rnLhRjyxp1tY1l6rOnfqDag8CQMcBGgnKcdqzbRa285f97zw2wX90Op7BjbkHxosrCqX6UmQ6zezHCxw5D+2gDmRM52m0fAwebnHQxtaNZ2zzmWQ8DA4fyE04U0kl7PqeCcs12hMdvhjN8Qm5B0d9a5mWunrTvBGNcXy83aZAyaiPuBPoMpBA9AHZpP3LCnZQPWvoAsIMg1NF7FrwC3LKaSoSZqqicQiH9x6+VA2+Lyfurrq6S+ig/NKSfxQe2w38ehVZ6qTKJhksHDGEcDXAU7PJhBKBL8yZSRd55IwF5ex3w66nT6/xSC7vbmV29sxwHlnoKNXZONMXYuZVmd4ICQlww/zlg0HCYV/dpXVXddxDAbeFaGPu/A74nf3PoZ352Hxg16YyBnFPzMX7aBzxzP/De7qz65iWYYyb/XwWH2et6gFvu5CkujLWLgd6kCcdrgfTKAiOuJCAP4UKXNofCEcZ4lELqNErKJlAoLRsNpNegWLRJ5fUXuOhtrSH69GHAm+QQR1MyNXE2cPvd6lDl/Fb7kLyAYrz+vALC97WefJlC5mB1YGw/mFnpfLDMZ5l/L3jyHGD8YJV0Ue5hr4znhNmcHShd/f6xxSozHVoEZ0MN5R/dkEvSpubjbKmBtp4q3f1VwIBbYY2tgGtEkGvSplDsi7rDrliAXBf5epdAESgCRaAIFIEiUASKQBEoAkWgCBQRgXI6UFzHCTSI7PFrWihUzS94bUUroGB43Dx+Dwjx0PkXCPwF973Vwi0gL1dF/08Nabz6aIx56LzAPh2o5OVJ4f+ggOu6QVSYmKHr3g8OhNIAUpZVwgvVerYVIE0hDVBrS2padUTXvXuZ/wgwACqjAW/Ht+8LAAAAAElFTkSuQmCC" width="20" class="mr-1"><span data-v-4d50203e="" class="align-bottom">invoice.pdf</span>
										</p>
									</li>
									<li data-v-4d50203e="" class="timeline-item timeline-variant-warning" data-v-879a380c="">
										<div data-v-4d50203e="" class="timeline-item-point"></div>
										<div data-v-4d50203e="" class="d-flex flex-sm-row flex-column flex-wrap justify-content-between mb-1 mb-sm-0">
											<h6 data-v-4d50203e="">Client Meeting</h6><small data-v-4d50203e="" class="text-muted">45 min ago</small>
										</div>
										<p data-v-4d50203e="">Project meeting with john @10:15am.</p>
										<div data-v-4d50203e="" class="media">
											<div data-v-4d50203e="" class="media-aside align-self-start"><span class="b-avatar badge-secondary rounded-circle" data-v-4d50203e=""><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar" style="border-radius: 50% !important;"></span>												
												</span>
											</div>
											<div data-v-4d50203e="" class="media-body">
												<h6 data-v-4d50203e="">John Doe (Client)</h6>
												<p data-v-4d50203e="" class="mb-0">CEO of Infibeam</p>
											</div>
										</div>
									</li>
									<li data-v-4d50203e="" class="timeline-item timeline-variant-info" data-v-879a380c="">
										<div data-v-4d50203e="" class="timeline-item-point"></div>
										<div data-v-4d50203e="" class="d-flex flex-sm-row flex-column flex-wrap justify-content-between mb-1 mb-sm-0">
											<h6 data-v-4d50203e="">Create a new project for client</h6><small data-v-4d50203e="" class="timeline-item-time text-nowrap text-muted">2 days ago</small>
										</div>
										<p data-v-4d50203e="" class="mb-0">Add files to new design folder</p>
									</li>
								</ul>
							</div>
							<!---->
							<!---->
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="card">
							<!---->
							<!---->
							<div class="card-body">
								<!---->
								<!---->
								<h4 class="card-title">Permissions</h4>
								<h6 class="card-subtitle text-muted">Permission according to roles</h6>
							</div>
							<div class="mb-0 table-responsive">
								<table role="table" aria-busy="false" aria-colcount="5" class="table b-table table-striped" id="__BVID__874">
									<!---->
									<!---->
									<thead role="rowgroup" class="">
										<!---->
										<tr role="row" class="">
											<th role="columnheader" scope="col" aria-colindex="1" class="">
												<div>Module</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="2" class="">
												<div>Read</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="3" class="">
												<div>Write</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="4" class="">
												<div>Create</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="5" class="">
												<div>Delete</div>
											</th>
										</tr>
									</thead>
									<tbody role="rowgroup">
										<!---->
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">Admin</td>
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
										</tr>
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">Staff</td>
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
										</tr>
										<!---->
										<!---->
									</tbody>
									<!---->
								</table>
							</div>
							<!---->
							<!---->
						</div>
					</div>
				</div>
				<div data-v-9a6e255c="" class="card">
					<!---->
					<!---->
					<div data-v-9a6e255c="" class="m-2">
						<div data-v-9a6e255c="" class="row">
							<div data-v-9a6e255c="" class="d-flex align-items-center justify-content-start mb-1 mb-md-0 col-md-6 col-12">
								<a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/add" class="btn btn-primary" target="_self"> Add Record </a>
							</div>
							<div data-v-9a6e255c="" class="col-md-6 col-12">
								<div data-v-9a6e255c="" class="d-flex align-items-center justify-content-end">
									<input data-v-9a6e255c="" type="text" placeholder="Search..." class="d-inline-block mr-1 form-control" id="__BVID__916">
                                    <select class="form-control" id="users-list-role">
                                        <option value="">All</option>
                                        <option value="user">User</option>
                                        <option value="staff">Staff</option>
                                    </select>                                    
								</div>
							</div>
						</div>
					</div>
					<div data-v-9a6e255c="" class="position-relative table-responsive">
						<table role="table" aria-busy="false" aria-colcount="7" class="table b-table" id="__BVID__921">
							<!---->
							<!---->
							<thead role="rowgroup" class="">
								<!---->
								<tr role="row" class="">
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="descending" class="">
										<div>#</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto feather feather-trending-up">
											<polyline data-v-9a6e255c="" points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
											<polyline data-v-9a6e255c="" points="17 6 23 6 23 12"></polyline>
										</svg><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
										<div>Client</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="4" aria-sort="none" class="">
										<div>Total</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
										<div>Issued Date</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="6" aria-sort="none" class="">
										<div>Balance</div><span class="sr-only"> (Click to sort Ascending)</span>
									</th>
									<th role="columnheader" scope="col" aria-colindex="7" class="">
										<div>Actions</div><span class="sr-only"> (Click to clear sorting)</span>
									</th>
								</tr>
							</thead>
							<tbody role="rowgroup">
								<!---->
								<tr role="row" id="__BVID__921__row_5036" data-pk="5036" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5036" class="font-weight-bold" target="_self"> #5036 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-success rounded-circle" id="invoice-row-5036" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path data-v-9a6e255c="" d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline data-v-9a6e255c="" points="22 4 12 14.01 9 11.01"></polyline></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-danger rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Andrew Burns </span><small data-v-9a6e255c="" class="text-muted">pwillis@cross.org</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$3171</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 19 Apr 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class="">-$205</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__943">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__943__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__943__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5036" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5035" data-pk="5035" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5035" class="font-weight-bold" target="_self"> #5035 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-primary rounded-circle" id="invoice-row-5035" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path data-v-9a6e255c="" d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline data-v-9a6e255c="" points="17 21 17 13 7 13 7 21"></polyline><polyline data-v-9a6e255c="" points="7 3 7 8 15 8"></polyline></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-warning rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>DC</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Dana Carey </span><small data-v-9a6e255c="" class="text-muted">jamesjoel@chapman.net</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$4263</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 20 Jul 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class="">$762</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5035-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5035-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__961">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__961__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__961__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5035" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5034" data-pk="5034" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5034" class="font-weight-bold" target="_self"> #5034 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-success rounded-circle" id="invoice-row-5034" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path data-v-9a6e255c="" d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline data-v-9a6e255c="" points="22 4 12 14.01 9 11.01"></polyline></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-danger rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>TS</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Tammy Sanchez </span><small data-v-9a6e255c="" class="text-muted">eric47@george-castillo.com</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$4836</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 10 Jul 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5034-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5034-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__979">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__979__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__979__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5034" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5033" data-pk="5033" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5033" class="font-weight-bold" target="_self"> #5033 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-warning rounded-circle" id="invoice-row-5033" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path data-v-9a6e255c="" d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path data-v-9a6e255c="" d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-primary rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Lori Wells </span><small data-v-9a6e255c="" class="text-muted">calvin07@joseph-edwards.org</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$2869</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 12 Jul 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5033-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5033-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__997">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__997__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__997__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5033" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5032" data-pk="5032" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5032" class="font-weight-bold" target="_self"> #5032 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-danger rounded-circle" id="invoice-row-5032" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle data-v-9a6e255c="" cx="12" cy="12" r="10"></circle><line data-v-9a6e255c="" x1="12" y1="16" x2="12" y2="12"></line><line data-v-9a6e255c="" x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-success rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>RP</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Richard Payne </span><small data-v-9a6e255c="" class="text-muted">ywagner@jones.com</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$5181</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 31 May 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5032-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5032-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__1015">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__1015__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1015__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5032" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5031" data-pk="5031" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5031" class="font-weight-bold" target="_self"> #5031 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-warning rounded-circle" id="invoice-row-5031" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path data-v-9a6e255c="" d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path data-v-9a6e255c="" d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-primary rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Jennifer Summers </span><small data-v-9a6e255c="" class="text-muted">john77@anderson.net</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$3313</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 21 Aug 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5031-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5031-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__1033">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__1033__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1033__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5031" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5030" data-pk="5030" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5030" class="font-weight-bold" target="_self"> #5030 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-primary rounded-circle" id="invoice-row-5030" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path data-v-9a6e255c="" d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline data-v-9a6e255c="" points="17 21 17 13 7 13 7 21"></polyline><polyline data-v-9a6e255c="" points="7 3 7 8 15 8"></polyline></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-warning rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>MJR</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Mr. Justin Richardson </span><small data-v-9a6e255c="" class="text-muted">jeffrey25@martinez-hodge.com</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$5565</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 07 Apr 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5030-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5030-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__1051">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__1051__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1051__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5030" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5029" data-pk="5029" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5029" class="font-weight-bold" target="_self"> #5029 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-success rounded-circle" id="invoice-row-5029" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path data-v-9a6e255c="" d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline data-v-9a6e255c="" points="22 4 12 14.01 9 11.01"></polyline></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-danger rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>NT</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Nicholas Tanner </span><small data-v-9a6e255c="" class="text-muted">desiree61@kelly.com</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$3851</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 29 Oct 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5029-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5029-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__1069">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__1069__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1069__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5029" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5028" data-pk="5028" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5028" class="font-weight-bold" target="_self"> #5028 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-success rounded-circle" id="invoice-row-5028" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path data-v-9a6e255c="" d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline data-v-9a6e255c="" points="22 4 12 14.01 9 11.01"></polyline></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-danger rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>CM</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Crystal Mays </span><small data-v-9a6e255c="" class="text-muted">robertscott@garcia.com</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$3325</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 18 May 2019 </span>
									</td>
									<td aria-colindex="6" role="cell" class="">$361</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5028-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5028-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__1087">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__1087__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1087__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5028" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__921__row_5027" data-pk="5027" class="">
									<td aria-colindex="1" role="cell" class=""><a data-v-9a6e255c="" href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/preview/5027" class="font-weight-bold" target="_self"> #5027 </a>
									</td>
									<td aria-colindex="2" role="cell" class=""><span data-v-9a6e255c="" class="b-avatar badge-light-secondary rounded-circle" id="invoice-row-5027" style="width: 32px; height: 32px;"><span class="b-avatar-custom"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line><polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></span>
										<!---->
										</span>
										<!---->
									</td>
									<td aria-colindex="3" role="cell" class="">
										<div data-v-9a6e255c="" class="media">
											<div data-v-9a6e255c="" class="media-aside align-self-center"><span data-v-9a6e255c="" class="b-avatar badge-light-info rounded-circle" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>MG</span></span>
												<!---->
												</span>
											</div>
											<div data-v-9a6e255c="" class="media-body"><span data-v-9a6e255c="" class="font-weight-bold d-block text-nowrap"> Mary Garcia </span><small data-v-9a6e255c="" class="text-muted">gjordan@fernandez-coleman.com</small>
											</div>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">$2719</td>
									<td aria-colindex="5" role="cell" class=""><span data-v-9a6e255c="" class="text-nowrap"> 13 Jan 2020 </span>
									</td>
									<td aria-colindex="6" role="cell" class=""><span data-v-9a6e255c="" class="badge badge-light-success badge-pill"> Paid </span>
									</td>
									<td aria-colindex="7" role="cell" class="">
										<div data-v-9a6e255c="" class="text-nowrap">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5027-send-icon" class="cursor-pointer feather feather-send">
												<line data-v-9a6e255c="" x1="22" y1="2" x2="11" y2="13"></line>
												<polygon data-v-9a6e255c="" points="22 2 15 22 11 13 2 9 22 2"></polygon>
											</svg>
											<!---->
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5027-preview-icon" class="mx-1 feather feather-eye">
												<path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
												<circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle>
											</svg>
											<!---->
											<div data-v-9a6e255c="" class="dropdown b-dropdown btn-group" id="__BVID__1105">
												<!---->
												<button aria-haspopup="true" aria-expanded="false" type="button" class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret" id="__BVID__1105__BV_toggle_">
													<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle data-v-9a6e255c="" cx="12" cy="12" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="5" r="1"></circle>
														<circle data-v-9a6e255c="" cx="12" cy="19" r="1"></circle>
													</svg>
												</button>
												<ul role="menu" tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__1105__BV_toggle_">
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
																<path data-v-9a6e255c="" d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
																<polyline data-v-9a6e255c="" points="7 10 12 15 17 10"></polyline>
																<line data-v-9a6e255c="" x1="12" y1="15" x2="12" y2="3"></line>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Download</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/invoice/edit/5027" class="dropdown-item" role="menuitem" target="_self">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
																<path data-v-9a6e255c="" d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
																<path data-v-9a6e255c="" d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Edit</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
																<polyline data-v-9a6e255c="" points="3 6 5 6 21 6"></polyline>
																<path data-v-9a6e255c="" d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Delete</span>
														</a>
													</li>
													<li data-v-9a6e255c="" role="presentation">
														<a role="menuitem" href="#" target="_self" class="dropdown-item">
															<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
																<rect data-v-9a6e255c="" x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path data-v-9a6e255c="" d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg><span data-v-9a6e255c="" class="align-middle ml-50">Duplicate</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								<!---->
								<!---->
							</tbody>
							<!---->
						</table>
					</div>
					<div data-v-9a6e255c="" class="mx-2 mb-2">
						<div data-v-9a6e255c="" class="row">
							<div data-v-9a6e255c="" class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span data-v-9a6e255c="" class="text-muted">Showing 1 to 10 of 50 entries</span>
							</div>
							<div data-v-9a6e255c="" class="d-flex align-items-center justify-content-center justify-content-sm-end col-sm-6 col-12">
								<ul data-v-9a6e255c="" role="menubar" aria-disabled="false" aria-label="Pagination" class="pagination mb-0 mt-1 mt-sm-0 b-pagination">
									<!---->
									<li role="presentation" aria-hidden="true" class="page-item disabled prev-item"><span role="menuitem" aria-label="Go to previous page" aria-disabled="true" class="page-link"><svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline data-v-9a6e255c="" points="15 18 9 12 15 6"></polyline></svg></span>
									</li>
									<!---->
									<!---->
									<li role="presentation" class="page-item active">
										<button role="menuitemradio" type="button" aria-label="Go to page 1" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0" class="page-link">1</button>
									</li>
									<li role="presentation" class="page-item">
										<button role="menuitemradio" type="button" aria-label="Go to page 2" aria-checked="false" aria-posinset="2" aria-setsize="5" tabindex="-1" class="page-link">2</button>
									</li>
									<li role="presentation" class="page-item">
										<button role="menuitemradio" type="button" aria-label="Go to page 3" aria-checked="false" aria-posinset="3" aria-setsize="5" tabindex="-1" class="page-link">3</button>
									</li>
									<li role="presentation" class="page-item bv-d-xs-down-none">
										<button role="menuitemradio" type="button" aria-label="Go to page 4" aria-checked="false" aria-posinset="4" aria-setsize="5" tabindex="-1" class="page-link">4</button>
									</li>
									<li role="presentation" class="page-item bv-d-xs-down-none">
										<button role="menuitemradio" type="button" aria-label="Go to page 5" aria-checked="false" aria-posinset="5" aria-setsize="5" tabindex="-1" class="page-link">5</button>
									</li>
									<!---->
									<!---->
									<li role="presentation" class="page-item next-item">
										<button role="menuitem" type="button" tabindex="-1" aria-label="Go to next page" class="page-link">
											<svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
												<polyline data-v-9a6e255c="" points="9 18 15 12 9 6"></polyline>
											</svg>
										</button>
									</li>
									<!---->
								</ul>
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


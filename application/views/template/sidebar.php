	<!-- Page Wrapper -->
	<?php if ($this->session->userdata('access') == "Vice President") { ?>

		<body id="page-top">
			<style>
				body {
					font-family: "Roboto", sans-serif;
					font-weight: 600;
					font-size: larger;
					width: 100%;
					height: 100%;
				}

				#accordionSidebar {
					background-color: lightskyblue !important;
				}
			</style>
			<div id="wrapper">
				<!-- Sidebar -->
				<ul class=" navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
					<!-- Sidebar - Brand -->
					<a class=" sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("dashboard"); ?>">
						<div class="sidebar-brand-icon">
							<img class="img-profile rounded-circle" style=" width:2cm; height:1.5cm;" src="<?= base_url('assets/img/OIP.JPG');  ?>"></img>
						</div>
						<div class="sidebar-brand-text mx-3">ARMI - APLOG</div>
					</a>

					<!-- Divider -->
					<hr class="sidebar-divider my-0" />

					<!-- Nav Item - Dashboard -->
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url("dashboard"); ?>">
							<i class="fas fa-fw fa-tachometer-alt"></i>
							<span>Dashboard</span></a>
					</li>

					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item">
						<a class="nav-link collapsed" href="<?= base_url("cluster_umum") ?>">
							<i class="fas fa-fw fa-solid fa-calculator"></i>
							<span>RMI Assessment</span>
						</a>
					</li>

					<!-- Nav Item - Utilities Collapse Menu -->
					<li class="nav-item">
						<a class="nav-link collapsed" href="<?= base_url("asessment_eval") ?>">
							<i class="fas fa-fw fa-file-archive"></i>
							<span>Asessment Evaluation </span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link collapsed" href="<?= base_url("params_umum") ?>">
							<i class="fas fa-fw fa-solid fa-question-circle"></i>
							<span>Parameter Questions</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url("user_control") ?>">
							<i class="fas fa-fw fa-group"></i>
							<span>User Control</span></a>
					</li>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block" />

					<!-- Sidebar Toggler (Sidebar) -->
					<div class="text-center d-none d-md-inline">
						<button class="rounded-circle border-0" id="sidebarToggle"></button>
					</div>
				</ul>
				<!-- End of Sidebar -->

				<!-- Content Wrapper -->
				<div id="content-wrapper" class="d-flex flex-column">
					<!-- Main Content -->
					<div id="content">
						<!-- Topbar -->
						<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
							<!-- Sidebar Toggle (Topbar) -->
							<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
								<i class="fa fa-bars"></i>
							</button>

							<!-- Topbar Search -->
							<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
								<div class="input-group">
									<div class="input-group-append">
										<a class="navbar-brand" href="#">
											<img src="https://ic.aplog.co/global/web/frontend/images/logo.png" width="200" height="50" style="min-width: auto; max-width: fit-content;">
										</a>
									</div>
								</div>
							</form>

							<!-- Topbar Navbar -->
							<ul class="navbar-nav ml-auto">
								<!-- Nav Item - Search Dropdown (Visible Only XS) -->
								<li class="nav-item dropdown no-arrow d-sm-none">
									<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-search fa-fw"></i>
									</a>
									<!-- Dropdown - Messages -->
									<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
										<form class="form-inline mr-auto w-100 navbar-search">
											<div class="input-group">
												<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
												<div class="input-group-append">
													<button class="btn btn-primary" type="button">
														<i class="fas fa-search fa-sm"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
								</li>


								<div class="topbar-divider d-none d-sm-block"></div>

								<!-- Nav Item - User Information -->
								<li class="nav-item dropdown no-arrow">
									<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name'); ?></span><br><span class="mr-2 d-none d-lg-inline text-gray-600 small">(<?= $this->session->userdata('access'); ?>)</span>
										<img class="img-profile rounded-circle" src="<?= base_url('assets/img/OIP.JPG');  ?>" />
									</a>
									<!-- Dropdown - User Information -->
									<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
										<a class="dropdown-item" href="#">
											<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
											Profile
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url("logout"); ?>" data-toggle=" modal" data-target="#logoutModal">
											<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
											Logout
										</a>
									</div>
								</li>
							</ul>
						</nav>
						<!-- End of Topbar -->

					<?php } elseif ($this->session->userdata('access') == "Manager") { ?>

						<body id="page-top">
							<style>
								body {
									font-family: "Roboto", sans-serif;
									font-weight: 600;
									font-size: larger;
									width: 100%;
									height: 100%;
								}

								#accordionSidebar {
									background-color: lightskyblue !important;
								}
							</style>

							<div id="wrapper">
								<!-- Sidebar -->
								<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
									<!-- Sidebar - Brand -->
									<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("dashboard_approval"); ?>">
										<div class="sidebar-brand-icon">
											<img class="img-profile rounded-circle" style=" width:2cm; height:1.5cm;" src="<?= base_url('assets/img/OIP.JPG');  ?>"></img>
										</div>
										<div class="sidebar-brand-text mx-3">ARMI - APLOG</div>
									</a>

									<!-- Divider -->
									<hr class="sidebar-divider my-0" />

									<!-- Nav Item - Dashboard -->
									<li class="nav-item active">
										<a class="nav-link" href="<?= base_url("dashboard_approval"); ?>">
											<i class="fas fa-fw fa-tachometer-alt"></i>
											<span>Dashboard</span></a>
									</li>

									<!-- Nav Item - Pages Collapse Menu -->
									<!-- Nav Item - Pages Collapse Menu -->
									<li class="nav-item">
										<a class="nav-link collapsed" href="<?= base_url("cluster_umum_") ?>">
											<i class="fas fa-fw fa-solid fa-calculator"></i>
											<span>RMI Assessment</span>
										</a>
									</li>

									<!-- Nav Item - Utilities Collapse Menu -->
									<li class="nav-item">
										<a class="nav-link collapsed" href="<?= base_url("asessment_eval_") ?>">
											<i class=" fas fa-fw fa-file-archive"></i>
											<span>Asessment Evaluation</span>
										</a>
									</li>



									<!-- Divider -->
									<hr class="sidebar-divider" />

									<!-- Divider -->
									<hr class="sidebar-divider d-none d-md-block" />

									<!-- Sidebar Toggler (Sidebar) -->
									<div class="text-center d-none d-md-inline">
										<button class="rounded-circle border-0" id="sidebarToggle"></button>
									</div>
								</ul>
								<!-- End of Sidebar -->

								<!-- Content Wrapper -->
								<div id="content-wrapper" class="d-flex flex-column">
									<!-- Main Content -->
									<div id="content">
										<!-- Topbar -->
										<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
											<!-- Sidebar Toggle (Topbar) -->
											<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
												<i class="fa fa-bars"></i>
											</button>

											<!-- Topbar Search -->
											<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
												<div class="input-group">
													<div class="input-group-append">
														<a class="navbar-brand" href="#">
															<img src="https://ic.aplog.co/global/web/frontend/images/logo.png" width="200" height="50" style="min-width: auto; max-width: fit-content;">
														</a>
													</div>
												</div>
											</form>

											<!-- Topbar Navbar -->
											<ul class="navbar-nav ml-auto">
												<!-- Nav Item - Search Dropdown (Visible Only XS) -->
												<li class="nav-item dropdown no-arrow d-sm-none">
													<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fas fa-search fa-fw"></i>
													</a>
													<!-- Dropdown - Messages -->
													<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
														<form class="form-inline mr-auto w-100 navbar-search">
															<div class="input-group">
																<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
																<div class="input-group-append">
																	<button class="btn btn-primary" type="button">
																		<i class="fas fa-search fa-sm"></i>
																	</button>
																</div>
															</div>
														</form>
													</div>
												</li>


												<div class="topbar-divider d-none d-sm-block"></div>

												<!-- Nav Item - User Information -->
												<li class="nav-item dropdown no-arrow">
													<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name'); ?></span><br><span class="mr-2 d-none d-lg-inline text-gray-600 small">(<?= $this->session->userdata('access'); ?>)</span>
														<img class="img-profile rounded-circle" src="<?= base_url('assets/img/OIP.JPG');  ?>" />
													</a>
													<!-- Dropdown - User Information -->
													<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
														<a class="dropdown-item" href="#">
															<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
															Profile
														</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="<?= base_url("logout"); ?>" data-toggle=" modal" data-target="#logoutModal">
															<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
															Logout
														</a>
													</div>
												</li>
											</ul>
										</nav>
										<!-- End of Topbar -->

									<?php } elseif ($this->session->userdata('access') == "Officer") { ?>
										<style>
											#accordionSidebar {
												background-color: lightskyblue !important;
											}
										</style>

										<body id="page-top">
											<style>
												body {
													font-family: "Roboto", sans-serif;
													font-weight: 600;
													font-size: larger;
													width: 100%;
													height: 100%;
												}

												#accordionSidebar {
													background-color: lightskyblue !important;
												}
											</style>

											<div id="wrapper">
												<!-- Sidebar -->
												<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
													<!-- Sidebar - Brand -->
													<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("dashboard_officer"); ?>">
														<div class="sidebar-brand-icon">
															<img class="img-profile rounded-circle" style=" width:2cm; height:1.5cm;" src="<?= base_url('assets/img/OIP.JPG');  ?>"></img>
														</div>
														<div class="sidebar-brand-text mx-3">ARMI - APLOG</div>
													</a>

													<!-- Divider -->
													<hr class="sidebar-divider my-0" />

													<!-- Nav Item - Dashboard -->
													<li class="nav-item active">
														<a class="nav-link" href="<?= base_url("dashboard_officer"); ?>">
															<i class="fas fa-fw fa-tachometer-alt"></i>
															<span>Dashboard</span></a>
													</li>

													<!-- Nav Item - Pages Collapse Menu -->
													<li class="nav-item">
														<a class="nav-link collapsed" href="<?= base_url("cluster_umum__") ?>">
															<i class="fas fa-fw fa-solid fa-calculator"></i>
															<span>RMI Assessment</span>
														</a>
													</li>

													<!-- Nav Item - Utilities Collapse Menu -->
													<li class="nav-item">
														<a class="nav-link collapsed" href="<?= base_url("asessment_eval__") ?>">
															<i class=" fas fa-fw fa-file-archive"></i>
															<span>Asessment Evaluation</span>
														</a>
													</li>

													<!-- Divider -->
													<hr class="sidebar-divider d-none d-md-block" />

													<!-- Sidebar Toggler (Sidebar) -->
													<div class="text-center d-none d-md-inline">
														<button class="rounded-circle border-0" id="sidebarToggle"></button>
													</div>
												</ul>
												<!-- End of Sidebar -->

												<!-- Content Wrapper -->
												<div id="content-wrapper" class="d-flex flex-column">
													<!-- Main Content -->
													<div id="content">
														<!-- Topbar -->
														<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
															<!-- Sidebar Toggle (Topbar) -->
															<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
																<i class="fa fa-bars"></i>
															</button>

															<!-- Topbar Search -->
															<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
																<div class="input-group">
																	<div class="input-group-append">
																		<a class="navbar-brand" href="#">
																			<img src="https://ic.aplog.co/global/web/frontend/images/logo.png" width="200" height="50" style="min-width: auto; max-width: fit-content;">
																		</a>
																	</div>
																</div>
															</form>

															<!-- Topbar Navbar -->
															<ul class="navbar-nav ml-auto">
																<!-- Nav Item - Search Dropdown (Visible Only XS) -->
																<li class="nav-item dropdown no-arrow d-sm-none">
																	<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="fas fa-search fa-fw"></i>
																	</a>
																	<!-- Dropdown - Messages -->
																	<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
																		<form class="form-inline mr-auto w-100 navbar-search">
																			<div class="input-group">
																				<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
																				<div class="input-group-append">
																					<button class="btn btn-primary" type="button">
																						<i class="fas fa-search fa-sm"></i>
																					</button>
																				</div>
																			</div>
																		</form>
																	</div>
																</li>


																<div class="topbar-divider d-none d-sm-block"></div>

																<!-- Nav Item - User Information -->
																<li class="nav-item dropdown no-arrow">
																	<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('name'); ?></span><br><span class="mr-2 d-none d-lg-inline text-gray-600 small">(<?= $this->session->userdata('access'); ?>)</span>
																		<img class="img-profile rounded-circle" src="<?= base_url('assets/img/OIP.JPG');  ?>" />
																	</a>
																	<!-- Dropdown - User Information -->
																	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
																		<a class="dropdown-item" href="#">
																			<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
																			Profile
																		</a>
																		<div class="dropdown-divider"></div>
																		<a class="dropdown-item" href="<?= base_url("logout"); ?>"" data-toggle=" modal" data-target="#logoutModal">
																			<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
																			Logout
																		</a>
																	</div>
																</li>
															</ul>
														</nav>
														<!-- End of Topbar -->

													<?php } else { ?>
														Something went wrong
													<?php } ?>
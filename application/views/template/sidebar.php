<body id="page-top">
	<style>
		body {
			font-family: "Roboto", sans-serif;
			font-weight: 600;
			font-size: larger;
			width: 100%;
			height: 100%;
		}
	</style>
	<!-- Page Wrapper -->
	<?php if ($this->session->userdata('access') == "Super Admin") { ?>

		<div id="wrapper">
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("dashboard"); ?>">
					<div class="sidebar-brand-icon">
						<img class="img-profile rounded-circle" style=" width:2cm; height:1.5cm;" src="<?= base_url('assets/img/OIP.JPG');  ?>"></img>
					</div>
					<div class="sidebar-brand-text mx-3">SAMRI - APLOG</div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0" />

				<!-- Nav Item - Dashboard -->
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url("dashboard"); ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider" />

				<!-- Heading -->
				<div class="sidebar-heading">SAMRI Calculator</div>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-solid fa-calculator"></i>
						<span>RMI Calculator</span>
					</a>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Cluster</h6>
							<a class="collapse-item" href="#">Cluster Asuransi</a>
							<a class="collapse-item" href="#">Cluster Bank</a>
							<a class="collapse-item" href="<?= base_url("cluster_umum") ?>">Cluster Umum</a>
						</div>
					</div>
				</li>

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-file-archive"></i>
						<span>Evidence</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Evidence Cluster:</h6>
							<a class="collapse-item" href="#">Evidence Cluster Asuransi</a>
							<a class="collapse-item" href="#">Evidence Cluster Bank</a>
							<a class="collapse-item" href="<?= base_url("evidence_umum") ?>">Evidence Cluster Umum</a>
						</div>
					</div>
				</li>



				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("approval") ?>" data-target="#" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-user-check"></i>
						<span>Approval</span>
					</a>

				</li>

				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseParams" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-solid fa-question-circle"></i>
						<span>Parameter Questions</span>
					</a>
					<div id="collapseParams" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Cluster:</h6>
							<a class="collapse-item" href="#">Params Cluster Asuransi</a>
							<a class="collapse-item" href="#">Params Cluster Bank</a>
							<a class="collapse-item" href="<?= base_url("params_umum") ?>">Params Cluster Umum</a>
						</div>
					</div>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider" />

				<!-- Nav Item - Charts -->
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
									<a class="dropdown-item" href="<?= base_url("logout"); ?>"" data-toggle=" modal" data-target="#logoutModal">
										<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
										Logout
									</a>
								</div>
							</li>
						</ul>
					</nav>
					<!-- End of Topbar -->

				<?php } elseif ($this->session->userdata('access') == "Approval") { ?>

					<div id="wrapper">
						<!-- Sidebar -->
						<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
							<!-- Sidebar - Brand -->
							<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("dashboard"); ?>">
								<div class="sidebar-brand-icon">
									<img class="img-profile rounded-circle" style=" width:2cm; height:1.5cm;" src="<?= base_url('assets/img/OIP.JPG');  ?>"></img>
								</div>
								<div class="sidebar-brand-text mx-3">SAMRI - APLOG</div>
							</a>

							<!-- Divider -->
							<hr class="sidebar-divider my-0" />

							<!-- Nav Item - Dashboard -->
							<li class="nav-item active">
								<a class="nav-link" href="<?= base_url("dashboard"); ?>">
									<i class="fas fa-fw fa-tachometer-alt"></i>
									<span>Dashboard</span></a>
							</li>

							<!-- Divider -->
							<hr class="sidebar-divider" />

							<!-- Heading -->
							<div class="sidebar-heading">SAMRI Calculator</div>

							<!-- Nav Item - Pages Collapse Menu -->

							<!-- Nav Item - Utilities Collapse Menu -->
							<li class="nav-item">
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
									<i class="fas fa-fw fa-file-archive"></i>
									<span>Evidence</span>
								</a>
								<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
									<div class="bg-white py-2 collapse-inner rounded">
										<h6 class="collapse-header">Evidence Cluster:</h6>
										<a class="collapse-item" href="#">Evidence Cluster Asuransi</a>
										<a class="collapse-item" href="#">Evidence Cluster Bank</a>
										<a class="collapse-item" href="<?= base_url("evidence_umumApproval") ?>">Evidence Cluster Umum</a>
									</div>
								</div>
							</li>



							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('approval_'); ?>" data-target="#" aria-expanded="true" aria-controls="collapseUtilities">
									<i class="fas fa-fw fa-user-check"></i>
									<span>Approval</span>
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
												<a class="dropdown-item" href="<?= base_url("logout"); ?>"" data-toggle=" modal" data-target="#logoutModal">
													<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
													Logout
												</a>
											</div>
										</li>
									</ul>
								</nav>
								<!-- End of Topbar -->

							<?php } elseif ($this->session->userdata('access') == "Admin") { ?>

								<div id="wrapper">
									<!-- Sidebar -->
									<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
										<!-- Sidebar - Brand -->
										<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("dashboard"); ?>">
											<div class="sidebar-brand-icon">
												<img class="img-profile rounded-circle" style=" width:2cm; height:1.5cm;" src="<?= base_url('assets/img/OIP.JPG');  ?>"></img>
											</div>
											<div class="sidebar-brand-text mx-3">SAMRI - APLOG</div>
										</a>

										<!-- Divider -->
										<hr class="sidebar-divider my-0" />

										<!-- Nav Item - Dashboard -->
										<li class="nav-item active">
											<a class="nav-link" href="<?= base_url("dashboard"); ?>">
												<i class="fas fa-fw fa-tachometer-alt"></i>
												<span>Dashboard</span></a>
										</li>

										<!-- Divider -->
										<hr class="sidebar-divider" />

										<!-- Heading -->
										<div class="sidebar-heading">SAMRI Calculator</div>

										<!-- Nav Item - Pages Collapse Menu -->
										<li class="nav-item">
											<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
												<i class="fas fa-fw fa-solid fa-calculator"></i>
												<span>RMI Calculator</span>
											</a>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
												<div class="bg-white py-2 collapse-inner rounded">
													<h6 class="collapse-header">Cluster</h6>
													<a class="collapse-item" href="#">Cluster Asuransi</a>
													<a class="collapse-item" href="#">Cluster Bank</a>
													<a class="collapse-item" href="<?= base_url("cluster_umum_") ?>">Cluster Umum</a>
												</div>
											</div>
										</li>

										<!-- Nav Item - Utilities Collapse Menu -->
										<li class="nav-item">
											<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
												<i class="fas fa-fw fa-file-archive"></i>
												<span>Evidence</span>
											</a>
											<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
												<div class="bg-white py-2 collapse-inner rounded">
													<h6 class="collapse-header">Evidence Cluster:</h6>
													<a class="collapse-item" href="#">Evidence Cluster Asuransi</a>
													<a class="collapse-item" href="#">Evidence Cluster Bank</a>
													<a class="collapse-item" href="<?= base_url("evidence_umumAdmin") ?>">Evidence Cluster Umum</a>
												</div>
											</div>
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
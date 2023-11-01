<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<?php if ($this->session->flashdata('msg')) { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('msg') ?>
							<a href="<?= base_url('/'); ?>"><button type="button" class="btn-close" data-bs-dismiss="alert"></button></a>
						</div>
					<?php }; ?>
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block">
								<img src="<?= ('assets/img/OIP.jpg'); ?>" alt="">
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Welcome Back to SAMRI- APLOG</h1>
									</div>
									<form class="user" action="<?= base_url("actLogin"); ?>" method="post">
										<div class="form-group">
											<input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
										</div>

										<button type="submit" class="btn btn-primary btn-user btn-block" name="Submit"><i class="fa fa-sign-in"></i> Login</button>
										<hr>
									</form>
									<center>
										<button class="btn btn-outline-dark text-center">
											<a class="nav-link" href="<?= base_url("about") ?>" data-target="#" aria-expanded="true" aria-controls="collapseUtilities">
												<i class="fas fa-fw fa-info-circle"></i>
												<span>About SAMRIs</span>
											</a>
										</button>
									</center>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
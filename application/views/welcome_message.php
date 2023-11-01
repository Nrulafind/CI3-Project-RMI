<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body>

	<body id="page-top">

		<!-- End of Topbar -->

		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- 404 Error Text -->
			<div class="text-center">
				<div class="error mx-auto" data-text="404">404</div>
				<p class="lead text-gray-800 mb-5">Page Not Found</p>
				<p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
				<a href="<?php if ($this->session->userdata('access') == 'Admin') {
								echo base_url('dashboard_admin');
							} elseif ($this->session->userdata('access') == 'Approval') {
								echo base_url('dashboard_approval');
							} elseif ($this->session->userdata('access') == 'Super Admin') {
								echo base_url('dashboard');
							} else {
								echo base_url('/');
							} ?>">&larr; Back to Dashboard</a>
			</div>

		</div>
		<!-- /.container-fluid -->

		</div>


	</body>

	</html>
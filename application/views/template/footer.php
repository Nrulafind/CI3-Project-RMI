<?php if ($this->session->userdata('access') == "Super Admin") { ?>
	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; SAMRI-APLOG 2023 || Semanis dan Selembut Sutra Halo aku Shani</span>
			</div>
			<br>
			<div class="text-center my-auto">
				<ul class="text-center">
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-twitter"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-instagram"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-github"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-linkedin"></i></a></span>
				</ul>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Select "Logout" below if you are ready to end your current session.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor') ?>/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/adminsb2/vendor/bootstrap/js/bootstrap.bundle.min.js');  ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery-easing/jquery.easing.min.js');  ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/adminsb2/js/sb-admin-2.min.js');  ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/adminsb2/vendor/chart.js/Chart.min.js');  ?>"></script>

	<!-- Page level custom scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	</body>

	</html>
<?php } elseif ($this->session->userdata('access') == "Approval") { ?>
	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; SAMRI-APLOG 2023 || Semanis dan Selembut Sutra Halo aku Shani</span>
			</div>
			<br>
			<div class="text-center my-auto">
				<ul class="text-center">
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-twitter"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-instagram"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-github"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-linkedin"></i></a></span>
				</ul>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Select "Logout" below if you are ready to end your current session.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor') ?>/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/adminsb2/vendor/bootstrap/js/bootstrap.bundle.min.js');  ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery-easing/jquery.easing.min.js');  ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/adminsb2/js/sb-admin-2.min.js');  ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/adminsb2/vendor/chart.js/Chart.min.js');  ?>"></script>

	<!-- Page level custom scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	</body>

	</html>
<?php } elseif ($this->session->userdata('access') == "Admin") { ?>
	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; SAMRI-APLOG 2023 || Made With "Bismillah"</span>
			</div>
			<br>
			<div class="text-center my-auto">
				<ul class="text-center">
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-twitter"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-instagram"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-github"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-linkedin"></i></a></span>
				</ul>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Select "Logout" below if you are ready to end your current session.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor') ?>/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/adminsb2/vendor/bootstrap/js/bootstrap.bundle.min.js');  ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery-easing/jquery.easing.min.js');  ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/adminsb2/js/sb-admin-2.min.js');  ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/adminsb2/vendor/chart.js/Chart.min.js');  ?>"></script>

	<!-- Page level custom scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	</body>

	</html>
<?php } else { ?>
	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; SAMRI-APLOG 2023 || Made With "Bismillah"</span>
			</div>
			<br>
			<div class="text-center my-auto">
				<ul class="text-center">
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-twitter"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-instagram"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-github"></i></a></span>
					<span class="ms-3"><a class="text-body-secondary" href="#"><i class="fa fa-linkedin"></i></a></span>
				</ul>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					Select "Logout" below if you are ready to end your current session.
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">
						Cancel
					</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor') ?>/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/adminsb2/vendor/bootstrap/js/bootstrap.bundle.min.js');  ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery-easing/jquery.easing.min.js');  ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/adminsb2/js/sb-admin-2.min.js');  ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/adminsb2/vendor/chart.js/Chart.min.js');  ?>"></script>

	<!-- Page level custom scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	</body>

	</html>
<?php } ?>
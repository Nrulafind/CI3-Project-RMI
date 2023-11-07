<div class="container text-center">
	<h1> Control Parameter ARMI Here</h1>
</div>

<div class="container">
	<div hidden>
		<h2>Kategori</h2>
		<div class="btn btn-outline-info">
			<a data-bs-toggle="modal" data-bs-target="#ModalAddCategory"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
		</div>
		<table class="table table-hover table-responsive">
			<thead class="text-center">
				<tr>
					<th scope="col">Category ID</th>
					<th scope="col">Nama Category</th>
					<th scope="col" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($category as $p) { ?>
					<tr>

						<td><?= $p['category_id'] ?></td>
						<td><?= $p['category_name'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-category" href="<?= base_url('edit_category') ?>/<?= $p['category_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateCategory" data-category_id="<?= $p['category_id'] ?>" data-category_nama="<?= $p['category_nama'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-category" href="<?= base_url('delete_category') ?>/<?= $p['category_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<!-- Modal add -->
		<div class="modal fade" id="ModalAddCategory" tabindex="-1" aria-labelledby="ModalAddCategory" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalAddCategory">Add Category</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('save_category') ?>">
							<div class="col-auto">
								<label for="name" class="form-label">Masukan ID Category</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="email" class="form-label">Masukan Nama Category</label>
								<input type="text" name="nama" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-outline-success">Add Category</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				// Handle the Edit button click
				$('.edit-category').click(function() {
					var categoryId = $(this).data('category_id');
					var categoryNama = $(this).data('category_nama');

					// Populate the modal fields with user data
					$('#ModalUpdateCategory').find('input[name="id"]').val(categoryId);
					$('#ModalUpdateCategory').find('input[name="nama"]').val(categoryNama);

					// Show the modal
					$('#ModalUpdateCategory').modal('show');
				});
			});
		</script>

		<!-- Update Modal  -->
		<div class="modal fade" id="ModalUpdateCategory" tabindex="-1" aria-labelledby="ModalUpdateCategory" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalUpdateCategory">Update Category</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('edit_category') ?>">
							<div class="col-auto">
								<label for="id" class="form-label" hidden>Masukan ID Category</label>
								<input type="text" name="id" class="form-control" hidden>
							</div>
							<div class="col-auto">
								<label for="name" class="form-label">Masukan Nama Category</label>
								<input type="text" name="nama" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" name="submit" class="btn btn-outline-success" onclick="updateCategory()"> Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			function updateCategory() {
				var categoryId = $('#ModalUpdateCategory input[name="id"]').val();
				var categoryNama = $('#ModalUpdateCategory input[name="nama"]').val();


				var data = {
					id: categoryId,
					nama: categoryNama,
					// Include other fields as needed
				};

				$.ajax({
					url: '<?= base_url('edit_category') ?>/' + categoryId, // Adjust the URL to include the user's ID
					method: 'POST',
					data: data,
					success: function(response) {
						// Handle the response from the server
						alert('category updated successfully');
						$('#ModalUpdateCategory').modal('hide');
						window.location.reload();
						// You can also update the user data in the table without reloading the page
						// based on the response from the server.
					},
					error: function(xhr, status, error) {
						console.error('Error updating category: ' + error);
					}
				});
			}
		</script>

	</div>


	<hr>


	<div class="card">
		<h2>Dimensi</h2>
		<div class="align-self-start btn btn-outline-info">
			<a data-bs-toggle="modal" data-bs-target="#ModalAddDimensi"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
		</div>
		<table class="table table-hover table-responsive">
			<thead class="text-center">
				<tr>
					<th scope="col">Dimensi ID</th>
					<th scope="col">Nama Dimensi</th>
					<th scope="col">Category ID</th>
					<th scope="col" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($dimensi as $d) { ?>
					<tr>
						<td><?= $d['dimensi_id'] ?></td>
						<td><?= $d['dimensi_name'] ?></td>
						<td><?= $d['category_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-dimensi" href="<?= base_url('edit_dimensi') ?>/<?= $d['dimensi_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateDimensi" data-dimensi_id="<?= $d['dimensi_id'] ?>" data-dimensi_nama="<?= $d['dimensi_name'] ?>" data-category_id="<?= $d['category_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-dimensi" href="<?= base_url('delete_dimensi') ?>/<?= $d['dimensi_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>


		<!-- Modal add -->
		<div class="modal fade" id="ModalAddDimensi" tabindex="-1" aria-labelledby="ModalAddDimensi" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalAddDimensi">Add Dimensi</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('save_dimensi') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Dimensi</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Nama Dimensi</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="col-auto">
								<label for="category_id" class="form-label">Masukan ID Category</label>
								<input type="text" name="category_id" class="form-control" value="3" readonly>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-outline-success">Add Dimensi</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				// Handle the Edit button click
				$('.edit-dimensi').click(function() {
					var dimensiId = $(this).data('dimensi_id');
					var dimensiNama = $(this).data('dimensi_nama');
					var categoryId = $(this).data('category_id');

					// Populate the modal fields with user data
					$('#ModalUpdateDimensi').find('input[name="id"]').val(dimensiId);
					$('#ModalUpdateDimensi').find('input[name="nama"]').val(dimensiNama);
					$('#ModalUpdateDimensi').find('input[name="category_id"]').val(categoryId);
					// Show the modal
					$('#ModalUpdateDimensi').modal('show');
				});
			});
		</script>

		<!-- Update Modal  -->
		<div class="modal fade" id="ModalUpdateDimensi" tabindex="-1" aria-labelledby="ModalUpdateDimensi" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalUpdateDimensi">Update Category</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('edit_category') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Dimensi</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Nama Dimensi</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="col-auto">
								<label for="category_id" class="form-label">Masukan ID Category</label>
								<input type="text" name="category_id" class="form-control" readonly>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" name="submit" class="btn btn-outline-success" onclick="updateDimensi()"> Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			function updateDimensi() {
				var dimensiId = $('#ModalUpdateDimensi input[name="id"]').val();
				var dimensiNama = $('#ModalUpdateDimensi input[name="nama"]').val();
				var categoryId = $('#ModalUpdateDimensi input[name="category_id"]').val();

				var data = {
					id: dimensiId,
					nama: dimensiNama,
					category_id: categoryId,
					// Include other fields as needed
				};

				$.ajax({
					url: '<?= base_url('edit_dimensi') ?>/' + dimensiId, // Adjust the URL to include the user's ID
					method: 'POST',
					data: data,
					success: function(response) {
						// Handle the response from the server
						alert('dimensi updated successfully');
						$('#ModalUpdateDimensi').modal('hide');
						window.location.reload();
						// You can also update the user data in the table without reloading the page
						// based on the response from the server.
					},
					error: function(xhr, status, error) {
						console.error('Error updating Dimensi: ' + error);
					}
				});
			}
		</script>


	</div>

	<hr>

	<div class="card">
		<h2>Sub Dimensi</h2>
		<div class="align-self-start btn btn-outline-info">
			<a data-bs-toggle="modal" data-bs-target="#ModalAddSubimensi"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
		</div>
		<table class="table table-hover table-responsive">
			<thead class="text-center">
				<tr>
					<th scope="col">Sub Dimensi ID</th>
					<th scope="col">Nama Sub Dimensi</th>
					<th scope="col">Dimensi ID</th>
					<th scope="col" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($sub_dimensi as $d) { ?>
					<tr>
						<td><?= $d['subdimensi_id'] ?></td>
						<td><?= $d['subdimensi_name'] ?></td>
						<td><?= $d['dimensi_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-subDimensi" href="<?= base_url('edit_subDimensi') ?>/<?= $d['subdimensi_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateDimensi" data-dimensi_id="<?= $d['subdimensi_id'] ?>" data-dimensi_nama="<?= $d['subdimensi_name'] ?>" data-category_id="<?= $d['dimensi_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-subDimensi" href="<?= base_url('delete_subDimensi') ?>/<?= $d['subdimensi_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>


	<!-- Modal add -->
	<div class="modal fade" id="ModalAddSubimensi" tabindex="-1" aria-labelledby="ModalAddSubimensi" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="ModalAddSubimensi">Add User</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('save_subDimensi') ?>">
						<div class="col-auto">
							<label for="id" class="form-label">Masukan Sub Dimensi ID</label>
							<input type="text" name="id" class="form-control">
						</div>
						<div class="col-auto">
							<label for="nama" class="form-label">Masukan Nama Sub Dimensi</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="col-auto">
							<label for="dimensi_id" class="form-label">Masukan Dimensi ID</label>
							<input type="text" name="dimensi_id" class="form-control">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-outline-success">Add User</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			// Handle the Edit button click
			$('.edit-user').click(function() {
				var userId = $(this).data('user_id');
				var userName = $(this).data('user_nama');
				var userEmail = $(this).data('user_email');
				var userPassword = $(this).data('user_password');

				// Populate the modal fields with user data
				$('#ModalUpdateuser').find('input[name="id"]').val(userId);
				$('#ModalUpdateuser').find('input[name="nama"]').val(userName);
				$('#ModalUpdateuser').find('input[name="email"]').val(userEmail);
				$('#ModalUpdateuser').find('input[name="password"]').val(userPassword);

				// Show the modal
				$('#ModalUpdateuser').modal('show');
			});
		});
	</script>




	<!-- Update Modal  -->
	<div class="modal fade" id="ModalUpdateuser" tabindex="-1" aria-labelledby="ModalUpdateuser" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="ModalUpdateuser">Update User</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('edit_user') ?>">
						<div class="col-auto">
							<label for="name" class="form-label" hidden>Masukan Nama Pengguna</label>
							<input type="text" name="id" class="form-control" hidden>
						</div>
						<div class="col-auto">
							<label for="name" class="form-label">Masukan Nama Pengguna</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="col-auto">
							<label for="email" class="form-label">Masukan email Pengguna</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="col-auto">
							<label for="password" class="form-label">Masukan password Pengguna</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="col-auto">
							<label for="akses" class="form-label">Pilih Hak akses yang sesuai</label>
							<br>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="akses" id="akses" value="1">
								<label class="form-check-label" for="akses">
									Vice President
								</label>
								<br>
								<input class="form-check-input" type="radio" name="akses" id="akses" value="2">
								<label class="form-check-label" for="akses">
									Manager
								</label>
								<br>
								<input class="form-check-input" type="radio" name="akses" id="akses" value="3" checked>
								<label class="form-check-label" for="akses">
									Officer
								</label>
							</div>
						</div>
						<div class="col-sm-6">
							<label for="status">Pilih Status Dari User</label>
							<br>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
								<label class="form-check-label" for="status">
									Aktif
								</label>
								<br>
								<input class="form-check-input" type="radio" name="status" id="status" value="0">
								<label class="form-check-label" for="status">
									Non Aktif
								</label>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" name="submit" class="btn btn-outline-success" onclick="updateUser()"> Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		function updateUser() {
			var userId = $('#ModalUpdateuser input[name="id"]').val();
			var userName = $('#ModalUpdateuser input[name="nama"]').val();
			var userEmail = $('#ModalUpdateuser input[name="email"]').val();
			var userPassword = $('#ModalUpdateuser input[name="password"]').val();
			var userAkses = $('#ModalUpdateuser input[name="akses"]:checked').val();
			var userStatus = $('#ModalUpdateuser input[name="status"]:checked').val();

			var data = {
				id: userId,
				nama: userName,
				email: userEmail,
				password: userPassword,
				akses: userAkses,
				status: userStatus
				// Include other fields as needed
			};

			$.ajax({
				url: '<?= base_url('edit_user') ?>/' + userId, // Adjust the URL to include the user's ID
				method: 'POST',
				data: data,
				success: function(response) {
					// Handle the response from the server
					alert('User updated successfully');
					$('#ModalUpdateuser').modal('hide');
					window.location.reload();
					// You can also update the user data in the table without reloading the page
					// based on the response from the server.
				},
				error: function(xhr, status, error) {
					console.error('Error updating user: ' + error);
				}
			});
		}
	</script>

	<hr>


	<div class="card">
		<h2>Parameter</h2>
		<form id="" name="" method="" action="">
			<div class="btn btn-outline-info">
				<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
			</div>
			<table class="table table-hover table-responsive">
				<thead class="text-center">
					<tr>
						<th scope="col">Parameter ID</th>
						<th scope="col"> Prameter Name</th>
						<th scope="col">Weight</th>
						<th scope="col">Sub Dimensi ID</th>
						<th scope="col" colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($parameter as $d) { ?>
						<tr>

							<td><?= $d['parameter_id'] ?></td>
							<td><?= $d['parameter_name'] ?></td>
							<td><?= $d['Weight'] ?></td>
							<td><?= $d['subdimensi_id'] ?></td>
							<td>
								<div class="btn btn-outline-warning">
									<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
								</div>
							</td>
							<td>
								<div class="btn btn-outline-danger">
									<a href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</form>
	</div>
	<hr>
	<div class="card">
		<h2>Phase</h2>
		<form id="" name="" method="" action="">
			<div class="btn btn-outline-info">
				<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
			</div>
			<table class="table table-hover table-responsive">
				<thead class="text-center">
					<tr>
						<th scope="col">Phase ID</th>
						<th scope="col">Nama Phase </th>
						<th scope="col">Nilai Phase</th>
						<th scope="col" colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($phase as $d) { ?>
						<tr>
							<td><?= $d['phase_id'] ?></td>
							<td><?= $d['phase_name'] ?></td>
							<td><?= $d['phase_value'] ?></td>
							<td>
								<div class="btn btn-outline-warning">
									<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
								</div>
							</td>
							<td>
								<div class="btn btn-outline-danger">
									<a href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</form>
	</div>
	<hr>
	<div class="card">
		<h2>Questions</h2>
		<form id="" name="" method="" action="">
			<div class="btn btn-outline-info">
				<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
			</div>
			<table class="table table-hover table-responsive">
				<thead class="text-center">
					<tr>
						<th scope="col">Questions ID</th>
						<th scope="col">Question</th>
						<th scope="col">Phase ID</th>
						<th scope="col">Subdimensi ID</th>
						<th scope="col">Parameter ID</th>
						<th scope="col" colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($question as $d) { ?>
						<tr>
							<td><?= $d['question_id'] ?></td>
							<td><?= $d['question'] ?></td>
							<td><?= $d['phase_id'] ?></td>
							<td><?= $d['subdimensi_id'] ?></td>
							<td><?= $d['parameter_id'] ?></td>


							<td>
								<div class="btn btn-outline-warning">
									<a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
								</div>
							</td>
							<td>
								<div class="btn btn-outline-danger">
									<a href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</form>
	</div>


</div>
<div class="container text-center">
	<h1> Control ARMI Access By <?= $this->session->userdata('name'); ?></h1>
</div>

<div class="container">
	<div class="btn btn-outline-info">
		<a data-bs-toggle="modal" data-bs-target="#ModalAdduser"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
	</div>
	<table class="table table-hover table-responsive">
		<thead class="text-center">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">email</th>
				<th scope="col">Akses</th>
				<th scope="col">status</th>
				<th scope="col" colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($user as $u) { ?>
				<tr>
					<td><?= $u['user_id'] ?></td>
					<td><?= $u['user_name'] ?></td>
					<td><?= $u['user_email'] ?></td>
					<td><?php
						if ($u['user_akses'] == 1) {
							echo "Vice President";
						} elseif ($u['user_akses'] == 2) {
							echo "Manager";
						} elseif ($u['user_akses'] == 3) {
							echo "Officer";
						} else {
							echo "Not Valid";
						}
						?></td>
					<td><?php
						if ($u['user_status'] == 1) {
							echo "Aktif";
						} elseif ($u['user_status'] == 0) {
							echo "Tidak Aktif";
						} else {
							echo "Not Valid";
						}

						?></td>
					<td>
						<div class="btn btn-outline-warning">
							<a class="edit-user" href="<?= base_url('edit_user') ?>/<?= $u['user_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateuser" data-user_id="<?= $u['user_id'] ?>" data-user_nama="<?= $u['user_name'] ?>" data-user_email="<?= $u['user_email'] ?>" data-user_password="<?= $u['user_password'] ?>" data-user_akses="<?= $u['user_akses'] ?>" data-user_status="<?= $u['user_status'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
						</div>
					</td>
					<td>

						<div class="btn btn-outline-danger">
							<a class="delete-user" href="<?= base_url('delete_user') ?>/<?= $u['user_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
						</div>
					</td>

				</tr>
			<?php } ?>
		</tbody>
	</table>

</div>


<!-- Modal add -->
<div class="modal fade" id="ModalAdduser" tabindex="-1" aria-labelledby="ModalAdduser" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="ModalAdduser">Add User</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?= base_url('save_user') ?>">
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
							<input class="form-check-input" type="radio" name="akses" id="akses" value="3">
							<label class="form-check-label" for="akses">
								Officer
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<label for="status">Pilih Status Dari User</label>
						<br>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="status" id="status" value="1">
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
			var userAkses = $(this).data('user_akses');
			var userStatus = $(this).data('user_status');

			// Populate the modal fields with user data
			$('#ModalUpdateuser').find('input[name="id"]').val(userId);
			$('#ModalUpdateuser').find('input[name="nama"]').val(userName);
			$('#ModalUpdateuser').find('input[name="email"]').val(userEmail);
			$('#ModalUpdateuser').find('input[name="password"]').val(userPassword);
			$('#ModalUpdateuser').find('input[name="akses"]').val(userAkses);
			$('#ModalUpdateuser').find('input[name="status"]').val(userStatus);

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
							<input class="form-check-input" type="radio" name="akses" id="akses" value="3">
							<label class="form-check-label" for="akses">
								Officer
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<label for="status">Pilih Status Dari User</label>
						<br>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="status" id="status" value="1">
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
			url: '<?= base_url('edit-user') ?>/' + userId, // Adjust the URL to include the user's ID
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
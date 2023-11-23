<div class="container text-center">
	<h1> Control Parameter ARMI By <?= $this->session->userdata('name'); ?></h1>
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
								<a class="edit-category" href="<?= base_url('Admin/edit_category') ?>/<?= $p['category_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateCategory" data-category_id="<?= $p['category_id'] ?>" data-category_nama="<?= $p['category_nama'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-category" href="<?= base_url('Admin/delete_category') ?>/<?= $p['category_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
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
						<form method="post" action="<?= base_url('Admin/edit_category') ?>">
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
					url: '<?= base_url('Admin/edit_category') ?>/' + categoryId, // Adjust the URL to include the user's ID
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
								<a class="edit-dimensi" href="<?= base_url('Admin/edit_dimensi') ?>/<?= $d['dimensi_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateDimensi" data-dimensi_id="<?= $d['dimensi_id'] ?>" data-dimensi_nama="<?= $d['dimensi_name'] ?>" data-category_id="<?= $d['category_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-dimensi" href="<?= base_url('Admin/delete_dimensi') ?>/<?= $d['dimensi_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
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
						<h1 class="modal-title fs-5" id="ModalUpdateDimensi">Update Dimensi</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('Admin/edit_dimensi') ?>">
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
						<button type="submit" name="submit" class="btn btn-outline-success" onclick="updateDimensi()"> Save changes</button>
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
					url: '<?php echo base_url('Admin/edit_dimensi') ?>/' + dimensiId, // Adjust the URL to include the user's ID
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
			<a data-bs-toggle="modal" data-bs-target="#ModalAddSubDimensi"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
				foreach ($sub_dimensi as $sd) { ?>
					<tr>
						<td><?= $sd['subdimensi_id'] ?></td>
						<td><?= $sd['subdimensi_name'] ?></td>
						<td><?= $sd['dimensi_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-subDimensi" href="<?= base_url('Admin/edit_subDimensi') ?>/<?= $sd['subdimensi_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateSubDimensi" data-subdimensi_id="<?= $sd['subdimensi_id'] ?>" data-subdimensi_nama="<?= $sd['subdimensi_name'] ?>" data-dimensi_id="<?= $sd['dimensi_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-subDimensi" href="<?= base_url('Admin/delete_subDimensi') ?>/<?= $sd['subdimensi_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>


	<!-- Modal add -->
	<div class="modal fade" id="ModalAddSubDimensi" tabindex="-1" aria-labelledby="ModalAddSubDimensi" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="ModalAddSubDimensi">Add Sub Dimensi</h1>
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
					<button type="submit" name="submit" class="btn btn-outline-success">Add Sub Dimensi</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			// Handle the Edit button click
			$('.edit-subDimensi').click(function() {
				var subDimensiId = $(this).data('subdimensi_id');
				var subDimensiNama = $(this).data('subdimensi_nama');
				var dimensiId = $(this).data('dimensi_id');

				// Populate the modal fields with user data
				$('#ModalUpdateSubDimensi').find('input[name="id"]').val(subDimensiId);
				$('#ModalUpdateSubDimensi').find('input[name="nama"]').val(subDimensiNama);
				$('#ModalUpdateSubDimensi').find('input[name="dimensi_id"]').val(dimensiId);

				// Show the modal
				$('#ModalUpdateSubDimensi').modal('show');
			});
		});
	</script>



	<!-- Update Modal  -->
	<div class="modal fade" id="ModalUpdateSubDimensi" tabindex="-1" aria-labelledby="ModalUpdateSubDimensi" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="ModalUpdateSubDimensi">Update Sub Dimensi</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?= base_url('Admin/edit_subDimensi') ?>">
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
					<button type="button" name="submit" class="btn btn-outline-success" onclick="updateSubDimensi()"> Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		function updateSubDimensi() {
			var subDimensiId = $('#ModalUpdateSubDimensi input[name="id"]').val();
			var subDimensiName = $('#ModalUpdateSubDimensi input[name="nama"]').val();
			var dimensiId = $('#ModalUpdateSubDimensi input[name="dimensi_id"]').val();

			var data = {
				id: subDimensiId,
				nama: subDimensiName,
				dimensi_id: dimensiId,
				// Include other fields as needed
			};

			$.ajax({
				url: '<?= base_url('Admin/edit_subDimensi') ?>/' + subDimensiId, // Adjust the URL to include the user's ID
				method: 'POST',
				data: data,
				success: function(response) {
					// Handle the response from the server
					alert('Sub Dimensi updated successfully');
					$('#ModalUpdateSubDimensi').modal('hide');
					window.location.reload();
					// You can also update the user data in the table without reloading the page
					// based on the response from the server.
				},
				error: function(xhr, status, error) {
					console.error('Error updating Sub Dimensi: ' + error);
				}
			});
		}
	</script>

	<hr>

	<div class="card">
		<h2>Parameter</h2>
		<div class="align-self-start btn btn-outline-info">
			<a data-bs-toggle="modal" data-bs-target="#ModalAddParameter"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
				foreach ($parameter as $pr) { ?>
					<tr>

						<td><?= $pr['parameter_id'] ?></td>
						<td><?= $pr['parameter_name'] ?></td>
						<td><?= $pr['Weight'] ?></td>
						<td><?= $pr['subdimensi_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-parameter" href="<?= base_url('Admin/edit_parameter') ?>/<?= $pr['parameter_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateParameter" data-parameter_id="<?= $pr['parameter_id'] ?>" data-parameter_nama="<?= $pr['parameter_name'] ?>" data-weight="<?= $pr['Weight'] ?>" data-subdimensi_id="<?= $pr['subdimensi_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-parameter" href="<?= base_url('Admin/delete_parameter') ?>/<?= $pr['parameter_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>

		<!-- Modal add -->
		<div class="modal fade" id="ModalAddParameter" tabindex="-1" aria-labelledby="ModalAddParameter" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalAddParameter">Add Parameter</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('save_parameter') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Parameter </label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Nama Parameter</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Weight Parameter</label>
								<input type="text" name="weight" class="form-control">
							</div>
							<div class="col-auto">
								<label for="category_id" class="form-label">Masukan ID Subdimensi</label>
								<input type="text" name="subdimensi_id" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-outline-success">Add Parameter</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				// Handle the Edit button click
				$('.edit-parameter').click(function() {
					var parameterId = $(this).data('parameter_id');
					var parameterNama = $(this).data('parameter_nama');
					var weight = $(this).data('weight');
					var subdimensiId = $(this).data('subdimensi_id');

					// Populate the modal fields with user data
					$('#ModalUpdateParameter').find('input[name="id"]').val(parameterId);
					$('#ModalUpdateParameter').find('input[name="nama"]').val(parameterNama);
					$('#ModalUpdateParameter').find('input[name="weight"]').val(weight);
					$('#ModalUpdateParameter').find('input[name="subdimensi_id"]').val(subdimensiId);
					// Show the modal
					$('#ModalUpdateParameter').modal('show');
				});
			});
		</script>

		<!-- Update Modal  -->
		<div class="modal fade" id="ModalUpdateParameter" tabindex="-1" aria-labelledby="ModalUpdateParameter" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalUpdateParameter">Update Parameter</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('Admin/edit_parameter') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Parameter </label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Nama Parameter</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Weight Parameter</label>
								<input type="text" name="weight" class="form-control">
							</div>
							<div class="col-auto">
								<label for="category_id" class="form-label">Masukan ID Subdimensi</label>
								<input type="text" name="subdimensi_id" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" name="submit" class="btn btn-outline-success" onclick="updateParameter()"> Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			function updateParameter() {
				var parameterId = $('#ModalUpdateParameter input[name="id"]').val();
				var parameterNama = $('#ModalUpdateParameter input[name="nama"]').val();
				var weight = $('#ModalUpdateParameter input[name="weight"]').val();
				var subdimensiId = $('#ModalUpdateParameter input[name="subdimensi_id"]').val();

				var data = {
					id: parameterId,
					nama: parameterNama,
					weight: weight,
					subdimensi_id: subdimensiId,
					// Include other fields as needed
				};

				$.ajax({
					url: '<?= base_url('Admin/edit_parameter') ?>/' + parameterId, // Adjust the URL to include the user's ID
					method: 'POST',
					data: data,
					success: function(response) {
						// Handle the response from the server
						alert('Parameter updated successfully');
						$('#ModalUpdateParameter').modal('hide');
						window.location.reload();
						// You can also update the user data in the table without reloading the page
						// based on the response from the server.
					},
					error: function(xhr, status, error) {
						console.error('Error updating Parameter: ' + error);
					}
				});
			}
		</script>

	</div>

	<hr>

	<div class="card">
		<h2>Phase</h2>
		<div class="align-self-start btn btn-outline-info">
			<a data-bs-toggle="modal" data-bs-target="#ModalAddPhase"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
				foreach ($phase as $ps) { ?>
					<tr>
						<td><?= $ps['phase_id'] ?></td>
						<td><?= $ps['phase_name'] ?></td>
						<td><?= $ps['phase_value'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-phase" href="<?= base_url('Admin/edit_phase') ?>/<?= $ps['phase_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdatePhase" data-phase_id="<?= $ps['phase_id'] ?>" data-phase_nama="<?= $ps['phase_name'] ?>" data-phase_value="<?= $ps['phase_value'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-phase" href="<?= base_url('Admin/delete_phase') ?>/<?= $ps['phase_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>


		<!-- Modal add -->
		<div class="modal fade" id="ModalAddPhase" tabindex="-1" aria-labelledby="ModalAddPhase" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalAddPhase">Add Phase</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('save_phase') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Phase</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Nama Phase</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="col-auto">
								<label for="category_id" class="form-label">Masukan Nilai Phase </label>
								<input type="text" name="phase" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-outline-success">Add Phase</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				// Handle the Edit button click
				$('.edit-phase').click(function() {
					var phaseId = $(this).data('phase_id');
					var phaseNama = $(this).data('phase_nama');
					var phase = $(this).data('phase_value');

					// Populate the modal fields with user data
					$('#ModalUpdatePhase').find('input[name="id"]').val(phaseId);
					$('#ModalUpdatePhase').find('input[name="nama"]').val(phaseNama);
					$('#ModalUpdatePhase').find('input[name="phase"]').val(phase);
					// Show the modal
					$('#ModalUpdatePhase').modal('show');
				});
			});
		</script>

		<!-- Update Modal  -->
		<div class="modal fade" id="ModalUpdatePhase" tabindex="-1" aria-labelledby="ModalUpdatePhase" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalUpdatePhase">Update Phase</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('Admin/edit_phase') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Phase</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="nama" class="form-label">Masukan Nama Phase</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="col-auto">
								<label for="category_id" class="form-label">Masukan Nilai Phase </label>
								<input type="text" name="phase" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" name="submit" class="btn btn-outline-success" onclick="updatePhase()"> Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			function updatePhase() {
				var phaseId = $('#ModalUpdatePhase input[name="id"]').val();
				var phaseNama = $('#ModalUpdatePhase input[name="nama"]').val();
				var phase = $('#ModalUpdatePhase input[name="phase"]').val();

				var data = {
					id: phaseId,
					nama: phaseNama,
					phase: phase,
					// Include other fields as needed
				};

				$.ajax({
					url: '<?= base_url('Admin/edit_phase') ?>/' + phaseId, // Adjust the URL to include the user's ID
					method: 'POST',
					data: data,
					success: function(response) {
						// Handle the response from the server
						alert('phase updated successfully');
						$('#ModalUpdatePhase').modal('hide');
						window.location.reload();
						// You can also update the user data in the table without reloading the page
						// based on the response from the server.
					},
					error: function(xhr, status, error) {
						console.error('Error updating phase: ' + error);
					}
				});
			}
		</script>

	</div>

	<hr>

	<div class="card">
		<h2>Questions</h2>
		<div class="align-self-start btn btn-outline-info">
			<a data-bs-toggle="modal" data-bs-target="#ModalAddQuestion"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
				foreach ($question as $qs) { ?>
					<tr>
						<td><?= $qs['question_id'] ?></td>
						<td><?= $qs['question'] ?></td>
						<td><?= $qs['phase_id'] ?></td>
						<td><?= $qs['subdimensi_id'] ?></td>
						<td><?= $qs['parameter_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-question" href="<?= base_url('Admin/edit_question') ?>/<?= $qs['question_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateQuestion" data-question_id="<?= $qs['question_id'] ?>" data-question="<?= $qs['question'] ?>" data-phase_id="<?= $qs['phase_id'] ?>" data-subdimensi_id="<?= $qs['subdimensi_id'] ?>" data-parameter_id="<?= $qs['parameter_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
							<div class="btn btn-outline-danger">
								<a class="delete-question" href="<?= base_url('Admin/delete_question') ?>/<?= $qs['question_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>


		<!-- Modal add -->
		<div class="modal fade" id="ModalAddQuestion" tabindex="-1" aria-labelledby="ModalAddQuestion" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalAddQuestion">Add Question</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('save_question') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Question</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="question" class="form-label">Masukan Question</label>
								<textarea rows="4" cols="150" name="question" class="form-control"></textarea>
							</div>
							<div class="col-auto">
								<label for="phase_id" class="form-label">Masukan ID Phase</label>
								<input type="text" name="phase_id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="subdimensi_id" class="form-label">Masukan ID Subdimensi</label>
								<input type="text" name="subdimensi_id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="parameter_id" class="form-label">Masukan ID Parameter</label>
								<input type="text" name="parameter_id" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-outline-success">Add Question</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				// Handle the Edit button click
				$('.edit-question').click(function() {
					var questionId = $(this).data('question_id');
					var question = $(this).data('question');
					var phaseId = $(this).data('phase_id');
					var subdimensiId = $(this).data('subdimensi_id');
					var parameterId = $(this).data('parameter_id');

					// Populate the modal fields with user data
					$('#ModalUpdateQuestion').find('input[name="id"]').val(questionId);
					$('#ModalUpdateQuestion').find('textarea[name="question"]').val(question);
					$('#ModalUpdateQuestion').find('input[name="phase_id"]').val(phaseId);
					$('#ModalUpdateQuestion').find('input[name="subdimensi_id"]').val(subdimensiId);
					$('#ModalUpdateQuestion').find('input[name="parameter_id"]').val(parameterId);
					// Show the modal
					$('#ModalUpdateQuestion').modal('show');
				});
			});
		</script>

		<!-- Update Modal  -->
		<div class="modal fade" id="ModalUpdateQuestion" tabindex="-1" aria-labelledby="ModalUpdateQuestion" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="ModalUpdateQuestion">Update Question</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?= base_url('Admin/edit_question') ?>">
							<div class="col-auto">
								<label for="id" class="form-label">Masukan ID Question</label>
								<input type="text" name="id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="question" class="form-label">Masukan Question</label>
								<textarea rows="4" cols="150" name="question" class="form-control"></textarea>
							</div>
							<div class="col-auto">
								<label for="phase_id" class="form-label">Masukan ID Phase</label>
								<input type="text" name="phase_id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="subdimensi_id" class="form-label">Masukan ID Subdimensi</label>
								<input type="text" name="subdimensi_id" class="form-control">
							</div>
							<div class="col-auto">
								<label for="parameter_id" class="form-label">Masukan ID Parameter</label>
								<input type="text" name="parameter_id" class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" name="submit" class="btn btn-outline-success" onclick="updateQuestion()"> Save changes</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
			function updateQuestion() {
				var questionId = $('#ModalUpdateQuestion input[name="id"]').val();
				var question = $('#ModalUpdateQuestion textarea[name="question"]').val();
				var phaseId = $('#ModalUpdateQuestion input[name="phase_id"]').val();
				var subdimensiId = $('#ModalUpdateQuestion input[name="subdimensi_id"]').val();
				var parameterId = $('#ModalUpdateQuestion input[name="parameter_id"]').val();

				var data = {
					id: questionId,
					question: question,
					phase_id: phaseId,
					subdimensi_id: subdimensiId,
					parameter_id: parameterId,
					// Include other fields as needed
				};

				$.ajax({
					url: '<?= base_url('Admin/edit_question') ?>/' + questionId, // Adjust the URL to include the user's ID
					method: 'POST',
					data: data,
					success: function(response) {
						// Handle the response from the server
						alert('question updated successfully');
						$('#ModalUpdateQuestion').modal('hide');
						window.location.reload();
						// You can also update the user data in the table without reloading the page
						// based on the response from the server.
					},
					error: function(xhr, status, error) {
						console.error('Error updating question: ' + error);
					}
				});
			}
		</script>


	</div>


</div>
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
						<h1 class="modal-title fs-5" id="ModalUpdateDimensi">Update Dimensi</h1>
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
				foreach ($sub_dimensi as $d) { ?>
					<tr>
						<td><?= $d['subdimensi_id'] ?></td>
						<td><?= $d['subdimensi_name'] ?></td>
						<td><?= $d['dimensi_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-subDimensi" href="<?= base_url('edit_subDimensi') ?>/<?= $d['subdimensi_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateSubDimensi" data-subdimensi_id="<?= $d['subdimensi_id'] ?>" data-subdimensi_nama="<?= $d['subdimensi_name'] ?>" data-dimensi_id="<?= $d['dimensi_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
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
					<form method="post" action="<?= base_url('edit_subDimensi') ?>">
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
				url: '<?= base_url('edit_subDimensi') ?>/' + subDimensiId, // Adjust the URL to include the user's ID
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
				foreach ($parameter as $d) { ?>
					<tr>

						<td><?= $d['parameter_id'] ?></td>
						<td><?= $d['parameter_name'] ?></td>
						<td><?= $d['Weight'] ?></td>
						<td><?= $d['subdimensi_id'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-parameter" href="<?= base_url('edit_parameter') ?>/<?= $d['parameter_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateParameter" data-parameter_id="<?= $d['parameter_id'] ?>" data-parameter_nama="<?= $d['parameter_name'] ?>" data-weight="<?= $d['Weight'] ?>" data-subdimensi_id="<?= $d['subdimensi_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-parameter" href="<?= base_url('delete_parameter') ?>/<?= $d['parameter_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
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
					var parameterNama = $(this).data('prameter_nama');
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
						<form method="post" action="<?= base_url('edit_parameter') ?>">
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
					url: '<?= base_url('edit_parameter') ?>/' + parameterId, // Adjust the URL to include the user's ID
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
				foreach ($phase as $d) { ?>
					<tr>
						<td><?= $d['phase_id'] ?></td>
						<td><?= $d['phase_name'] ?></td>
						<td><?= $d['phase_value'] ?></td>
						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-phase" href="<?= base_url('edit_phase') ?>/<?= $d['phase_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdatePhase" data-phase_id="<?= $d['phase_id'] ?>" data-phase_nama="<?= $d['phase_name'] ?>" data-phase_value="<?= $d['phase_value'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-phase" href="<?= base_url('delete_phase') ?>/<?= $d['phase_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
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
						<form method="post" action="<?= base_url('edit_phase') ?>">
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
					url: '<?= base_url('edit_phase') ?>/' + dimensiId, // Adjust the URL to include the user's ID
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
				foreach ($question as $d) { ?>
					<tr>
						<td><?= $d['question_id'] ?></td>
						<td><?= $d['question'] ?></td>
						<td><?= $d['phase_id'] ?></td>
						<td><?= $d['subdimensi_id'] ?></td>
						<td><?= $d['parameter_id'] ?></td>

						<td>
							<div class="btn btn-outline-warning">
								<a class="edit-question" href="<?= base_url('edit_dimensi') ?>/<?= $d['question_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalUpdateQuestion" data-dimensi_id="<?= $d['dimensi_id'] ?>" data-dimensi_nama="<?= $d['dimensi_name'] ?>" data-category_id="<?= $d['category_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
							</div>
						</td>
						<td>
							<div class="btn btn-outline-danger">
								<a class="delete-question" href="<?= base_url('delete_dimensi') ?>/<?= $d['dimensi_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
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


</div>
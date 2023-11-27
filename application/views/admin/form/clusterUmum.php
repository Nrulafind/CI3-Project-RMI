<div class="container-fluid text-center">
	<h1>Welcome to ARMI <?php echo $this->session->userdata('name');	?></h1>

	<div class="container align-content-start">
		<form id="myForm" action="<?= base_url('Admin/saveUmum'); ?>" method="post" enctype="multipart/form-data" class="row gy-2 gx-3 mb-3">
			<table class="table table-hover table-responsive">
				<tr>
					<td>
						<label for="form-label" class="form-label">Corporate Name</label>
						<input type="text" name="corporate_name" class="form-control">
					</td>
					<td><label for="form-label" class="form-label">User name</label>
						<input type="text" name="user_name" class="form-control">
					</td>
				</tr>
				<tr>
					<td><label for="form-label"> No Laporan</label>
						<input type="text" name="laporan" class="form-control">
					</td>
					<td><label for="form-label">Tanggal Pengukuran</label>
						<input type="date" name="tanggal" class="form-control">
					</td>
				</tr>
			</table>
			<table class="table table-hover table-responsive">
				<thead class="align-self-center">
					<tr>
						<th scope="col" class="align-middle">No</th>
						<th scope="col" class="align-middle">Dimensi</th>
						<th scope="col" class="align-middle">Sub Dimensi </th>
						<th scope="col" class="align-middle">Parameter</th>
						<th scope="col" class="align-middle">Kriteria Phase</th>
						<th scope="col" class="align-middle">Phase Indeks</th>
						<th scope="col" class="align-middle">File asessment</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$prev_dimensi_id = null;
					$prev_subdimensi_id = null;
					$prev_parameter_id = null;
					$prev_phase_id = null;
					$prev_question_id = null;
					$rowspan_dimensi = 0;
					$rowspan_subdimensi = 0;
					$rowspan_parameter_id = 0;
					$rowspan_phase_id = 0;
					$rowspan_question_id = 0;
					$i = 0;
					$I = 0;



					foreach ($dimensi_umum as $row) {


						$dimensi_id = $row['dimensi_id'];
						$subdimensi_id = $row['subdimensi_id'];
						$parameter_id = $row['parameter_id'];
						$phase_id = $row['phase_id'];
						// Replace periods with underscores in the question_id
						$question_id = str_replace('.', '_', $row['question_id']);
						// Output the row 

						// $subdimensi_id = $row['subdimensi_id'];
						// $parameter_id = $row['parameter_id'];

						if ($dimensi_id !== $prev_dimensi_id) {
							// Calculate rowspan for Dimensi
							$rowspan_dimensi = getRowspan($dimensi_umum, $dimensi_id, 'dimensi_id');
						}

						if ($subdimensi_id !== $prev_subdimensi_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_subdimensi = getRowspan($dimensi_umum, $subdimensi_id, 'subdimensi_id');
						}

						if ($parameter_id !== $prev_parameter_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_parameter_id = getRowspan($dimensi_umum, $parameter_id, 'parameter_id');
						}

						if ($phase_id !== $prev_phase_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_phase_id = getRowspan($dimensi_umum, $phase_id, 'phase_id');
						}

						if ($question_id !== $prev_question_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_question_id = getRowspan($dimensi_umum, $question_id, 'question_id');
						}




					?>


						<?php
						if ($dimensi_id !== $prev_dimensi_id) { ?>


							<td>Hasil Proyeksi Capaian Dimensi</td>
							<?php if ($i == $I) {
								$i++; ?>
								<td>Skor:<div id="ncpD<?= $i; ?>">
										<span id="ncpD<?= $i; ?>"></span>
									</div>
								</td>
								<td>Tingkat:<div id="lvRiskD<?= $i; ?>">
										<span id="lvRiskD<?= $i; ?>"></span>
									</div>
								</td>


						<?php }
						} ?>
						<tr>


							<?php
							if ($dimensi_id !== $prev_dimensi_id) { ?>
								<td rowspan="<?= $rowspan_dimensi ?>"><?= $dimensi_id ?></td>
								<td rowspan="<?= $rowspan_dimensi ?>"><?= $row['dimensi_name'] ?></td>
							<?php } ?>

							<?php
							if ($subdimensi_id !== $prev_subdimensi_id) { ?>
								<td rowspan="<?= $rowspan_subdimensi ?>"><?= $row['subdimensi_name'] ?></td>
							<?php } ?>

							<?php
							if ($parameter_id !== $prev_parameter_id) { ?>
								<td rowspan="<?= $rowspan_parameter_id ?>"><?= $row['parameter_name'] ?></td>
							<?php } ?>

							<td>
								<!-- create button -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phaseModal_<?= $question_id ?>">
									<?= $row['phase_name'] . ' / ' . $row['phase_value']; ?>
								</button>
								<!-- // Create the modal -->
								<div class="modal fade" id="phaseModal_<?= $question_id ?>" tabindex="-1" aria-labelledby="phaseModalLabel_<?= $question_id ?>" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="phaseModalLabel_<?= $question_id ?>"> <?= $row['phase_name'] . ' / ' . $row['phase_value'] ?></h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<?= $row['question']; ?> <!-- // Display the question in the modal body -->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>


							</td>
							<?php
							if ($parameter_id !== $prev_parameter_id) { ?>
								<td rowspan="<?= $rowspan_parameter_id ?>">

									<label class="align-start" for="<?= $parameter_id ?>">Pilih INDEX YANG SESUAI *</label>
									<select class="form-select" name="<?= $parameter_id ?>" data-field="<?= $parameter_id ?>">
										<option value="0" selected>None</option>
										<option value="1"> 1. Fase Awal (Initial Phase)</option>
										<option value="2"> 2. Fase Berkembang (Emerging State)</option>
										<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
										<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
										<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
									</select>
								</td>
							<?php } ?>


							<?php
							if ($parameter_id !== $prev_parameter_id) { ?>
								<td rowspan="<?= $rowspan_parameter_id ?>">

									<label for="formFile_<?= $parameter_id ?>" class="form-label">asessment</label>
									<input class="form-control" type="file" name="formFile_<?= $parameter_id ?>[]" id="formFile_<?= $parameter_id ?>" multiple>
								</td>
							<?php } ?>

						</tr>


					<?php
						$prev_dimensi_id = $dimensi_id;
						$prev_subdimensi_id = $subdimensi_id;
						$prev_parameter_id = $parameter_id;
						$prev_phase_id = $phase_id;
						$prev_question_id = $question_id;
						$I = $i;
					}

					// Function to calculate rowspan for a particular column value
					function getRowspan($array, $value, $column)
					{
						$rowspan = 0;
						foreach ($array as $row) {
							if ($row[$column] == $value) {
								$rowspan++;
							}
						}
						return $rowspan;
					}

					?>
					<tr>
						<td colspan="5">Hasil Capaian Korporasi</td>
						<td>Skor:<div id="ncpCorporate">
								<span id="ncpCorporate"></span>
							</div>
						</td>
						<td>Level: <div id="lvRiskCorpo">
								<span id="lvRiskCorpo"></span>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="9">
							<button type="submit" class="btn btn-primary" name="submit" onclick="save()">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</td>
					</tr>
				</tfoot>
			</table>
		</form>

		<h1>Dimensi 2</h1>
		<form id="myForm" action="<?= base_url('Admin/saveUmum'); ?>" method="post" enctype="multipart/form-data" class="row gy-2 gx-3 mb-3">
			<table class="table table-hover table-responsive">
				<thead class="align-self-center">
					<tr>
						<th scope="col" class="align-middle">No</th>
						<th scope="col" class="align-middle">Dimensi</th>
						<th scope="col" class="align-middle">Sub Dimensi </th>
						<th scope="col" class="align-middle">Parameter</th>
						<th scope="col" class="align-middle">Kriteria Phase</th>
						<th scope="col" class="align-middle">Phase Indeks</th>
						<th scope="col" class="align-middle">File asessment</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$prev_dimensi_id = null;
					$prev_subdimensi_id = null;
					$prev_parameter_id = null;
					$prev_phase_id = null;
					$prev_question_id = null;
					$rowspan_dimensi = 0;
					$rowspan_subdimensi = 0;
					$rowspan_parameter_id = 0;
					$rowspan_phase_id = 0;
					$rowspan_question_id = 0;
					$i = 0;
					$I = 0;



					foreach ($dimensi_umum as $row) {


						$dimensi_id = $row['dimensi_id'];
						$subdimensi_id = $row['subdimensi_id'];
						$parameter_id = $row['parameter_id'];
						$phase_id = $row['phase_id'];
						// Replace periods with underscores in the question_id
						$question_id = str_replace('.', '_', $row['question_id']);
						// Output the row 

						// $subdimensi_id = $row['subdimensi_id'];
						// $parameter_id = $row['parameter_id'];

						if ($dimensi_id !== $prev_dimensi_id) {
							// Calculate rowspan for Dimensi
							$rowspan_dimensi = getRowspan($dimensi_umum, $dimensi_id, 'dimensi_id');
						}

						if ($subdimensi_id !== $prev_subdimensi_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_subdimensi = getRowspan($dimensi_umum, $subdimensi_id, 'subdimensi_id');
						}

						if ($parameter_id !== $prev_parameter_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_parameter_id = getRowspan($dimensi_umum, $parameter_id, 'parameter_id');
						}

						if ($phase_id !== $prev_phase_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_phase_id = getRowspan($dimensi_umum, $phase_id, 'phase_id');
						}

						if ($question_id !== $prev_question_id) {
							// Calculate rowspan for Sub Dimensi
							$rowspan_question_id = getRowspan($dimensi_umum, $question_id, 'question_id');
						}




					?>


						<?php
						if ($dimensi_id !== $prev_dimensi_id) { ?>


							<td>Hasil Proyeksi Capaian Dimensi</td>
							<?php if ($i == $I) {
								$i++; ?>
								<td>Skor:<div id="ncpD<?= $i; ?>">
										<span id="ncpD<?= $i; ?>"></span>
									</div>
								</td>
								<td>Tingkat:<div id="lvRiskD<?= $i; ?>">
										<span id="lvRiskD<?= $i; ?>"></span>
									</div>
								</td>


						<?php }
						} ?>
						<tr>


							<?php
							if ($dimensi_id !== $prev_dimensi_id) { ?>
								<td rowspan="<?= $rowspan_dimensi ?>"><?= $dimensi_id ?></td>
								<td rowspan="<?= $rowspan_dimensi ?>"><?= $row['dimensi_name'] ?></td>
							<?php } ?>

							<?php
							if ($subdimensi_id !== $prev_subdimensi_id) { ?>
								<td rowspan="<?= $rowspan_subdimensi ?>"><?= $row['subdimensi_name'] ?></td>
							<?php } ?>

							<?php
							if ($parameter_id !== $prev_parameter_id) { ?>
								<td rowspan="<?= $rowspan_parameter_id ?>"><?= $row['parameter_name'] ?></td>
							<?php } ?>

							<td>
								<!-- create button -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phaseModal_<?= $question_id ?>">
									<?= $row['phase_name'] . ' / ' . $row['phase_value']; ?>
								</button>
								<!-- // Create the modal -->
								<div class="modal fade" id="phaseModal_<?= $question_id ?>" tabindex="-1" aria-labelledby="phaseModalLabel_<?= $question_id ?>" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="phaseModalLabel_<?= $question_id ?>"> <?= $row['phase_name'] . ' / ' . $row['phase_value'] ?></h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<?= $row['question']; ?> <!-- // Display the question in the modal body -->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>


							</td>
							<?php
							if ($parameter_id !== $prev_parameter_id) { ?>
								<td rowspan="<?= $rowspan_parameter_id ?>">

									<label class="align-start" for="<?= $parameter_id ?>">Pilih INDEX YANG SESUAI *</label>
									<select class="form-select" name="<?= $parameter_id ?>" data-field="<?= $parameter_id ?>">
										<option value="0" selected>None</option>
										<option value="1"> 1. Fase Awal (Initial Phase)</option>
										<option value="2"> 2. Fase Berkembang (Emerging State)</option>
										<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
										<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
										<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
									</select>
								</td>
							<?php } ?>


							<?php
							if ($parameter_id !== $prev_parameter_id) { ?>
								<td rowspan="<?= $rowspan_parameter_id ?>">

									<label for="formFile_<?= $parameter_id ?>" class="form-label">asessment</label>
									<input class="form-control" type="file" name="formFile_<?= $parameter_id ?>[]" id="formFile_<?= $parameter_id ?>" multiple>
								</td>
							<?php } ?>

						</tr>


					<?php
						$prev_dimensi_id = $dimensi_id;
						$prev_subdimensi_id = $subdimensi_id;
						$prev_parameter_id = $parameter_id;
						$prev_phase_id = $phase_id;
						$prev_question_id = $question_id;
						$I = $i;
					}

					// Function to calculate rowspan for a particular column value

					?>
					<tr>
						<td colspan="5">Hasil Capaian Korporasi</td>
						<td>Skor:<div id="ncpCorporate">
								<span id="ncpCorporate"></span>
							</div>
						</td>
						<td>Level: <div id="lvRiskCorpo">
								<span id="lvRiskCorpo"></span>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="9">
							<button type="submit" class="btn btn-primary" name="submit" onclick="save()">Submit</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
	<script>
		$(document).ready(function() {
			$('#myForm').on('change', 'select[data-field]', function() {
				updatePredictions();
			});

			$('#myForm').on('reset', function(e) {
				e.stopPropagation();
				updatePredictions();
			});
		});

		function save() {
			var data = $('#myForm').serializeArray();

			console.log(data);

			// Send user input to the server via AJAX for saving to the database
			$.ajax({
				type: 'POST',
				url: '<?= base_url('Admin/saveUmum'); ?>', // Adjust the URL to your controller endpoint
				data: formData,
				success: function(formData) {
					console.log(formData);
					alert('Data Inserted successfully');
					// You can handle success response if needed
				},
				error: function(xhr, status, error) {
					console.error("AJAX Error: " + error);
					console.log(xhr);
				}
			});
		}

		function updatePredictions() {
			var formData = $('#myForm').serialize(); // Serialize form data

			// Send user input to the server via AJAX for calculation
			$.ajax({
				type: 'POST',
				url: '<?= base_url("proyeksi"); ?>', // Use form action
				data: formData,
				dataType: 'json',
				success: function(data) {
					console.log(data);
					// Update the predictions for various fields
					$.each(data, function(key, value) {
						$('#' + key + ' span').text(value);
					});
				},
				error: function(xhr, status, error) {
					console.error("AJAX Error: " + error);
					console.log(xhr);
				}
			});
		}
	</script>
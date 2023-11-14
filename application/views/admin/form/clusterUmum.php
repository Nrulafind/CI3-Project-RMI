<div class="container-fluid text-center">
	<h1>Welcome to ARMI <?php echo $this->session->userdata('name');	?></h1>
</div>
<script>
	$(document).ready(function() {
		$('#myForm').on('change', 'select[data-field]', function() {
			updatePredictions();
		});

		$('#myForm').on('submit', function(e) {
			e.preventDefault(); // Prevent the default form submission
			updatePredictions(); // Trigger your custom logic
		});
	});

	function updatePredictions() {
		var formData = $('#myForm').serialize(); // Serialize form data

		// Send user input to the server via AJAX for calculation
		$.ajax({
			type: 'POST',
			url: '<?= base_url("Admin/calculateRisk"); ?>', // Use form action
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

<div class="container">
	<form id="" name="" action="" method="" enctype="multipart/form-data">
		<div class="">
			<label for="">Corporate Name</label>
			<input type="" name="" value="">
		</div>
		<div class="">
			<label for="">User name</label>
			<input type="" name="" value="">
		</div>
		<div class="">
			<label for=""> Approval </label>
			<input type="" name="" value="">
		</div>
		<div class="">
			<label for=""> No Laporan</label>
			<input type="" name="" value="">
		</div>
		<div class="">
			<label for="">Corporate Name</label>
			<input type="" name="" value="">
		</div>
		<div class="">
			<label for="">Tanggal</label>
			<input type="" name="" value="">
		</div>
		<table class="table table-hover table-responsive">
			<thead class="align-self-center respo">
				<tr>
					<th scope="col" rowspan="2" class="align-middle">No</th>
					<th scope="col" rowspan="2" class="align-middle">Dimensi</th>
					<th scope="col" rowspan="2" class="align-middle">Sub Dimensi </th>
					<th scope="col" rowspan="2" class="align-middle">Parameter</th>
					<th scope="col" rowspan="2" class="align-middle">Kriteria Phase</th>
					<th scope="col" rowspan="2" class="align-middle">Phase Indeks</th>
					<th scope="col" colspan="2">Hasil Capaian Dimensi</th>
					<th scope="col" colspan="2">Hasil Capaian Corporate</th>
					<th scope="col" rowspan="2" class="align-middle">File asessment</th>
				</tr>
				<tr>
					<th scope="col" rowspan="1">Skor</th>
					<th scope="col" rowspan="1">Tingkat</th>
					<th scope="col" rowspan="1">Skor</th>
					<th scope="col" rowspan="1">Tingkat</th>

				</tr>
			</thead>

			<tbody>
				<?php

				$prev_dimensi_id = null;
				$prev_subdimensi_id = null;
				$prev_parameter_name = null;
				$rowspan_dimensi = 0;
				$rowspan_subdimensi = 0;
				$rowspan_parameter_name = 0;

				$categoryArray = [];
				$dimensiArray = [];
				$subdimensiArray = [];
				$parameterArray = [];
				$phaseArray = [];
				$questionArray = [];


				foreach ($nestedArray as $category) : ?>
					<?php foreach ($category['dimensions'] as $dimension) : ?>
						<?php foreach ($dimension['sub_dimensions'] as $subDimension) : ?>
							<?php foreach ($subDimension['parameters'] as $parameter) : ?>
								<?php foreach ($parameter['questions'] as $question) : ?>

									<?php
									$categoryID = $category['category_id'];
									$dimensionID = $dimension['dimensi_id'];
									$subDimensionID = $subDimension['subdimensi_id'];
									$parameterID = $parameter['parameter_id'];
									$questionID = $question['question_id'];
									$phaseID = $question['phase_id'];

									if ($dimensionID !== $prev_dimensi_id) {
										// Calculate rowspan for Dimensi
										$rowspan_dimensi = getRowspan($, $dimensi_id, 'dimensi_id');
									}

									if ($subdimensi_id !== $prev_subdimensi_id) {
										// Calculate rowspan for Sub Dimensi
										$rowspan_subdimensi = getRowspan($dimensi_umum, $subdimensi_id, 'subdimensi_id');
									}

									if ($parameter_name !== $prev_parameter_name) {
										// Calculate rowspan for Sub Dimensi
										$rowspan_parameter_name = getRowspan($dimensi_umum, $parameter_name, 'parameter_name');
									}



									// Replace periods with underscores in the question_id
									$question_id = str_replace('.', '_', $row['question_id']);
									// Output the row 

									?>



									<tr>


										<td rowspan=""><?= $dimension['dimensi_id'] ?></td>
										<td rowspan=""><?= $dimension['dimensi_name'] ?></td>

										<td rowspan=""><?= $subDimension['subdimensi_name'] ?></td>
										<td rowspan=""><?= $parameter['parameter_name'] ?></td>


										<td>

											<!-- create button -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phaseModal_<?= $question['question_id'] ?>">
												<?= $question['phase_name'] . ' / ' . $question['phase_value']; ?>
											</button>

											<!-- // Create the modal -->
											<div class="modal fade" id="phaseModal_<?= $question['question_id'] ?>" tabindex="-1" aria-labelledby="phaseModalLabel_<?= $question['question_id'] ?>" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="phaseModalLabel_<?= $question['question_id'] ?>"> <?= $question['phase_name'] . ' / ' . $question['phase_value'] ?></h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<?= $question['question']; ?> <!-- // Display the question in the modal body -->
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<label class="align-start" for="<?= $subDimension['subdimensi_id'] ?>">Pilih INDEX YANG SESUAI *</label>
											<select class="form-select" name="<?= $subDimension['subdimensi_id'] ?>" data-field="<?= $subDimension['subdimensi_id'] ?>">
												<option value="0" selected>None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
										</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>

											<label for="formFile_<?= $question['question_id'] ?>" class="form-label">asessment</label>
											<input class="form-control" type="file" name="formFile_<?= $question['question_id'] ?>[]" id="formFile_<?= $question['question_id'] ?>" multiple>
										</td>
										<?php
										$prev_dimensi_id = $dimensionID;
										$prev_subdimensi_id = $subDimensionID;
										?>
									</tr>
								<?php endforeach; ?>
							<?php endforeach; ?>
						<?php endforeach; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
				<?php

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

					<td></td>
				</tr>
			</tbody>
		</table>
		<table class="table table-hover table-responsive">
			<thead class="align-self-center respo">
				<tr>
					<th scope="col" rowspan="2" class="align-middle">No</th>
					<th scope="col" rowspan="2" class="align-middle">Dimensi</th>
					<th scope="col" rowspan="2" class="align-middle">Sub Dimensi </th>
					<th scope="col" rowspan="2" class="align-middle">Parameter</th>
					<th scope="col" rowspan="2" class="align-middle">Kriteria Phase</th>
					<th scope="col" rowspan="2" class="align-middle">Phase Indeks</th>
					<th scope="col" rowspan="2" class="align-middle">File asessment</th>
				</tr>
			</thead>
			<tbody>


				<tr>
					<th scope="row">1</th>
					<td rowspan="3">Dimensi 1</td>
					<td>Sub dimensi 1</td>
					<td>Params 1</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td rowspan="2">Sub dimensi 2</td>
					<td>params 2</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>params 3</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>

				<tr>
					<td colspan="5">Hasil Capaian Dimensi</td>
					<td>Skor:</td>
					<td>Level:</td>
				</tr>
				<!-- Dimensi 2 -->
				<tr>
					<th scope="row">4</th>
					<td rowspan="16">Dimensi 2</td>
					<td rowspan="2">sub dimensi 3</td>
					<td>Params 4</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td>Params 5</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">6</th>
					<td rowspan="7">Sub Dimensi 4</td>
					<td>Params 6</td>
					<td>Input phase index</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">7</th>
					<td>Params 7</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">8</th>
					<td>Params 8</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">9</th>
					<td>Params 9</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">10</th>
					<td>Params 10</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">11</th>
					<td>Params 11</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">12</th>
					<td>Params 12</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">13</th>
					<td rowspan="7">Sub Dimensi 5</td>
					<td>Params 13</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">14</th>
					<td>Params 14</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">15</th>
					<td>Params 15</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">16</th>
					<td>Params 16</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">17</th>
					<td>Params 17</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">18</th>
					<td>Params 18</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">19</th>
					<td>Params 19</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>

				<tr>
					<td colspan="5">Hasil Capaian Dimensi</td>
					<td>Skor:</td>
					<td>Level:</td>
				</tr>
				<tr>
					<th scope="row">20</th>
					<td rowspan="14">Dimensi 3</td>
					<td rowspan="7">sub dimensi 6</td>
					<td>Params 20</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">21</th>
					<td>Params 21</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">22</th>
					<td>Params 22</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">23</th>
					<td>Params 23</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">24</th>
					<td>Params 24</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">25</th>
					<td>Params 25</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">26</th>
					<td>Params 26</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">27</th>
					<td rowspan="4">Sub Dimensi 7</td>
					<td>Params 27</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">28</th>
					<td>Params 28</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">29</th>
					<td>Params 29</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">30</th>
					<td>Params 30</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">31</th>
					<td>Sub Dimensi 8</td>
					<td>Params 31</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">32</th>
					<td>Sub Dimensi 9</td>
					<td>Params 32</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">33</th>
					<td>sub dimensi 10</td>
					<td>Params 33</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<td colspan="5">Hasil Capaian Dimensi</td>
					<td>Skor:</td>
					<td>Level:</td>
				</tr>

				<tr>
					<th scope="row">34</th>
					<td rowspan="7">Dimensi 4</td>
					<td>Sub Dimensi 11</td>
					<td>Params 34</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">35</th>
					<td rowspan="3">Sub Dimensi 12</td>
					<td>Params 35</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>

				<tr>
					<th scope="row">36</th>
					<td>Params 36</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">37</th>
					<td>Params 37</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">38</th>
					<td rowspan="2">Sub Dimensi 13</td>
					<td>Params 38</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">39</th>
					<td>Params 39</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">40</th>
					<td>sub dimensi 14</td>
					<td>Params 40</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<td colspan="5">Hasil Capaian Dimensi</td>
					<td>Skor:</td>
					<td>Level:</td>
				</tr>

				<tr>
					<th scope="row">41</th>
					<td rowspan="2">Dimensi 5</td>
					<td>Sub Dimensi 15</td>
					<td>Params 41</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
				<tr>
					<th scope="row">42</th>
					<td>Sub Dimensi 16</td>
					<td>Params 42</td>
					<td>Kriteria Phase (Modal-dialog button)</td>
					<td>Input phase index</td>
					<td>Input file</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5">Hasil Capaian Dimensi</td>
					<td>Skor:</td>
					<td>Level:</td>
				</tr>
				<tr>
					<td colspan="5">Hasil Capaian Corporasi</td>
					<td>Skor:</td>
					<td>Level:</td>
				</tr>
			</tfoot>
		</table>

	</form>
</div>

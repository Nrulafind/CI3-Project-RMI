<form name="assessmentEval" action="<?= base_url('') ?>" method="post" enctype="multipart/form-data">
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
		<tbody>
			<?php
			$prev_dimensi_id = null;
			$prev_subdimensi_id = null;
			$prev_parameter_name = null;
			$rowspan_dimensi = 0;
			$rowspan_subdimensi = 0;
			$rowspan_parameter_name = 0;


			foreach ($dimensi_umum as $row) {
				$dimensi_id = $row['dimensi_id'];
				$subdimensi_id = $row['subdimensi_id'];
				$parameter_name = $row['parameter_name'];

				if ($dimensi_id !== $prev_dimensi_id) {
					// Calculate rowspan for Dimensi
					$rowspan_dimensi = getRowspan($dimensi_umum, $dimensi_id, 'dimensi_id');
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
					if ($parameter_name !== $prev_parameter_name) { ?>
						<td><?= $row['parameter_name'] ?></td>
					<?php } elseif ($parameter_name === $prev_parameter_name) { ?>
						<td hidden><?= $row['parameter_name'] ?></td>
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
					<td>

						<label class="align-start" for="<?= $question_id ?>">Pilih INDEX YANG SESUAI *</label>
						<select class="form-select" name="<?= $question_id ?>" data-field="<?= $question_id ?>">
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

						<label for="formFile_<?= $question_id ?>" class="form-label">asessment</label>
						<input class="form-control" type="file" name="formFile_<?= $question_id ?>[]" id="formFile_<?= $question_id ?>" multiple>
					</td>

				</tr>
			<?php
				$prev_dimensi_id = $dimensi_id;
				$prev_subdimensi_id = $subdimensi_id;
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
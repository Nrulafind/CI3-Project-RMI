<div class="container text-center">
	<h1>Assessment Evaluation By <?= $this->session->userdata('name'); ?> </h1>
</div>

<div class="container">
	<table class="table table-hover table-responsive">
		<thead>
			<tr>
				<th scope="col" rowspan="2" class="align-middle">No</th>
				<th scope="col" rowspan="2" class="align-middle">Nama PT</th>
				<th scope="col" rowspan="2" class="align-middle">Nama Asessor</th>
				<th scope="col" rowspan="2" class="align-middle">Status Approval</th>
				<th scope="col" colspan="2">Capaian Dimensi 1</th>
				<th scope="col" colspan="2">Capaian Dimensi 2</th>
				<th scope="col" colspan="2">Capaian Dimensi 3</th>
				<th scope="col" colspan="2">Capaian Dimensi 4</th>
				<th scope="col" colspan="2">Capaian Dimensi 5</th>
				<th scope="col" colspan="2">Capaian Dimensi Korporasi</th>
				<th scope="col" rowspan="2" class="align-middle">File</th>
				<th scope="col" colspan="2">Action</th>
			</tr>
			<tr>
				<th scope="col" rowspan="1">Skor</th>
				<th scope="col" rowspan="1">Tingkat</th>
				<th scope="col" rowspan="1">Skor</th>
				<th scope="col" rowspan="1">Tingkat</th>
				<th scope="col" rowspan="1">Skor</th>
				<th scope="col" rowspan="1">Tingkat</th>
				<th scope="col" rowspan="1">Skor</th>
				<th scope="col" rowspan="1">Tingkat</th>
				<th scope="col" rowspan="1">Skor</th>
				<th scope="col" rowspan="1">Tingkat</th>
				<th scope="col" rowspan="1">Skor</th>
				<th scope="col" rowspan="1">Tingkat</th>
				<th scope="col" rowspan="1">Edit</th>
				<th scope="col" rowspan="1">Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($asessment as $hasil) { ?>
				<tr>
					<th><?php echo $no++ ?></th>
					<td><?= $hasil['corporate_name'] ?></td>
					<td><?= $hasil['user_name'] ?></td>
					<?php if ($hasil['status_approval'] == "Approved") { ?>
						<td><span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill"><?= $hasil['status_approval'] ?></span></td>
					<?php } elseif ($hasil['status_approval'] == "Reject") { ?>
						<td><span class="badge bg-danger-subtle border border-success-subtle text-success-emphasis rounded-pill"><?= $hasil['status_approval'] ?></span></td>
					<?php } elseif ($hasil['status_approval'] == "Pending") { ?>
						<td><span class="badge bg-warning-subtle border border-success-subtle text-success-emphasis rounded-pill"><?= $hasil['status_approval'] ?></span></td>
					<?php } else { ?>
						<td><span class="badge bg-secondary-subtle border border-success-subtle text-success-emphasis rounded-pill"><?= $hasil['status_approval'] ?></span></td>
					<?php } ?>
					<td><?= $hasil['ncpD1']; ?></td>
					<td><?= $hasil['lvRiskD1']; ?></td>
					<td><?= $hasil['ncpD2']; ?></td>
					<td><?= $hasil['lvRiskD2']; ?></td>
					<td><?= $hasil['ncpD3']; ?></td>
					<td><?= $hasil['lvRiskD3']; ?></td>
					<td><?= $hasil['ncpD4']; ?></td>
					<td><?= $hasil['lvRiskD4']; ?></td>
					<td><?= $hasil['ncpD5']; ?></td>
					<td><?= $hasil['lvRiskD5']; ?></td>
					<td><?= $hasil['ncpCorporate']; ?></td>
					<td><?= $hasil['lvRiskCorpo']; ?></td>
					<td>
						<!-- create button -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_<?= $hasil['assessment_id'] ?>">
							File
						</button>
						<!-- // Create the modal -->
						<div class="modal fade" id="Modal_<?= $hasil['assessment_id'] ?>" tabindex="-1" aria-labelledby="ModalLabel_<?= $hasil['assessment_id'] ?>" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="ModalLabel_<?= $hasil['assessment_id'] ?>"> <?= $hasil['file_ids'] ?></h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<table class="table table-responsive">
											<tr>
												<td>
													<?= $hasil['file_names'] ?>
												</td>
											</tr>
											<tr>
												<td>
													<?= $hasil['file_links']; ?>
												</td>
											</tr>
										</table>
										<!-- // Display the question in the modal body -->
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
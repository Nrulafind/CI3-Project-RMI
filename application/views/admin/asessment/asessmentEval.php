<div class="container text-center">
	<h1>Assessment Evaluation The ARMI </h1>
</div>

<div class="container">
	<table class="table table-hover table-responsive">
		<thead>
			<tr>
				<th scope="col" rowspan="2" class="align-middle">No</th>
				<th scope="col" rowspan="2" class="align-middle">Nama PT</th>
				<th scope="col" rowspan="2" class="align-middle">Nama Asessor</th>
				<th scope="col" rowspan="2" class="align-middle">Status Approval</th>
				<th scope="col" colspan="2">Capain Dimensi 1</th>
				<th scope="col" colspan="2">Capain Dimensi 2</th>
				<th scope="col" colspan="2">Capain Dimensi 3</th>
				<th scope="col" colspan="2">Capain Dimensi 4</th>
				<th scope="col" colspan="2">Capain Dimensi 5</th>
				<th scope="col" colspan="2">Capain Dimensi Korporasi</th>
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
			<?php foreach ($asessment as $hasil) { ?>
				<tr>
					<th>1</th>
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
					<td><?= $hasil['file_name']; ?></td>
					<td>
						<div class="btn btn-outline-warning">
							<a class="edit-user" href="<?= base_url('edit_asessment') ?>/<?= $hasil['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
						</div>
					</td>
					<td>

						<div class="btn btn-outline-danger">
							<a class="delete-user" href="<?= base_url('') ?>/"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
						</div>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
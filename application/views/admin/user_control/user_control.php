<div class="container text-center">
	<h1> Control ARMI Access Here</h1>
</div>

<div class="container">
	<form id="" name="" method="" action="">
		<div class="btn btn-outline-info">
			<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
						<td><?= $no++ ?></td>
						<td><?= $u['user_name'] ?></td>
						<td><?= $u['user_email'] ?></td>
						<td><?php
							if ($u['user_akses'] == 1) {
								echo "Vice Precident";
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
			<tfoot>

			</tfoot>
		</table>
	</form>

</div>
<div class="container text-center">
	<h1> Control Parameter ARMI Here</h1>
</div>

<div class="container">
	<div hidden>
		<h2>Kategori</h2>
		<form id="" name="" method="" action="">
			<div class="btn btn-outline-info">
				<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
					foreach ($dimensi as $p) { ?>
						<tr>

							<td><?= $p['category_id'] ?></td>
							<td><?= $p['category_name'] ?></td>
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
		<h2>Dimensi</h2>
		<form id="" name="" method="" action="">
			<div class="btn btn-outline-info">
				<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
					$no = 1;
					var_dump($dimensi);
					foreach ($dimensi as $d) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $d['dimensi_id'] ?></td>
							<td><?= $d['dimensi_name'] ?></td>
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
		<h2>Sub Dimensi</h2>
		<form id="" name="" method="" action="">
			<div class="btn btn-outline-info">
				<a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
			</div>
			<table class="table table-hover table-responsive">
				<thead class="text-center">
					<tr>
						<th scope="col">Sub Dimensi ID</th>
						<th scope="col">Nama Sub Dimensi</th>
						<th scope="col" colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					var_dump($dimensi);
					foreach ($dimensi as $d) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $d['dimensi_id'] ?></td>
							<td><?= $d['dimensi_name'] ?></td>
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
					$no = 1;
					var_dump($dimensi);
					foreach ($dimensi as $d) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $d['dimensi_id'] ?></td>
							<td><?= $d['dimensi_name'] ?></td>
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
					$no = 1;
					var_dump($dimensi);
					foreach ($dimensi as $d) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $d['dimensi_id'] ?></td>
							<td><?= $d['dimensi_name'] ?></td>
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
					$no = 1;
					var_dump($dimensi);
					foreach ($dimensi as $d) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $d['dimensi_id'] ?></td>
							<td><?= $d['dimensi_name'] ?></td>
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
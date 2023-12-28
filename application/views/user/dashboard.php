<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate
			Report</a>
	</div>

	<!-- Content Row -->
	<div class="row">
		<!-- Risk Corporation Card Example -->
		<?php foreach ($result as $card) { ?>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">

					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Risk Corporation : <?php echo $card['corporate_name']; ?>
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?php $card['skor']; ?>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>

			</div>
		<?php	}; ?>
	</div>
	<!-- Content Row -->

	<div class="row">
		<!-- Area Chart -->
		<div class="col-xl-8 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">
						Cover RMI
					</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<!-- <div class="chart-area"> -->
					<?php foreach ($result as $cv) { ?>
						<!-- <canvas id="lolmyChart"></canvas> -->
						<table class="table-bordered table-responsive table-hover">
							<tr>
								<th>Nama PT</th>
								<th><?= $cv['corporate_name'] ?></th>
							</tr>
							<tr>
								<th>Tahun</th>
								<th><?= $cv['created_at'] ?></th>
							</tr>
							<tr>
								<th>No. Laporan</th>
								<th><?= $cv['code_laporan'] ?></th>
							</tr>
							<tr>
								<th>Model RMI</th>
								<th>KBUMN-Umum </th>
							</tr>
							<tr>
								<th>Nilai Total RMI</th>
								<th><?= $cv['skor'] ?></th>
							</tr>
						</table>
					<?php } ?>
					<hr>
					<?php foreach ($result as $t) { ?>
						<table class="table-bordered table-responsive table-hover">
							<thead>
								<tr>
									<th>Dimensi</th>
									<th>Nilai Dimensi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Budaya dan Kapabilitas Risiko</td>
									<td></td>
								</tr>
								<tr>
									<td>Organisasi dan Tata Kelola Risiko</td>
									<td></td>
								</tr>
								<tr>
									<td>Kerangka Risiko dan Kepatuhan</td>
									<td></td>
								</tr>
								<tr>
									<td>Proses dan Kontrol Risiko</td>
									<td></td>
								</tr>
								<tr>
									<td>Model, Data, dan Tata Kelola Risiko</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					<?php } ?>
					<!-- </div> -->
				</div>
			</div>
		</div>

		<!-- Pie Chart -->
		<div class="col-xl-4 col-lg-5">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">
						Radar RMI
					</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-pie pt-4 pb-2">
						<canvas class="pt-4 pb-2" id="myChart"></canvas>
						<?php
						$cap = '';
						foreach ($result as $c) {
							// $capaian1 =  $c['ncpD1'];
							// $capaian2 = $c['ncpD2'];
							// $capaian3 = $c['ncpD3'];
							// $capaian4 = $c['ncpD4'];
							// $capaian5 = $c['ncpD5'];
							// $cap .= "$capaian1" . "," . "$capaian2" . "," . "$capaian3" . "," . "$capaian4" . "," . "$capaian5" . ",";
						};
						?>
						<script>
							var ctx = document.getElementById("myChart");
							var myChart = new Chart(ctx, {
								type: 'radar',
								data: {
									labels: ["D1", "D2", "D3", "D4", "D5"],
									datasets: [{
										label: 'The Target value',
										data: [5, 5, 5, 5, 5],
										backgroundColor: [
											'rgba(255, 99, 132, 0.2)',
										],
										borderColor: [
											'rgba(255,99,132,1)',
										],
										borderWidth: 1
									}, {
										label: 'Actual value',
										data: ,
										backgroundColor: [

											'rgba(75, 192, 192, 0.2)',

										],
										borderColor: [

											'rgba(75, 192, 192, 1)',

										],
										borderWidth: 1
									}],
								},
								options: {
									maintainAspectRatio: false,
									scales: {
										yAxes: [{
											ticks: {
												beginAtZero: true,
												suggestedMax: 5
											}
										}]
									},
									cutoutPercentage: 80,
								}
							});
						</script>

					</div>
					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D1 Budaya dan Kapabilitas Risiko
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D2 Organisasi dan Tata Kelola Risiko
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D3 Kerangka Risiko dan Kepatuhan
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D4 Proses dan Kontrol Risiko
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D5 Model, Data, dan Tata Kelola Risiko
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div>
		<?= var_dump($dimensi_umum) ?>
	</div> -->
	<!-- Content Row -->
	<div class="row">
		<!-- Content Column -->
		<div class="col-lg-12 mb-4">
			<!-- Project Card Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Result</h6>
				</div>
				<div class="card-body">
					<div class="table table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col" rowspan="2" class="align-middle">No </th>
									<th scope="col" rowspan="2" class="align-middle">Nama Perusahaan</th>
									<th scope="col" rowspan="2" class="align-middle">Nama Asessor</th>
									<th scope="col" colspan="2">Capaian Dimensi 1</th>
									<th scope="col" colspan="2">Capaian Dimensi 2</th>
									<th scope="col" colspan="2">Capaian Dimensi 3</th>
									<th scope="col" colspan="2">Capaian Dimensi 4</th>
									<th scope="col" colspan="2">Capaian Dimensi 5</th>
									<th scope="col" colspan="2">Capaian Dimensi Korporasi</th>
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
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($result as $rmi) : ?>
									<tr>
										<th><?= $no++ ?></th>
										<td><?= $rmi['corporate_name'] ?></td>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th><?= $rmi['skor'] ?></th>
										<th></th>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
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
		<!-- Earnings (Monthly) Card Example -->
		<?php foreach ($result as $card) { ?>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">

					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Earnings (Monthly)
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">

									<?php echo $card['lvRiskCorpo']; ?>
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
								<th>2023 {belum dinamis}</th>
							</tr>
							<tr>
								<th>No. Laporan</th>
								<th>01/II/RMI/2023 {Belum Dinamis}</th>
							</tr>
							<tr>
								<th>Model RMI</th>
								<th>KBUMN-Umum {Belum dinamis}</th>
							</tr>
							<tr>
								<th>Nilai Total RMI</th>
								<th><?= $cv['ncpCorporate'] ?></th>
							</tr>
						</table>
					<?php } ?>
					<hr>
					<?php foreach ($result as $t) { ?>
						<table class="table-bordered table-responsive table-hover">
							<thead>belum dinamsi
								<tr>
									<th>Dimensi</th>
									<th>Nilai Dimensi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>A</td>
									<td><?= $t['ncpD1'] ?></td>
								</tr>
								<tr>
									<td>B</td>
									<td><?= $t['ncpD2'] ?></td>
								</tr>
								<tr>
									<td>C</td>
									<td><?= $t['ncpD3'] ?></td>
								</tr>
								<tr>
									<td>D</td>
									<td><?= $t['ncpD4'] ?></td>
								</tr>
								<tr>
									<td>E</td>
									<td><?= $t['ncpD5'] ?></td>
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
							$capaian1 =  $c['ncpD1'];
							$capaian2 = $c['ncpD2'];
							$capaian3 = $c['ncpD3'];
							$capaian4 = $c['ncpD4'];
							$capaian5 = $c['ncpD5'];
							$cap .= "$capaian1" . "," . "$capaian2" . "," . "$capaian3" . "," . "$capaian4" . "," . "$capaian5" . ",";
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
										data: [<?php echo $cap; ?>],
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
							<i class="fas fa-circle text-primary"></i> D1 (Dimensi 1)
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D2 (Dimensi 2)
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D3 (Dimensi 3)
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D4 (Dimensi 4)
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> D5 (Dimensi 5)
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
					<h6 class="m-0 font-weight-bold text-primary">Projects</h6>
				</div>
				<div class="card-body">
					<div class="table table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col" rowspan="2" class="align-middle">No </th>
									<th scope="col" rowspan="2" class="align-middle">Nama Perusahaan</th>
									<th scope="col" rowspan="2" class="align-middle">Nama Asessor</th>
									<th scope="col" colspan="2">Capain Dimensi 1</th>
									<th scope="col" colspan="2">Capain Dimensi 2</th>
									<th scope="col" colspan="2">Capain Dimensi 3</th>
									<th scope="col" colspan="2">Capain Dimensi 4</th>
									<th scope="col" colspan="2">Capain Dimensi 5</th>
									<th scope="col" colspan="2">Capain Dimensi Korporasi</th>
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
								foreach ($result as $rmi) : ?>
									<tr>
										<th><?= $rmi['id'] ?></th>
										<td><?= $rmi['corporate_name'] ?></td>
										<th><?= $rmi['user_name'] ?></th>
										<th><?= number_format($rmi['ncpD1'], 2) ?></th>
										<th><?= $rmi['lvRiskD1'] ?></th>
										<th><?= number_format($rmi['ncpD2'], 2) ?></th>
										<th><?= $rmi['lvRiskD2'] ?></th>
										<th><?= number_format($rmi['ncpD3'], 2) ?></th>
										<th><?= $rmi['lvRiskD3'] ?></th>
										<th><?= number_format($rmi['ncpD4'], 2) ?></th>
										<th><?= $rmi['lvRiskD4'] ?></th>
										<th><?= number_format($rmi['ncpD5'], 2) ?></th>
										<th><?= $rmi['lvRiskD5'] ?></th>
										<th><?= number_format($rmi['ncpCorporate'], 2) ?></th>
										<th><?= $rmi['lvRiskCorpo'] ?></th>
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
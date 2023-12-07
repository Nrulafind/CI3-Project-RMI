<style>
	table td {
		padding: 5px;
		width: 25%;
	}
</style>
<div class="container-fluid text-center">
	<h1>Welcome to ARMI <?php echo $this->session->userdata('name'); ?></h1>
	<div class="container align-content-start">
		<input type="hidden" name="assessment_id" value="<?= $assessment->assessment_id ?? 0; ?>">
		<form id="myForm" action="<?= base_url('Admin/saveUmum'); ?>" method="post" enctype="multipart/form-data" class="row gy-2 gx-3 mb-3">
			<table class="card col table table-hover table-responsive">
				<tbody class="card-body">
					<tr class="row">
						<td class="col-6">
							<label for="form-label" class="form-label">Corporate Name</label>
							<input type="text" name="corporate_name" class="form-control" value="<?= $assessment->corporate_name ?? ""; ?>">
						</td>
						<td class="col-6"><label for="form-label" class="form-label">User name</label>
							<input readonly type="text" name="user_name" class="form-control" value="<?= $assessment->user_name ?? $this->session->userdata('name'); ?>">
						</td>
					</tr>
					<tr class="row">
						<td class="col-6"><label for="form-label"> No Laporan</label>
							<input type="text" name="code_laporan" class="form-control" value="<?= $assessment->code_laporan ?? ""; ?>">
						</td>
						<td class="col-6"><label for="form-label">Tanggal Pengukuran</label>
							<input type="date" name="created_at" class="form-control" value="<?= $assessment->created_at ?? ""; ?>">
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-danger" hidden>Reset</button>
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
		<div class="card card-deck">
			<span>Skor akhir assesment: <?= $assessment->skor; ?></span>
			<span>(<?= $level; ?>)</span>
		</div>
		<hr>
		<table class="table table-responsive" id="tbl_dimensi">

		</table>
		</tbody>
		<hr>

	</div>
	<script>
		$(document).ready(function() {
			renderTable();
		});

		async function renderTable() {
			var req = await fetch(`admin/get_kertasKerja?assessment_id=${$("[name=assessment_id]").val()}`);
			try {
				var data = await req.json();
				var dimensi = data.dimensi;
				var subDimensi = data.subDimensi;
				var parameter = data.parameter;
				var assessmentDetail = data.assessmentDetail;
				// var question = data.question;
				// var phase = data.phase;

				var el = document.getElementById('tbl_dimensi');
				dimensi.forEach(d => {
					var count_param = 0;
					var sum_param = 0;
					el.insertAdjacentHTML('beforeend', `
					<tr>
						<td style="background-color: blue; color: white; text-align: left;" colspan="2">${d.dimensi_id + '. '+d.dimensi_name}</td>
						<td style="background-color: blue; color: white; text-align: right;">Skor: <span id="dimensi_${d.dimensi_id}"></span></td>
					</tr>
					`);
					subDimensi.forEach(sd => {
						if (sd.dimensi_id == d.dimensi_id) {
							el.insertAdjacentHTML('beforeend', `
							<tr>
								<td style="background-color: blueviolet; color:white; text-align: left;" colspan="3">${sd.subdimensi_id + '. '+sd.subdimensi_name}</td>
							</tr>
							`);
							parameter.forEach(p => {
								// question.forEach(q => {
								// 	phase.forEach(ph => {


								if (p.subdimensi_id == sd.subdimensi_id) {
									count_param++;
									assessmentDetail.forEach(ad => {
										if (ad.parameter_id == p.parameter_id) {
											sum_param = sum_param + parseInt(ad.phase_id);
										}
									});


									el.insertAdjacentHTML('beforeend', `
									<tr>
										<td style="text-align: left;">${p.parameter_name}</td>
										<td style="text-align: center;">
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phaseModal_">
												Kriteria 
											</button>
										</td>
										
										<td style="text-align: right;">
											<select class="form-select" name="phase_${p.parameter_id}" onchange="setParameter('${p.parameter_id}')">
												<option value="0">None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
											<input class="form-control mt-2" type="file" name="file_${p.parameter_id}" multiple>
										</td>
									</tr>
											
										`);
									//}
								}
							});


						}
					});
					var skor_dimensi = sum_param / count_param;
					document.getElementById(`dimensi_${d.dimensi_id}`).innerHTML = skor_dimensi;
				});

				assessmentDetail.forEach(f => {
					console.log(f.phase_id);
					document.querySelector(`[name="phase_${f.parameter_id}"]`).value = f.phase_id;
				})
			} catch (e) {
				alert(e);
			}

			// $.ajax({
			// 	type: 'GET',
			// 	url: `<?= base_url("Admin/get_kertasKerja?assessment_id="); ?>${document.querySelector('[name=assessment_id]').value}`, // Adjust the URL to your controller endpoint
			// 	dataType: 'json',
			// 	success: function(data) {
			// 		var dimensi = data.dimensi;
			// 		var subDimensi = data.subDimensi;
			// 		var parameter = data.parameter;
			// 		var assessmentDetail = data.assessmentDetail;
			// 	},
			// 	error: function(xhr, status, error) {
			// 		console.log("gagal");
			// 		console.error("AJAX Error: " + error);
			// 		console.log(xhr);
			// 	}
			// });


		}


		// function save(formId, id) {
		// 	var data = $('#' + formId).serializeArray();
		// 	var hiddeninput = $('#' + id);

		// 	console.log(data);
		// 	// if (hiddeninput === '') {
		// 	// Send user input to the server via AJAX for saving to the database
		// 	$.ajax({
		// 		type: 'POST',
		// 		url: '<?= base_url("Admin/saveUmum"); ?>', // Adjust the URL to your controller endpoint
		// 		data: data,
		// 		success: function(data) {
		// 			console.log(data);
		// 			alert('Data Inserted successfully');
		// 			// You can handle success response if needed
		// 		},
		// 		error: function(xhr, status, error) {
		// 			console.error("AJAX Error: " + error);
		// 			console.log(xhr);
		// 		}
		// 	});
		// 	// } 
		// 	// else if (hiddeninput !== '') {
		// 	// 	// Send user input to the server via AJAX for saving to the database
		// 	// 	$.ajax({
		// 	// 		type: 'PUT',
		// 	// 		url: '<?= base_url('Admin/saveUmum'); ?>', // Adjust the URL to your controller endpoint
		// 	// 		data: formData,
		// 	// 		success: function(data) {
		// 	// 			console.log(formData);
		// 	// 			alert('Data Inserted successfully');
		// 	// 			// You can handle success response if needed
		// 	// 		},
		// 	// 		error: function(xhr, status, error) {
		// 	// 			console.error("AJAX Error: " + error);
		// 	// 			console.log(xhr);
		// 	// 		}
		// 	// 	});
		// 	// }

		// }


		// function mypredictions(dimensi) {
		// 	console.log(dimensi);
		// 	var d = dimensi;
		// 	console.log(d);
		// 	let d1 = 0;
		// 	let d2 = 0;
		// 	let d3 = 0;
		// 	let d4 = 0;
		// 	let d5 = 0;

		// 	// Calculate totals for each dimension
		// 	if (d == 'A') {
		// 		d1 = d
		// 		console.log('Total ncpD1: ' + d1);
		// 	}
		// 	console.log('Total ncpD1: ' + d1);
		// 	console.log('Total ncpD2: ' + d2);
		// 	console.log('Total ncpD3: ' + d3);
		// 	console.log('Total ncpD4: ' + d4);
		// 	console.log('Total ncpD5: ' + d5);

		// 	// Calculate ncpCorpo based on the totals
		// 	var ncpCorpo = d1 + d2 + d3 + d4 + d5;
		// 	console.log('Total ncpCorpo: ' + ncpCorpo);
		// }

		function setParameter(parameter_id) {
			$.ajax({
				type: 'POST',
				url: '<?= base_url("Admin/setParameter"); ?>', // Adjust the URL to your controller endpoint
				data: {
					assessment_id: $('[name="assessment_id"]').val(),
					parameter_id: parameter_id,
					phase_id: document.querySelector(`[name="phase_${parameter_id}"]`).value
				},
				dataType: 'json',
				success: function(data) {
					document.getElementById('tbl_dimensi').innerHTML = "";
					renderTable();
				},
				error: function(xhr, status, error) {
					console.log("gagal");
					console.error("AJAX Error: " + error);
					console.log(xhr);
				}
			});
		}

		// function updatePredictions(formId) {
		// 	// Serialize form data
		// 	console.log(formId);
		// 	var data = $('#' + formId).serialize();
		// 	mypredictions(data);

		// 	if (formId == 'myFormA') {
		// 		//var data = $('#' + formId).serialize();
		// 		console.log("jajajaj");
		// 		console.log(data);

		// 		// Send user input to the server via AJAX for saving to the database
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '<?= base_url("Admin/calculateRiskA"); ?>', // Adjust the URL to your controller endpoint
		// 			data: data,
		// 			dataType: 'json',
		// 			success: function(data) {
		// 				console.log(data);

		// 				// You can handle success response if needed
		// 				$.each(data, function(key, value) {
		// 					// console.log(key + value);
		// 					$('#' + key).text(value);
		// 				});

		// 			},
		// 			error: function(xhr, status, error) {
		// 				console.log("gagal");
		// 				console.error("AJAX Error: " + error);
		// 				console.log(xhr);
		// 			}
		// 		});
		// 	}
		// 	if (formId == 'myFormB') {
		// 		//	var data = $('#' + formId).serialize();
		// 		console.log(data);
		// 		console.log("jBjBjBj");

		// 		// Send user input to the server via AJAX for saving to the database
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '<?= base_url("Admin/calculateRiskB"); ?>', // Adjust the URL to your controller endpoint
		// 			data: data,
		// 			dataType: 'json',
		// 			success: function(data) {
		// 				console.log(data);
		// 				// You can handle success response if needed
		// 				$.each(data, function(key, value) {
		// 					$('#' + key).text(value);
		// 				});
		// 				//		mypredictions(data);
		// 			},
		// 			error: function(xhr, status, error) {
		// 				console.error("AJAX Error: " + error);
		// 				console.log(xhr);
		// 			}
		// 		});
		// 	}
		// 	if (formId == 'myFormC') {
		// 		//	var data = $('#' + formId).serialize();
		// 		console.log(data);

		// 		console.log("jCjCjCj");

		// 		// Send user input to the server via AJAX for saving to the database
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '<?= base_url("Admin/calculateRiskC"); ?>', // Adjust the URL to your controller endpoint
		// 			data: data,
		// 			dataType: 'json',
		// 			success: function(data) {
		// 				console.log(data);
		// 				// You can handle success response if needed
		// 				$.each(data, function(key, value) {
		// 					$('#' + key).text(value);
		// 				});
		// 				//		mypredictions(data);
		// 			},
		// 			error: function(xhr, status, error) {
		// 				console.error("AJAX Error: " + error);
		// 				console.log(xhr);
		// 			}
		// 		});
		// 	}
		// 	if (formId == 'myFormD') {
		// 		//	var data = $('#' + formId).serialize();
		// 		console.log("jDjDjDj");

		// 		// Send user input to the server via AJAX for saving to the database
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '<?= base_url("Admin/calculateRiskD"); ?>', // Adjust the URL to your controller endpoint
		// 			data: data,
		// 			dataType: 'json',
		// 			success: function(data) {
		// 				console.log(data);
		// 				// You can handle success response if needed
		// 				$.each(data, function(key, value) {
		// 					$('#' + key).text(value);
		// 				});
		// 				//			mypredictions(data);
		// 			},
		// 			error: function(xhr, status, error) {
		// 				console.error("AJAX Error: " + error);
		// 				console.log(xhr);
		// 			}
		// 		});
		// 	}
		// 	if (formId == 'myFormE') {
		// 		//	var data = $('#' + formId).serialize();
		// 		console.log("jEjEjEj");

		// 		// Send user input to the server via AJAX for saving to the database
		// 		$.ajax({
		// 			type: 'POST',
		// 			url: '<?= base_url("Admin/calculateRiskE"); ?>', // Adjust the URL to your controller endpoint
		// 			data: data,
		// 			dataType: 'json',
		// 			success: function(data) {
		// 				console.log(data);
		// 				// You can handle success response if needed
		// 				$.each(data, function(key, value) {
		// 					$('#' + key).text(value);
		// 				});
		// 				//		mypredictions(data);
		// 			},
		// 			error: function(xhr, status, error) {
		// 				console.error("AJAX Error: " + error);
		// 				console.log(xhr);
		// 			}
		// 		});
		// 	} else {
		// 		var data = $('#' + formId).serialize();
		// 		console.log(data);

		// 		// Send user input to the server via AJAX for saving to the database
		// 		$.ajax({
		// 			error: function(xhr, status, error) {
		// 				console.log("Failed");
		// 				console.error("AJAX Error: " + error);
		// 				console.log(xhr);
		// 			}
		// 		});
		// 	}
		// }
	</script>
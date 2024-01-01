<style>
	table td {
		padding: 5px;
		width: 25%;
	}
</style>
<div class="container-fluid text-center">
	<h1>Assessment Form</h1>
	<div class="container align-content-start">
		<input type="hidden" name="assessment_id" value="<?= $assessment->assessment_id ?? 0; ?>">
		<form id="myForm" action="<?= base_url('Admin/saveUmum?assessment_id=') . $assessment->assessment_id ?? 0; ?>" method="post" enctype="multipart/form-data" class="row gy-2 gx-3 mb-3">
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
					<tr style="width: 100%;">
						<td colspan="4" style="text-align: left;">
							<?php
							if (@$assessment->status != 3) {
							?><button type="submit" class="btn btn-primary mr-2">Submit</button><?php
																								if ($this->session->userdata('akses') < 3) {
																								?><button type="button" class="btn btn-success" onclick="approve()">Approve</button>
									<button type="button" class="btn btn-danger" onclick="reject()">Reject</button><?php
																												} else {
																													?><button type="button" class="btn btn-warning" onclick="request_approve()">Request approval</button><?php
																																																						}
																																																					}
																																																							?>
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
		<div class="card card-deck">
			<span>Skor akhir assesment: <span id="skor"></span></span>
			<span id="level"></span>
		</div>
		<hr>
		<table class="table table-responsive" id="tbl_dimensi">

		</table>
		</tbody>
		<hr>

	</div>
	<script>
		$(document).ready(function() {
			if (document.querySelector('[name=assessment_id]').value > 0) {
				renderTable();
			}
		});

		async function renderTable() {
			var req = await fetch(`<?= base_url("admin/get_kertasKerja?assessment_id=") ?>${$("[name=assessment_id]").val()}`);
			try {
				var data = await req.json();
				var dimensi = data.dimensi;
				var subDimensi = data.subDimensi;
				var parameter = data.parameter;
				var assessmentDetail = data.assessmentDetail;
				var question = data.question;
				var qs = [];
				question.forEach(x => {
					if (!(x.parameter_id in qs)) {
						qs[x.parameter_id] = [];
						qs[x.parameter_id].push(x.question);
					} else {
						qs[x.parameter_id].push(x.question);
					}
				});

				document.getElementById('skor').textContent = data.assessment.skor;
				document.getElementById('level').textContent = '(' + data.assessment.level + ')';

				var el = document.getElementById('tbl_dimensi');
				var pp = 0;
				dimensi.forEach(d => {
					var count_param = 0;
					var sum_param = 0;
					el.insertAdjacentHTML('beforeend', `
						<tr>
							<td style="background-color: blue; color: white; text-align: left;" colspan="2">${d.dimensi_id + '. '+d.dimensi_name}</td>
							<td style="background-color: blue; color: white; text-align: right;">Skor: <span id="dimensi_${d.dimensi_id}"></span> <br> Level: <span id="dimensi_${d.dimensi_id.level}"></span</td>
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
								if (p.subdimensi_id == sd.subdimensi_id) {
									count_param++;
									pp++;
									assessmentDetail.forEach(ad => {
										if (ad.parameter_id == p.parameter_id) {
											sum_param = sum_param + parseInt(ad.phase_id);
										}
									});
									el.insertAdjacentHTML('beforeend', `
										<tr>
											<td style="text-align: left;">${p.parameter_name}</td>
											<td style="text-align: center;">
												<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#param_modal_${p.parameter_id.substring(0,1)+pp}">
													Kriteria 
												</button>
											</td>

											<div class="modal fade" id="param_modal_${p.parameter_id.substring(0,1)+pp}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5">${p.parameter_name}</h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body" id="body_modal_${p.parameter_id.substring(0,1)+pp}"></div>
													</div>
												</div>
											</div>
											
											<td style="text-align: right;">
												<select class="form-select row gy-2 gx-3 mb-3"" name="phase_${p.parameter_id}" onchange="setParameter('${p.parameter_id}')">
													<option value="0">None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
												<form id="myFile-<?= $assessment->assessment_id ?? 0; ?>" action="<?= base_url('Admin/saveFile?assessment_id=') . ($assessment->assessment_id ?? 0); ?>" method="post" enctype="multipart/form-data" class="row gy-2 gx-3 mb-3">
													<input readonly class="form-control mt-2" type="text" name="file_name" value="file_<?= $assessment->assessment_id; ?>_${p.parameter_id.replaceAll(".", "_")}">	
													<input class="form-control mt-2" type="file" name="uploaded_file">
													<?php $file_path = FCPATH . 'assets/uploads/evidenceUmum/file_' . $assessment->assessment_id; ?>
													<a href="<?php readfile($file_path . '_'?> ${p . parameter_id . replaceAll(".", "_")}); ?>"></a>
													<button type="submit" id="uplbtn<?= $assessment->assessment_id ?? 0; ?>" class="btn btn-primary">
														Upload
													</button>
												</form>
											</td>
										</tr>
									`);
									qs[p.parameter_id].forEach(x => {
										document.getElementById(`body_modal_${p.parameter_id.substring(0,1)+pp}`).insertAdjacentHTML('beforeend', `
											<span>${x}</span><br>
											<hr>
										`);
									})
								}
							});
						}
					});
					var skor_dimensi = sum_param / count_param;
					document.getElementById(`dimensi_${d.dimensi_id}`).innerHTML = skor_dimensi.toFixed(2);
				});

				assessmentDetail.forEach(f => {
					document.querySelector(`[name="phase_${f.parameter_id}"]`).value = f.phase_id;
				})
			} catch (e) {
				alert(e);
			}
		}

		function upltarget(id) {
			console.log(id);
			var fileInput = document.getElementById("upltarget" + id);
			var uploadButton = document.getElementById("uplbtn" + id);

			if (fileInput.files.length > 0) {
				uploadButton.removeAttribute('hidden');
			} else {
				uploadButton.setAttribute('hidden', 'true');
			}
		}

		// function uplfile(params) {

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

		async function request_approve() {
			if (confirm('Apakah anda yakin?')) {
				var req = await fetch(`admin/request_approve?assessment_id=${$("[name=assessment_id]").val()}`);
				try {
					var data = await req.json();
					if (data) {
						alert('Permintaan approval berhasil dikirim')
					}
				} catch (error) {
					console.log(req);
					console.log(error);
				}
			}
		}

		async function approve() {
			if (confirm('Apakah anda yakin?')) {
				var req = await fetch(`admin/approve?assessment_id=${$("[name=assessment_id]").val()}`);
				try {
					var data = await req.json();
					if (data) {
						alert('Berhasil melakukan approval')
					}
				} catch (error) {
					console.log(req);
					console.log(error);
				}
			}
		}

		async function reject() {
			if (confirm('Apakah anda yakin?')) {
				var reason = prompt('Masukkan alasan kenapa assessment di reject');
				if (reason) {
					$.ajax({
						type: 'POST',
						url: '<?= base_url("admin/reject?assessment_id="); ?>' + $("[name=assessment_id]").val(),
						data: {
							rejectReason: reason
						},
						dataType: 'json',
						success: function(data) {
							if (data) {
								alert('Assessment telah di reject')
							}
						},
						error: function(xhr, status, error) {
							console.error("AJAX Error: " + error);
						}
					});
				}
			}
		}
	</script>

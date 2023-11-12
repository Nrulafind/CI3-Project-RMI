<div class="container-fluid text-center">
	<h1>Welcome to ARMI <?php $this->session->userdata('name');	?></h1>

	<div class="container text-center">
		<div>
			hai
		</div>
		<div class="row justify-content-center align-items-center">
			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2">

					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div id="ncpCorporate" class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Hasil Corporasi :
									<span id="ncpCorporate">

									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2">

					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div id="lvRiskCorpo" class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Hasil Corporasi :
									<span id="lvRiskCorpo">

									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container text-center">
	<div class="row py-2 px-3  align-items-center">
		<form action="<?= base_url("Admin/saveUmum"); ?>" id="myForm" class="row gy-2 gx-3 mb-3" method="post" enctype="multipart/form-data">
			<div class="col-sm-6" mb-3>
				<label class="form-label" for="corporateName">Corporate name</label>
				<input type="text" class="form-control" id="corporateName" name="corporateName" placeholder="PT. Gamon Tbk">
			</div>
			<div class="col-sm-6">
				<label class="form-label" for="userName">User Name</label>
				<input type="text" class="form-control" id="userName" name="userName" placeholder="Jane Doe">
			</div>
			<div class="col-sm-12">
				<div class="card card-body" style="background-color: #f08822;">
					<p class="dropdown-toggle" data-bs-toggle="collapse" href="#collapseDimensiA" role="button" aria-expanded="false" aria-controls="collapseExample">
						Dimensi 1 : A. Budaya dan Kapabilitas Risiko
					</p>
					<div id="ncpD1" class="card col-2 align-items-center">
						Hasil Dimensi 1:
						<span id="ncpD1">

						</span>
					</div>
					<div id="lvRiskD1" class="card col-2 align-items-center">
						Hasil Dimensi 1:
						<span id="lvRiskD1">

						</span>
					</div>

				</div>
				<div class="collapse" id="collapseDimensiA">
					<!-- Sub dimensi untuk dimensi A  -->
					<div class="card card-body">
						<div class="row">
							<div class="col-sm-6">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiA1" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 1 : Budaya Risiko
								</p>
							</div>
							<div class="col-sm-6">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiA2" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 2 : Kapabilitas Risiko
								</p>
							</div>
						</div>
					</div>
					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiA1">
							<div class="card">
								<div class="row">
									<div class="col">
										<h4>Parameter A.1.1 : 1. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-1-1_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-1-1_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-1-1_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-1-1_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-1-1_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsA-1-1_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-1_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-1_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-1_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-1_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="A_1_1">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="A_1_1" name="A_1_1" data-field="A_1_1">
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileA_1_1" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileA_1_1[]" id="formFileA_1_1" multiple>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>

					</div>

					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiA2">
							<div class="card">
								<div class="row">
									<div class="col-sm-6">
										<h4>Parameter A.2.2 : 2. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-2_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-2_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-2_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-2_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-2_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsA-2-2_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-2_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-2_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-2_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-2_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="A_2_2">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="A_2_2" name="A_2_2" data-field="A_2_2" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileA_2_2" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileA_2_2[]" id="formFileA_2_2" multiple>
											</div>
										</div>
									</div>

									<!-- Batas Sub Dimensi A  -->
									<div class="col-sm-6">
										<h4>Parameter A.2.3 : 3. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-3_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-3_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-3_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-3_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsA-2-3_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsA-2-3_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-3_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-3_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-3_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-2-3_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="A_2_3">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="A_2_3" name="A_2_3" data-field="A_2_3" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileA_2_3" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileA_2_3[]" id="formFileA_2_3" multiple>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card card-body" style="background-color: #f5ad60;">
					<p class="dropdown-toggle" data-bs-toggle="collapse" href="#collapseDimensiB" role="button" aria-expanded="false" aria-controls="collapseExample">
						Dimensi 2 : B. Organisasi dan Tata kelola risiko
					</p>
					<div id="ncpD2" class="card col-2 align-items-center">
						Hasil Dimensi 2:
						<span id="ncpD2">

						</span>
					</div>
					<div id="lvRiskD2" class="card col-2 align-items-center">
						Hasil Dimensi 2:
						<span id="lvRiskD2">

						</span>
					</div>
				</div>


				<div class="collapse" id="collapseDimensiB">
					<!-- Sub dimensi untuk dimensi A  -->
					<div class="card card-body">
						<div class="row">
							<div class="col-sm-4">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiB1" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 1 : Organisasi Pengelola Risiko
								</p>
							</div>
							<div class="col-sm-4">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiB2" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 2 : Peran dan Tanggung Jawab Organisasi Pengelola Risiko
								</p>
							</div>
							<div class="col-sm-4">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiB3" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 3 : Model Tata Kelola Risiko Tiga Lini dan Tata Kelola Risiko Terintegrasi
								</p>
							</div>
						</div>
					</div>
					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiB1">
							<div class="card">
								<div class="row">
									<div class="col">
										<h4>Parameter B.1.4 : 4. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-4_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-4_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-4_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-4_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-4_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsB-1-4_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-4_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-4_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-4_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsA-1-4_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="B_1_4">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="B_1_4" name="B_1_4" data-field="B_1_4" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileB_1_4" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileB_1_4[]" id="formFileB_1_4" multiple>
											</div>
										</div>
									</div>

									<div class="col">
										<h4>Parameter B.1.5 : 5. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-5_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-5_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-5_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-5_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-1-5_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsB-1-5_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-1-5_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-1-5_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-1-5_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-1-5_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="B_1_5">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="B_1_5" name="B_1_5" data-field="B_1_5" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileB_1_5" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileB_1_5[]" id="formFileB_1_5" multiple>
											</div>
										</div>
									</div>

								</div>


							</div>
						</div>

					</div>

					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiB2">
							<div class="card">
								<div class="row">
									<div class="col-sm-6">
										<h4>Parameter B.2.6 : 6. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-6_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-6_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-6_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-6_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-6_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsB-2-6_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-6_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-6_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-6_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-6_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="B_2_6">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="B_2_6" name="B_2_6" data-field="B_2_6" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileB_2_6" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileB_2_6[]" id="formFileB_2_6" multiple>
											</div>
										</div>
									</div>


									<!-- Batas Sub Dimensi A  -->


									<div class="col-sm-6">
										<h4>Parameter B.2.7 : 7. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-7_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-7_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-7_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-7_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-7_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsB-2-7_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-7_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-7_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-7_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-7_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="B_2_7">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="B_2_7" name="B_2_7" data-field="B_2_7" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileB_2_7" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileB_2_7[]" id="formFileB_2_7" multiple>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h4>Parameter B.2.8 : 8. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-8_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-8_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-8_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-8_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-8_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsB-2-8_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-8_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-8_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-8_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsB-2-8_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog"></div>
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
															a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
															b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
															c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
															d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
															e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
															f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
															g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
															h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
														<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
															a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
															b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-sm-6">
											<label class="align-start" for="B_2_8">Pilih INDEX YANG SESUAI *</label>
											<select class="form-select" id="B_2_8" name="B_2_8" data-field="B_2_8" required>
												<option value="0" selected>None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="formFileB_2_8" class="form-label">asessment</label>
											<input class="form-control" type="file" name="formFileB_2_8[]" id="formFileB_2_8" multiple>
										</div>
									</div>
								</div>


								<!-- Batas Sub Dimensi A  -->


								<div class="col-sm-6">
									<h4>Parameter B.2.9 : 9. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-9_1">
										1. Fase Awal (Initial Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-9_2">
										2. Fase Berkembang (Emerging State)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-9_3">
										3. Fase Praktik Yang Baik (Good Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-9_4">
										4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-9_5">
										5. Fase Praktik Terbaik (Best Practice Phase)

									</button>

									<!-- Modal -->
									<div class="modal fade" id="paramsB-2-9_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
														<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-9_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
														<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-9_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-9_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-9_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
															a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
															b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
															c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
															d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
															e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
															f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
															g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
															h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
														<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
															a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
															b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-sm-6">
											<label class="align-start" for="B_2_9">Pilih INDEX YANG SESUAI *</label>
											<select class="form-select" id="B_2_9" name="B_2_9" data-field="B_2_9" required>
												<option value="0" selected>None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="formFileB_2_9" class="form-label">asessment</label>
											<input class="form-control" type="file" name="formFileB_2_9[]" id="formFileB_2_9" multiple>
										</div>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Parameter B.2.10 : 10. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-10_1">
										1. Fase Awal (Initial Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-10_2">
										2. Fase Berkembang (Emerging State)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-10_3">
										3. Fase Praktik Yang Baik (Good Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-10_4">
										4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-10_5">
										5. Fase Praktik Terbaik (Best Practice Phase)

									</button>

									<!-- Modal -->
									<div class="modal fade" id="paramsB-2-10_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
														<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-10_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
														<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-10_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-10_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-10_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
															a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
															b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
															c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
															d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
															e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
															f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
															g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
															h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
														<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
															a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
															b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-sm-6">
											<label class="align-start" for="B_2_10">Pilih INDEX YANG SESUAI *</label>
											<select class="form-select" id="B_2_10" name="B_2_10" data-field="B_2_10" required>
												<option value="0" selected>None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="formFileB_2_10" class="form-label">asessment</label>
											<input class="form-control" type="file" name="formFileB_2_10[]" id="formFileB_2_10" multiple>
										</div>
									</div>
								</div>


								<!-- Batas Sub Dimensi A  -->


								<div class="col-sm-6">
									<h4>Parameter B.2.11 : 11. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-11_1">
										1. Fase Awal (Initial Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-11_2">
										2. Fase Berkembang (Emerging State)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-11_3">
										3. Fase Praktik Yang Baik (Good Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-11_4">
										4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-11_5">
										5. Fase Praktik Terbaik (Best Practice Phase)

									</button>

									<!-- Modal -->
									<div class="modal fade" id="paramsB-2-11_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
														<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-11_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
														<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-11_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-11_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-11_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
															a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
															b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
															c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
															d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
															e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
															f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
															g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
															h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
														<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
															a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
															b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>


									<div class="row">
										<div class="col-sm-6">
											<label class="align-start" for="B_2_11">Pilih INDEX YANG SESUAI *</label>
											<select class="form-select" id="B_2_11" name="B_2_11" data-field="B_2_11" required>
												<option value="0" selected>None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="formFileB_2_11" class="form-label">asessment</label>
											<input class="form-control" type="file" name="formFileB_2_11[]" id="formFileB_2_11" multiple>
										</div>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Parameter B.2.12 : 12. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-12_1">
										1. Fase Awal (Initial Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-12_2">
										2. Fase Berkembang (Emerging State)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-12_3">
										3. Fase Praktik Yang Baik (Good Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-12_4">
										4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

									</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-2-12_5">
										5. Fase Praktik Terbaik (Best Practice Phase)

									</button>

									<!-- Modal -->
									<div class="modal fade" id="paramsB-2-12_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
														<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-12_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
														<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-12_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-12_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="paramsB-2-12_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<ol>
														<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
														<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
														<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
														<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
														<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
														<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
															a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
															b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
															c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
															d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
															e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
															f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
															g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
															h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
														<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
															a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
															b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
														<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
													</ol>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
												</div>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-sm-6">
											<label class="align-start" for="B_2_12">Pilih INDEX YANG SESUAI *</label>
											<select class="form-select" id="B_2_12" name="B_2_12" data-field="B_2_12" required>
												<option value="0" selected>None</option>
												<option value="1"> 1. Fase Awal (Initial Phase)</option>
												<option value="2"> 2. Fase Berkembang (Emerging State)</option>
												<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
												<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
												<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
											</select>
										</div>
										<div class="col-sm-6">
											<label for="formFileB_2_12" class="form-label">asessment</label>
											<input class="form-control" type="file" name="formFileB_2_12[]" id="formFileB_2_12" multiple>
										</div>
									</div>
								</div>


								<!-- Batas Sub Dimensi A  -->
							</div>

						</div>

					</div>
				</div>
				<div class="collapse" id="collapseSubDimensiB3">
					<div class="card">
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter B.3.13 : 13. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-13_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-13_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-13_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-13_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-13_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-13_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-13_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-13_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-13_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-13_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B_3_13">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_13" name="B_3_13" data-field="B_3_13" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_13" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_13[]" id="formFileB_3_13" multiple>
									</div>
								</div>
							</div>


							<!-- Batas Sub Dimensi A  -->


							<div class="col-sm-6">
								<h4>Parameter B.3.14 : 14. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-14_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-14_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-14_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-14_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-14_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-14_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-14_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-14_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-14_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-14_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B_3_14">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_14" name="B_3_14" data-field="B_3_14" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_14" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_14[]" id="formFileB_3_14" multiple>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter B.3.15 : 15. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-15_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-15_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-15_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-15_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-15_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-15_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-15_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-15_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-15_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-15_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B_3_15">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_15" name="B_3_15" data-field="B_3_15" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_15" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_15[]" id="formFileB_3_15" multiple>
									</div>
								</div>
							</div>


							<!-- Batas Sub Dimensi A  -->


							<div class="col-sm-6">
								<h4>Parameter B.3.16 : 16. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-16_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-16_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-16_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-16_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-16_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-16_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-16_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-16_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-16_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-16_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B_3_16">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_16" name="B_3_16" data-field="B_3_16" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_16" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_16[]" id="formFileB_3_16" multiple>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter B.3.17 : 17. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-17_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-17_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-17_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-17_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-17_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-17_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-17_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-17_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-17_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-17_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B.3.17">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_17" name="B_3_17" data-field="B_3_17" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_17" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_17[]" id="formFileB_3_17" multiple>
									</div>
								</div>
							</div>


							<!-- Batas Sub Dimensi A  -->


							<div class="col-sm-6">
								<h4>Parameter B.3.18 : 18. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-18_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-18_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-18_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-18_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-18_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-18_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-18_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-18_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-18_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-18_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B_3_18">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_18" name="B_3_18" data-field="B_3_18" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_18" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_18[]" id="formFileB_3_18" multiple>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter B.3.19 : 19. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-19_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-19_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-19_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-19_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsB-3-19_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsB-3-19_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-19_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-19_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-19_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsB-3-19_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="B_3_19">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="B_3_19" name="B_3_19" data-field="B_3_19" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileB_3_19" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileB_3_19[]" id="formFileB_3_19" multiple>
									</div>
								</div>
							</div>


							<!-- Batas Sub Dimensi A  -->
						</div>

					</div>

				</div>

			</div>
			<div class="col-sm-12">
				<div class="card card-body" style="background-color: #f08822;">
					<p class="dropdown-toggle" data-bs-toggle="collapse" href="#collapseDimensiC" role="button" aria-expanded="false" aria-controls="collapseExample">
						Dimensi 3 : C. Kerangka Risiko dan Kepatuhan
					</p>
					<div id="ncpD3" class="card col-2 align-items-center">
						Hasil Dimensi 3:
						<span id="ncpD1">

						</span>
					</div>
					<div id="lvRiskD3" class="card col-2 align-items-center">
						Hasil Dimensi 3:
						<span id="lvRiskD3">

						</span>
					</div>
				</div>


				<div class="collapse" id="collapseDimensiC">
					<!-- Sub dimensi untuk dimensi A  -->
					<div class="card card-body">
						<div class="row">
							<div class="col-sm-2">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiC1" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 1 : Strategi Risiko
								</p>
							</div>
							<div class="col-sm-2">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiC2" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 2 : kebijakan dan Prosedur
								</p>
							</div>
							<div class="col-sm-2">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiC3" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 3 : Fungsi dan Kepatuhan
								</p>
							</div>
							<div class="col-sm-2">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiC4" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 4 : Efektivitas Management
								</p>
							</div>
							<div class="col-sm-2">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiC5" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 5 : Efektivitas Pengendalian Intern
								</p>
							</div>
						</div>
					</div>
					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiC1">
							<div class="card">
								<div class="row">
									<div class="col">
										<h4>Parameter C.1.20 : 20. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-20_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-20_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-20_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-20_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-20_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-20_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-20_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-20_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-20_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-20_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_20">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_20" name="C_1_20" data-field="C_1_20" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_20" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_20[]" id="formFileC_1_20" multiple>
											</div>
										</div>
									</div>

									<div class="col">
										<h4>Parameter C.1.21 : 21. Peran Manajemen Risiko dalam Penyusunan rencana Strategis </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-21_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-21_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-21_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-21_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-21_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-21_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-21_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-21_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-21_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-21_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_21">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_21" name="C_1_21" data-field="C_1_21" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_21" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_21[]" id="formFileC_1_21" multiple>
											</div>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col">
										<h4>Parameter C.1.22 : 22. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-22_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-22_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-22_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-22_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-22_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-22_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-22_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-22_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-22_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-22_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_22">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_22" name="C_1_22" data-field="C_1_22" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_22" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_22[]" id="formFileC_1_22" multiple>
											</div>
										</div>
									</div>

									<div class="col">
										<h4>Parameter C.1.23 : 23. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-23_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-23_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-23_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-23_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-23_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-23_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-23_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-23_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-23_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-23_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_23">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_23" name="C_1_23" data-field="C_1_23" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_23" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_23[]" id="formFileC_1_23" multiple>
											</div>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col">
										<h4>Parameter C.1.24 : 24. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-24_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-24_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-24_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-24_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-24_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-24_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-24_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-24_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-24_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-24_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_24">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_24" name="C_1_24" data-field="C_1_24" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_24" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_24[]" id="formFileC_1_24" multiple>
											</div>
										</div>
									</div>

									<div class="col">
										<h4>Parameter C.1.25 : 25. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-25_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-25_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-25_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-25_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-25_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-25_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-25_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-25_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-25_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-25_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_25">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_25" name="C_1_25" data-field="C_1_25" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_25" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_25[]" id="formFileC_1_25" multiple>
											</div>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col">
										<h4>Parameter C.1.26 : 26. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-26_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-26_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-26_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-26_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-1-26_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-1-26_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-26_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-26_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-26_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-1-26_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_1_26">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_1_26" name="C_1_26" data-field="C_1_26" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_1_26" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_1_26[]" id="formFileC_1_26" multiple>
											</div>
										</div>
									</div>

								</div>


							</div>
						</div>

					</div>

					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiC2">
							<div class="card">
								<div class="row">
									<div class="col-sm-6">
										<h4>Parameter C.2.27 : 27. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-27_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-27_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-27_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-27_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-27_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-2-27_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-27_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-27_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-27_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-27_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_2_27">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_2_27" name="C_2_27" data-field="C_2_27" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_2_27" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_2_27[]" id="formFileC_2_27" multiple>
											</div>
										</div>
									</div>


									<!-- Batas Sub Dimensi A  -->


									<div class="col-sm-6">
										<h4>Parameter C.2.28 : 28. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-28_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-28_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-28_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-28_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-28_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-2-28_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-28_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-28_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-28_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-28_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_2_28">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_2_28" name="C_2_28" data-field="C_2_28" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_2_28" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_2_28[]" id="formFileC_2_28" multiple>
											</div>
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<h4>Parameter C.2.29 : 29. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-29_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-29_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-29_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-29_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-29_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-2-29_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-29_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-29_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-29_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-29_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_2_29">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_2_29" name="C_2_29" data-field="C_2_29" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_2_29" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_2_29[]" id="formFileC_2_29" multiple>
											</div>
										</div>
									</div>


									<!-- Batas Sub Dimensi A  -->


									<div class="col-sm-6">
										<h4>Parameter C.2.30 : 30. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-30_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-30_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-30_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-30_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-2-30_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsC-2-30_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-30_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-30_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-30_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsC-2-30_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="C_2_30">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="C_2_30" name="C_2_30" data-field="C_2_30" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileC_2_30" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileC_2_30[]" id="formFileC_2_30" multiple>
											</div>
										</div>

									</div>
								</div>
								<!-- Batas Sub Dimensi A  -->
							</div>

						</div>

					</div>
				</div>

				<div class="collapse" id="collapseSubDimensiC3">
					<div class="card">
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter C.3.31 : 31. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-3-31_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-3-31_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-3-31_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-3-31_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-3-31_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsC-3-31_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-3-31_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-3-31_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-3-31_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-3-31_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="C_3_31">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="C_3_31" name="C_3_31" data-field="C_3_31" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileC_3_31" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileC_3_31[]" id="formFileC_3_31" multiple>
									</div>
								</div>
							</div>
						</div>

						<!-- Batas Sub Dimensi A  -->
					</div>

				</div>

				<div class="collapse" id="collapseSubDimensiC4">
					<div class="card">
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter C.4.32 : 32. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-4-32_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-4-32_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-4-32_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-4-32_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-4-32_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsC-4-32_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-4-32_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-4-32_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-4-32_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-4-32_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="C_4_32">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="C_4_32" name="C_4_32" data-field="C_4_32" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileC_4_32" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileC_4_32[]" id="formFileC_4_32" multiple>
									</div>
								</div>
							</div>
						</div>

						<!-- Batas Sub Dimensi A  -->
					</div>

				</div>

				<div class="collapse" id="collapseSubDimensiC5">
					<div class="card">
						<div class="row">
							<div class="col-sm-6">
								<h4>Parameter C.5.33 : 33. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-5-33_1">
									1. Fase Awal (Initial Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-5-33_2">
									2. Fase Berkembang (Emerging State)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-5-33_3">
									3. Fase Praktik Yang Baik (Good Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-5-33_4">
									4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

								</button>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsC-5-33_5">
									5. Fase Praktik Terbaik (Best Practice Phase)

								</button>

								<!-- Modal -->
								<div class="modal fade" id="paramsC-5-33_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
													<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-5-33_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
													<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-5-33_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-5-33_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="paramsC-5-33_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<ol>
													<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
													<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
													<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
													<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
													<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
													<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
														a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
														b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
														c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
														d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
														e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
														f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
														g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
														h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
													<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
														a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
														b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
													<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
												</ol>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
											</div>
										</div>
									</div>
								</div>



								<div class="row">
									<div class="col-sm-6">
										<label class="align-start" for="C_5_33">Pilih INDEX YANG SESUAI *</label>
										<select class="form-select" id="C_5_33" name="C_5_33" data-field="C_5_33" required>
											<option value="0" selected>None</option>
											<option value="1"> 1. Fase Awal (Initial Phase)</option>
											<option value="2"> 2. Fase Berkembang (Emerging State)</option>
											<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
											<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
											<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="formFileC_5_33" class="form-label">asessment</label>
										<input class="form-control" type="file" name="formFileC_5_33[]" id="formFileC_5_33" multiple>
									</div>
								</div>
							</div>
						</div>

						<!-- Batas Sub Dimensi A  -->
					</div>

				</div>
			</div>
			<div class="col-sm-12">
				<div class="card card-body" style="background-color: #f5ad60;">
					<p class="dropdown-toggle" data-bs-toggle="collapse" href="#collapseDimensiD" role="button" aria-expanded="false" aria-controls="collapseExample">
						Dimensi 4 : D. Proses dan Kontrol Risiko
					</p>
					<div id="ncpD4" class="card col-2 align-items-center">
						Hasil Dimensi 4:
						<span id="ncpD4">

						</span>
					</div>
					<div id="lvRiskD4" class="card col-2 align-items-center">
						Hasil Dimensi 4:
						<span id="lvRiskD4">

						</span>
					</div>
				</div>
				<div class="collapse" id="collapseDimensiD">
					<div class="card card-body">
						<div class="row">
							<div class="col-sm-3">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiD1" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 1 : Proses dan Kontrol Risiko
								</p>
							</div>
							<div class="col-sm-3">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiD2" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 2 : Pengukuran dan Prioritas Risiko
								</p>
							</div>
							<div class="col-sm-3">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiD3" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 3 : Perlakuan Risiko
								</p>
							</div>
							<div class="col-sm-3">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiD4" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 4 : Pelaporan Risiko
								</p>
							</div>
						</div>
					</div>
					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiD1">
							<div class="card">
								<div class="row">
									<div class="col">
										<h4>Parameter D.1.34 : 34. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-1-34_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-1-34_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-1-34_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-1-34_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-1-34_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsD-1-34_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsD-1-34_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsD-1-34_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsD-1-34_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsD-1-34_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="D_1_34">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" id="D_1_34" name="D_1_34" data-field="D_1_34" required>
													<option value="0" selected>None</option>
													<option value="1"> 1. Fase Awal (Initial Phase)</option>
													<option value="2"> 2. Fase Berkembang (Emerging State)</option>
													<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileD_1_34" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileD_1_34[]" id="formFileD_1_34" multiple>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="card card-body">
							<div class="collapse" id="collapseSubDimensiD2">
								<div class="card">
									<div class="row">
										<div class="col-sm-6">
											<h4>Parameter D.2.35 : 35. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-35_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-35_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-35_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-35_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-35_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsD-2-35_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-35_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-35_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-35_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-35_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>



											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="D_2_35">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="D_2_35" name="D_2_35" data-field="D_2_35" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileD_2_35" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileD_2_35[]" id="formFileD_2_35" multiple>
												</div>
											</div>
										</div>


										<!-- Batas Sub Dimensi A  -->


										<div class="col-sm-6">
											<h4>Parameter D.2.36 : 36. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-36_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-36_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-36_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-36_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-36_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsD-2-36_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-36_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-36_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-36_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-36_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>


											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="D_2_36">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="D_2_36" name="D_2_36" data-field="D_2_36" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileD_2_36" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileD_2_36[]" id="formFileD_2_36" multiple>
												</div>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<h4>Parameter D.2.37 : 37. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-37_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-37_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-37_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-37_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-2-37_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsD-2-37_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-37_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-37_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-37_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-2-37_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>



											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="D_2_37">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="D_2_37" name="D_2_37" data-field="D_2_37" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileD_2_37" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileD_2_37[]" id="formFileD_2_37" multiple>
												</div>
											</div>
										</div>


										<!-- Batas Sub Dimensi A  -->

									</div>
									<!-- Batas Sub Dimensi A  -->
								</div>

							</div>

						</div>
						<div class="card card-body">
							<div class="collapse" id="collapseSubDimensiD3">
								<div class="card">
									<div class="row">
										<div class="col-sm-6">
											<h4>Parameter D.3.38 : 38. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-38_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-38_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-38_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-38_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-38_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsD-3-38_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-38_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-38_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-38_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-38_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>


											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="D_3_38">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="D_3_38" name="D_3_38" data-field="D_3_38" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileD_3_38" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileD_3_38[]" id="formFileD_3_38" multiple>
												</div>
											</div>
										</div>

										<!-- Batas Sub Dimensi A  -->
										<div class="col-sm-6">
											<h4>Parameter D.3.39 : 39. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-39_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-39_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-39_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-39_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-3-39_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsD-3-39_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-39_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-39_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-39_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-3-39_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>


											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="D_3_39">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="D_3_39" name="D_3_39" data-field="D_3_39" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileD_3_39" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileD_3_39[]" id="formFileD_3_39" multiple>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
						<div class="card card-body">
							<div class="collapse" id="collapseSubDimensiD4">
								<div class="card">
									<div class="row">
										<div class="col">
											<h4>Parameter D.4.40 : 40. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-4-40_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-4-40_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-4-40_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-4-40_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsD-4-40_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsD-4-40_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-4-40_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-4-40_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-4-40_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsD-4-40_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="D_4_40">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="D_4_40" name="D_4_40" data-field="D_4_40" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileD_4_40" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileD_4_40[]" id="formFileD_4_40" multiple>
												</div>
											</div>
										</div>
									</div>


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card card-body" style="background-color: #f08822;">
					<p class="dropdown-toggle" data-bs-toggle="collapse" href="#collapseDimensiE" role="button" aria-expanded="false" aria-controls="collapseExample">
						Dimensi 5 : E. Model, Data dan Teknologi
					</p>
					<div id="ncpD5" class="card col-2 align-items-center">
						Hasil Dimensi 5:
						<span id="ncpD5">

						</span>
					</div>
					<div id="lvRiskD5" class="card col-2 align-items-center">
						Hasil Dimensi 5:
						<span id="lvRiskD5">

						</span>
					</div>
				</div>

				<div class="collapse" id="collapseDimensiE">
					<div class="card card-body">
						<div class="row">
							<div class="col-sm-6">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiE1" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 1 : Permodelan Risiko
								</p>
							</div>
							<div class="col-sm-6">
								<p class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSubDimensiE2" role="button" aria-expanded="false" aria-controls="collapseExample">
									Sub Dimensi 2 : Data Risiko
								</p>
							</div>
						</div>
					</div>

					<div class="card card-body">
						<div class="collapse" id="collapseSubDimensiE1">
							<div class="card">
								<div class="row">
									<div class="col">
										<h4>Parameter E.1.41 : 41. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-1-41_1">
											1. Fase Awal (Initial Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-1-41_2">
											2. Fase Berkembang (Emerging State)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-1-41_3">
											3. Fase Praktik Yang Baik (Good Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-1-41_4">
											4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-1-41_5">
											5. Fase Praktik Terbaik (Best Practice Phase)

										</button>

										<!-- Modal -->
										<div class="modal fade" id="paramsE-1-41_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
															<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsE-1-41_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
															<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsE-1-41_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsE-1-41_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="paramsE-1-41_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<ol>
															<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
															<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
															<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
															<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
															<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
															<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
															<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
															<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
														</ol>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
													</div>
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<label class="align-start" for="E_1_41">Pilih INDEX YANG SESUAI *</label>
												<select class="form-select" name="E_1_41" id="E_1_41" data-field="E_1_41" required>
													<option value=0 selected>None</option>
													<option value=1> 1. Fase Awal (Initial Phase)</option>
													<option value=2> 2. Fase Berkembang (Emerging State)</option>
													<option value=3> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
													<option value=4> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
													<option value=5> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label for="formFileE_1_41" class="form-label">asessment</label>
												<input class="form-control" type="file" name="formFileE_1_41[]" id="formFileE_1_41" multiple>
											</div>
										</div>
									</div>

									<!-- Batas Sub Dimensi A  -->

								</div>
							</div>

						</div>

						<div class="card card-body">
							<div class="collapse" id="collapseSubDimensiE2">
								<div class="card">
									<div class="row">
										<div class="col">
											<h4>Parameter E.2.42 : 42. Internalisasi budaya Risiko dalam budaya perusahaan </h4>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-2-42_1">
												1. Fase Awal (Initial Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-2-42_2">
												2. Fase Berkembang (Emerging State)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-2-42_3">
												3. Fase Praktik Yang Baik (Good Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-2-42_4">
												4. Fase Praktik yang Lebih Baik (Strong Practice Phase)

											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paramsE-2-42_5">
												5. Fase Praktik Terbaik (Best Practice Phase)

											</button>

											<!-- Modal -->
											<div class="modal fade" id="paramsE-2-42_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Belum ada program penanaman budaya risiko, namun telah disusun peta jalan/rencana implementasi program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya)</li>
																<li>Budaya risiko belum tertanam di kegiatan usaha sehari-hari (misal kepemilikan dan tanggung jawab risiko pegawai dan jajaran manajemen belum jelas). Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh pegawai tertentu (misal unit kerja khusus), namun keterlibatan pegawai utama (misal Komisaris, Direktur Utama, staf Manajemen Risiko) masih rendah</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsE-2-42_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko (misal risk awards, kampanye, risk townhall, dan sebagainya), namun saat ini dilakukan secara ad-hoc</li>
																<li>Tanggung jawab pengembangan budaya risiko secara tidak langsung diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) namun tidak tercantum dengan jelas pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecardantara Risiko dan Unit Bisnis tidak berkaitan '(Risiko tidak memiliki KPI bisnis, dan Bisnis tidak memiliki KPI risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini belum optimal dalam menerapkan tata kelola risiko yang dapat berpengaruh pada tidak tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN sesuai target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsE-2-42_3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin (sekurang-kurangnya satu kali dalam setahun).</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis sebagian saling berkaitan, contohnya Bisnis memiliki KPI risiko, namun Risiko tidak memiliki KPI bisnis ATAU Risiko memiliki KPI bisnis, namun Bisnis tidak memiliki KPI risiko</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu 100-105% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsE-2-42_4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun)</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban oleh organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko) dan tercantum pada peran dan tanggung jawab jabatan tersebut.</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis).</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non-keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>
											<div class="modal fade" id="paramsE-2-42_5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="staticBackdropLabel">Kriteria Fase Awal </h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<ol>
																<li>Telah ada program penanaman budaya risiko yang sedang dijalankan (misal risk awards, kampanye, risk townhall, dan sebagainya) dan terdapat program sadar risiko, saat ini dilakukan secara rutin dan lebih sering (lebih dari satu kali dalam setahun),</li>
																<li>Telah ada evaluasi terhadap peningkatan budaya risiko (misal survei budaya risiko) termasuk mengumpulkan masukan dari pegawai untuk pengembangan program budaya risiko</li>
																<li>Tanggung jawab pengembangan budaya risiko secara jelas diemban dan tercantum pada peran dan tanggung jawab jabatan tidak hanya untuk organ pengelola risiko (misal Komisaris, Direktur Utama, staf Manajemen Risiko), tetapi juga untuk pegawai di Tiga Lini Pertahanan (khususnya yang memegang posisi manajerial).</li>
																<li>Balance scorecard antara Risiko dan Unit Bisnis saling berkaitan (Bisnis memiliki KPI risiko, dan Risiko memiliki KPI bisnis); hal- hal yang berkaitan dengan budaya risiko diperhitungkan dalam proses kepegawaian (misal perekrutan, promosi, dan keputusan evaluasi/insentif)</li>
																<li>Program penanaman budaya risiko saat ini berjalan efektif, terbukti dari kenaikan skor kematangan risiko (misal kenaikan di Dimensi budaya risiko)</li>
																<li>Budaya risiko menjadi bagian integral dari budaya perusahaan (“ini cara kerja kami”). Budaya risiko tercantum pada kebijakan budaya kerja yang disosialisasikan di perusahaan, dan budaya ini tertanam di seluruh lini perusahaan dimulai dengan penegasan dari jajaran manajemen, diperkuat dengan langkah nyata (yang juga dapat digunakan sebagai kriteria evaluasi kinerja pegawai):
																	a. Cepat mengantisipasi potensi risiko dan menanggapinya dengan tepat
																	b. Menyeimbangkan target jangka pendek dan risiko jangka panjang
																	c. Rutin mengadakan pembahasan risiko saat diperlukan, bahkan jika pembahasannya dianggap sulit
																	d. Mendukung pelaksanaan inisiatif Manajemen Risiko dan secara ketat menerapkan pedoman Manajemen Risiko
																	e. Resiliensi (contohnya resiliensi operasional, tanggap merespons peristiwa yang merugikan, dan sebagainya, dengan memberi penekanan baik dalam penyusunan strategi maupun dalam pelaksanaannya)
																	f. Telah ada serangkaian sistem penunjang untuk pelaksanaan dan penanaman program budaya risiko perusahaan, contohnya:
																	g. Intranet perusahaan untuk memuat informasi yang dapat diakses mengenai program budaya risiko dan kebijakan risiko perusahaan
																	h. Tersedia dashboard untuk memantau metrik yang berkaitan dengan budaya risiko/program budaya risiko</li>
																<li>Telah ada bukti yang jelas atas kinerja implementasi program budaya risiko, di antaranya:
																	a. Bukti perbaikan indikator utama berkaitan dengan budaya risiko perusahaan, di antaranya penurunan jumlah kasus kecurangan internal, korupsi, dan pelanggaran kode etika pegawai, beserta penurunan jumlah kerugian dari kasus pelanggaran tersebut
																	b. Penyelesaian penuh program budaya risiko bagi pegawai yang telah direncanakan dalam periode pelaporan</li>
																<li>BUMN dengan skor maturitas pada parameter ini telah menerapkan tata kelola risiko yang dapat berpengaruh pada tercapainya kinerja keuangan & non- keuangan yang bersumber dari operasional BUMN yaitu >110% dari target RKAP</li>
															</ol>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
														</div>
													</div>
												</div>
											</div>


											<div class="row">
												<div class="col-sm-6">
													<label class="align-start" for="E_2_42">Pilih INDEX YANG SESUAI *</label>
													<select class="form-select" id="E_2_42" name="E_2_42" data-field="E_2_42" required>
														<option value="0" selected>None</option>
														<option value="1"> 1. Fase Awal (Initial Phase)</option>
														<option value="2"> 2. Fase Berkembang (Emerging State)</option>
														<option value="3"> 3. Fase Praktik Yang Baik (Good Practice Phase)</option>
														<option value="4"> 4. Fase Praktik yang Lebih Baik (Strong Practice Phase)</option>
														<option value="5"> 5. Fase Praktik Terbaik (Best Practice Phase)</option>
													</select>
												</div>
												<div class="col-sm-6">
													<label for="formFileE_2_42" class="form-label">asessment</label>
													<input class="form-control" type="file" name="formFileE_2_42[]" id="formFileE_2_42" multiple>
												</div>
											</div>
										</div>

										<!-- Batas Sub Dimensi A  -->

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="card card-footer bg-transparent">

					<div class="col-auto">
						<input type="submit" class="btn btn-primary" name="Submit">
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</div>
			</div>
	</div>

</div>
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

<div class="container text-center">
	<h1>Assessment Here on ARMI</h1>
</div>

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
							<label class="align-start" for="<?= $subdimensi_id ?>">Pilih INDEX YANG SESUAI *</label>
							<select class="form-select" name="<?= $subdimensi_id ?>" data-field="<?= $subdimensi_id ?>">
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

				<tr>

					<td></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>

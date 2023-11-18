<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != true && $this->session->userdata('access') != 'Officer') {
			$url = base_url('/');
			redirect($url);
		}
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['result'] = $this->Mcrud->get_all_data();
		$data['dimensi_umum'] = $this->Mcrud->get_dimensi_umum();
		//	$data = $this->Mcrud->get_all_data('tbl_perhitungan')->result_array();

		//$data = array($result);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/dashboard', $data);
		$this->load->view('template/footer');
	}

	//Function Cluster Umum

	public function formUmum()
	{
		$data['dimensi_umum'] = $this->Mcrud->get_dimensi_umum();
		//$data = array($result);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/form/clusterUmum', $data);
		$this->load->view('template/footer');
	}
	public function calculateRisk()
	{

		$data = $this->Mcrud->get_weight();
		foreach ($data as $dkey) {

			// Retrieve POST data for various dimensions and sub-dimensions
			$ncp1 = $this->input->post('A_1_1') * 0.33;
			$ncp2 = $this->input->post('A_2_2') * 0.33;
			$ncp3 = $this->input->post('A_2_3') * 0.33;
			$ncp4 = $this->input->post('B_1_4') * 0.06;
			$ncp5 = $this->input->post('B_1_5') * 0.06;
			$ncp6 = $this->input->post('B_2_6') * 0.06;
			$ncp7 = $this->input->post('B_2_7') * 0.06;
			$ncp8 = $this->input->post('B_2_8') * 0.06;
			$ncp9 = $this->input->post('B_2_9') * 0.06;
			$ncp10 = $this->input->post('B_2_10') * 0.06;
			$ncp11 = $this->input->post('B_2_11') * 0.06;
			$ncp12 = $this->input->post('B_2_12') * 0.06;
			$ncp13 = $this->input->post('B_3_13') * 0.06;
			$ncp14 = $this->input->post('B_3_14') * 0.06;
			$ncp15 = $this->input->post('B_3_15') * 0.06;
			$ncp16 = $this->input->post('B_3_16') * 0.06;
			$ncp17 = $this->input->post('B_3_17') * 0.06;
			$ncp18 = $this->input->post('B_3_18') * 0.06;
			$ncp19 = $this->input->post('B_3_19') * 0.06;
			$ncp20 = $this->input->post('C_1_20') * 0.07;
			$ncp21 = $this->input->post('C_1_21') * 0.07;
			$ncp22 = $this->input->post('C_1_22') * 0.07;
			$ncp23 = $this->input->post('C_1_23') * 0.07;
			$ncp24 = $this->input->post('C_1_24') * 0.07;
			$ncp25 = $this->input->post('C_1_25') * 0.07;
			$ncp26 = $this->input->post('C_1_26') * 0.07;
			$ncp27 = $this->input->post('C_2_27') * 0.07;
			$ncp28 = $this->input->post('C_2_28') * 0.07;
			$ncp29 = $this->input->post('C_2_29') * 0.07;
			$ncp30 = $this->input->post('C_2_30') * 0.07;
			$ncp31 = $this->input->post('C_3_31') * 0.07;
			$ncp32 = $this->input->post('C_4_32') * 0.07;
			$ncp33 = $this->input->post('C_5_33') * 0.07;
			$ncp34 = $this->input->post('D_1_34') * 0.14;
			$ncp35 = $this->input->post('D_2_35') * 0.14;
			$ncp36 = $this->input->post('D_2_36') * 0.14;
			$ncp37 = $this->input->post('D_2_37') * 0.14;
			$ncp38 = $this->input->post('D_3_38') * 0.14;
			$ncp39 = $this->input->post('D_3_39') * 0.14;
			$ncp40 = $this->input->post('D_4_40') * 0.14;
			$ncp41 = $this->input->post('E_1_41') * 0.50;
			$ncp42 = $this->input->post('E_2_42') * 0.50;
		}
		// Calculate dimension values
		$ncpD1 = $ncp1 + $ncp2 + $ncp3;
		$ncpD2 = $ncp4 + $ncp5 + $ncp6 + $ncp7 + $ncp8 + $ncp9 + $ncp10 + $ncp11 + $ncp12 + $ncp13 + $ncp14 + $ncp15 + $ncp16 + $ncp17 + $ncp18 + $ncp19;
		$ncpD3 = $ncp20 + $ncp21 + $ncp22 + $ncp23 + $ncp24 + $ncp25 + $ncp26 + $ncp27 + $ncp28 + $ncp29 + $ncp30 + $ncp31 + $ncp32 + $ncp33;
		$ncpD4 = $ncp34 + $ncp35 + $ncp36 + $ncp37 + $ncp38 + $ncp39 + $ncp40;
		$ncpD5 = $ncp41 + $ncp42;

		// Calculate corporate risk
		$ncpCorporate = ($ncpD1 + $ncpD2 + $ncpD3 + $ncpD4 + $ncpD5) / 5;

		// Check risk levels for each dimension
		$lvRiskD1 = $this->getRiskLevel($ncpD1);
		$lvRiskD2 = $this->getRiskLevel($ncpD2);
		$lvRiskD3 = $this->getRiskLevel($ncpD3);
		$lvRiskD4 = $this->getRiskLevel($ncpD4);
		$lvRiskD5 = $this->getRiskLevel($ncpD5);
		$lvRiskCorporasi = $this->getRiskLevel($ncpCorporate);

		$data = array(
			'ncpD1' => number_format($ncpD1, 2),
			'ncpD2' => number_format($ncpD2, 2),
			'ncpD3' => number_format($ncpD3, 2),
			'ncpD4' => number_format($ncpD4, 2),
			'ncpD5' => number_format($ncpD5, 2),
			'ncpCorporate' => number_format($ncpCorporate, 2),
			'lvRiskD1' => $lvRiskD1,
			'lvRiskD2' => $lvRiskD2,
			'lvRiskD3' => $lvRiskD3,
			'lvRiskD4' => $lvRiskD4,
			'lvRiskD5' => $lvRiskD5,
			'lvRiskCorpo' => $lvRiskCorporasi
		);

		echo json_encode($data);
	}

	public function saveUmum()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->Mcrud->get_dimensi_umum();
			$file_ids = [];

			foreach ($data as $dkey) {
				$field_names = $this->getFieldNames($dkey);

				foreach ($field_names as $field_name) {
					if (!empty($_FILES[$field_name]['name'])) {
						$this->handleFileUpload($field_name, $file_ids);
					}
				}
			}

			$dimension_values = $this->calculateDimensionValues($data);

			// Add the calculated dimension values to the $data array
			$data['dimension_values'] = $dimension_values;

			// Insert file IDs into the assessment data
			$data['file_ids'] = $file_ids;

			// Insert the assessment data into the database
			$assessment_data = [
				'file_id' => $file_ids[0],
				'corporate_name' => $this->input->post('corporate_name'),
				'user_name' => $this->input->post('user_name'),
				'status_approval' => "Waiting for approval",
				'approval' => $this->session->userdata('name'),
				'created_at' => $this->input->post('created_at'),
				'code_laporan' => $this->input->post('code_laporan'),
			];
			$this->Mcrud->insertAssessmentData($assessment_data);

			// Your existing code for further processing or redirecting
			// ...

			redirect(base_url('dashboard_officer'));
		}
	}

	private function getRiskLevel($value)
	{
		if ($value > 4.8 && $value <= 5) {
			return "Best Practice Phase";
		} elseif ($value > 4.4 && $value <= 4.8) {
			return "Strong Practice Phase AA";
		} elseif ($value > 3.8 && $value <= 4.4) {
			return "Strong Practice Phase A";
		} elseif ($value > 3.4 && $value <= 3.8) {
			return "Good Practice Phase AA";
		} elseif ($value > 2.8 && $value <= 3.4) {
			return "Good Practice Phase A";
		} elseif ($value > 2.4 && $value <= 2.8) {
			return "Emerging State AA";
		} elseif ($value > 1.8 && $value <= 2.4) {
			return "Emerging State A";
		} elseif ($value > 1.4 && $value <= 1.8) {
			return "Initial Phase AA";
		} elseif ($value >= 1 && $value <= 1.4) {
			return "Initial Phase A";
		} elseif ($value >= 0 && $value < 1) {
			return "Non Existent";
		} else {
			return "Not Valid" . $value;
		}
	}

	private function getFieldNames($dkey)
	{
		$field_names = [];
		$dimensions = ['A', 'B', 'C', 'D', 'E'];

		foreach ($dimensions as $dimension) {
			for ($i = 1; $i <= 42; $i++) {
				$field_names[] = $this->input->post("formFile{$dimension}_{$i}[]");
			}
		}

		return $field_names;
	}

	private function handleFileUpload($field_name, &$file_ids)
	{
		$upload_config = [
			'upload_path'   => APPPATH . '/assets/uploads/evidenceUmum/',
			'allowed_types' => 'gif|jpg|png|pdf|docx|xlsx',
			'max_size'      => 100000,
			'max_width'     => 10240,
			'max_height'    => 10240,
			'encrypt_name'  => TRUE
		];

		$this->load->library('upload', $upload_config);

		if ($this->upload->do_upload($field_name)) {
			$file_data = $this->upload->data();

			$fileInfo = [
				'file_name' => $file_data['file_name'],
				'file_type' => $file_data['file_type']
			];

			$file_id = $this->Mcrud->insertFile($fileInfo);

			$fileData = [
				'file_id'   => $file_id,
				'file_data' => file_get_contents($file_data['full_path'])
			];
			$this->Mcrud->insertFileData($fileData);

			$file_ids[] = $file_id;
		} else {
			$error = ['error' => $this->upload->display_errors()];
			$this->load->view('/user/form/clusterUmum', $error);
			exit;
		}
	}

	private function calculateDimensionValues($data)
	{
		$ncp1 = $this->input->post('A_1_1') * 0.33;
		$ncp2 = $this->input->post('A_2_2') * 0.33;
		$ncp3 = $this->input->post('A_2_3') * 0.33;
		$ncp4 = $this->input->post('B_1_4') * 0.06;
		$ncp5 = $this->input->post('B_1_5') * 0.06;
		$ncp6 = $this->input->post('B_2_6') * 0.06;
		$ncp7 = $this->input->post('B_2_7') * 0.06;
		$ncp8 = $this->input->post('B_2_8') * 0.06;
		$ncp9 = $this->input->post('B_2_9') * 0.06;
		$ncp10 = $this->input->post('B_2_10') * 0.06;
		$ncp11 = $this->input->post('B_2_11') * 0.06;
		$ncp12 = $this->input->post('B_2_12') * 0.06;
		$ncp13 = $this->input->post('B_3_13') * 0.06;
		$ncp14 = $this->input->post('B_3_14') * 0.06;
		$ncp15 = $this->input->post('B_3_15') * 0.06;
		$ncp16 = $this->input->post('B_3_16') * 0.06;
		$ncp17 = $this->input->post('B_3_17') * 0.06;
		$ncp18 = $this->input->post('B_3_18') * 0.06;
		$ncp19 = $this->input->post('B_3_19') * 0.06;
		$ncp20 = $this->input->post('C_1_20') * 0.07;
		$ncp21 = $this->input->post('C_1_21') * 0.07;
		$ncp22 = $this->input->post('C_1_22') * 0.07;
		$ncp23 = $this->input->post('C_1_23') * 0.07;
		$ncp24 = $this->input->post('C_1_24') * 0.07;
		$ncp25 = $this->input->post('C_1_25') * 0.07;
		$ncp26 = $this->input->post('C_1_26') * 0.07;
		$ncp27 = $this->input->post('C_2_27') * 0.07;
		$ncp28 = $this->input->post('C_2_28') * 0.07;
		$ncp29 = $this->input->post('C_2_29') * 0.07;
		$ncp30 = $this->input->post('C_2_30') * 0.07;
		$ncp31 = $this->input->post('C_3_31') * 0.07;
		$ncp32 = $this->input->post('C_4_32') * 0.07;
		$ncp33 = $this->input->post('C_5_33') * 0.07;
		$ncp34 = $this->input->post('D_1_34') * 0.14;
		$ncp35 = $this->input->post('D_2_35') * 0.14;
		$ncp36 = $this->input->post('D_2_36') * 0.14;
		$ncp37 = $this->input->post('D_2_37') * 0.14;
		$ncp38 = $this->input->post('D_3_38') * 0.14;
		$ncp39 = $this->input->post('D_3_39') * 0.14;
		$ncp40 = $this->input->post('D_4_40') * 0.14;
		$ncp41 = $this->input->post('E_1_41') * 0.50;
		$ncp42 = $this->input->post('E_2_42') * 0.50;

		// Calculate dimension values
		$ncpD1 = $ncp1 + $ncp2 + $ncp3;
		$ncpD2 = $ncp4 + $ncp5 + $ncp6 + $ncp7 + $ncp8 + $ncp9 + $ncp10 + $ncp11 + $ncp12 + $ncp13 + $ncp14 + $ncp15 + $ncp16 + $ncp17 + $ncp18 + $ncp19;
		$ncpD3 = $ncp20 + $ncp21 + $ncp22 + $ncp23 + $ncp24 + $ncp25 + $ncp26 + $ncp27 + $ncp28 + $ncp29 + $ncp30 + $ncp31 + $ncp32 + $ncp33;
		$ncpD4 = $ncp34 + $ncp35 + $ncp36 + $ncp37 + $ncp38 + $ncp39 + $ncp40;
		$ncpD5 = $ncp41 + $ncp42;

		// Calculate corporate risk
		$ncpCorporate = ($ncpD1 + $ncpD2 + $ncpD3 + $ncpD4 + $ncpD5) / 5;

		// Check risk levels for each dimension
		$lvRiskD1 = $this->getRiskLevel($ncpD1);
		$lvRiskD2 = $this->getRiskLevel($ncpD2);
		$lvRiskD3 = $this->getRiskLevel($ncpD3);
		$lvRiskD4 = $this->getRiskLevel($ncpD4);
		$lvRiskD5 = $this->getRiskLevel($ncpD5);
		$lvRiskCorporasi = $this->getRiskLevel($ncpCorporate);


		$dimension_values = [
			'ncpD1' => $ncpD1,
			'ncpD2' => $ncpD2,
			'ncpD3' => $ncpD3,
			'ncpD4' => $ncpD4,
			'ncpD5' => $ncpD5,
			'ncpCorporate' => $ncpCorporate,
			'lvRiskD1' => $lvRiskD1,
			'lvRiskD2' => $lvRiskD2,
			'lvRiskD3' => $lvRiskD3,
			'lvRiskD4' => $lvRiskD4,
			'lvRiskD5' => $lvRiskD5,
			'lvRiskCorpo' => $lvRiskCorporasi
		];

		return $dimension_values;
	}
	//evaluation assesment function start
	public function asessmentEval()
	{
		$data['asessment'] = $this->Mcrud->get_assestment();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/asessment/asessmentEval', $data);
		$this->load->view('template/footer');
	}
	//evaluation assesment function end
}

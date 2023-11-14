<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged') != true && $this->session->userdata('access') != 'Super Admin') {
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
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}

	//Function Cluster Umum

	public function formUmum()
	{
		$data['nestedArray'] = $this->Mcrud->get_dimensi_umum();
		$nestedArray = [];

		foreach ($data['nestedArray'] as $row) {
			$categoryID = $row['category_id'];
			$dimensionID = $row['dimensi_id'];
			$subDimensionID = $row['subdimensi_id'];
			$parameterID = $row['parameter_id'];
			$questionID = $row['question_id'];
			$phaseID = $row['phase_id'];

			// Check if the category exists in the nested array
			if (!isset($nestedArray[$categoryID])) {
				$nestedArray[$categoryID] = [
					'category_id' => $categoryID,
					'category_name' => $row['category_name'] ?? '',
					'dimensions' => []
				];
			}

			// Check if the dimension exists in the nested array
			if (!isset($nestedArray[$categoryID]['dimensions'][$dimensionID])) {
				$nestedArray[$categoryID]['dimensions'][$dimensionID] = [
					'dimensi_id' => $dimensionID,
					'dimensi_name' => $row['dimensi_name'],
					'sub_dimensions' => []
				];
			}

			// Check if the sub-dimension exists in the nested array
			if (!isset($nestedArray[$categoryID]['dimensions'][$dimensionID]['sub_dimensions'][$subDimensionID])) {
				$nestedArray[$categoryID]['dimensions'][$dimensionID]['sub_dimensions'][$subDimensionID] = [
					'subdimensi_id' => $subDimensionID,
					'subdimensi_name' => $row['subdimensi_name'],
					'parameters' => []
				];
			}

			// Check if the parameter exists in the nested array
			if (!isset($nestedArray[$categoryID]['dimensions'][$dimensionID]['sub_dimensions'][$subDimensionID]['parameters'][$parameterID])) {
				$nestedArray[$categoryID]['dimensions'][$dimensionID]['sub_dimensions'][$subDimensionID]['parameters'][$parameterID] = [
					'parameter_id' => $parameterID,
					'parameter_name' => $row['parameter_name'],
					'Weight' => $row['Weight'],
					'questions' => []
				];
			}

			// Check if the phase exists in the nested array
			if (!isset($nestedArray[$categoryID]['dimensions'][$dimensionID]['sub_dimensions'][$subDimensionID]['parameters'][$parameterID]['questions'][$phaseID])) {
				$nestedArray[$categoryID]['dimensions'][$dimensionID]['sub_dimensions'][$subDimensionID]['parameters'][$parameterID]['questions'][$phaseID] = [
					'question_id' => $questionID,
					'phase_id' => $phaseID,
					'phase_name' => $row['phase_name'],
					'phase_value' => $row['phase_value'],
					'question' => $row['question'], // Add more fields as needed
				];
			}
		}

		// var_dump($nestedArray);
		//var_dump($nestedArray);
		// echo json_encode($nestedArray);

		$data['nestedArray'] = $nestedArray;
		// echo json_encode($data['nestedArray']);

		// die();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/form/clusterUmum', $data);
		$this->load->view('template/footer');
	}
	public function calculateRisk()
	{
		// Retrieve POST data for various dimensions and sub-dimensions
		$ncpSD1 = $_POST['A_1_1'];
		$ncpSD2 = ($_POST['A_2_2'] + $_POST['A_2_3']) / 2;
		$ncpSD3 = ($_POST['B_1_4'] + $_POST['B_1_5']) / 2;
		$ncpSD4 = ($_POST['B_2_6'] + $_POST['B_2_7'] + $_POST['B_2_8'] + $_POST['B_2_9'] + $_POST['B_2_10'] + $_POST['B_2_11'] + $_POST['B_2_12']) / 7;
		$ncpSD5 = ($_POST['B_3_13'] + $_POST['B_3_14'] + $_POST['B_3_15'] + $_POST['B_3_16'] + $_POST['B_3_17'] + $_POST['B_3_18'] + $_POST['B_3_19']) / 7;
		$ncpSD6 = ($_POST['C_1_20'] + $_POST['C_1_21'] + $_POST['C_1_22'] + $_POST['C_1_23'] + $_POST['C_1_24'] + $_POST['C_1_25'] + $_POST['C_1_26']) / 7;
		$ncpSD7 = ($_POST['C_2_27'] + $_POST['C_2_28'] + $_POST['C_2_29'] + $_POST['C_2_30']) / 4;
		$ncpSD8 = $_POST['C_3_31'];
		$ncpSD9 = $_POST['C_4_32'];
		$ncpSD10 = $_POST['C_5_33'];
		$ncpSD11 = $_POST['D_1_34'];
		$ncpSD12 = ($_POST['D_2_35'] + $_POST['D_2_36'] + $_POST['D_2_37']) / 3;
		$ncpSD13 = ($_POST['D_3_38'] + $_POST['D_3_39']) / 2;
		$ncpSD14 = $_POST['D_4_40'];
		$ncpSD15 = $_POST['E_1_41'];
		$ncpSD16 = $_POST['E_2_42'];

		// Calculate dimension values
		$ncpD1 = ($ncpSD1 + $ncpSD2) / 2;
		$ncpD2 = ($ncpSD3 + $ncpSD4 + $ncpSD5) / 3;
		$ncpD3 = ($ncpSD6 + $ncpSD7 + $ncpSD8 + $ncpSD9 + $ncpSD10) / 5;
		$ncpD4 = ($ncpSD11 + $ncpSD12 + $ncpSD13 + $ncpSD14) / 4;
		$ncpD5 = ($ncpSD15 + $ncpSD16) / 2;

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
		$data = $this->Mcrud->get_dimensi_umum();
		foreach ($data as $d) {
			$ncpSD1 = $this->input->post['A_1_1'] * $d['Weight'];
		}
		//post untuk data input biasa
		$corporateName = $this->input->post('corporateName');
		$name = $this->input->post('userName');

		// Retrieve POST data for various dimensions and sub-dimensions
		$ncpSD1 = $this->input->post['A_1_1'];
		$ncpSD2 = ($_POST['A_2_2'] + $_POST['A_2_3']) / 2;
		$ncpSD3 = ($_POST['B_1_4'] + $_POST['B_1_5']) / 2;
		$ncpSD4 = ($_POST['B_2_6'] + $_POST['B_2_7'] + $_POST['B_2_8'] + $_POST['B_2_9'] + $_POST['B_2_10'] + $_POST['B_2_11'] + $_POST['B_2_12']) / 7;
		$ncpSD5 = ($_POST['B_3_13'] + $_POST['B_3_14'] + $_POST['B_3_15'] + $_POST['B_3_16'] + $_POST['B_3_17'] + $_POST['B_3_18'] + $_POST['B_3_19']) / 7;
		$ncpSD6 = ($_POST['C_1_20'] + $_POST['C_1_21'] + $_POST['C_1_22'] + $_POST['C_1_23'] + $_POST['C_1_24'] + $_POST['C_1_25'] + $_POST['C_1_26']) / 7;
		$ncpSD7 = ($_POST['C_2_27'] + $_POST['C_2_28'] + $_POST['C_2_29'] + $_POST['C_2_30']) / 4;
		$ncpSD8 = $_POST['C_3_31'];
		$ncpSD9 = $_POST['C_4_32'];
		$ncpSD10 = $_POST['C_5_33'];
		$ncpSD11 = $_POST['D_1_34'];
		$ncpSD12 = ($_POST['D_2_35'] + $_POST['D_2_36'] + $_POST['D_2_37']) / 3;
		$ncpSD13 = ($_POST['D_3_38'] + $_POST['D_3_39']) / 2;
		$ncpSD14 = $_POST['D_4_40'];
		$ncpSD15 = $_POST['E_1_41'];
		$ncpSD16 = $_POST['E_2_42'];

		// Calculate dimension values
		$ncpD1 = ($ncpSD1 + $ncpSD2) / 2;
		$ncpD2 = ($ncpSD3 + $ncpSD4 + $ncpSD5) / 3;
		$ncpD3 = ($ncpSD6 + $ncpSD7 + $ncpSD8 + $ncpSD9 + $ncpSD10) / 5;
		$ncpD4 = ($ncpSD11 + $ncpSD12 + $ncpSD13 + $ncpSD14) / 4;
		$ncpD5 = ($ncpSD15 + $ncpSD16) / 2;

		// Calculate corporate risk
		$ncpCorporate = ($ncpD1 + $ncpD2 + $ncpD3 + $ncpD4 + $ncpD5) / 5;

		// Check risk levels for each dimension
		$lvRiskD1 = $this->getRiskLevel($ncpD1);
		$lvRiskD2 = $this->getRiskLevel($ncpD2);
		$lvRiskD3 = $this->getRiskLevel($ncpD3);
		$lvRiskD4 = $this->getRiskLevel($ncpD4);
		$lvRiskD5 = $this->getRiskLevel($ncpD5);
		$lvRiskCorporasi = $this->getRiskLevel($ncpCorporate);


		//upload fun
		$upload_config = array(
			'upload_path'   => './uploads/asessmentEval/',
			'allowed_types' => 'gif|jpg|png|pdf|docx|xlsx',
			'max_size'      => 100000,
			'max_width'     => 10240,
			'max_height'    => 7680,
			'encrypt_name'  => TRUE
		);

		$this->load->library('upload', $upload_config);
		// Array to store file IDs for later association
		$file_ids = [];

		// Handle each unique file input field individually
		for ($i = 1; $i <= 200; $i++) {
			$field_name = "formFileA_1_1[]" . $i; // Replace with the actual field name
			$field_name = "formFileA_2_2[]" . $i;
			$field_name = "formFileA_2_3[]" . $i;
			$field_name = "formFileB_1_4[]" . $i;
			$field_name = "formFileB_1_5[]" . $i;
			$field_name = "formFileB_2_6[]" . $i;
			$field_name = "formFileB_2_7[]" . $i; // Replace with the actual field name
			$field_name = "formFileB_2_8[]" . $i;
			$field_name = "formFileB_2_9[]" . $i;
			$field_name = "formFileB_2_10[]" . $i;
			$field_name = "formFileB_2_11[]" . $i;
			$field_name = "formFileB_2_12[]" . $i;
			$field_name = "formFileB_3_13[]" . $i;
			$field_name = "formFileB_3_14[]" . $i;
			$field_name = "formFileB_3_15[]" . $i;
			$field_name = "formFileB_3_16[]" . $i;
			$field_name = "formFileB_3_17[]" . $i;
			$field_name = "formFileB_3_18[]" . $i;
			$field_name = "formFileB_3_19[]" . $i;
			$field_name = "formFileC_1_20[]" . $i;
			$field_name = "formFileC_1_21[]" . $i; // Replace with the actual field name
			$field_name = "formFileC_1_22[]" . $i;
			$field_name = "formFileC_1_23[]" . $i;
			$field_name = "formFileC_1_24[]" . $i;
			$field_name = "formFileC_1_25[]" . $i;
			$field_name = "formFileC_1_26[]" . $i;
			$field_name = "formFileC_2_27[]" . $i;
			$field_name = "formFileC_2_28[]" . $i;
			$field_name = "formFileC_2_29[]" . $i;
			$field_name = "formFileC_2_30[]" . $i;
			$field_name = "formFileC_3_31[]" . $i; // Replace with the actual field name
			$field_name = "formFileC_4_32[]" . $i;
			$field_name = "formFileC_5_33[]" . $i;
			$field_name = "formFileD_1_34[]" . $i;
			$field_name = "formFileD_2_35[]" . $i;
			$field_name = "formFileD_2_37[]" . $i;
			$field_name = "formFileD_3_38[]" . $i;
			$field_name = "formFileD_3_39[]" . $i;
			$field_name = "formFileD_4_40[]" . $i;
			$field_name = "formFileE_1_41[]" . $i;
			$field_name = "formFileE_2_42[]" . $i;

			// Check if any files were uploaded for this field
			if (!empty($_FILES[$field_name]['name'])) {
				// Use a dynamic file array
				$uploaded_files = $_FILES[$field_name];

				// Loop through the uploaded files for this field
				for ($j = 0; $j < count($uploaded_files['name']); $j++) {
					$_FILES['userfile'] = $uploaded_files;

					// Perform the upload for each file
					if ($this->upload->do_upload('userfile')) {
						$file_data = $this->upload->data();

						$fileInfo = array(
							'file_name' => $file_data['file_name'],
							'file_type' => $file_data['file_type']
						);

						// Insert the file info into the database
						$file_id = $this->Mcrud->insertFile($fileInfo);

						// Insert the file data into 'file_data' table
						$fileData = array(
							'file_id'   => $file_id,
							'file_data' => file_get_contents($file_data['full_path'])
						);
						$this->Mcrud->insertFileData($fileData);

						$file_ids[] = $file_id;
					} else {
						// Handle the error for this file
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('umum', $error);
						return; // Exit if there's an error
					}
				}
			}
		}

		// Insert assessment data with the associated file IDs
		$assessmentData = array(
			'corporateName' => $corporateName,
			'userName' => $name,
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
			'lvRiskCorpo' => $lvRiskCorporasi,
			'status_approval' => "Waiting for approval",
			'approval' => $this->session->userdata('name')
		);

		// Insert assessment data for each file
		foreach ($file_ids as $file_id) {
			$assessmentData['file_id'] = $file_id;
			$this->Mcrud->insertAssessmentData($assessmentData);
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

	//evaluation assesment function start
	public function asessmentEval()
	{
		$data['asessment'] = $this->Mcrud->get_assestment();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/asessment/asessmentEval', $data);
		$this->load->view('template/footer');
	}
	public function editAsessment($id)
	{
		$data['dimensi_umum'] = $this->Mcrud->get_dimensi_umum();
		$data['asessment'] = $this->Mcrud->get_assestment();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/asessment/edit_asessmentEval', $data, $id);
		$this->load->view('template/footer');
	}
	public function deleteAsessment()
	{

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/asessment/asessmentEval', $data);
		$this->load->view('template/footer');
	}
	//evaluation assesment function end

	//parameter question start
	public function paramsUmum()
	{

		$data['category'] = $this->Mcrud->get_category();
		$data['dimensi'] = $this->Mcrud->get_dimensi();
		$data['sub_dimensi'] = $this->Mcrud->get_sub_dimensi();
		$data['parameter'] = $this->Mcrud->get_parameter();
		$data['phase'] = $this->Mcrud->get_phase();
		$data['question'] = $this->Mcrud->get_question();


		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/params/params', $data);
		$this->load->view('template/footer');
	}

	public function add_category()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$data = array(
				'category_id' => $id,
				'category_name' => $nama,
			);

			$this->Mcrud->insertCategory($data);
			redirect('params_umum');
		}
	}
	public function edit_category()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$data = array(
				'category_id' => $id,
				'category_name' => $nama,
			);

			$this->Mcrud->updateCategory($id, $data);
			redirect('params_umum');
		}
	}
	public function delete_category($id)
	{

		$this->Mcrud->deleteCategory($id);
		var_dump($id);
		echo 'true';
		redirect(base_url('params_umum'));
	}


	public function add_dimensi()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$category_id = $this->input->post('category_id');

			$data = array(
				'dimensi_id' => $id,
				'dimensi_name' => $nama,
				'category_id' => $category_id
			);

			$this->Mcrud->insertDimensi($data);
			redirect('params_umum');
		}
	}
	public function edit_dimensi()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$category_id = $this->input->post('category_id');

			$data = array(
				'dimensi_id' => $id,
				'dimensi_name' => $nama,
				'category_id' => $category_id,
			);
			$this->Mcrud->updateDimensi($id, $data);
			// var_dump($id, $data);
			// die();
			redirect('params_umum');
		}
	}
	public function delete_dimensi($id)
	{
		$this->Mcrud->deleteDimensi($id);
		// var_dump($id);
		// die();
		echo 'true';
		redirect(base_url('params_umum'));
	}

	public function add_subDimensi()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$dimensi_id = $this->input->post('dimensi_id');

			$data = array(
				'subdimensi_id' => $id,
				'subdimensi_name' => $nama,
				'dimensi_id' => $dimensi_id
			);

			$this->Mcrud->insertSubDimensi($data);
			redirect('params_umum');
		}
	}
	public function edit_subDimensi()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$dimensi_id = $this->input->post('dimensi_id');

			$data = array(
				'subdimensi_id' => $id,
				'subdimensi_name' => $nama,
				'dimensi_id' => $dimensi_id,
			);

			$this->Mcrud->updateSubDimensi($id, $data);
			redirect('params_umum');
		}
	}
	public function delete_subDimensi($id)
	{
		$this->Mcrud->deleteSubDimensi($id);
		var_dump($id);
		echo 'true';
		redirect('params_umum');
	}

	public function add_parameter()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$weight = $this->input->post('weight');
			$subdimensi_id = $this->input->post('subdimensi_id');

			$data = array(
				'parameter_id' => $id,
				'parameter_name' => $nama,
				'Weight' => $weight,
				'subdimensi_id' => $subdimensi_id
			);

			$this->Mcrud->insertParameter($data);
			redirect('params_umum');
		}
	}
	public function edit_parameter()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$weight = $this->input->post('weight');
			$subdimensi_id = $this->input->post('subdimensi_id');

			$data = array(
				'parameter_id' => $id,
				'parameter_name' => $nama,
				'Weight' => $weight,
				'subdimensi_id' => $subdimensi_id
			);

			$this->Mcrud->updateParameter($id, $data);
			die();
			redirect('params_umum');
		}
	}
	public function delete_parameter($id)
	{

		$this->Mcrud->deleteParameter($id);
		var_dump($id);
		echo 'true';
		redirect('params_umum');
	}

	public function add_phase()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$phase = $this->input->post('phase');

			$data = array(
				'phase_id' => $id,
				'phase_name' => $nama,
				'phase_value' => $phase
			);

			$this->Mcrud->insertPhase($data);
			redirect('params_umum');
		}
	}
	public function edit_phase()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$phase = $this->input->post('phase');

			$data = array(
				'phase_id' => $id,
				'phase_name' => $nama,
				'phase_value' => $phase
			);

			$this->Mcrud->updatePhase($id, $data);
			redirect('params_umum');
		}
	}
	public function delete_phase($id)
	{

		$this->Mcrud->deletePhase($id);
		var_dump($id);
		echo 'true';
		redirect('params_umum');
	}

	public function add_question()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$question = $this->input->post('question');
			$phase_id = $this->input->post('phase_id');
			$subdimensi_id = $this->input->post('subdimensi_id');
			$parameter_id = $this->input->post('parameter_id');

			$data = array(
				'question_id' => $id,
				'question' => $question,
				'phase_id' => $phase_id,
				'subdimensi_id' => $subdimensi_id,
				'parameter_id' => $parameter_id
			);

			$this->Mcrud->insertQuestion($data);
			redirect('params_umum');
		}
	}
	public function edit_question()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$question = $this->input->post('question');
			$phase_id = $this->input->post('phase_id');
			$subdimensi_id = $this->input->post('subdimensi_id');
			$parameter_id = $this->input->post('parameter_id');

			$data = array(
				'question_id' => $id,
				'question' => $question,
				'phase_id' => $phase_id,
				'subdimensi_id' => $subdimensi_id,
				'parameter_id' => $parameter_id
			);

			$this->Mcrud->updateQuestion($id, $data);
			redirect('params_umum');
		}
	}
	public function delete_question($id)
	{

		$this->Mcrud->deleteQuestion($id);
		var_dump($id);
		echo 'true';
		redirect('params_umum');
	}


	//parameter question end

	//user control
	public function userControl()
	{
		$data['user'] = $this->Mcrud->get_user();
		// $data['result'] = $this->Mcrud->get_user_by_id();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/user_control/user_control', $data);
		$this->load->view('template/footer');
	}
	public function add_user()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$name = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$akses = $this->input->post('akses');
			$status = $this->input->post('status');

			// Hash the password using SHA-224
			$hashed_password = hash('sha224', $password);

			$data = array(
				'user_name' => $name,
				'user_email' => $email,
				'user_password' => $hashed_password, // Store the hashed password
				'user_akses' => $akses,
				'user_status' => $status
			);

			$this->Mcrud->insertUser($data);
			redirect('user_control');
		}
	}
	public function edit_user()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$name = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$akses = $this->input->post('akses');
			$status = $this->input->post('status');

			$hashed_password = hash('sha224', $password);

			$data = array(
				'user_name' => $name,
				'user_email' => $email,
				'user_password' => $hashed_password,
				'user_akses' => $akses,
				'user_status' => $status
			);

			$this->Mcrud->updateUser($id, $data);
			redirect('user_control');
		}
	}
	public function delete_user($id)
	{

		$this->Mcrud->deleteUser($id);
		var_dump($id);
		echo 'true';
		redirect('user_control');
	}
	//end user control


	//Function Cluster Asuransi

	//Function Cluster Bank
}

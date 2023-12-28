<?php

use PhpParser\Node\Stmt\TryCatch;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

defined('BASEPATH') or exit('No direct script access allowed');

class Mcrud extends CI_Model
{

	function __construct()
	{
	}

	public function get_data($db, $param = [])
	{
		if ($param != []) {
			$this->db->where($param);
		}
		$data = $this->db->get($db);
		return $data->result();
	}
	public function get_data_array($db, $param = [])
	{
		if ($param != []) {
			$this->db->where($param);
		}
		$data = $this->db->get($db);
		return $data->result_array();
	}

	public function post_data($db, $data)
	{
		$this->db->insert($db, $data);
		return $this->db->insert_id();
	}

	public function update_data($db, $data, $param)
	{
		$this->db->where($param);
		$upd = $this->db->update($db, $data);
		return $upd;
	}

	public function dimensi()
	{
		$dimensi_id = $this->db->query("SELECT DISTINCT dimensi_id FROM `tbl_dimensi` WHERE category_id = 3;");
		return $dimensi_id->result_array();
	}


	public function get_dashboard()
	{
		$result = $this->db->query("SELECT * FROM tbl_assessment WHERE assessment_id=1006;");
		return $result->result_array();
	}

	public function get_dimensi_umum()
	{
		$dimensi_umum = $this->db->query("SELECT DISTINCT 
			`tbl_dimensi`.*, 
			`tbl_sub_dimensi`.*, 
			`tbl_question`.*, 
			`tbl_parameter`.*, 
			`tbl_phase`.*
		FROM 
			`tbl_dimensi` 
		LEFT JOIN 
			`tbl_sub_dimensi` ON `tbl_sub_dimensi`.`dimensi_id` = `tbl_dimensi`.`dimensi_id` 
		LEFT JOIN 
			`tbl_question` ON `tbl_question`.`subdimensi_id` = `tbl_sub_dimensi`.`subdimensi_id` 
		LEFT JOIN 
			`tbl_parameter` ON `tbl_parameter`.`subdimensi_id` = `tbl_sub_dimensi`.`subdimensi_id` 
		LEFT JOIN 
			`tbl_phase` ON `tbl_question`.`phase_id` = `tbl_phase`.`phase_id`
		WHERE  `tbl_parameter`.`parameter_id` = `tbl_question`.`parameter_id`;")->result_array();
		return $dimensi_umum;
	}

	public function insertAssessmentData($assessmentData)
	{
		$this->db->insert('tbl_assessment', $assessmentData);
		return $this->db->insert_id();
	}

	public function insertFile($fileInfo)
	{
		$this->db->insert('tbl_file_assessment', $fileInfo);
		return $this->db->insert_id();
	}

	//akhir untuk model assessment data

	//model function untuk evaluations
	//get

	public function get_id_assess()
	{
		$id = $this->db->query("SELECT assessment_id FROM tbl_assessment WHERE assessment_id=$uri");
		return $id->result_array();
	}

	public function get_assestment()
	{
		$asessment = $this->db->query("SELECT 
		tbl_assessment.assessment_id AS `assessment_id`,
		tbl_assessment.corporate_name,
		tbl_assessment.user_name,
		tbl_assessment.approval,
		tbl_assessment.status_approval,
		tbl_assessment.created_at,
		tbl_assessment.code_laporan,
		tbl_assessment.capaian_dimensi,
		tbl_assessment.level_dimensi,
		tbl_assessment.params_value,
		GROUP_CONCAT(tbl_file_assessment.file_id) AS file_ids,
		GROUP_CONCAT(tbl_file_assessment.file_name) AS file_names,
		GROUP_CONCAT(tbl_file_assessment.file_link) AS file_links
	 FROM tbl_assessment
	 LEFT JOIN tbl_file_assessment ON tbl_assessment.assessment_id = tbl_file_assessment.assessment_id
	 GROUP BY `assessment_id`
	 ORDER BY `assessment_id`;")->result_array();
		// $asessment = [];
		// $a1 = [];
		// $a2 = [];
		// // foreach ($ases as $key) {
		// // 	$a1 = array(
		// // 		'assessment_id' => $key['assessment_id'],
		// // 		'corporate_name' => $key['corporate_name'],
		// // 		'user_name' => $key['user_name'],
		// // 		'approval' => $key['approval'],
		// // 		'status_approval' => $key['status_approval'],
		// // 		'created_at' => $key['created_at'],
		// // 		'code_laporan' => $key['code_laporan'],
		// // 		'file_ids' => $key['file_ids'],
		// // 		'file_names' => $key['file_names'],
		// // 		'file_links' => $key['file_links']
		// // 	);
		// // }
		// foreach ($ases as $yek => $val) {
		// 	echo json_decode($ases[$yek]['capaian_dimensi'], true);
		// 	// json_decode($yek['level_dimensi'], true);
		// 	// json_decode($yek['params_value'], true);



		// 	// array_push($a2, $yek['capaian_dimensi']);
		// 	// array_push($a2, $yek['level_dimensi']);
		// 	// array_push($a2, $yek['params_value']);
		// }
		// //	var_dump(json_decode($yek['params_value'], true));


		// //$asessment = array_merge($a1, $a2);
		return $asessment;
		// die();
	}


	public function get_edit_assesment($id)
	{
		$edit_assess = $this->db->query("SELECT 
		tbl_assessment.assessment_id AS `assessment_id`,
		tbl_assessment.corporate_name,
		tbl_assessment.user_name,
		tbl_assessment.approval,
		tbl_assessment.status_approval,
		tbl_assessment.created_at,
		tbl_assessment.code_laporan,
		tbl_assessment.capaian_dimensi,
		tbl_assessment.level_dimensi,
		tbl_assessment.params_value,
		GROUP_CONCAT(tbl_file_assessment.file_id) AS file_ids,
		GROUP_CONCAT(tbl_file_assessment.file_name) AS file_names,
		GROUP_CONCAT(tbl_file_assessment.file_link) AS file_links
	 FROM tbl_assessment
	 LEFT JOIN tbl_file_assessment ON tbl_assessment.assessment_id = tbl_file_assessment.assessment_id
	 WHERE tbl_file_assessment.assessment_id = $id
	 GROUP BY `assessment_id`
	 ORDER BY `assessment_id`;");
		return $edit_assess;
	}
	public function getAssessment($id)
	{
		//$this->db->where(['assessment_id' => $id]);
		$data = $this->db->get_where('tbl_assessment', ['assessment_id' => $id]);
		return $data->result()[0];
	}

	public function editAsessment($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_assessment', $data);
	}
	public function deleteAsessment($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_assessment');
	}

	//akhir untuk model evaluation 

	// Model function untuk user
	//get
	public function get_user()
	{
		$user = $this->db->query("SELECT * FROM `tbl_user`");
		return $user->result_array();
	}
	public function get_user_by_id($id)
	{
		$this->db->where('user_id', $id);
		$result = $this->db->get('tbl_user');
		return $result->result_array();
	}
	//insert
	public function insertUser($data)
	{
		$this->db->insert('tbl_user', $data);
	}
	//update
	public function updateUser($id, $data)
	{
		$this->db->where('user_id', $id);
		$this->db->update('tbl_user', $data);
	}
	//delete 
	public function deleteUser($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('tbl_user');
	}
	//akhir function untuk user


	//awal dari function untuk parameter 
	//get
	public function get_category()
	{
		$category = $this->db->query(
			"SELECT * FROM `tbl_kategori` WHERE `category_id` = 3"
		);
		return $category->result_array();
	}

	public function get_dimensi()
	{
		$dimensi = $this->db->query(
			"SELECT * FROM `tbl_dimensi`WHERE `category_id` = 3"
		);
		return $dimensi->result_array();
	}

	public function get_sub_dimensi()
	{
		$sub_dimensi = $this->db->query(
			"SELECT * FROM `tbl_sub_dimensi`"
		);
		return $sub_dimensi->result_array();
	}
	public function get_parameter()
	{
		$parameter = $this->db->query(
			"SELECT * FROM `tbl_parameter`"
		);
		return $parameter->result_array();
	}

	public function get_phase()
	{
		$phase = $this->db->query(
			"SELECT * FROM `tbl_phase`"
		);
		return $phase->result_array();
	}

	public function get_question()
	{
		$question = $this->db->query(
			"SELECT * FROM `tbl_question`"
		);
		return $question->result_array();
	}
	//insert
	public function insertCategory($data)
	{
		$this->db->insert('tbl_kategori', $data);
	}

	public function insertDimensi($data)
	{
		$this->db->insert('tbl_dimensi', $data);
	}

	public function insertSubDimensi($data)
	{
		$this->db->insert('tbl_sub_dimensi', $data);
	}

	public function insertParameter($data)
	{
		$this->db->insert('tbl_parameter', $data);
	}

	public function insertPhase($data)
	{
		$this->db->insert('tbl_phase', $data);
	}
	public function insertQuestion($data)
	{
		$this->db->insert('tbl_question', $data);
	}
	//update
	public function updateCategory($id, $data)
	{
		$this->db->where('category_id', $id);
		$this->db->update('tbl_kategori', $data);
	}

	public function updateDimensi($id, $data)
	{
		var_dump($id, $data);
		try {
			$this->db->where('dimensi_id', $id);
			$this->db->update('tbl_dimensi', $data);
		} catch (Exception $th) {
			var_dump($th);
		}
		// $this->db->where('dimensi_id', $id);
		// $this->db->update('tbl_dimensi', $data);
	}

	public function updateSubDimensi($id, $data)
	{
		$this->db->where('subdimensi_id', $id);
		$this->db->update('tbl_sub_dimensi', $data);
	}

	public function updateParameter($id, $data)
	{
		var_dump($id, $data);
		try {
			$this->db->where('parameter_id', $id);
			$this->db->update('tbl_parameter', $data);
		} catch (Exception $th) {
			var_dump($th);
		}
		// $this->db->where('parameter_id', $id);
		// $this->db->update('tbl_parameter', $data);
	}

	public function updatePhase($id, $data)
	{
		$this->db->where('phase_id', $id);
		$this->db->update('tbl_phase', $data);
	}

	public function updateQuestion($id, $data)
	{
		$this->db->where('question_id', $id);
		$this->db->update('tbl_question', $data);
	}
	//delete 
	public function deleteCategory($id)
	{
		$this->db->where('category_id', $id);
		$this->db->delete('tbl_kategori');
	}

	public function deleteDimensi($id)
	{
		//$this->db->query("DELETE FROM `tbl_dimensi` WHERE dimensi_id = $id");

		var_dump($id);
		try {
			// $this->db->where('dimensi_id', $id);
			// $this->db->delete('tbl_sub_dimensi');

			$this->db->where('dimensi_id', $id);
			$this->db->delete('tbl_dimensi');
		} catch (Exception $e) {
			var_dump($e);
		}
	}

	public function deleteSubDimensi($id)
	{
		$this->db->where('subdimensi_id', $id);
		$this->db->delete('tbl_sub_dimensi');
	}

	public function deleteParameter($id)
	{
		$this->db->where('parameter_id', $id);
		$this->db->delete('tbl_parameter');
	}

	public function deletePhase($id)
	{
		$this->db->where('phase_id', $id);
		$this->db->delete('tbl_phase');
	}

	public function deleteQuestion($id)
	{
		$this->db->where('question_id', $id);
		$this->db->delete('tbl_question');
	}
	//akhir dari function untuk parameter
}

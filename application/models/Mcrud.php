<?php

use PhpParser\Node\Stmt\TryCatch;

defined('BASEPATH') or exit('No direct script access allowed');

class Mcrud extends CI_Model
{

	//Cluster Umum Functions

	//model function untuk Dashboard
	public function get_all_data()
	{
		$result = $this->db->get('tbl_assessment_data');
		return $result->result_array();
	}


	//akhir model untuk Dashboard

	//model function untuk asessment data
	//get
	public function get_dimensi_umum()
	{
		$dimensi_umum = $this->db->query("SELECT DISTINCT 
		`tbl_kategori`.*, 
		`tbl_dimensi`.*, 
		`tbl_sub_dimensi`.*, 
		`tbl_question`.*, 
		`tbl_parameter`.*, 
		`tbl_phase`.*
	FROM 
		`tbl_kategori` 
	LEFT JOIN 
		`tbl_dimensi` ON `tbl_dimensi`.`category_id` = `tbl_kategori`.`category_id` 
	LEFT JOIN 
		`tbl_sub_dimensi` ON `tbl_sub_dimensi`.`dimensi_id` = `tbl_dimensi`.`dimensi_id` 
	LEFT JOIN 
		`tbl_question` ON `tbl_question`.`subdimensi_id` = `tbl_sub_dimensi`.`subdimensi_id` 
	LEFT JOIN 
		`tbl_parameter` ON `tbl_parameter`.`subdimensi_id` = `tbl_sub_dimensi`.`subdimensi_id` 
	LEFT JOIN 
		`tbl_phase` ON `tbl_question`.`phase_id` = `tbl_phase`.`phase_id`
	WHERE 
		`tbl_kategori`.`category_id` = `tbl_dimensi`.`category_id` 
		AND `tbl_parameter`.`parameter_id` = `tbl_question`.`parameter_id`;");
		return $dimensi_umum->result_array();
	}
	public function get_weight()
	{
		$weight_umum = $this->db->query("SELECT DISTINCT `parameter_id` FROM `tbl_parameter`;");
		return $weight_umum->result_array();
	}


	public function insertFile($fileInfo)
	{
		$this->db->insert('tbl_files', $fileInfo);
		return $this->db->insert_id();
	}
	public function insertAssessmentData($assessmentData)
	{
		$this->db->insert('tbl_assessment_data', $assessmentData);
		return $this->db->insert_id();
	}



	//akhir untuk model assessment data

	//model function untuk evaluations
	//get
	public function get_assestment()
	{
		$asessment = $this->db->query("SELECT `tbl_assessment_data`.*, `tbl_files`.* 
			FROM `tbl_files` 
			LEFT JOIN `tbl_assessment_data` ON `tbl_assessment_data`.`id` = `tbl_files`.`assessment_id`; 
		");
		return $asessment->result_array();
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






	//ending Cluster Umum
	//Cluster Asuransi Functions 


	//ending Cluster Asuransi 
	//Cluster Bank Functions


	//Ending Cluster Bank
}

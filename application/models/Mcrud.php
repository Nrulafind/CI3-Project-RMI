<?php
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
		`tbl_kategori`.`category_id`, 
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

	//insert
	public function insertDataUmum($data)
	{
		$this->db->insert('tbl_perhitungan', $data);
	}
	public function insertFile($fileInfo)
	{
		$this->db->insert('tbl_files', $fileInfo);
		return $this->db->insert_id();
	}

	public function insertFileData($fileData)
	{
		$this->db->insert('tbl_file_data', $fileData);
	}

	public function insertAssessmentData($assessmentData)
	{
		$this->db->insert('tbl_assessment_data', $assessmentData);
	}



	//akhir untuk model assessment data

	//model function untuk evaluations
	//get
	public function get_assestment()
	{
		$asessment = $this->db->query("SELECT `tbl_assessment_data`.*, `tbl_files`.*, `tbl_file_data`.*
		FROM `tbl_assessment_data` 
			LEFT JOIN `tbl_files` ON `tbl_assessment_data`.`file_id` = `tbl_files`.`id` 
			LEFT JOIN `tbl_file_data` ON `tbl_file_data`.`file_id` = `tbl_files`.`id`; 
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
	public function insert()
	{
	}
	//update

	//delete


	//akhir dari function untuk parameter






	//ending Cluster Umum
	//Cluster Asuransi Functions 


	//ending Cluster Asuransi 
	//Cluster Bank Functions


	//Ending Cluster Bank
}

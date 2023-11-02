<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcrud extends CI_Model
{

	//Cluster Umum Functions

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
	public function get_user()
	{
		$user = $this->db->query("SELECT * FROM `tbl_user`");
		return $user->result_array();
	}

	public function get_all_params()
	{
		$category = $this->db->query(
			"SELECT * FROM `tbl_kategori`"
		);

		$params = $this->db->query("SELECT * FROM `tbl_kategori`");

		$dimensi = $this->db->query("SELECT DISTINCT 
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



		return $category->result_array();
		return $params->result_array();
		return $dimensi->result_array();
	}

	public function get_all_data()
	{
		$result = $this->db->get('tbl_assessment_data');
		return $result->result_array();
	}
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

	public function insertApproval($approval)
	{
		$this->db->insert('tbl_approval', $approval);
	}




	//Cluster Asuransi Functions 


	//Cluster Bank Functions


}

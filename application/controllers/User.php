<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') != true && $this->session->userdata('access') != 'Admin') {
			$url = base_url('/');
			redirect($url);
		}
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['result'] = $this->Mcrud->get_all_data();
		//	$data = $this->Mcrud->get_all_data('tbl_perhitungan')->result_array();

		//$data = array($result);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('user/dashboard', $data);
		$this->load->view('template/footer');
	}


	//for the cluster umum
	public function formUmum()
	{
		$data['dimensi_umum'] = $this->Mcrud->get_dimensi_umum();
		$data['subDimensi'] = $this->Mcrud->dimensi_sub();

		//$data['result'] = $this->Mcrud->get_all_data();
		//	$data = $this->Mcrud->get_all_data('tbl_perhitungan')->result_array();

		//$data = array($result);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/form/clusterUmum', $data);
		$this->load->view('template/footer');
	}


	public function evidence()
	{
		//$data['result'] = $this->Mcrud->get_all_data();
		//	$data = $this->Mcrud->get_all_data('tbl_perhitungan')->result_array();

		//$data = array($result);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('/user/evidence/evidence_list');
		$this->load->view('template/footer');
	}
}

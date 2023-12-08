<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mauth');
	}

	public function index()
	{
		$this->load->view('Auth/template/header');
		$this->load->view('Auth/login');
		$this->load->view('Auth/template/footer');
	}
	// public function about()
	// {
	// 	$this->load->view('');
	// }
	public function actLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$validasi_email = $this->Mauth->query_validasi_email($email);
		if ($validasi_email->num_rows() > 0) {
			$validate_ps = $this->Mauth->query_validasi_password($email, $password);
			if ($validate_ps->num_rows() > 0) {
				$x = $validate_ps->row_array();
				if ($x['user_status'] == '1') {
					$this->session->set_userdata('logged', TRUE);
					$this->session->set_userdata('user', $email);
					$this->session->set_userdata('id', $x['user_id']);
					$this->session->set_userdata('name', $x['user_name']);
					$this->session->set_userdata('akses', $x['user_akses']);
					if ($x['user_akses'] == '1') { //Super Admin
						$this->session->set_userdata('access', 'Vice President');
						redirect('dashboard');
					} else if ($x['user_akses'] == '2') { //Approval
						$this->session->set_userdata('access', 'Manager');
						redirect('dashboard_approval');
					} else if ($x['user_akses'] == '3') { //
						$this->session->set_userdata('access', 'Officer');
						redirect('dashboard_officer');
					}
				} else {
					$url = base_url('/');
					echo $this->session->set_flashdata('msg', '
						<h3>Uupps!</h3>
						<p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
					redirect($url);
				}
			} else {
				$url = base_url('/');
				echo $this->session->set_flashdata('msg', '
						<h3>Uupps!</h3>
						<p>Password yang kamu masukan salah.</p>');
				redirect($url);
			}
		} else {
			$url = base_url('/');
			echo $this->session->set_flashdata('msg', '
				<h3>Uupps!</h3>
				<p>Email yang kamu masukan salah.</p>');
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('/');
		redirect($url);
	}


	public function about()
	{
		$this->load->view('about');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mauth extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
	}

	function query_validasi_email($email)
	{
		$result = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email' AND user_status = 1  LIMIT 1");
		return $result;
	}

	function query_validasi_password($email, $password)
	{
		// $key = 'Lock APLog';
		$pw = $this->db->query("SELECT user_password FROM tbl_user WHERE user_email = '$email'")->result_array();
		foreach ($pw as $un_pw) {
			$un_pw_h = $this->encryption->decrypt($un_pw['user_password']);
		}
		$result = null;
		if ($un_pw_h == $password) {
			$result = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email' AND user_status = 1 LIMIT 1");
			return $result;
		} else {
			redirect(base_url('Auth'));
		}
	}
}

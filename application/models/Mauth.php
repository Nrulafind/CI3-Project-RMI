<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mauth extends CI_Model
{
	function query_validasi_email($email)
	{
		$result = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email' AND user_status = 1  LIMIT 1");
		return $result;
	}

	function query_validasi_password($email, $password)
	{
		$result = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email' AND user_password=SHA2('$password', 224) AND user_status = 1 LIMIT 1");
		return $result;
	}
}

<?php

// use \vendor\koolreport\codeigniter\Friendship; // All you need to do is to claim this friendship
// require_once(__DIR__ . '/../libraries/koolreport/core/src/KoolReport.php');

defined('BASEPATH') or exit('No direct script access allowed');

class MyReport extends CI_Controller
{
	private $x;
	function __construct()
	{
		$this->x = $this->load->library('myreport');
	}
	public function index()
	{
		echo $this->x->getVersion();
		//Now you can access database that you configured in codeigniter
		// $this->src("rmi_env")
		// ->query("select * from tbl_dimensi")
		// ->pipe($this->dataStore("orders"));
	}
}

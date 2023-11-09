<?php
require_once(APPPATH . './vendor/autoload.php');

use koolreport\KoolReport;

class Myreport
{
	private $x;
	function __construct()
	{
		$this->x = new KoolReport();
	}
	function getVersion()
	{
		$vv = $this->x->version();
		return $vv;
	}
}

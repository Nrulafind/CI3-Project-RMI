<?php
// require_once(APPPATH . './vendor/autoload.php');

// use \koolreport\KoolReport;

// class Myreport extends KoolReport
// {
// 	public function __construct()
// 	{
// 		parent::__construct();

// 		// Configure data sources
// 		try {
// 			$this->settings = array(
// 				"dataSources" => array(
// 					"tbl_user" => array(
// 						"connectionString" => "mysql:host=localhost;dbname=armi_db",
// 						"username" => "root",
// 						"password" => "",
// 						"charset" => "utf8"
// 					),
// 				)
// 			);
// 		} catch (\Exception $th) {
// 			$th->getMessage();
// 		}
// 	}

// 	public function generateUserReport()
// 	{
// 		// Get data from the "tbl_user" data source
// 		try {
// 			$data = $this->dataStore("tbl_user")->query("SELECT * FROM `tbl_dimensi`");

// 			// Return the report HTML
// 			return $this->report("tbl_user", $data)->render();
// 		} catch (\Exception $e) {
// 			echo 'Caught exception: ',  $e->getMessage(), "\n";
// 		}
// 	}
}

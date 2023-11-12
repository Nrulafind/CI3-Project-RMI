<?php
// application/reports/tbl_user.php
require_once(APPPATH . './vendor/autoload.php');

\koolreport\widgets\koolphp\Table::create(array(
	"dataSource" => $this->dataStore("tbl_user"),
));

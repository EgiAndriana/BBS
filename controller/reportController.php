<?php
require_once "model/report.php";

class reportController{
	public $report;

	public function __construct(){
		$this->report = new report();
	}

	public function cetak(){
		include "view/report/report_anggota.php";
	}
}
?>
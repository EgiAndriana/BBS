<?php

require_once "controller/reportController.php";

$report = new reportController();

$page = @$_GET['page'];
$act = @$_GET['act'];
$id = @$_GET['id'];


if($page == 'cetak'){
	$report->cetak();
}
?>
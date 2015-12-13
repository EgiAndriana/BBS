<?php 

require_once "controller/anggotaController.php";
require_once "controller/iuranController.php";
require_once "controller/loginController.php";

$anggota = new anggotaController();
$iuran = new iuranController();
$login = new loginController();

$page = @$_GET['page'];
$act = @$_GET['act'];
$id = @$_GET['id'];


if($page == ''){
	include "home.php";
}else if($page == 'anggota'){
	if($act == ''){
		$anggota->view();
	}else if($act == 'tambah'){
		$anggota->viewInsert();
	}else if($act == 'update'){
		$anggota->viewUpdate($id);
	}else if($act == 'delete'){
		$anggota->deleteAnggota($id);
	}
}else if($page == 'iuran'){
	if($act == ''){
		$iuran->view();
	}else if($act == 'tambah'){
		$iuran->viewInsert($id);
	}
}else if($page == 'cetak'){
	$anggota->cetak();
}else if($page == 'logout'){
	$login->logout();
}else{
	echo "Halaman Tidak di Temukan";
}

?>
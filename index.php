<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
header("location:login.php");
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" />
<title>Administrasi BBS</title>
</head>

<body>
<div class="container">

<div class="header">
<img src="Header.jpg" width="943" height="150" />
</div>
<div class="headermenu">
<ul>
	 <li><a href='./'>Home</a></li>		   
	 <li>|</li>
	 <li><a href='?page=anggota&act=tambah'>Pendaftaran</a></li>
	 <li>|</li>
	 <li><a href='?page=anggota'>List Anggota</a></li>
	 <li>|</li>
	 <li><a href='?page=iuran'>Data Iuran</a></li>
	 <li>|</li>
	 <li><a href='?page=logout'>Logout</a></li>
</ul>

</div>
<div class="content">
	<?php include "isi.php"; ?>
</div>
</body>
</html>
<?php
}
?>

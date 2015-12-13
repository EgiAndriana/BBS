<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
?>
<html>
<head>
	<title>Bandung Beatbox Family</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<script type="text/javascript">
	function validasi(form){
	if (form.username.value == ""){
		alert("Anda belum mengisikan Username");
		form.username.focus();
		return (false);
	}
	     
	if (form.password.value == ""){
		alert("Anda belum mengisikan Password");
		form.password.focus();
		return (false);
	}
	return (true);
	}
	</script>
</head>
<body>
	<div id="judul2">
			BANDUNG BEATBOX FAMILY
	</div>
	<div id="canvas">
	<div id="utama">
		<div id="judul">
			HALAMAN LOGIN
		</div>
		<div id="inputan">
			<form method="POST" action="" onSubmit="return validasi(this)">
				<div>
					<input type="text" name="username" class="lg" placeholder="Username" />
				</div>
				<div style="margin-top:10px">
					<input type="password" name="password" class="lg" placeholder="Password" />
				</div>
				<div style="margin-top:10px">
					<input type="submit" name="login" class="btn" value="LOGIN" />
				</div>
			</form>
			<?php
			include "controller/loginController.php";
			if(@$_POST['login']){
				$main = new loginController();
				$main->login();
			}
			?>
		</div>
	</div>
	</div>
</body>
</html>
<?php
}else{
	header("location:index.php");
}
?>
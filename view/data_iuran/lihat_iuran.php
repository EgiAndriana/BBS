<p>
<fieldset style="width: 90%; margin: auto;">
	<legend> <b> Data Iuran </b> </legend>
	<fieldset style="width: 50%; margin: auto;">
		<legend> <b> Periode </b> </legend>
		<form method="POST">
			<table>
				<tr>
					<td height="34">Tanggal</td>
					<td>:</td>
					<td><input type="date" name="dari"></td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="lihat" value="Lihat"></td>
				</tr>
			</table>
		</form>
	</fieldset>
	<?php
	require_once "controller/iuranController.php";
	$action = new iuranController();
	if(@$_POST['lihat']){
		$action->detailIuran();
	}
	
	?>
</fieldset>
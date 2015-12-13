<h1 align="center">Iuran Anggota</h1>
<fieldset style="width: 50%; margin: auto;">
	<legend>Tambah Iuran</legend>
	<form method="POST">
		<table>
			<tr>
				<td height="46">No Iuran</td>
				<td>:</td>
				<td><input type="text" name="idIuran" value='<?php echo $hasilkode?>' readonly="readonly"></td>
			</tr>

			<tr>
				<td height="46">No Anggota</td>
				<td>:</td>
				<td><input type="text" name="idAnggota" placeholder="Nama.." value='<?php echo $row['idAnggota']?>' required></td>
			</tr>

			<tr>
				<td height="46">Tanggal Iuran</td>
				<td>:</td>
				<td><input type="date" name="TanggalIuran"></td>
			</tr>

			<tr>
				<td height="46">Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah" placeholder="jumlah.." value="2000" required></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>

	<?php
	require_once "controller/iuranController.php";
	$action = new iuranController();
	if(@$_POST['tambah']){
		$action->insertIuran();
	}
	?>
</fieldset>	
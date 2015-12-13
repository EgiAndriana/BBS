<h1 align="center">Data Calon Anggota Bandung Beatbox Family</h1>
<fieldset style="width: 50%; margin: auto;">
	<form method="POST">
		<table align='center'>
			<tr>
				<td height="34">No Anggota</td>
				<td>:</td>
				<td><input type="text" name="idAnggota" value='<?php echo $hasilkode?>' readonly="readonly"></td>
			</tr>

			<tr>
				<td height="46">Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama" placeholder="Nama.." required></td>
			</tr>

			<tr>
				<td height="41">Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" placeholder="Alamat.."></td>
			</tr>

			<tr>
				<td height="34">Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="TempatLahir" placeholder="Tempat Lahir.."></td>
			</tr>

			<tr>
				<td height="39">Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="TanggalLahir"></td>
			</tr>

			<tr>
				<td height="37">Kelas</td>
				<td>:</td>
				<td>
					<select name="Kelas">
						<option value="Basic">Basic</option>
						<option value="Intermediate">Intermediate</option>
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>

	<?php
	require_once "controller/anggotaController.php";
	$action = new anggotaController();
	if(@$_POST['tambah']){
		$action->insertAnggota();
	}
	?>
</fieldset>	
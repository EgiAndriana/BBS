<fieldset>
	<legend> <b> Daftar Nama </b> </legend>
	<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#000; color:#fff;">
			<th>No</th>
			<th>No Iuran</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
		</thead>

		<tbody>
			<?php $no = 1;
			while($row = mysql_fetch_array($data) or die (mysql_error())){
			?>
			<tr>
				<td align="center"><?php echo $no++?></td>
				<td align="center"><?php echo $row['idIuran']?></td>
				<td align="center"><?php echo $row['Nama']?></td>
				<td align="center"><?php echo $row['TanggalIuran']?></td>
				<td align="center">Rp. <?php $harga=number_format($row['jumlah'],0,",","."); echo $harga; ?>.00,-</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</fieldset>
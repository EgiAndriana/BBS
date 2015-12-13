<h1 align="center">Data Anggota Bandung Beatbox Family</h1>
<fieldset style="width: 96%; margin: auto;">
	
	<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#000; color:#fff;">
			<th>No</th>
			<th>No Anggota</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Kelas</th>
			<th>Opsi</th>
		</thead>

		<tbody>
			<?php $no = 1;
			while($row = mysql_fetch_array($data)){
			?>
			<tr>
				<td align="center"><?php echo $no++?></td>
				<td align="center"><?php echo $row['idAnggota']?></td>
				<td align="center"><?php echo $row['Nama']?></td>
				<td align="center"><?php echo $row['Alamat']?></td>
				<td align="center"><?php echo $row['TempatLahir']?></td>
				<td align="center"><?php echo $row['TanggalLahir']?></td>
				<td align="center"><?php echo $row['Kelas']?></td>
				<td align="center">
					<a href="?page=anggota&act=update&id=<?php echo $row['idAnggota']?>"><button>Edit</button></a>
					<a onclick="return confirm('Yakin Akan Menghapus?');" href="?page=anggota&act=delete&id=<?php echo $row['idAnggota']?>"><button>Hapus</button></a>
					<a href="?page=iuran&act=tambah&id=<?php echo $row['idAnggota']?>"><button>Iuran</button></a>
					<a href="report.php?page=cetak&id=<?php echo $row['idAnggota']?>" target="_blank"><button>Cetak</button></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</fieldset>
<?php
require_once "model/anggota.php";

class anggotaController{
	public $anggota;

	public function __construct(){
		$this->anggota = new anggota();
	}

	public function view(){
		$data = $this->anggota->selectAll();
		include "view/data_anggota/lihat_anggota.php";
	}

	public function viewInsert(){
		$carikode = $this->anggota->cariCode();
			$datakode = mysql_fetch_array($carikode);
			if($datakode){
				$nilaikode = substr($datakode[0], 1);
				$kode = (int) $nilaikode;
				$kode = $kode + 1;
				$hasilkode = "A".str_pad($kode, 5, "0", STR_PAD_LEFT);
			}else{
				$hasilkode = "A00001";
			}
		include "view/data_anggota/tambah_anggota.php";
	}

	public function viewUpdate($id){
		$data = $this->anggota->seletcBy($id);
		$row = mysql_fetch_array($data);
		include "view/data_anggota/update_anggota.php";
	}

	public function insertAnggota(){
		$idAnggota = @$_POST['idAnggota'];
		$Nama = @$_POST['Nama'];
		$Alamat = @$_POST['Alamat'];
		$TempatLahir = @$_POST['TempatLahir'];
		$TanggalLahir = @$_POST['TanggalLahir'];
		$Kelas = @$_POST['Kelas'];

		$insert = $this->anggota->insert($idAnggota, $Nama, $Alamat, $TempatLahir, $TanggalLahir, $Kelas);
		if($insert){
			?>
			<script type="text/javascript">
			alert("Data Anggota Berhasil di Simpan");
			window.location.href="?page=anggota";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Data Anggota Gagal di Simpan");
			</script>
			<?php
		}
	}

	public function updateAnggota(){
		$idAnggota = @$_POST['idAnggota'];
		$Nama = @$_POST['Nama'];
		$Alamat = @$_POST['Alamat'];
		$TempatLahir = @$_POST['TempatLahir'];
		$TanggalLahir = @$_POST['TanggalLahir'];
		$Kelas = @$_POST['Kelas'];

		$update = $this->anggota->update($idAnggota, $Nama, $Alamat, $TempatLahir, $TanggalLahir, $Kelas);
		if($update){
			?>
			<script type="text/javascript">
			alert("Data Anggota Berhasil di Update");
			window.location.href="?page=anggota";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Data Anggota Gagal di Update");
			</script>
			<?php
		}
	}

	public function deleteAnggota($id){
		$delete = $this->anggota->delete($id);
		if($delete){
			?>
			<script type="text/javascript">
			alert("Data Anggota Berhasil di Hapus");
			window.location.href="?page=anggota";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Data Anggota Gagal di Hapus");
			</script>
			<?php
		}
	}
}
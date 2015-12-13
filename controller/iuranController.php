<?php
require "model/iuran.php";


class iuranController{
	public $iuran;

	public function __construct(){
		$this->iuran = new iuran();
	}

	public function view(){
		include "view/data_iuran/lihat_iuran.php";
	}

	public function detailIuran(){
		$tgl_start	= @$_POST['dari'];
		$data = $this->iuran->selectAll($tgl_start);
		include "view/data_iuran/detail_iuran.php";
	}

	public function viewInsert($id){
		$carikode = $this->iuran->cariCode();
			$datakode = mysql_fetch_array($carikode);
			if($datakode){
				$nilaikode = substr($datakode[0], 1);
				$kode = (int) $nilaikode;
				$kode = $kode + 1;
				$hasilkode = "I".str_pad($kode, 5, "0", STR_PAD_LEFT);
			}else{
				$hasilkode = "I00001";
		}
		$data = $this->iuran->seletcAnggota($id);
		$row = mysql_fetch_array($data);
		include "view/data_iuran/tambah_iuran.php";
	}

	public function insertIuran(){
		$idIuran = @$_POST['idIuran'];
		$idAnggota = @$_POST['idAnggota'];
		$TanggalIuran = @$_POST['TanggalIuran'];
		$jumlah = @$_POST['jumlah'];


		$insert = $this->iuran->insert($idIuran, $idAnggota, $TanggalIuran, $jumlah);
		if($insert){
			?>
			<script type="text/javascript">
			alert("Data iuran Berhasil di Simpan");
			window.location.href="?page=iuran";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Data iuran Gagal di Simpan");
			</script>
			<?php
		}
	}

}
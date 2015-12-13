<?php

class iuran{
	public function __construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("anggota");
	}

	public function selectAll($tgl_start){
		$query = "SELECT
iuran.idIuran,
anggota.Nama,
iuran.TanggalIuran,
SUM(iuran.jumlah) as jumlah
FROM
anggota
INNER JOIN iuran ON anggota.idAnggota = iuran.idAnggota
WHERE
TanggalIuran = '$tgl_start'
GROUP BY
iuran.idAnggota";
		return mysql_query($query);
	}

	public function seletcBy($id){
		$query = "SELECT * FROM iuran WHERE idIuran = '$id'";
		return mysql_query($query);
	}

	public function seletcAnggota($id){
		$query = "SELECT * FROM anggota WHERE idAnggota = '$id'";
		return mysql_query($query);
	}

	public function insert($idIuran, $idAnggota, $TanggalIuran, $jumlah){
		$query = "INSERT INTO iuran (idIuran, idAnggota, TanggalIuran, jumlah) VALUES ('$idIuran', '$idAnggota', '$TanggalIuran', '$jumlah')";
		return mysql_query($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(idIuran) FROM iuran";
			return mysql_query($query);
		}
}
<?php

class anggota{
	public function __construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("anggota");
	}

	public function selectAll(){
		$query = "SELECT * FROM anggota";
		return mysql_query($query);
	}

	public function seletcBy($id){
		$query = "SELECT * FROM anggota WHERE idAnggota = '$id'";
		return mysql_query($query);
	}

	public function insert($idAnggota, $Nama, $Alamat, $TempatLahir, $TanggalLahir, $Kelas){
		$query = "INSERT INTO anggota (idAnggota, Nama, Alamat, TempatLahir, TanggalLahir, Kelas) VALUES ('$idAnggota', '$Nama', '$Alamat', '$TempatLahir', '$TanggalLahir', '$Kelas')";
		return mysql_query($query);
	}

	public function update($idAnggota, $Nama, $Alamat, $TempatLahir, $TanggalLahir, $Kelas){
		$query = "UPDATE anggota SET Nama = '$Nama', Alamat = '$Alamat', TempatLahir = '$TempatLahir', TanggalLahir = '$TanggalLahir', Kelas = '$Kelas' WHERE idAnggota = '$idAnggota'";
		return mysql_query($query);
	}

	public function delete($id){
		$query = "DELETE FROM anggota WHERE idAnggota = '$id'";
		return mysql_query($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(idAnggota) FROM anggota";
			return mysql_query($query);
		}
}
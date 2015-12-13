<?php
class report{
	public function __construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("anggota");
	}

	public function select(){
		$query = "SELECT * FROM anggota";
		return mysql_query($query);
	}
}
?>
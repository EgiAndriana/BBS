<?php
class loginModel{
	public function __construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("anggota");
	}

	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function numRow($data){
		return mysql_num_rows($data);
	}

	public function select($username, $password){
		$query = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";
		return $this->execute($query);
	}

	public function __destruct(){

	}
}
?>
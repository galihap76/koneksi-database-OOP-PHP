<?php
class database{
 
	public $host = "localhost",
	       $uname = "root",
           $pass = "",
	       $db = "toko";
 
	function __construct(){
		$koneksi = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($koneksi, $this->db);
 
		if($koneksi){
			echo "Koneksi database mysql dan php berhasil.";
		}else{
			echo "Koneksi database mysql dan php GAGAL !";
		}
	}
} 
 
$koneksidatabase = new database();


?>
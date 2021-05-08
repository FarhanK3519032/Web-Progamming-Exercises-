<?php 

	//parameter untuk DB
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'data_karyawan';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3307) //tambahan 3307 karena port 3306 saya tidak bisa jd saya ganti
	

?>
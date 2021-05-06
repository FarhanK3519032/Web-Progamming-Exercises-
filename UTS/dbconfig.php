<?php

	//parameter
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "projectUTS";

	//membuat koneksi
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, 3307);

	//mengecek koneksi
	if ($conn->connect_error) {
		die("Koneksi Gagal: ".$conn->connect_error);
	} 

	//menutup koneksi
	$conn->close();

?>
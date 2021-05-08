<?php
	
	//include DB
	include_once("config.php");

	//Mengambil ID
	$id_karyawan = $_GET['id_karyawan'];

	//query hapus data berdasakan id yang sesuai
	$result = mysqli_query($conn, "DELETE FROM karyawan WHERE id_karyawan=$id_karyawan");

	//redirect ke halaman utama
	header("Location:index.php");

?>
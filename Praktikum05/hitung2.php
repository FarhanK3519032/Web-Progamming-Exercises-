<?php

	//baca kedua bilangan
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];

	//proses perhitungan
	if (isset($_POST['penjumlahan'])) {
		$hasil = $bil1 + $bil2;
		$op = $_POST['penjumlahan'];
	}elseif (isset($_POST['pengurangan'])) {
		$hasil = $bil1 - $bil2;
		$op = $_POST['pengurangan'];
	}elseif (isset($_POST['perkalian'])) {
		$hasil = $bil1 * $bil2;
		$op = $_POST['perkalian'];
	}elseif (isset($_POST['pembagian'])) {
		$hasil = $bil1 / $bil2;
		$op = $_POST['pembagian'];
	}elseif (isset($_POST['kuadrat'])) {
		$hasil = $bil1 ** $bil2;
		$op = $_POST['kuadrat'];
	}

	//Baca hasil
	echo "<h2>".$bil1."".$op."".$bil2."=".$hasil."</h2>";
?>
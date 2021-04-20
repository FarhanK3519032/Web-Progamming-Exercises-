<?php

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgllhr = $_POST['tgllhr'];
	$tmptlhr = $_POST['tmptlhr'];

	$namaFile = "datamhs.dat";
	$myfile = fopen($namaFile, "a") or die("File tidak bisa dibuka");
	fwrite($myfile, "$nim | ");
	fwrite($myfile, "$nama | ");
	fwrite($myfile, "$tgllhr | ");
	fwrite($myfile, "$tmptlhr\n");
	fclose($myfile);

	echo "<h1> Complete Inputing Data </h1>";

?>
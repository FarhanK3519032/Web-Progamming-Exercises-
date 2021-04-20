<?php

		//--------hitung volume tabung-------//

	$namaTabung = $_GET['nama'];
	$diameterTabung = $_GET['diameter'];
	$tinggiTabung = $_GET['tinggi'];
	$volumeTabung = 3.14 * (($diameterTabung /2)**2) * $tinggiTabung;

	echo "<h2>Luas Tabung $namaTabung dengan diameter $diameterTabung dan $tinggiTabung adalah $volumeTabung satuan luas</h2>";

?>
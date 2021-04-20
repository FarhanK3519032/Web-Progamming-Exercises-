<!DOCTYPE html>
<html>
	<head>
		<title>Project Latihan 2</title>
		<style type="text/css">
			* {
				font-size: 30px;
			}
			table {
				table-layout: auto;
				width: 50%;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<h1>Data Ukuran Tabung</h1>

		<table border="1">
			<tr>
				<th>Nama Tabung</th>
				<th>Diameter</th>
				<th>Tinggi</th>
				<th>View</th>
			</tr>

		<?php

		//----------baca file data tabung---------//

		$namaFile = "datatabung.dat";
		$myfile = fopen($namaFile, "r") or die("tidak bisa buka file!");
		while (!feof($myfile)) {
			echo "<tr>";
				$data = fgets($myfile);
				$data = explode(",", $data);
				for ($i=0; $i < sizeof($data); $i++) { 
				 	echo "<td> ".$data[$i]." </td>";
				 }
			echo "<td><a href='hitungTabung.php?nama=$data[0]&diameter=$data[1]&tinggi=$data[2]'>view</a></td>";
			echo "</tr>";
		}
		fclose($myfile);

		?>
		</table>
	</body>

</html>
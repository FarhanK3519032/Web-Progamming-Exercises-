<!DOCTYPE html>
<html>

<head>
	<title>Projeect Latihan</title>
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
	<h1>Data Mahasiswa</h1>

	<table border="1">
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama Mhs</td>
			<td>Tanggal Lahir</td>
			<td>Tempat Lahir</td>
			<td>Usia (Thn)</td>
		</tr>

		<?php

			//-------------hitung usia------------//
			function hitung_umur($tanggalLahir){
				$tglLahir = new DateTime ($tanggalLahir);
				$today = new DateTime("today");
				if ($tglLahir > $today) {
					exit("null");
				}
				$y = $today -> diff($tglLahir) -> y;
				return $y;
			}
			//----------------------------------//

			$namaFile = "datamhs.dat";
			$myfile = fopen($namaFile, "r")or die("Tidak bisa buka file!");
			$sum = 1;
			while (!feof($myfile)) {
				echo "<tr>";
					$data = fgets($myfile);
					$data = explode("|", $data);
					$y = hitung_umur($data[2]);
					echo "<td> $sum </td>";
					for ($i=0; $i < sizeof($data); $i++) {
						echo "<td> $data[$i] </td>";
					}
					echo "<td> $y </td>";
				echo "</tr>";
				$sum++;
			} 
			fclose($myfile);

			//-------------hitung jml data------------//
			$jmlData = $sum-1;
			echo "Jumlah Data : " . $jmlData. "<br>";
			//----------------------------------------//
		?>
	</table>
</body>

</html>
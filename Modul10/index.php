<?php
	//include DB
	include_once("config.php");

	//fetch semua karyawan dari Db
	$result = mysqli_query($conn, "SELECT * FROM karyawan ORDER BY id_karyawan DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<button class="button button1" onclick="window.location.href='add.php';">Add Karyawan</button></br></br>

	<table>
		<tr> 
			<th>Nama</th> 
			<th>Email</th> 
			<th>Telepon</th> 
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Tempat Lahir</th>
			<th>Update</th>
		</tr>

		<?php  
			while ($data = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$data['nama']."</td>";
				echo "<td>".$data['email']."</td>";
				echo "<td>".$data['telepon']."</td>";
				echo "<td>".$data['alamat']."</td>";
				echo "<td>".$data['jenis_kelamin']."</td>";
				echo "<td>".$data['tanggal_lahir']."</td>";
				echo "<td>".$data['tempat_lahir']."</td>";
				echo "<td><a href='edit.php?id_karyawan=$data[id_karyawan]'>Edit</a> | <a href='delete.php?id_karyawan=$data[id_karyawan]'>Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
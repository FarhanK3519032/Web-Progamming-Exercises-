<!DOCTYPE html>
<html>
<head>
	<title>Add Karyawan</title>
</head>
<body>
	<a href="index.php">Home</a>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="number" name="telepon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jenis_kelamin">
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	//cek apakah parameter $_POST terisi, masukan dalam DB jika True
	if (isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telepon = $_POST['telepon'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$tempat_lahir = $_POST['tempat_lahir'];

		//include db
		include_once("config.php");

		//query insert data
		$result = mysqli_query($conn, "INSERT INTO karyawan(nama, email, telepon, alamat, jenis_kelamin, tanggal_lahir, tempat_lahir) VALUES ('$nama', '$email', '$telepon', '$alamat', '$jenis_kelamin', '$tanggal_lahir', '$tempat_lahir')");

		//menampilkan data jika berhasil
		echo "<p>Karyawan Berhasil Ditambahkan! <a href='index.php'>View Karyawan</a></p>";
	}

	?>
</body>
</html>
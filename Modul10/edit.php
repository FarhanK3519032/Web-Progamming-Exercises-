<?php
	//include DB
	include_once("config.php");

	//cek apakah parameter $_POST terisi, update data jika True
	if (isset($_POST['update'])) {
		$id_karyawan = $_POST['id_karyawan'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telepon = $_POST['telepon'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$tempat_lahir = $_POST['tempat_lahir'];

		//update data
		$result = mysqli_query($conn, "UPDATE karyawan SET nama='$nama', email='$email', telepon='$telepon', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir' WHERE id_karyawan='$id_karyawan' ");

		//redirect ke halaman utama
		header("Location:index.php");
	}
?>

<?php  

	//mengambil ID dan menampilkan data berdasarkan ID yang di dapat
	$id_karyawan = $_GET['id_karyawan'];

	//fetch user data
	$result = mysqli_query($conn, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan' ");

	while ($data = mysqli_fetch_array($result)) {
		$nama = $data['nama'];
		$email = $data['email'];
		$telepon = $data['telepon'];
		$alamat = $data['alamat'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$tempat_lahir = $data['tempat_lahir'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<button class="button button1" onclick="window.location.href='index.php';">Home</button></br></br>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>telepon</td>
				<td><input type="number" name="telepon" value="<?php echo $telepon; ?>"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><textarea name="alamat" value="<?php echo $alamat; ?>"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>">
						<option value="pria" value="<?php echo $jenis_kelamin = 'pria' ? 'selected="selected"' : ''; ?>" >Pria</option>
						<option value="wanita" value="<?php echo $jenis_kelamin = 'pria' ? 'selected="selected"' : ''; ?>">Wanita</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_karyawan" value="<?php echo $_GET['id_karyawan']; ?> "></td>
				<td><button class="button button1" type="submit" name="update" value="Update">Update</button></td>
				<!-- <td><input type="submit" name="update" value="Update"></td> -->
			</tr>
		</table>
	</form>
</body>
</html>
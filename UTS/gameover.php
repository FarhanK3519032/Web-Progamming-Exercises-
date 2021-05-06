<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Permainan Berakhir</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Permainan Berakhir</h1>
	
	<?php
	echo "<p>Hello ".$_COOKIE['namauser'].", permainan telah selesai. Semoga lain waktu bisa lebih baik</p>";
	echo "<p>Score Terakhir anda: ".$_SESSION['score']."</p>";
	?>

	<button class="button button1" onclick="window.location.href='Logout.php';">Keluar</button>
	<button class="button button1" onclick="window.location.href='input.html';">Ganti Akun</button>
	
	<?php  

	include "dbconfig.php";

	//koneksi ke db projectUTS
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, 3307);

	//cek koneksi
	if ($conn->connect_error) {
		die("Koneksi ke Database GAGAL ".$conn->connect_error);
	}

	//membaca data dari input.html
	$nama = $_COOKIE['namauser'];
	$email = $_COOKIE['emailuser'];
	$score = $_SESSION['score'];

	//query SQL untuk insert data
	$query1 = "INSERT INTO datapemain (nama, email, score)
		  	  VALUES ('$nama', '$email', '$score')";

	//jalankan query
	$result1 = $conn->query($query1);

	//cek result query
	if (!$result1) {
		echo "Insert data GAGAL " .$conn->error;
	}

	//query SQL untuk select data
	$query2 = "SELECT * FROM datapemain ORDER BY score DESC";

	//menjalankan query
	$result2 = $conn->query($query2);

	echo "<h2>Hall Of Fame</h2>";

	//cek ada tidaknya data hasil query
	if ($result2->num_rows > 0) {
?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<table>
		<tr>
			<th>NAMA</th>
			<th>SCORE</th>
		</tr>
		<?php while ($data = $result2->fetch_assoc()) {
		?>
			<link rel="stylesheet" type="text/css" href="style.css">
			<tr>
				<th><?php echo $data['nama'] ?></th>
				<th><?php echo $data['score'] ?></th>
			</tr>
		<?php
		}
		} else {
			echo "<p>Data Tidak Ditemukan</p>";
		}

	//menutup koneksi
	$conn->close();

	?>
	</table>


</body>
</html>
<?php
	include ('cek.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h1>Halaman Landing</h1>
	<p>Hallo <?php echo $_COOKIE['namauser']; ?> selamat datang di permainan ini!!<button class="button button1" onclick="window.location.href='permainan.php';">Start Game</button></p> 

	<p>bukan anda? <button class="button button1" onclick="window.location.href='input.html';">Klik disini</button></p>

</body>
</html>
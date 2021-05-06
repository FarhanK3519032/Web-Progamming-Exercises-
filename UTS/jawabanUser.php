<?php

	session_start();
	$hasil = $_SESSION['rand1'] + $_SESSION['rand2'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jawaban User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Jawaban Anda</h1>

	<?php
		//mengecek jawaban user
		if (isset($_POST['submit'])) {
			$jwb = (int)$_POST['jwb'];
			if ($jwb == $hasil) {
			
				//jika jawaban benar
				echo "<p>Hello ".$_COOKIE['namauser'].", SELAMAT!! jawaban anda benar</p>";
				
				//score bertambah
				$_SESSION['score'] += 10;
				echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
	?>
				<button class="button button1" onclick="window.location.href='nextsoal.php';">Soal selanjutnya</button>

	<?php
			
			} else {

				//jika jawaban salah
				echo "<p>Hello ".$_COOKIE['namauser'].", SAYANG SEKALI jawaban anda masih belum tepat</p>";

				//score berkurang & lives berkurang
				$_SESSION['score'] -= 2;
				$_SESSION['lives'] -= 1;
				echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";

				//jika score atau lives habis
				if ($_SESSION['score'] <= 0 || $_SESSION['lives'] == 0) {
					header("Location:gameover.php");
				}
	?>
				<button class="button button1" onclick="window.location.href='nextsoal.php';" type="submit" name="submit">Soal selanjutnya</button>

	<?php

			}
		}	

	?>
</body>
</html>
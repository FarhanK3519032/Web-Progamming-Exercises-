<?php

include "cek.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Penjumlahan Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Penjumlahan Sederhana</h1>

	<?php

	//setting session
	$_SESSION['rand1'] = mt_rand(0, 20);
	$_SESSION['rand2'] = mt_rand(0, 20);
	$_SESSION['lives'] = 5;
	$_SESSION['score'] = 0;

	//setting variabel
	$randbil1 = $_SESSION['rand1'];
	$randbil2 = $_SESSION['rand2'];

	//tampilan awal
	echo "<p>Hallo ".$_COOKIE['namauser']." Good luck ya...you can do the best!!</p>";
	echo "<p>Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['score']."</p>";
	?> 

	<form method="post" action="jawabanUser.php">
		Berapakah hasil penjumlahan dari: <?php echo "$randbil1";?> + <?php echo "$randbil2"; ?> = <input type="text" name="jwb"> 
		<button class="button button1" onclick="window.location.href='jawabanUser.php';" type="submit" name="submit">Submit</button>
	</form>

</body>
</html>
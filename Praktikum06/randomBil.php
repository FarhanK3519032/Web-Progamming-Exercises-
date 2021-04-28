<?php

	session_start();
	$_SESSION['rand'] = mt_rand(0, 100); 

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tebak Angka Project</title>
	</head>
	<body>
		<h1>Sites ini adalah Permainan Tebak Angka</h1>
		<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
		<form method="post" action="randomBilExecute.php">
			Input bilangan tebakan <input type="text" name="guess">
			<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>
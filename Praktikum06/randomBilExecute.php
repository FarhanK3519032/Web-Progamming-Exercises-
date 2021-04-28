<?php  

	session_start();
	$random = $_SESSION['rand'];

	if (isset($_POST['submit'])) {
		$guess = (int)$_POST['guess'];
		if ($guess > $random) {
?>
		<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
		<br>
		<p>Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.</p>
		<br>
		<form method="post" action="randomBilExecute.php">
			Input bilangan tebakan <input type="text" name="guess">
			<input type="submit" name="submit" value="Submit">
		</form>

<?php
		} else if ($guess < $random){
?>
		<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
		<br>
		<p>Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.</p>
		<br>
		<form method="post" action="randomBilExecute.php">
			Input bilangan anda <input type="text" name="guess">
			<input type="submit" name="submit" value="Submit">
		</form>
<?php
		} else {
			echo "<p>Selamat yaaa.. Anda Benar, saya telah memilih bilangan ".$random. "</p>";
			echo "<p><a href='randomBil.php'>Main Lagi??</a></p>";
		}
	}

?>
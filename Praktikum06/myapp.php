<?php

	//bagian yang dieksekusi ketika pengunjung submit nama
	if (isset($_POST['submit'])) {
		
		//men-set cookie username dari namanya, lama cookie 3 bulan
		setcookie("username", $_POST['username'], time()+3*30*24*3600, "/");

		//men-set cookie jumlah kunjungan -> 0 (mula-mula)
		setcookie("visit", 0, time()+3*30*24*3600,"/");

		//men-set cookie kunjungan terakhir
		setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");

		//setelah setting cookie diatas, redirect ke halaman depan myapp.php
		header("Location:myapp.php");
	}

	//jika sudah ada cookie username
	if (isset($_COOKIE['username'])) {
		
		//tampilkan nama user, baca dari cookie
		echo "<p>Hallo, Selamat Datang " .$_COOKIE['username']."</p>";

		//tampilkan jumlah kunjungan saat ini = jumlah visit sebelumnya + 1
		echo "<p>Ini kunjungan anda ke-".($_COOKIE['visit']+1)."</p>";

		//tampilkan datetime kunjungan sebelumnya
		echo "<p>Kunjungan anda sebelumnya adalah pada tanggal ".$_COOKIE['lastvisit']."</p>";

		//setelah cookie sebelumnya dibaca, lakukan update cookie yang baru
		setcookie("username", $_COOKIE['username'], time()+3*30*24*3600,"/");
		setcookie("visit", $_COOKIE['visit'], time()+3*30*34*3600,"/");
		setcookie("lastvisit", $_COOKIE['lastvisit'], time()+3*30*24*3600,"/");

	} else {
		//jika cookie username belum ada, munculkan form

		?>

		<h1> Wellcome to my site</h1>
		<p>is this your first visit on this site?</p>
		<p>let's get acquainted first. Please input your username below!</p>

		<form method="post" action="myapp.php">
			username <input type="text" name="username">
			<input type="submit" name="submit" value="Submit">
		</form>

		<?php
	}

?>
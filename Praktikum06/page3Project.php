<?php

	include('cekProject.php');

	echo "<h1>Page 3</h1>";
	//manampilkan nama lengkap user
	echo "<p>Selamat datang ".$_COOKIE['namauser']. "</p>";
	echo "<h2>Menu Utama</h2>";
	echo "<p><a href='page1Project.php'>Page 1</a> | <a href='page2Project.php'>Page 2</a> | <a href='page3Project.php'>Page 3</a> | <a href='logoutProject.php'>Logout</a></p>";

?>
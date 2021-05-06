<?php

	if (isset($_POST['submit'])) {
		setcookie("namauser", $_POST['nama'], time()+7*24*3600, "/");
		setcookie("emailuser", $_POST['email'], time()+7*24*3600, "/");
	}

	header("Location:landing.php")

?>
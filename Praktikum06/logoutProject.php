<?php

	//hapus cookie
	setcookie("namauser", "", -1, "/");

	//redirect ke halaman login
	header("Location:formProject.html");

?>
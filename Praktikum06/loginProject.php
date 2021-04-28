<?php

	//daftar users
	$users = array(
		array("username1", "Farhan Syarifur Rahman", "123456"),
		array("username2", "Muhammad Fawwaz Mujahidin", "654321"),
		array("username3", "Muhammad Ridho Rifansah", "13579"),
	);

	//jika form login sudah submitted
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		//proses pengecekan ada tidaknya username dan password
		foreach ($users as $profile_user) {
			if (($profile_user[0] == $username) && ($profile_user[2] == $password)) {
				//jika ada yang match maka akan dibuat cookie
				setcookie("namauser", $profile_user[1], time()+7*24*3600, "/");
				//redirect halaman ke page1project.php
				header("Location:page1Project.php");
			}
		}

		//jika tidak ada username dan password maka
		echo "<h3>Login Failed</h3>";
		echo "<p>Please <a href='formProject.html'>login again</p>";
	}

?>
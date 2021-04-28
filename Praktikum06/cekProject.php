<?php

	//mengecek keberadaan session 'namauser'
	//ket : session 'namauser' akan tercreate ketika proses login sukses
	//silakan cek kembali di script proses.php

	if (!isset($_COOKIE['namauser'])) {
		echo "<p>Want to try to bypass the form page? HAH! NICE TRY!</p>";
		echo "<p>Please <a href='formProject.html'>Login </a>first</p>";
		//selanjutnya break dengan exit()
		exit();
	}

?>
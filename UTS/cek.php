<?php

	//mengecek keberadaan cookie 'namauser'
	//ket : cookie 'namauser' akan tercreate ketika proses login sukses
	//silakan cek kembali di script insert.php

	if (!isset($_COOKIE['namauser'])) {
		echo "<p>Mau coba-coba bypass ya? NICE TRY!</p>";
		echo "<p>Silahkan <a href='input.html'>Login</a> kembali</p>";
		exit();
	}

?>
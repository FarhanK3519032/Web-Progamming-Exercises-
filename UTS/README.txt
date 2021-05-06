Link yang sudah di deploy : simplemath.infinityfreeapp.com

- web ini dibuat untuk menyelesaikan penugasan MID semester mata kuliah Pemrogramman Web

- dalam web tsb terdapat beberapa php diantaranya :
	- dbconfig.php -> untuk koneksi ke database
	- index.html -> form input data untuk user, kemudian di redirect ke setcookie.php
	- setcookie.php -> membuat cookie untuk user gunakan pada web, kemudian redirect ke landing.php
	- landing.php -> tampilan landing page setelah user input data, dalam landing ini terdapat 2 button, button 1 untuk masuk ke permainan.php, button 2 untuk cek apakah benar cookie yang sedang di gunakan user merupakan data nya, jika bukan maka user akan di redirect ke index.html kembali 
	- permainan.php -> isi utama web yaitu game penjumlahan sederhana, pada page ini user diharus kan input jawaban yang benar mengenai pertanyaan yang muncul, submit jawaban yang di tulis user akan mendirect user ke jawaban.php
	- jawaban.php -> page ini akan mengeksekusi jawaban yang user input pada permainan.php, jika jawaban benar maka skor akan bertambah, namun jika jawaban salah skor dan lives akan berkurang, jika skor dan lives habis maka user akan di redirect ke gameover.php . pada masing-masing jawaban terdapat button yang akan mendirect user ke nextsoal.php
	- nextsoal.php -> merupakan pertanyaan selanjutnya seperti pada page permainan.php namun disini scor dan lives sudah ditambah/dikurangi
	- gameover.php -> page ini merupakan tampilan akhir jika user kehabisan skor dan lives kemudian menampilkan skor akhir yang diperoleh user kemudian pada page ini juga ditampilkan hall of fame yang merupakan tabel database dari skor-skor para user. Pada page ini di sertakan 2 button. button 1 untuk menghapus semua session dan cookie kemudian mendirect user ke logout.php sedangkan button 2 untuk memulai permainan baru dengan data user yang berbeda tanpa menghilangkan session dan cookie sebelumnya

kemudian disertakan pula cek.php pada web untuk mencegah user yang ingin by pass ke dalam web
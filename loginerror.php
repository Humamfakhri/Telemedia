<?php 
		if (isset($_GET['kosong'])) {
			echo "<p>ID dan Password harus diisi!</p>";
		} elseif (isset($_GET['salah'])) {
			echo "<p>Akun tidak ditemukan!</p>";
		}
?>
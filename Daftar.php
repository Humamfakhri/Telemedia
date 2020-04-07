<?php
   session_start();

   if(isset($_SESSION['LOGIN'])) {
   header('location: Beranda Logged.php'); }
?>


<!DOCTYPE html>
<html>
<head>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
					<link rel="stylesheet" type="text/css" href="Daftar.css">
					<link rel="icon" href="icon/TM Dadu.png">

	<title>
		Daftar | Telemedia
	</title>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
		  <img src="icon/TM Dadu.png" width="45" class="icon_nav">
		  <a class="navbar-brand">TELEMEDIA</a>
		  <div class="vertical"></div>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item mr-2">
		        <a class="nav-link" href="Beranda.html">Beranda</a>
		      </li>
		    </ul>
		  </div>
		</div>
		</nav>

	<!-- FORM -->
	<div id="kotak">
		<div class="konten">
			<img src="icon/TM Dadu.png" width="120" id="tm">
			<div class="judul">
				<h3>Silakan Daftar</h3>
				<div class="underline"></div>
			</div>
			<form method="POST" action="actiondaftar.php">
				
				<input class="isi" type="text" name="nama" placeholder="Nama Lengkap" required>
				<i class="fas fa-user fa-lg fa-fw"></i>
				<div class="border_bawah"></div>
				<input class="isi" type="email" name="email" placeholder="Alamat Email" required>
				<i class="fas fa-envelope fa-lg fa-fw"></i>
				<div class="border_bawah"></div>
				<input class="isi" type="password" name="password" placeholder="Kata Sandi" required>
				<i class="fas fa-lock fa-lg fa-fw"></i>
				<div class="border_bawah"></div>
			    <input type="hidden" readonly class="form-control-plaintext" id="staticEmail" name="tipe_user" value="pengguna">

				<input id="submit-btn" type="submit" name="submit" value="DAFTAR"><br>
				<div id="masuk">Sudah memiliki akun? <a href="Masuk.php" class="pisah">Masuk</a></div><br><br>
			</form>
		</div>
	</div>
	<!-- <a class="kembali" href="Beranda.php">Kembali</a> -->

	<div class="copyright">&copy; 2020 TELEMEDIA</div>
	

			

			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
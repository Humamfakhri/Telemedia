<?php 	
    session_start();
		
		if (isset($_SESSION['LOGIN'])) {
			header("location: Index.php");
			exit();
		}

    require_once ('koneksi.php');

		if (isset($_POST['SUBMIT'])) {
			$email 		= trim($_POST['EMAIL']);
			$password 	= trim($_POST['PASSWORD']);

			// if ($email == ""  || $password == "") {
			// 	header("location: loginerror.php?kosong");
			// 	exit();
			// }

			$sql = mysqli_query($koneksi, "SELECT * FROM tabel_akun WHERE (email='$email' OR nama='$email') AND password='$password' ");

			//Menghitung jumlah data yang ditentukan
			$cek = mysqli_num_rows($sql);
			if ($cek != 0) {
				$data = mysqli_fetch_assoc($sql);
				$akun_array = array(
                    'nama' => $data['nama'],
                    'email' => $data['email']
                );
				$_SESSION['LOGIN'] = $akun_array;

				if ($data["tipe_user"] == "admin") {
					$_SESSION['tipe_user'] == "admin";
					header("location: Dashboard.php");

				}elseif ($data["tipe_user"] == "pengguna") {
					$_SESSION['tipe_user'] == "pengguna";
					header("location: Index.php");
				}

			} // else{
			// 	header("location: loginerror.php?salah");
			// 	exit();
			// }
		}
 ?>


<!DOCTYPE html>
<html>
<head>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
					<link rel="stylesheet" type="text/css" href="Masuk.css">
					<link rel="icon" href="icon/TM White.png">

	<title>
		Masuk | Telemedia
	</title>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
		  <img src="icon/TM White.png" width="45" class="icon_nav">
		  <a class="navbar-brand">TELEMEDIA</a>
		  <div class="vertical"></div>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item mr-2">
		        <a class="nav-link" href="Index.php">Beranda</a>
		      </li>
		    </ul>
		  </div>
		</div>
		</nav>

	<!-- FORM -->
	<div id="kotak">
		<div class="konten">
			<img src="icon/TM White.png" width="120" id="tm">
			<div class="judul">
				<h3>Silakan Masuk</h3>
			</div>

			<form method="POST">
				<input class="isi" type="text" name="EMAIL" placeholder="Username / Alamat Email" required>
				<i class="fas fa-envelope fa-lg fa-fw"></i>
				<div class="border_bawah"></div>
				<input class="isi" type="password" name="PASSWORD" placeholder="Kata Sandi" required>
				<i class="fas fa-lock fa-lg fa-fw"></i>
				<div class="border_bawah"></div>

				<input id="submit-btn" type="submit" name="SUBMIT" value="MASUK"><br>

				<div id="daftar">Belum membuat akun? <a href="Daftar.php" class="pisah">Daftar</a></div><br><br>
			</form>
		</div>
	</div> <!-- kotak -->

	<div class="copyright">&copy; 2020 TELEMEDIA</div>
	

			

			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		    <script>
		    	$("form input[type=text]").on("change invalid", function() {
				    var textfield = $(this).get(0);
				    
				    // hapus dulu pesan yang sudah ada
				    textfield.setCustomValidity("");
				    
				    if (!textfield.validity.valid) {
				      textfield.setCustomValidity("Mohon isi form!");  
				    }
				});
		    </script>
</body>
</html>
<?php 
	session_start();

	if (!isset($_SESSION['LOGIN'])) {
		header("location: Masuk.php");
		exit();
	}

	

	if (isset($_GET['logout'])) {

			if (isset($_SESSION['LOGIN'])) {
				unset($_SESSION['LOGIN']);
				session_unset();
				session_destroy();
				$_SESSION = array ();
			}

			header("location: Masuk.php");
			exit();
	}
 ?>


<!DOCTYPE html>
<html>
<head>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
					<link rel="stylesheet" type="text/css" href="Beranda Logged.css">
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootnavbar.css">
					<link rel="icon" href="icon/TM Dadu.png">

	<title>
		Telemedia
	</title>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
		<div class="container">
		  <img src="icon/TM Dadu.png" width="45" class="icon_nav">
		  <a class="navbar-brand">TELEMEDIA</a>
		  <div class="vertical"></div>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active mr-3">
		        <a class="nav-link disabled" href="Beranda Logged.php">Beranda</a>
		      </li>
		      <li class="nav-item dropdown mr-3">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        Harga Layanan
		        </a>
		        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		        	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">Website</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="jasa/Website Toko Online.php">Website Toko Online</a></li>
			          		<li><a class="dropdown-item" href="#">Website Perusahaan</a></li>
			          		<li><a class="dropdown-item" href="#">Blogger Development</a></li>
			          	</ul>
		          	</li>
		          	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">Komputer</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="#">PC Operation System</a></li>
			          		<li><a class="dropdown-item" href="#">Rakit/ Beli PC</a></li>
			          		<li><a class="dropdown-item" href="#">Service PC</a></li>
			          	</ul>
		          	</li>
		          	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">Jaringan</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="#">Jaringan Antar-PC</a></li>
			          		<li><a class="dropdown-item" href="#">Pemasangan Wi-Fi</a></li>
			          		<li><a class="dropdown-item" href="#">Service Struktur Listrik</a></li>
			          	</ul>
		          	</li>
		          	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">Multimedia</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="#">Fotografi & Videografi</a></li>
			          		<li><a class="dropdown-item" href="#">Pembuatan Animasi</a></li>
			          		<li><a class="dropdown-item" href="#">Desain Grafis</a></li>
			          	</ul>
		          	</li>
		        </ul>
		      </li>
		      <li class="nav-item mr-2">
		        <a class="nav-link" href="Hubungi Kami.php">Hubungi Kami</a>
		      </li>
		    </ul>
		    <!-- Kanan -->
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item">
		        <a href="Cart.php"><i class="fas fa-shopping-cart"></i></a>
		      </li>
		      <div class="vertical2"></div>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        <div class="row profil">
			        	<div class="avatar"><img src="avatar/Autobot.jpg"></div>
			        	<div class="nama"><?php echo $_SESSION['nama']; ?></div>
			        </div>
		        </a>
		        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <li><a class="dropdown-item" href="Profil.php">Akun saya</a></li>
		          <div class="log">
		          <li><a class="dropdown-item keluar" href="Beranda Logged.php?logout"><b>Log out</b></a></li></div>
		        </ul>
		      </li>

		    </ul>
		  </div>
		</div>
		</nav>


		<!-- JUMBOTRON -->
		<div class="jumbotron">
		<div class="container">
		  <h1 class="display-4">EXPLORE WHAT YOU WANT <br>WITH <span class="font-weight-bold">TELEMEDIA</span></h1>
		  <p>Serahkan kebutuhan serba digitalmu kepada Telemedia</p>
		  
		</div>
		</div>

		<!-- BERANDA -->
		<div class="opening">
			<div class="container">
				<center>
				<div class="jumbo_title_1"><strong>MENGAPA TELEMEDIA?</strong></div>
				<div class="hr_beranda_1"></div>
				<div class="text_beranda_1">Sebagai jasa pembuat website, pemasang jaringan, dan fotografer, Telemedia adalah partner terbaik untuk bisnis Anda dalam menghadapi Era Digital yang serba teknologi. Perluas jangkauan bisnis Anda, kenalkan bisnis Anda, jadikan bisnis Anda sebagai bisnis modern yang mudah dijangkau semua orang di Indonesia.</div>

				<div class="row">
					<div class="col-md-4">
						<i class="far fa-clock icon_beranda"></i>
						<div class="judul_icon">Cepat & Prioritas</div>
						<div class="text_icon">Anda tidak perlu menunggu lama untuk segera meluncur. Anda hanya butuh beberapa hari saja dan kelengkapan bisnis Anda siap digunakan.</div>
					</div>
					<div class="col-md-4">
						<i class="fab fa-youtube icon_beranda"></i>
						<div class="judul_icon">Video Tutorial</div>
						<div class="text_icon">Layanan buatan kami sudah dilengkapi dengan panduan berupa video tutorial. Jadi, se-gaptek apapun Anda. Jangan pernah takut, Anda pasti bisa.</div>
					</div>
					<div class="col-md-4">
						<i class="fas fa-phone-volume icon_beranda"></i>
						<div class="judul_icon">Konsultasi Online</div>
						<div class="text_icon">Kami adalah IT Konsultan. Tugas utama kami adalah sebagai media konsultasi untuk bisnis Anda di era digital.</div>
					</div>
				</div>
			</div> <!-- container --></center>
		</div>

		<div class="kebutuhan">
			<div class="container">
				<center>
				<div class="jumbo_title_2"><strong>APA YANG ANDA BUTUHKAN?</strong></div>
				<div class="hr_beranda_2"></div>
				<div class="judul_kebutuhan">WEBSITE</div>
				<div class="row baris_1">
					<div class="col-md-4">
						<a href="jasa/Website Toko Online.php"><div class="img_icon"><img src="gambar/TKJ/Website online shop.png" height="70"></div>
						<div class="judul_img">WEBSITE TOKO ONLINE</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TKJ/Website perusahaan.png" height="70"></div>
						<div class="judul_img">WEBSITE PERUSAHAAN</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TKJ/Blogger.png" height="70" style="border-radius: 100%;"></div>
						<div class="judul_img">BLOGGER DEVELOPMENT</div></a>
						<div class="text_img">Saya ingin membuat website dari Blogger agar bebas bandwith tapi menggunakan alamat domain sendiri.</div>
					</div>
				</div> <!-- row 1-->

				<div class="hr_jasa"></div>
				<div class="judul_kebutuhan">KOMPUTER</div>
				<div class="row baris_2">
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TKJ/Instalasi OS.jpg" height="70"></div>
						<div class="judul_img">INSTALASI OS PC</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TKJ/Beli PC.png" height="70"></div>
						<div class="judul_img">RAKIT/BELI SATU SET PC</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TKJ/Service PC.png" height="70"></div>
						<div class="judul_img">SERVICE PC</div></a>
						<div class="text_img">Saya masih ingin menggunakan PC saya, tetapi PC-nya bermasalah dan tidak bisa digunakan.</div>
					</div>
				</div> <!-- row 2-->

				<div class="hr_jasa"></div>
				<div class="judul_kebutuhan">INTERNET & JARINGAN</div>
				<div class="row baris_3">
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TJA/Network1.png" height="70"></div>
						<div class="judul_img">PEMBUATAN JARINGAN ANTAR-PC</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TJA/Wifi.png" height="70"></div>
						<div class="judul_img">PEMASANGAN WI-FI</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/TKJ/Blogger.png" height="70" style="border-radius: 100%;"></div>
						<div class="judul_img">SERVICE STRUKTUR LISTRIK</div></a>
						<div class="text_img">Saya ingin membuat website dari Blogger agar bebas bandwith & kuota tapi menggunakan alamat domain sendiri.</div>
					</div>
				</div> <!-- row 3-->

				<div class="hr_jasa"></div>
				<div class="judul_kebutuhan">MULTIMEDIA</div>
				<div class="row baris_4">
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/MM/Camera.png" height="70"></div>
						<div class="judul_img">FOTOGRAFI & VIDEOGRAFI</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/MM/Animasi.png" height="70"></div>
						<div class="judul_img">PEMBUATAN ANIMASI</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="#"><div class="img_icon"><img src="gambar/MM/Desain Grafis.png" height="80"></div>
						<div class="judul_img">DESAIN GRAFIS</div></a>
						<div class="text_img">Saya masih ingin menggunakan PC saya, tetapi PC-nya bermasalah dan tidak bisa digunakan.</div>
					</div>
				</div> <!-- row 4-->
			</div> <!-- container --></center>
		</div>






		<br><br><br><br><br><br><br><br><br>

		<!-- FOOTER -->
	<div class="footer-main-div">
		<div class="footer-social-icons">
			<ul>
				<li><a href="#" target="blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#" target="blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#" target="blank"><i class="fab fa-google-plus-g"></i></a></li>
			</ul>
		</div>

		<div class="footer-menu-one">
			<ul>
				<li><a href="#">Beranda</a></li>
				<li><a href="#">Tentang Kami</a></li>
				<li><a href="#">Layanan</a></li>
				<li><a href="#">Produk</a></li>
				<li><a href="#">Hubungi Kami</a></li>
			</ul>
		</div>

		<div class="footer-menu-two">
			<ul>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Berita</a></li>
				<li><a href="#">Galeri</a></li>
				<li><a href="#">Media</a></li>
			</ul>
		</div>

	</div> <!-- footer-main -->

	<div class="footer-bawah">
		&copy; 2020 TELEMEDIA
	</div>
	

			

			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		    <script src="bootstrap/js/bootstrap.min.js"></script>
		    <script src="bootstrap/js/bootnavbar.js"></script>

		    <script>
		    	$('#navbar').bootnavbar();
		    </script>
</body>
</html>
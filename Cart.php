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
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootnavbar.css">
					<link rel="stylesheet" type="text/css" href="Cart.css">
					<link rel="icon" href="icon/TM Dadu.png">

	<title>
		Telemedia
	</title>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark header">
			<div class="row brand">
				<img src="icon/TM Dadu.png" width="45" class="icon_nav">
			  	<a class="navbar-brand">TELEMEDIA</a>
		  	</div>
		</nav>

		

		<div class="label">
			<i class="fas fa-long-arrow-alt-left"></i>
			<h1>CART</h1>
		</div>


		<!-- KONTEN -->
		<div class="container">
			<!-- <div class="row akun">
				<div class="avatar"><img src="avatar/Autobot.jpg"></div>
				<div class="nama_akun"><?php echo $_SESSION['nama']; ?></div>
			</div> -->

			<div class="row judul-tabel">

				<div class="col-md-2 teks-judul-tabel"></div>
				<div class="col-md-4 teks-judul-tabel produk"><b>PRODUK</b></div>
				<div class="col-md-2 teks-judul-tabel"><b>HARGA</b></div>
				<div class="col-md-2 teks-judul-tabel"><b>QUANTITY</b></div>
				<div class="col-md-2 teks-judul-tabel"><b>SUBTOTAL</b></div>
			</div> <!-- judul-tabel -->

			<div class="row tabel">

				<div class="col-md-2 isi-tabel tabel-gambar">
					<a href="#"><i class="fas fa-times-circle"></i></a><a href="#"><img src="gambar/TKJ/Beli PC.png"></a>
				</div>
				<div class="col-md-4 isi-tabel">
					<div class="judul_produk">Website Toko Online</div>
					<div class="edit"><a href="#"><i>Edit Opsi</i></a></div>
					<div class="data_produk"></div>
				</div>
				<div class="col-md-2 isi-tabel"></div>
				<div class="col-md-2 isi-tabel"></div>
				<div class="col-md-2 isi-tabel"></div>
			</div> <!-- tabel -->

			<div class="row tabel">

				<div class="col-md-2 isi-tabel tabel-gambar"><a href="#"><i class="fas fa-times-circle"></i></a><a href="#"><img src="gambar/MM/Desain Grafis.png"></a></div>
				<div class="col-md-4 isi-tabel"></div>
				<div class="col-md-2 isi-tabel"></div>
				<div class="col-md-2 isi-tabel"></div>
				<div class="col-md-2 isi-tabel"></div>
			</div> <!-- tabel -->
			<div class="btn btn-dark">UPDATE CART</div>

			<div class="checkout"><b>TOTAL CART</b></div>
		</div> <!-- container -->




		

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
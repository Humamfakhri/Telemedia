<?php 
	session_start();

	if (isset($_GET['logout'])) {

			if (isset($_SESSION['LOGIN'])) {
				unset($_SESSION['LOGIN']);
				session_unset();
				session_destroy();
				$_SESSION = array ();
			}

			header("location: Index.php");
			exit();
	}
 ?>


<!DOCTYPE html>
<html>
<head>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootnavbar.css">
					<link rel="stylesheet" type="text/css" href="Website Toko Online Basic.css">
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
		      <li class="nav-item mr-3">
		        <a class="nav-link" href="Index.php">Beranda</a>
		      </li>
		      <li class="nav-item dropdown active mr-3">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        Harga Layanan
		        </a>
		        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		        	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">Website</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="Website Toko Online.php">Website Toko Online</a></li>
			          		<li><a class="dropdown-item" href="Website Perusahaan.php">Website Perusahaan</a></li>
			          		<li><a class="dropdown-item" href="Blogger Development.php">Blogger Development</a></li>
			          	</ul>
		          	</li>
		          	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">PC & Internet</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="OS PC.php">PC Operation System</a></li>
			          		<li><a class="dropdown-item" href="Pemasangan Wi-fi.php">Pemasangan Wi-Fi</a></li>
			          		<li><a class="dropdown-item" href="Service PC.php">Service PC</a></li>
			          	</ul>
		          	</li>
		          	<li class="nav-item dropdown">
		          	<a class="dropdown-item" href="#" data-toggle="dropdown">Multimedia</a>
			          	<ul class="dropdown-menu">
			          		<li><a class="dropdown-item" href="Fotografi & Videografi.php">Fotografi & Videografi</a></li>
			          		<li><a class="dropdown-item" href="Pembuatan Animasi.php">Pembuatan Animasi</a></li>
			          		<li><a class="dropdown-item" href="Desain Grafis.php">Desain Grafis</a></li>
			          	</ul>
		          	</li>
		        </ul>
		      </li>
		      <li class="nav-item navnav mr-2">
		        <a class="nav-link" href="Hubungi Kami.php">Hubungi Kami</a>
		      </li>
		    </ul>
		    <!-- Kanan -->
		    <ul class="navbar-nav ml-auto">
		    	<li class="nav-item">
		    		<?php
			    		if (!isset($_SESSION['LOGIN'])) {
			    			echo "
			    	<a href='Cart.php'><i class='fas fa-shopping-cart' style='margin-top: 8px;'></i></a>
			    </li>
			<div class='vertical2' style='margin-top: 6px;'></div>
		      	<li class='nav-item'>
					<a class='btn btn-primary masuk' href='Masuk.php'>Masuk</a>
				</li>
				<li class='nav-item tombol_daftar'>
						<a class='btn btn-primary daftar' href='Daftar.php'>Daftar</a>
				</li>
			    			";	
			    		}else{
			    			echo "
					<a href='Cart.php'><i class='fas fa-shopping-cart'></i></a>
				</li>
			<div class='vertical2'></div>
				<li class='nav-item dropdown'>
					<a class='nav-link dropdown' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					<div class='row profil'>
						<div class='avatar'><img src='avatar/Autobot.jpg'></div>
						<div class='nama'>
			    			";
			    			echo $_SESSION['nama'];
							echo "
						</div>
					</div>
					</a>
					<ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
						<li><a class='dropdown-item' href='Profil.php'>Akun saya</a></li>
							<div class='log'>
						<li><a class='dropdown-item keluar' href='Website Toko Online Basic.php?logout'><b>Log out</b></a></li></div>
					</ul>
				</li>
							";
						}
					?>

		    </ul>
		  </div>
		</div>
		</nav>



		<!-- BERANDA -->

		<div class="location">
			<div class="row baris">
				<a href="Website Toko Online.php"><i class="fas fa-arrow-left"></i></a>
				<div class="folder">
					<a href="Index.php"><i class="fas fa-home"></i>  Beranda /</a>
					<a href="Website Toko Online.php">Website Toko Online /</a>
				</div>
			</div>
		</div>


		<div class="opening">
			<div class="container">
				<center>
				<div class="jumbo_title_1"><strong>Website Toko Online</strong></div>
				<p class="title">BASIC</p>
				</center>
				<div class="judul_data">Data Website</div>
			</div> <!-- container -->
		</div>






		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
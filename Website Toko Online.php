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

	if (isset($_POST['submit'])) {
		if (isset($_SESSION['cart'])) {
			$item_array_id = array_column($_SESSION['cart'], 'id');
			if (!in_array($_GET['id'], $item_array_id)) {
				$count = count($_SESSION['cart']);
				$item_array = array(
					'id' => $_GET['id'], 
					'nama_produk' => $_POST['nama_produk'],
					'harga_produk' => $_POST['harga_produk'],
					'quantity_produk' => $_POST['quantity_produk'],
				);
				$_SESSION['cart'][$count] = $item_array;
				echo "<script>window.location='Website Toko Online.php'</script>";
			}else{
				echo "<script>alert(Produk telah dimasukkan ke Cart)</script>";
				echo "<script>window.location='Website Toko Online.php'</script>";
			}
		}else{
				$item_array = array(
					'id' => $_GET['id'], 
					'nama_produk' => $_POST['nama_produk'],
					'harga_produk' => $_POST['harga_produk'],
					'quantity_produk' => $_POST['quantity_produk'],
				);
				$_SESSION['cart'][0] = $item_array;
		}
	}

	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'delete') {
			foreach ($_SESSION['cart'] as $key => $value) {
				if ($value['id'] == $_GET['id']) {
					unset($_SESSION['cart'][$key]);
					echo "<script>alert('Produk berhasil dihapus...!')</script>";
					echo "<script>window.location='Website Toko Online.php'</script>";
				}
			}
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootnavbar.css">
					<link rel="stylesheet" type="text/css" href="Website Toko Online.css">
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
						<li><a class='dropdown-item keluar' href='Website Toko Online.php?logout'><b>Log out</b></a></li></div>
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
		<div class="opening">
			<div class="container">
				<center>
				<div class="jumbo_title_1"><strong>PAKET HARGA WEBSITE TOKO ONLINE</strong></div>
				<div class="hr_beranda_1"></div>
				<div class="text_1">Kami berikan harga yang tepat dan pas untuk Anda. Pastikan Anda berkonsultasi terlebih dahulu.</div>


				<div class="row">
				<?php
					include('koneksi-product.php');

					$query = mysqli_query($koneksi, "SELECT * FROM product ORDER BY id ASC");

					while ($db = $query->fetch_assoc()) {
				?>
					<div class="col-md-4 isi">
						<center>
						<h4>BASIC</h4>
							<div class="kotak">
								<div class="header">
									<p class="rp">Rp</p>
									<h1>1.2 JT</h1>
								</div> <!-- header -->
							<?php 
								if ($db['id'] == 1) {
									echo "
										<p>Gratis Domain .com</p><hr>
										<p>Kuota Upload 2 GB</p><hr>
										<p>Email Subscription<i class='fas fa-times'></i></p><hr>
										<p>Bandwith Unlimited</p><hr>
										<p>Jumlah Produk 2.000+</p><hr>
										<p>Statistik Pengunjung</p><hr>
										<p>Ongkir JNE, TIKI, POS, J&T</p><hr>
										<p>Kode Pembayaran</p><hr>
										<p>Konfirmasi Pembayaran</p>
									";
								}elseif ($db['id'] == 2) {
									echo "
										<p>Gratis Domain .com</p><hr>
										<p>Kuota Upload 4 GB</p><hr>
										<p>Email Subscription<i class='fas fa-times'></i></p><hr>
										<p>Bandwith Unlimited</p><hr>
										<p>Jumlah Produk 2.000+</p><hr>
										<p>Statistik Pengunjung</p><hr>
										<p>Ongkir JNE, TIKI, POS, J&T</p><hr>
										<p>Kode Pembayaran</p><hr>
										<p>Konfirmasi Pembayaran</p>
									";
								}else{
									echo "
										<p>Gratis Domain .com</p><hr>
										<p>Kuota Upload 6 GB</p><hr>
										<p>Email Subscription<i class='fas fa-times'></i></p><hr>
										<p>Bandwith Unlimited</p><hr>
										<p>Jumlah Produk 2.000+</p><hr>
										<p>Statistik Pengunjung</p><hr>
										<p>Ongkir JNE, TIKI, POS, J&T</p><hr>
										<p>Kode Pembayaran</p><hr>
										<p>Konfirmasi Pembayaran</p>
									";
								}
							?>

							<form method="POST" action="Website Toko Online.php?action=add&id=<?php echo $db['id']; ?>">
								<div class="product">
									<!-- <input type="file" name="gambar_produk" value="<?php echo $db['gambar_produk']; ?>"> -->
									<input type="text" name="quantity_produk" class="form-control" value="1" style="width: 50px;">
									<input type="hidden" name="harga_produk" value="<?php echo $db['harga_produk']; ?>">
									<input type="hidden" name="nama_produk" value="<?php echo $db['nama_produk']; ?>">

									<div class="tombol_pesan">
										<input type="submit" name="submit" class="btn pesan" value="PESAN">
									</div>
								</div>
							</form>
							</div> <!-- kotak -->
						</center>
					</div>
					<?php
						} 
					?> <!-- while -->

					<div style="clear: both;"></div>
					<h3 class="title2">Shopping Cart Details</h3>
					<div class="table-responsive">
						<table class="table table-bordered">
						<tr>
							<th width="30%">Nama Produk</th>
							<th width="10%">Quantity</th>
							<th width="13%">Harga Produk</th>
							<th width="10%">Total Harga</th>
							<th width="17%">Hapus Produk</th>
						</tr>

					<?php
							if (!empty($_SESSION['cart'])) {
								$total = 0;
								foreach ($_SESSION['cart'] as $key => $value) {
						?>

						<tr>
							<td><?php echo $value['nama_produk']; ?></td>
							<td><?php echo $value['quantity_produk']; ?></td>
							<td>Rp<?php echo number_format($value['harga_produk']); ?></td>
							<td>Rp<?php echo number_format($value['quantity_produk'] * $value['harga_produk']); ?></td>
							<td><a href="Website Toko Online.php?action=delete&id=<?php echo $value['id']; ?>"> <span class="text-danger">Hapus</span></a></td>
						</tr>

						<?php 
							$total = $total + ($value['quantity_produk'] * $value['harga_produk']);
						}
						?>

						<tr>
							<td colspan="3" align="right">Total</td>
							<th align="right">Rp<?php echo number_format($total); ?></th>
						</tr>

						<?php 
						}
					?>
						</table>
					</div>
				</div>



					
				<div class="jumbo_title_2">FITUR WEBSITE TOKO ONLINE</div>
				<center><div class="hr_beranda_2"></div></center>
				<div class="text_2">Fitur-Fitur Website Toko Online Anda yang akan Membantu Bisnis Anda.</div>

				<div class="row">
					<div class="col-md-3">
						<i class="far fa-comments"></i>
						<p>LIVE CHAT</p>
						<p class="deskripsi_fitur">Fitur Live Chat yang memudahkan Anda untuk berkonsultasi dengan pelanggan. Siap menerima order kapan saja.</p>
					</div>
					<div class="col-md-3">
						<i class="fas fa-funnel-dollar"></i>
						<p>LAPORAN PENJUALAN</p>
						<p class="deskripsi_fitur">Dengan adanya Laporan Penjualan Anda dapat dengan mudah mendata hasil penjualan dalam periode tertentu.</p>
					</div>
					<div class="col-md-3">
						<i class="fas fa-qrcode"></i>
						<p>KODE PEMBAYARAN</p>
						<p class="deskripsi_fitur">Kode pembayaran adalah 4 digit angka unik yang mempermudah klarifikasi transaksi. 4 digit ini diambil dari nomor telepon pemesan.</p>
					</div>
					<div class="col-md-3">
						<i class="far fa-credit-card"></i>
						<p>ONLINE PAYMENT</p>
						<p class="deskripsi_fitur">Berbagai jenis fitur pembayaran online seperti transfer bank atau Credit Card sehingga pelanggan dapat lebih mudah untuk melakukan transaksi.</p>
					</div>
				</div>
			</div> <!-- container -->
		</div>




		<!-- FOOTER -->
	<div class="footer-main-div">
		<div class="brand">
			<img src="icon/TM Dadu.png" width="90">TELEMEDIA
		</div>
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
		Copyright &copy; 2020 TELEMEDIA
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
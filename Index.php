<?php
session_start();

require_once ('php/nav_index.php');
require_once ('php/footer.php');
require_once ('php/script.php');

if (isset($_GET['logout'])) {
    if (isset($_SESSION['LOGIN'])) {
        unset($_SESSION['LOGIN']);
        session_unset();
        session_destroy();
    }elseif (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        session_unset();
        session_destroy();
        $_SESSION = array();
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
					<link rel="stylesheet" type="text/css" href="Index1.css">
					<link rel="icon" href="icon/TM White.png">

	<title>
		Telemedia
	</title>
</head>
<body style="font-family: Micro">

    <!--NAVBAR-->
    <?php
        if (isset($_SESSION['LOGIN'])){
            echo nav_index($_SESSION['LOGIN']['nama']);
        }elseif(!isset($_SESSION['LOGIN'])){
            echo nav_index('');
        }
    ?>

    <!-- JUMBOTRON -->
    <?php
        if (!isset($_SESSION['LOGIN'])) {
            echo "
                <div class='jumbotron' style='margin-top: -190px;'>
            ";
        }else{
            echo "
                <div class='jumbotron' style='margin-top: -120px;'>
            ";
        }
    ?>
    <div class="container">
      <h1 class="display-4">EXPLORE WHAT YOU WANT <br>WITH <span class="font-weight-bold">TELEMEDIA</span></h1>
      <p>Serahkan kebutuhan teknologi digitalmu kepada Telemedia</p>
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
                    <div class="text_icon">Anda tidak perlu menunggu lama untuk segera meluncur. Anda hanya butuh beberapa hari saja dan kelengkapan bisnis Anda siap digunakan. Anda prioritas kami.</div>
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
				<div class="transisi">
				<div class="judul_kebutuhan">WEBSITE</div>
				<div class="row baris_1">
					<div class="col-md-4">
						<a href="Website Toko Online.php"><div class="img_icon"><img src="gambar/TKJ/Online Shop.png" height="70"></div>
						<div class="judul_img">WEBSITE TOKO ONLINE</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="Website Perusahaan.php"><div class="img_icon"><img src="gambar/TKJ/Web perusahaan.png" height="70"></div>
						<div class="judul_img">WEBSITE PERUSAHAAN</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="Blogger Development.php"><div class="img_icon"><img src="gambar/TKJ/Blogger.png" height="70" style="border-radius: 100%;"></div>
						<div class="judul_img">BLOGGER DEVELOPMENT</div></a>
						<div class="text_img">Saya ingin membuat website dari Blogger agar bebas bandwith tapi menggunakan alamat domain sendiri.</div>
					</div>
				</div> <!-- row 1-->
				</div>

				<div class="hr_jasa"></div>
				<div class="transisi">
				<div class="judul_kebutuhan">KOMPUTER</div>
				<div class="row baris_2">
					<div class="col-md-4">
						<a href="Instalasi OS PC.php"><div class="img_icon"><img src="gambar/TKJ/OS PC.jpg" height="70"></div>
						<div class="judul_img">INSTALASI OS PC</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="Beli Komputer.php"><div class="img_icon"><img src="gambar/TKJ/Computer.png" height="70"></div>
						<div class="judul_img">BELI KOMPUTER</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="Service Komputer.php"><div class="img_icon"><img src="gambar/TKJ/Service PC.png" height="70"></div>
						<div class="judul_img">SERVICE KOMPUTER</div></a>
						<div class="text_img">Saya masih ingin menggunakan PC saya, tetapi PC-nya bermasalah dan tidak bisa digunakan.</div>
					</div>
				</div> <!-- row 2-->
				</div>

				<div class="hr_jasa"></div>
				<div class="transisi">
				<div class="judul_kebutuhan">MULTIMEDIA</div>
				<div class="row baris_4">
					<div class="col-md-4">
						<a href="Fotografi & Videografi.php"><div class="img_icon"><img src="gambar/MM/Camera.png" height="70"></div>
						<div class="judul_img">FOTOGRAFI & VIDEOGRAFI</div></a>
						<div class="text_img">Saya ingin punya website yang ada fitur katalog produk, keranjang belanja, ongkir, diskon, dll</div>
					</div>
					<div class="col-md-4">
						<a href="Pembuatan Animasi.php"><div class="img_icon"><img src="gambar/MM/Animasi.png" height="70"></div>
						<div class="judul_img">PEMBUATAN ANIMASI</div></a>
						<div class="text_img">Saya ingin membuat website profil untuk perusahaan saya yang bergerak dibidang jasa atau agensi.</div>
					</div>
					<div class="col-md-4">
						<a href="Desain Grafis.php"><div class="img_icon"><img src="gambar/MM/Desain Grafis.png" height="80"></div>
						<div class="judul_img">DESAIN GRAFIS</div></a>
						<div class="text_img">Saya masih ingin menggunakan PC saya, tetapi PC-nya bermasalah dan tidak bisa digunakan.</div>
					</div>
				</div> <!-- row 3-->
				</div>
			</div> <!-- container --></center>
		</div>

    <?php echo footer(); ?>
    <?php echo script(); ?>
</body>
</html>
<?php
session_start();

require_once ('php/navigation_bar.php');
require_once('php/komponen.php');
require_once ('php/footer.php');
require_once ('php/script.php');

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
					<link rel="stylesheet" type="text/css" href="Website Toko Online.css">
					<link rel="icon" href="icon/TM White.png">

	<title>
		Telemedia
	</title>
</head>
<body>

    <!--NAVBAR-->
    <?php
        if (isset($_SESSION['LOGIN'])){
            echo navigation_bar('', '', 'active', 'disabled', '', '', $_SESSION['LOGIN']['nama']);
        }elseif (!isset($_SESSION['LOGIN'])){
            echo navigation_bar('', '', 'active', 'disabled', '', '', '');
        }
    ?>

    <!-- SECTION     -->
    <div class="container">
        <center>
        <div class="jumbo_title_1"><strong>PAKET HARGA WEBSITE TOKO ONLINE</strong></div>
        <div class="hr_beranda_1"></div>
        <div class="text_1">Kami berikan harga yang tepat dan pas untuk Anda. Pastikan Anda berkonsultasi terlebih dahulu.</div>

        <div class="row">
            <?php
                require_once ('koneksi.php');

                $query = mysqli_query($koneksi, "SELECT * FROM tabel_jasa ");
                while ($row = $query->fetch_assoc()){
                    paket($row['id'], $row['nama_jasa']);
                }
            ?>
        </div> <!-- row -->
    </div> <!-- container -->

    <div class="fitur_website">
                <div class="container">
                    <div class="jumbo_title_2 pt-4">FITUR WEBSITE TOKO ONLINE</div>
                    <center><div class="hr_beranda_2"></div></center>
                    <div class="text_2">Fitur-Fitur Website Toko Online Anda yang akan Membantu Bisnis Anda.</div>

                    <div class="row">
                        <div class="col-md-3 fitur-icon">
                            <i class="far fa-comments"></i>
                            <p>LIVE CHAT</p>
                            <p class="deskripsi_fitur">Fitur Live Chat yang memudahkan Anda untuk berkonsultasi dengan pelanggan. Siap menerima order kapan saja.</p>
                        </div>
                        <div class="col-md-3 fitur-icon">
                            <i class="fas fa-funnel-dollar"></i>
                            <p>LAPORAN PENJUALAN</p>
                            <p class="deskripsi_fitur">Dengan adanya Laporan Penjualan Anda dapat dengan mudah mendata hasil penjualan dalam periode tertentu.</p>
                        </div>
                        <div class="col-md-3 fitur-icon">
                            <i class="fas fa-qrcode"></i>
                            <p>KODE PEMBAYARAN</p>
                            <p class="deskripsi_fitur">Kode pembayaran adalah 4 digit angka unik yang mempermudah klarifikasi transaksi. 4 digit ini diambil dari nomor telepon pemesan.</p>
                        </div>
                        <div class="col-md-3 fitur-icon">
                            <i class="far fa-credit-card"></i>
                            <p>ONLINE PAYMENT</p>
                            <p class="deskripsi_fitur">Berbagai jenis fitur pembayaran online seperti transfer bank atau Credit Card sehingga pelanggan dapat lebih mudah untuk melakukan transaksi.</p>
                        </div>
                    </div>
                </div>
            </div>


    <?php echo footer(); ?>
    <?php echo script(); ?>
</body>
</html>
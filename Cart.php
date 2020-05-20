<?php
session_start();

require_once ('koneksi.php');
require_once ('php/komponen.php');
require_once ('php/footer.php');
require_once ('php/script.php');

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

if (isset($_POST['submit'])){
    if (isset($_SESSION['cart'])){
        $item_array_id = array_column($_SESSION['cart'], "id_jasa");
        if (!in_array($_POST['id'], $item_array_id)){
            $count = count($_SESSION['cart']);
            $cart_item = array(
                'id_jasa'           => $_POST['id'],
                'nama_domain'       => $_POST['nama_domain'],
                'no_telp'           => $_POST['no_telp'],
                'email_penjualan'   => $_POST['email_penjualan'],
                'no_rekening'       => $_POST['no_rekening'],
                'qty'               => $_POST['qty'],
            );
            $_SESSION['cart'][$count] = $cart_item;
            echo '<script>window.location="Cart.php"</script>';
        }else{
            echo '<script>alert("Produk sudah ada dalam Cart")</script>';
            echo '<script>window.location="Cart.php"</script>';
        }
    }elseif(!isset($_SESSION['cart'])){
        $cart_item = array(
            'id_jasa'           => $_POST['id'],
            'nama_domain'       => $_POST['nama_domain'],
            'no_telp'           => $_POST['no_telp'],
            'email_penjualan'   => $_POST['email_penjualan'],
            'no_rekening'       => $_POST['no_rekening'],
            'qty'               => $_POST['qty'],
        );
        $_SESSION['cart'][0] = $cart_item;
    }
}

if (isset($_GET['action'])){
    if ($_GET['action'] == 'hapus'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["id_jasa"] == $_POST['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Produk berhasil dihapus...!')</script>";
                echo "<script>window.location = 'Cart.php'</script>";
            }
        }
    }
}

function rupiah($harga){
    $hasil_rupiah = "Rp" . number_format($harga, 0, ',', '.');
    return $hasil_rupiah;
}
 ?>


<!DOCTYPE html>
<html>
<head>
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
					<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootnavbar.css">
					<link rel="stylesheet" type="text/css" href="Cart.css">
                    <link rel="stylesheet" href="jquery.nice-number.css">
                    <script src="jquery.nice-number.js"></script>
					<link rel="icon" href="icon/TM White.png">

	<title>
		Telemedia
	</title>
</head>
<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top header" id="navbar">
			<div class="row brand">
				<img src="icon/TM White.png" width="45" class="icon_nav">
			  	<a class="navbar-brand">TELEMEDIA</a> <div class="garis-vr"></div>
                <a class=" header-cart text-white ml-3 font-weight-bold">Cart</a>
		  	</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav akun">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="row profil">
                                <div class="avatar">
                                    <img src='avatar/user.jpg'>
                                </div>
                                <div class="nama text-white">
                                    <b><?php echo $_SESSION['LOGIN']['nama']; ?></b>
                                </div>
                            </div>
                        </a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item' href='Profil.php'>Akun saya</a></li>
                            <div class='log'>
                                <li><a class='dropdown-item keluar' href='Index.php?logout'><b>Log out</b></a></li></div>
                        </ul>
                    </li>
                </ul>
            </div>
		</nav>

    <!-- KONTEN -->
    <div class="latar">
        <div class="container judul-kertas shadow-sm bg-white mb-4">
            <div class="tabel-judul row px-4 py-3">
                <div class="col-md-5 checkbox-atas row">
                    <div class="check px-4">
                        <input type="checkbox" onclick="check()" id="check">
                    </div>
                    <div class="checkbox-atas">Produk</div>
                </div>
                <div class="col-md-2 atas">Harga Satuan</div>
                <div class="col-md-2 atas">Kuantitas</div>
                <div class="col-md-2 atas">Total Harga</div>
                <div class="col-md-1 atas">Aksi</div>
            </div>
        </div>

        <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>

        <?php
            if (!empty($_SESSION['cart'])){
                $total = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM tabel_jasa");
                if(mysqli_num_rows($query) > 0) {
                    while ($row = $query->fetch_assoc()) {
                        foreach ($id as $id_jasa) {
                            if ($row['id'] == $id_jasa) {
                                cart($id_jasa, $row['nama_jasa'], $row['foto_jasa'], $nama_domain, $no_telp, $email_penjualan, $no_rekening,
                                    rupiah($row['harga_jasa']), $qty);
                            }
                        }
                    }
                }
            }else{
                echo"<h1>Cart anda kosong</h1>";
            }
        ?>


    </div>


    <br><br><br><br><br><br><br><br><br>
    <?php
        echo footer();
        echo script();
    ?>
    <script>
        $('#check').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
</body>
</html>
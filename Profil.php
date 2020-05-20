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
        echo "<script>window.location='Cart.php'</script>";
      }else{
        echo "<script>alert(Produk telah dimasukkan ke Cart)</script>";
        echo "<script>window.location='Cart.php'</script>";
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
          echo "<script>window.location='Cart.php'</script>";
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
          <link rel="stylesheet" type="text/css" href="Profil.css">
          <link rel="icon" href="icon/TM White.png">

  <title>
    Telemedia
  </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark header">
      <div class="row brand">
        <img src="icon/TM White.png" width="45" class="icon_nav">
          <a class="navbar-brand">TELEMEDIA</a>
        </div>
    </nav>

    

    <!-- <div class="label">
      <h2>CART</h2>
      <div class="row">
          <a href="Index.php"><i class="fas fa-home"></i>  Beranda</a><span class="garing">/</span>
          <a href="Cart.php"><i class="fas fa-shopping-cart"></i>  Cart</a>
      </div>
    </div>
 -->


    <!-- KONTEN -->
    <div class="badan">
      <div class="container">
        <div class="row">

          <!-- KIRI -->
          <div class="col-md-2">
            <div class="row profil">
              <div class="avatar"><img src='avatar/user.jpg'></div>
              <div class="nama">
                <b><?php echo $_SESSION['nama']; ?></b>
                <p><a href="#"><i class="fas fa-edit"></i>Ubah Profil</a></p>
                </div>
            </div>

            <div class="sidebar">
              <a href="Profil.php"><p><i class="fas fa-user"></i><span class="active">Akun Saya</span></p></a>
              <a href="Cart.php"><p><i class='fas fa-shopping-cart'></i><span>Pesanan Saya</span></p></a>
            </div>
          </div>

          <!-- KANAN -->
          <div class="col-md-10">
            <header>
              <strong>Profil Saya</strong>
              <p>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
            </header>

            <div class="container info-akun">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    Username
                  </div>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div> <!-- info-akun -->
          </div> <!-- kanan -->
        </div> <!-- row -->
        <br><br><br><br><br><br><br><br>
      </div> <!-- badan --> 
    </div>
  



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
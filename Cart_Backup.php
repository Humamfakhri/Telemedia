<?php
session_start();

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
    <link rel="stylesheet" type="text/css" href="Cart.css">
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
                            <b><?php echo $_SESSION['nama']; ?></b>
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
<div class="badan">
    <div class="container kertas shadow-sm">
        <?php
        include('koneksi.php');

        $query = mysqli_query($koneksi, "SELECT * FROM tabel_jasa");

        while ($db = $query->fetch_assoc()) {
            ?>

            <?php
        }
        ?> <!-- while -->

        <div class="table-responsive">
            <table class="table ">


                <?php
                if (empty($_SESSION['cart'])) {
                    $total = 0;
                }elseif (!empty($_SESSION['cart'])) {
                    $total = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        ?>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>PRODUK</th>
                            <th>HARGA</th>
                            <th>QUANTITY</th>
                            <th>SUBTOTAL</th>
                        </tr>

                        <tr>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value['id']; ?>"> <span class="text-danger"><i class="fas fa-times-circle"></i></span></a></td>
                            <td><img src="gambar/TKJ/Online Shop.png" width="60"></td>
                            <div class="pisah">
                                <td><p><?php echo $value['nama_produk']; ?></p></td>
                            </div>
                            <td>Rp<?php echo number_format($value['harga_produk']); ?></td>
                            <td><?php echo $value['quantity_produk']; ?></td>
                            <td>Rp<?php echo number_format($value['quantity_produk'] * $value['harga_produk']); ?></td>
                        </tr>

                        <?php
                        $total = $total + ($value['quantity_produk'] * $value['harga_produk']);
                    }
                    ?>


                    <?php
                }
                ?>
            </table>
        </div>
        <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
        <div class="total-carts">
            <h4>TOTAL CARTS</h4>
            <p>
                <?php
                if (isset($_SESSION['cart'])) {
                    echo "Rp";
                    echo number_format($total);
                }else{
                    echo "0";
                }
                ?>
            </p>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>

<?php
echo footer();
echo script();
?>
</body>
    </html><?php

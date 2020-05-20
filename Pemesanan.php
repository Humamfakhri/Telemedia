<?php
session_start();

require_once('php/navigation_bar.php');
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

function rupiah($harga){
    $hasil_rupiah = "Rp" . number_format($harga, 0, ',', '.');
    return $hasil_rupiah;
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootnavbar.css">
    <link rel="stylesheet" type="text/css" href="Pemesanan.css">
    <link rel="icon" href="icon/TM White.png">

    <title>
        Telemedia
    </title>

    <style>
        .tooltip-inner{
            color: #000000;
            /*background: -webkit-gradient(linear, left top, left 25, from(#f7f7f7), color-stop(4%, #f7f7f7), to(#f7f7f7));*/
            border: 2px solid #dfdfdf;
            border-radius: 2px;
        }
    </style>
</head>
<body style="background-color: #efefef">

    <!--NAVBAR-->
    <?php
        if (isset($_SESSION['LOGIN'])){
            echo navigation_bar('', '', 'active', 'disabled', '', '', $_SESSION['LOGIN']['nama']);
        }elseif (!isset($_SESSION['LOGIN'])){
            echo navigation_bar('', '', 'active', 'disabled', '', '', '');
        }
    ?>

    <!--SECTION-->
    <div class="container all-content">
        <div class="row">
            <div class="row back">
                <a href="Website Toko Online.php"><i class="fas fa-arrow-left"></i></a>
                <div class="vrt ml-3"></div>
                <h6 class="ml-3">Pemesanan</h6>
            </div>
            <div class="row navigasi ml-auto mr-5">
        <?php
            if ($_GET['id'] == 1){
                echo
                "<a href=\"Pemesanan.php?id=2\" data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\"
                       title=\"Website Toko Online<br>Paket Medium<br>
                              <a>Rp2.000.000</a>\">
                       <i class=\"fas fa-long-arrow-alt-right\"></i>
                </a>";
            }elseif ($_GET['id'] == 2){
                echo
                " <a href=\"Pemesanan.php?id=1\" data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\"
                       title=\"Website Toko Online<br>Paket Basic<br>
                              <a>Rp1.200.000</a>\">
                       <i class=\"fas fa-long-arrow-alt-left\"></i>
                  </a>
                  <span class='ml-5'></span>
                  <a href=\"Pemesanan.php?id=3\" data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\"
                       title=\"Website Toko Online<br>Paket Advanced<br>
                              <a>Rp2.700.000</a>\">
                       <i class=\"fas fa-long-arrow-alt-right\"></i>
                  </a>";;
            }else{
                echo
                " <a href=\"Pemesanan.php?id=2\" data-toggle=\"tooltip\" data-html=\"true\" data-placement=\"bottom\"
                       title=\"Website Toko Online<br>Paket Medium<br>
                              <a>Rp2.200.000</a>\">
                       <i class=\"fas fa-long-arrow-alt-left\"></i>
                  </a>
                  <span class='ml-5 mr-3'></span>";
            }
        ?>
            </div>
        </div>

        <div class="pemesanan mt-3">
            <div class="content_form rounded shadow bg-white p-5">
                <div class="judul_besar text-center">
                    <h1><strong>WEBSITE TOKO ONLINE</strong></h1>
                    <h4>
                        <?php
                            require_once ('koneksi.php');
                            $query = mysqli_query($koneksi, "SELECT * FROM tabel_jasa WHERE id = '$_GET[id]'");
                            $row =$query->fetch_assoc();
                            echo $row['nama_jasa'];
                        ?>
                    </h4>
                </div>

                <div class="data-mandatori mt-5">
                    <h4>Data Mandatori</h4>
                    <p>Di bawah ini adalah data untuk kelengkapan website anda.</p>
                </div>
                <form action="Cart.php" method="post" class="form_pemesanan pt-2">
                    <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
                    <input type="hidden" value="1" name="qty">
                    <div class="form-group">
                        <label><small class="wajib">* </small>Nama Domain</label>
                        <input type="text" name="nama_domain" class="form-control" placeholder="Misal: Telemedia.com" required>
                    </div>
                    <div class="form-group">
                        <label><small class="wajib">* </small>No. Telepon Penjualan</label>
                        <input type="number" name="no_telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <small class="wajib">* </small>Email Penjualan
                            <br><small>Sangat direkomendasikan menggunakan Gmail</small>
                        </label>
                        <input type="email" name="email_penjualan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><small class="wajib">* </small>No. Rekening Penjualan</label>
                        <input type="text" name="no_rekening" class="form-control" required>
                    </div>
                    <input type="submit" name="submit" value="KIRIM" class="btn btn-info">
                    <!--<div class="form-group">
                        <label for="profil_usaha"><small class="wajib">* </small>Profil Usaha Anda</label>
                        <br><textarea name="profil_usaha" id="" rows="5" class="form-control" placeholder="Tuliskan profil usaha anda dengan semenarik mungkin"></textarea>
                    </div>-->
                    <!--<input type="submit" name="submit" class="btn btn-info" value="Tambah ke Cart">-->
                </form>


                <div class="opsional pt-3">
                    <h5>Data Opsional</h5>
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="facebook" onclick="showHide()" name="checkbox">
                        <label class="form-check-label" for="defaultCheck1">Facebook</label>
                        <div class="form-group">
                            <input id="hiddenField" type="text" name="hidden" class="form-control" style="display: none">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="instagram" onchange="showHide(this.checked)">
                        <label class="form-check-label" for="defaultCheck1">Instagram</label>
                        <div class="form-group">
                            <input id="f_facebook" type="text" name="hidden" class="form-control" style="display: none">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="twitter" onchange="showHide(this.checked)">
                        <label class="form-check-label" for="defaultCheck1">Twitter</label>
                        <div class="form-group">
                            <input id="f_facebook" type="text" name="hidden" class="form-control" style="display: none">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="youtube" onchange="showHide(this.checked)">
                        <label class="form-check-label" for="defaultCheck1">Youtube</label>
                        <div class="form-group">
                            <input id="f_facebook" type="text" name="hidden" class="form-control" style="display: none">
                        </div>
                    </div>
                </div>
                <div class="semua-total text-right">
                    <div class="final_total pt-5">
                        <a class="text-secondary">Harga</a>
                        <p class="harga_pemesanan font-weight-bold"><?php echo rupiah($row['harga_jasa']); ?></p>
                    </div>

                    <div class="add_cart pt-2">
                        <div class="form-group">
                           <!-- <div class="col-2">
                                <input class="form-control" type="number" value="1" id="example-number-input">
                            </div>-->
                            <!-- Button trigger modal -->
                            <!--<button type="submit" name="submit" class="btn btn-dark px-5" data-toggle="modal" data-target="#exampleModalCenter">
                                Tambahkan <i class="fas fa-cart-plus"></i>
                            </button>-->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body text-center font-weight-bold">
                                            PRODUK TELAH BERHASIL<br>
                                            DITAMBAHKAN KE CART
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" style="background-color: transparent; border: none" data-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-dark">Pergi ke Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wish btn border-bottom mr-1" onclick="klik()">
                            <i class="far fa-heart"  id="wishlist"></i> Tambahkan ke wishlist
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        function klik() {
            const wishlist = document.getElementById("wishlist");
            if(wishlist.style.color == "black"){
                wishlist.style.color = "red";
                wishlist.className = "fas fa-heart";
            }else{
                wishlist.style.color = "black";
                wishlist.className = "far fa-heart";
            }
        }
    </script>
    <script>
        $("form input[type=text]").on("change invalid", function() {
            var textfield = $(this).get(0);

            // hapus dulu pesan yang sudah ada
            textfield.setCustomValidity("");

            if (!textfield.validity.valid) {
                textfield.setCustomValidity("Mohon isi data!");
            }
        });
    </script>
</body>
</html>

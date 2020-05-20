<?php
function paket_basic($id_jasa) {
    $basic =
        "
			<link rel='stylesheet' type='text/css' href='php/komponen.css'>

			<div class='col-md-4 paket'>
			    <h2>BASIC</h2>
                <div class='content_paket mt-3'>
                    <div class='kotak shadow bg-white'>
                        <div class='container'>
                            <div class='row atas pt-2 pb-1 text-white mb-3'>
                                <p class='rp'>Rp</p>
                                <h1>1,2 JT</h1>
                            </div>
                            <div class='fitur_paket text-center'>
                                <p>Gratis Domain .com</p><hr>
                                <p>Kuota Upload 2 GB</p><hr>
                                <p>Email Subscription<i class='fas fa-times'></i></p><hr>
                                <p>Bandwith Unlimited</p><hr>
                                <p>Jumlah Produk 2.000+</p><hr>
                                <p>Statistik Pengunjung</p><hr>
                                <p>Ongkir JNE, TIKI, POS, J&T</p><hr>
                                <p>Kode Pembayaran</p><hr>
                                <p>Konfirmasi Pembayaran</p>
                            </div>
                        </div>
                        <div class='bawah text-center'>
                            <form action='Pemesanan.php?id=$id_jasa?>' method='post'>
                                <input type='submit' name='pesan' class='btn btn-info' value='PESAN'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		";

    echo $basic;
}

function paket_medium($id_jasa) {
    $medium =
        "
			<link rel='stylesheet' type='text/css' href='php/komponen.css'>

			<div class='col-md-4 paket'>
			    <h2>MEDIUM</h2>
                <div class='content_paket mt-3'>
                    <div class='kotak shadow bg-white'>
                        <div class='container'>
                            <div class='row atas pt-2 pb-1 text-white mb-3'>
                                <p class='rp'>Rp</p>
                                <h1>2,2 JT</h1>
                            </div>
                            <div class='fitur_paket text-center'>
                                <p>Gratis Domain .com</p><hr>
                                <p>Kuota Upload 4 GB</p><hr>
                                <p>Email Subscription<i class='fas fa-times'></i></p><hr>
                                <p>Bandwith Unlimited</p><hr>
                                <p>Jumlah Produk 4.000+</p><hr>
                                <p>Statistik Pengunjung</p><hr>
                                <p>Ongkir JNE, TIKI, POS, J&T</p><hr>
                                <p>Kode Pembayaran</p><hr>
                                <p>Konfirmasi Pembayaran</p>
                            </div>
                        </div>
                        <div class='bawah text-center'>
                            <form action='Pemesanan.php?id=$id_jasa?>' method='post'>
                                <input type='submit' name='pesan' class='btn btn-info' value='PESAN'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		";

    echo $medium;
}

function paket_advanced($id_jasa) {
    $advanced =
        "
			<link rel='stylesheet' type='text/css' href='php/komponen.css'>

			<div class='col-md-4 paket'>
			    <h2>ADVANCED</h2>
                <div class='content_paket mt-3'>
                    <div class='kotak shadow bg-white'>
                        <div class='container'>
                            <div class='row atas pt-2 pb-1 text-white mb-3'>
                                <p class='rp'>Rp</p>
                                <h1>1,2 JT</h1>
                            </div>
                            <div class='fitur_paket text-center'>
                                <p>Gratis Domain .com</p><hr>
                                <p>Kuota Upload 6 GB</p><hr>
                                <p>Email Subscription<i class='fas fa-check'></i></p><hr>
                                <p>Bandwith Unlimited</p><hr>
                                <p>Jumlah Produk 6.000+<i class='fas fa-check'></i></p><hr>
                                <p>Statistik Pengunjung</p><hr>
                                <p>Ongkir JNE, TIKI, POS, J&T</p><hr>
                                <p>Kode Pembayaran</p><hr>
                                <p>Konfirmasi Pembayaran</p>
                            </div>
                        </div>
                        <div class='bawah text-center'>
                            <form action='Pemesanan.php?id=$id_jasa?>' method='post'>
                                <input type='submit' name='pesan' class='btn btn-info' value='PESAN'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		";

    echo $advanced;
}
?>
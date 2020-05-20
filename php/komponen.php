<?php 
	function paket($id_jasa, $nama_jasa){
		$element =
		"
			<link rel='stylesheet' type='text/css' href='php/komponen.css'>

			<div class='col-md-4 paket'>
			    <h2>$nama_jasa</h2>
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
                            <a href='Pemesanan.php?id=$id_jasa' name='pesan' class='btn btn-info'>PESAN</a>
                        </div>
                    </div>
                </div>
            </div>
		";

		echo $element;
	}

	function cart($id_jasa, $nama_jasa, $foto_jasa, $nama_domain, $no_telp, $email_penjualan, $no_rekening, $harga_jasa, $qty){
	    $item =
        "
        <div class=\"container kertas shadow-sm bg-white mb-3\">
            <div class=\"nama-jasa pt-3\">Website Toko Online $nama_jasa</div>
            <div class=\"tabel-jasa row px-5 py-3\">
                <div class=\"col-md-5 kiri row pb-1\">
                    <div class=\"check pr-4\"><input type=\"checkbox\"></div>
                    <div class=\"gambar-jasa mt-2\"><img src=\"$foto_jasa\" width=\"80\" alt=\"\"></div>
                    <div class=\"data px-4\">
                        $nama_domain<br>
                        $no_telp<br>
                        $email_penjualan<br>
                        $no_rekening
                    </div>
                </div>
                <div class=\"col-md-2 tengah\">$harga_jasa</div> <!--harga satuan-->
                <div class=\"col-md-2 tengah\">$qty</div>
                <div class=\"col-md-2 tengah\">Rp1.200.000,00</div> <!--total-->
                <div class=\"col-md-1 tengah\"><a href=\"Cart.php?action=hapus&id=$id_jasa\" class=\"text-danger\">Hapus</a></div>
            </div>
        </div>
	    ";

    echo $item;

    }

?>
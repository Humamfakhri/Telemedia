<?php

function footer() {
    $elemen = "
    <link rel='stylesheet' href='php/footer1.css'>
        
    <div class=\"footer-atas\">
        <div class='container'>
            <div class=\"brand brand-footer\">
                <p><img src=\"icon/TM White.png\" width=\"90\">TELEMEDIA</p>
            </div>
            
            
            <div class='row'>
                <div class='col-md-3'>
                    <div class='judul-footer'>
                        <a>PAKET HARGA</a>
                        <div class='hr-judul-footer'></div>
                    </div>
                    <div class='isi-footer'>
                        <a href='#'><p>Harga Jasa Pembuatan Website Toko Online</p></a>
                        <a href='#'><p>Harga Jasa Pembuatan Website Perusahaan</p></a>
                    </div>
                </div>
                
                <div class='col-md-3 footer-utama'>
                    <div class='judul-footer'>
                        <a>INFORMASI</a>
                        <div class='hr-judul-footer'></div>
                    </div>
                    <div class='isi-footer'>
                        <a href='#'><p>Fitur Website Toko Online</p></a>
                        <a href='#'><p>Fitur Website Perusahaan</p></a>
                        <a href='#'><p>Pemesanan Website Toko Online</p></a>
                        <a href='#'><p>Pemesanan Website Perusahaan</p></a>
                    </div>
                </div>
                
                <div class='col-md-3'>
                    <div class='judul-footer'>
                        <a>FEEDS</a>
                        <div class='hr-judul-footer'></div>
                    </div>
                    <div class='isi-footer'>
                        <a href='#'><p>Apa itu Website Toko Online?</p></a>
                        <a href='#'><p>Apa itu Website Perusahaan?</p></a>
                        <a href='#'><p>Tips Merawat Website untuk Pemula</p></a>
                    </div>
                </div>
                
                <div class='col-md-3'>
                    <div class='judul-footer'>
                        <a>KONTAK INFO</a>
                        <div class='hr-judul-footer'></div>
                    </div>
                    <div class='isi-footer'>
                        <span class='silence'>
                            <a><p><i class=\"fas fa-mobile-alt\"></i> 0878-8551-9894</p></a>
                            <a><p><i class=\"fab fa-instagram\"></i> @telemedia-smktelkom</p></a>
                        </span>
                    </div>
                </div>
            </div>    
            
            <div class=\"footer-bawah\">
                <hr class='hr-footer-bawah'>
                Copyright &copy; 2020 TELEMEDIA. All right reserved
            </div>
        </div> <!-- container -->
    </div>   
        
    ";

    echo $elemen;
}
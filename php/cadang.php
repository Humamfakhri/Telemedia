<?php

function navigation_bar($beranda_a, $beranda_d, $harga_layanan_a, $harga_layanan_d, $hubungi_kami_a, $hubungi_kami_d) {
    $element = "
        <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' href='fontawesome/css/all.min.css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap/css/bootnavbar.css\">
        <link rel='stylesheet' href='php/navigation_bar1.css'>
        
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"navbar\" style=\"background-color: #191d23;\">
            <div class=\"container\">
            <img src=\"icon/TM White.png\" width=\"45\" class=\"icon_nav\">
            <a class=\"navbar-brand\">TELEMEDIA</a>
            <div class=\"vertical\"></div>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item $beranda_a mr-3\">
                            <a class=\"nav-link $beranda_d\" href=\"Index.php\">Beranda</a>
                        </li>
                        <li class=\"nav-item $harga_layanan_a dropdown mr-3\">
                            <a class=\"nav-link $harga_layanan_d dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Harga Layanan
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li class=\"nav-item dropdown\">
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"dropdown\">Website</a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"dropdown-item\" href=\"Website Toko Online.php\">Website Toko Online</a></li>
                                        <li><a class=\"dropdown-item\" href=\"Website Perusahaan.php\">Website Perusahaan</a></li>
                                        <li><a class=\"dropdown-item\" href=\"Blogger Development.php\">Blogger Development</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"dropdown\">PC & Internet</a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"dropdown-item\" href=\"OS PC.php\">PC Operation System</a></li>
                                        <li><a class=\"dropdown-item\" href=\"Pemasangan Wi-fi.php\">Beli Komputer</a></li>
                                        <li><a class=\"dropdown-item\" href=\"Service PC.php\">Service PC</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"dropdown-item\" href=\"#\" data-toggle=\"dropdown\">Multimedia</a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"dropdown-item\" href=\"Fotografi & Videografi.php\">Fotografi & Videografi</a></li>
                                        <li><a class=\"dropdown-item\" href=\"Pembuatan Animasi.php\">Pembuatan Animasi</a></li>
                                        <li><a class=\"dropdown-item\" href=\"Desain Grafis.php\">Desain Grafis</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=\"nav-item $hubungi_kami_a navnav mr-2\">
                            <a class=\"nav-link $hubungi_kami_d\" href=\"Hubungi Kami.php\">Hubungi Kami</a>
                        </li>
                    </ul>
                    <!-- Kanan -->
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                                <a href='Cart.php'><i class='fas fa-shopping-cart' style='margin-top: 8px;'></i></a>
                        </li>
                        <div class='vertical2' style='margin-top: 6px;'></div>
    ";
    if (!isset($_SESSION['LOGIN'])){
        echo "
                         <li class='nav-item'>
                            <a class='btn btn-primary masuk' href='Masuk.php'>Masuk</a>
                        </li>
                        <li class='nav-item tombol_daftar'>
                            <a class='btn btn-primary daftar' href='Daftar.php'>Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
    }else{
        echo "
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <div class='row profil'>
                                <div class='avatar'><img src='avatar/user.jpg'></div>
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
                                <li><a class='dropdown-item keluar' href='Index.php?logout'><b>Log out</b></a></li></div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    
		";
    }

    $active = 'active';
    $disabled = 'disabled';
    echo $element;
}<?php

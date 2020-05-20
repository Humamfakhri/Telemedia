<?php

function navigation_bar($active_home, $home, $active_layanan, $layanan, $active_hubungi, $hubungi, $nama) {
    $element = "
        <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' href='fontawesome/css/all.min.css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"bootstrap/css/bootnavbar.css\">
        <link rel='stylesheet' href='php/navigation_bar1.css'>
        
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"navbar\">
            <div class=\"container\">
            <img src=\"icon/TM White.png\" width=\"45\" class=\"icon_nav\">
            <a class='navbar-brand'>TELEMEDIA</a>
            <div class=\"vertical\"></div>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item $active_home mr-3\">
                            <a class=\"nav-link $home \" href=\"Index.php\">Beranda</a>
                        </li>
                        <li class=\"nav-item $active_layanan dropdown mr-3\">
                            <a class=\"nav-link $layanan dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                        <li class=\"nav-item $active_hubungi navnav mr-2\">
                            <a class=\"nav-link $hubungi\" href=\"Hubungi Kami.php\">Hubungi Kami</a>
                        </li>
                    </ul>     
    ";

    $belum = "
                    <!-- Kanan -->
                    <ul class=\"navbar-nav ml-auto\">
                        <a href='Cart.php' class='row'>
                            <i class='fas fa-shopping-cart' style='margin-top: 7px;'></i>
                            <span id='cart_count' class='text-warning'>0</span>
                        </a>
                        <div class='vertical2' style='margin-top: 5px;'></div>
                        <li class='nav-item'>
                            <a class='btn btn-primary masuk' href='Masuk.php'>Masuk</a>
                        </li>
                        <div class='pisah_daftar'>
                            <li class='nav-item tombol_daftar'>
                                <a class='btn btn-primary daftar' href='Daftar.php'>Daftar</a>    
                            </li>
                        </div>
                    </ul>
                </div>
            </div> 
        </nav>
    ";

    $sudah = "
                    <ul class=\"navbar-nav ml-auto\">
		    	        <li class=\"nav-item row\">
                            <a href='Cart.php' class='row' style='margin-top: 6px;'>
                                <i class='fas fa-shopping-cart' style='margin-top: 7px;'></i>
                                <span id='cart_count' class='text-warning'>0</span>
                            </a>
                        </li>
                        <div class='vertical2' style='margin: 10px 26px;'></div>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <div class='row profil'>
                                    <div class='avatar'><img src='avatar/user.jpg'></div>
                                    <div class='nama'>$nama</div>
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

    if (!isset($_SESSION['LOGIN'])){
        echo $element, $belum;
    }elseif (isset($_SESSION['LOGIN'])){
        echo $element, $sudah;
    }
}
?>
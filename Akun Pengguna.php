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

      header("location: Index.php");
      exit();
  }
?>


<!DOCTYPE html>
<html>
<head>

                    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
                    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
                    <link rel="stylesheet" type="text/css" href="Akun Pengguna.css">
                    <link rel="icon" href="icon/TM Admin.png">

    <title>Admin | Telemedia</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <img src="icon/TM Admin.png" width="45" class="icon_nav">
          <a class="navbar-brand">TELEMEDIA</a>
          <div class="vertical"></div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active mr-2">
                <h4 class="nav-link"><b>Admin</b></h4>
              </li>
            </ul>
          </div>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0 cari" type="submit">Cari</button>
            </form>
          <div class="icon ml-4">
              <h5>
                  <!-- <a href="#"><i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i></a>
                  <a href="#"><i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i></a> -->
                  <a href="Index.php?logout"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Keluar"></i></a>
              </h5>
          </div>
        </div>
        </nav>

        <!-- KIRI -->
        <div class="row no-gutters">
            <div class="col-md-2 bg-dark pr-3 pt-4 kiri">
              <div class="row profil">
                <div class="avatar">
                  <img src="avatar/user.jpg">
                </div>
                <div class="nama">
                  <h5><?php echo $_SESSION['nama']; ?></h5>
                </div>
              </div>
              <hr class="hr_profil">
                <ul class="nav flex-column ml-3 mb-5">
                  <li class="nav-item">
                    <a class="nav-link side_text " href="Dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link side_text" href="Daftar Jasa.php"><i class="fas fa-laptop-code mr-2"></i>Daftar Jasa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link side_text side_active" href="Akun Pengguna.php"><i class="fas fa-user mr-2 ml-1"></i>Akun Pengguna</a>
                  </li>
                </ul>

                <form action="actiondaftar.php" method="POST" class="registrasi">
                  <div class="form-group">
                    
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    
                    <input class="form-control" type="email" name="email" placeholder="Alamat Email">
                  </div>
                  <div class="form-group">
                    
                    <input class="form-control" type="password" name="password" placeholder="Kata Sandi">
                  </div>
                    <input type="hidden" name="tipe_user" value="pengguna">

                    <input type="submit" name="submit" class="btn btn-primary" value="Daftar">
                </form>
                
            </div>



            <!-- CARD -->

          <div class="col-md-10 p-5"> 
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM daftar WHERE tipe_user = 'pengguna'");
            ?>
            <form action="" method="post">
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    <?php if(mysqli_num_rows($query)>0){ ?>
                    <?php
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["nama"];?></td>
                        <td><?php echo $data["email"];?></td>
                        <td><?php echo $data["password"];?></td>
                        <td>
                            <a href="Akun Pengguna.php?edit=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a> |
                            <a href="actiondaftar.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                    <?php } ?>
                </table>
            </form>
          </div> <!-- col-md-10 -->
        </div> <!-- row layar -->


            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script type="text/javascript" src="Dashboard.js"></script>
</body>
</html>
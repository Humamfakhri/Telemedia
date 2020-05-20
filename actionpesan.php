<?php
session_start();

// ADMIN
if (isset($_SESSION['LOGIN'])) {
    require_once ('koneksi.php');

    if (isset($_POST['submit'])) {
        $nama_domain= $_POST['nama_domain'];
        $email		= $_POST['email'];
        $password	= $_POST['password'];
        $tipe_user	= $_POST['tipe_user'];

        $query = mysqli_query($koneksi, "INSERT INTO tabel_akun (nama, email, password, tipe_user) VALUES ('$nama', '$email', '$password', '$tipe_user')") or die($mysqli->error);
        header("location: Akun Pengguna.php");
        exit();
    }
}
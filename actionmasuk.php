<?php 
	session_start();

	include 'koneksi.php';

	$email		= $_POST['email'];
	$password	= $_POST['password'];
	//Menyeleksi data dalam tabel
	$login = mysqli_query($koneksi, "SELECT * FROM daftar WHERE email='$email' AND password='$password' ");

	//Menghitung jumlah data yang ditentukan
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($login);

		if ($data["tipe_user"] == "admin") {
			$_SESSION['email'] == $email;
			$_SESSION['tipe_user'] == "admin";
			header("location: Dashboard.php");

		}elseif ($data["tipe_user"] == "pengguna") {
			$_SESSION['email'] == $email;
			$_SESSION['tipe_user'] == "pengguna";
			header("location: Beranda Logged.php");
		
		}
	}
 ?>
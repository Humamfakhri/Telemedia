<?php 
	session_start();

	if (isset($_SESSION['LOGIN'])) {
		require_once("koneksi.php");

		if (isset($_POST['submit'])) {
		$nama		= $_POST['nama'];
		$email		= $_POST['email'];
		$password	= $_POST['password'];
		$tipe_user	= $_POST['tipe_user'];

		$query = mysqli_query($koneksi, "INSERT INTO daftar (nama, email, password, tipe_user) VALUES ('$nama', '$email', '$password', '$tipe_user')") or die($mysqli->error);
		header("location: Akun Pengguna.php");
		exit();
		}
	}

	require_once("koneksi.php");

	if (isset($_POST['submit'])) {
		$nama		= $_POST['nama'];
		$email		= $_POST['email'];
		$password	= $_POST['password'];
		$tipe_user	= $_POST['tipe_user'];

	$query = mysqli_query($koneksi, "INSERT INTO daftar (nama, email, password, tipe_user) VALUES ('$nama', '$email', '$password', '$tipe_user')") or die($mysqli->error);
	$sql = mysqli_query($koneksi, "SELECT * FROM daftar WHERE nama = '$nama' ");
	$cek = mysqli_num_rows($sql);

		if ($sql) {
			$data = mysqli_fetch_assoc($sql);
			$_SESSION['LOGIN'] = 1;
			$_SESSION['email'] = $data['email'];
			$_SESSION['nama'] = $data['nama'];
			header("location: Beranda Logged.php");
		}else{
			echo "error";
		}
	}


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$hapus = mysqli_query($koneksi, "DELETE FROM daftar WHERE id = $id");
		header("location: Akun Pengguna.php");
	}


 ?>
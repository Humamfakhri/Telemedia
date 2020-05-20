<?php 
	session_start();

// ADMIN
	if (isset($_SESSION['LOGIN'])) {
        require_once ('koneksi.php');

		if (isset($_POST['submit'])) {
		$nama		= $_POST['nama'];
		$email		= $_POST['email'];
		$password	= $_POST['password'];
		$tipe_user	= $_POST['tipe_user'];

		$query = mysqli_query($koneksi, "INSERT INTO tabel_akun (nama, email, password, tipe_user) VALUES ('$nama', '$email', '$password', '$tipe_user')") or die($mysqli->error);
		header("location: Akun Pengguna.php");
		exit();
		}
	}

// PENGGUNA
	require_once ('koneksi.php');

	if (isset($_POST['submit'])) {
		$nama		= $_POST['nama'];
		$email		= $_POST['email'];
		$password	= $_POST['password'];
		$tipe_user	= $_POST['tipe_user'];

	$sql = mysqli_query($koneksi, "SELECT * FROM tabel_akun WHERE email = '$email' OR nama = '$nama' ");
	$cek = mysqli_num_rows($sql);
	
		if ($cek > 0) {
			header("location: Daftar.php?used");
		}else{
			$query = mysqli_query($koneksi, "INSERT INTO tabel_akun (nama, email, password, tipe_user) VALUES ('$nama', '$email', '$password', '$tipe_user')") or die($mysqli->error);
			$sql = mysqli_query($koneksi, "SELECT * FROM tabel_akun WHERE nama = '$nama' ");
			$cek = mysqli_num_rows($sql);
			

				if ($sql) {
					$data = mysqli_fetch_assoc($sql);
					$_SESSION['LOGIN'] = 1;
					$_SESSION['nama'] = $data['nama'];
					header("location: Index.php");
				}else{
					echo "error";
				}
			}
		}

	


// DELETE AKUN
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$hapus = mysqli_query($koneksi, "DELETE FROM tabel_akun WHERE id = $id");
		header("location: Akun Pengguna.php");
	}


 ?>
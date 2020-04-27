<?php 
	// Mendapatkan id produk dari URL
	$id_produk = $_GET['id'];

	// Produk di +1
	if (isset($_SESSION['CART'] [$id_produk])) {
		$_SESSION['CART'][$id_produk]+=1;
	}

	// Produk baru
	else {
		$_SESSION['CART'][$id_produk] = 1;
	}

	echo "<script>alert('Produk telah masuk ke Cart');</script>";
	echo "<script>location='Cart.php';</script>";
?>	
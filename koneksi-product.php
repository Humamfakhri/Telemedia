<?php 
	$dbhost		= "localhost";
	$dbuser		= "root";
	$dbpassword	= "";
	$dbname		= "product_db";

	$koneksi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ("Koneksi ke server error!");
 ?>
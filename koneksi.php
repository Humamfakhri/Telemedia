<?php 
	$dbhost		= "localhost";
	$dbuser		= "root";
	$dbpassword	= "";
	$dbname		= "telemedia";

	$koneksi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ("Koneksi ke server error!");
 ?>
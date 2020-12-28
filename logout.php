<?php 
	include_once "koneksi.php";
	session_start();

	unset($_SESSION['nama']);
	unset($_SESSION['id']);
	unset($_SESSION['level']);

	mysqli_query($conn,"DELETE FROM barang_terjual");

	header("Location:login.php");

 ?>
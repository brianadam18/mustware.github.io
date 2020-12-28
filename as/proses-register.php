<?php 
include_once "function/koneksi.php";

var_dump($_POST);

$username = $_POST['username'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$re_Password = $_POST['password2'];
$password = $_POST['password'];
$level = "kasir";

	if ($password != $re_Password){
		header("Location:register.php?notif=password");
	}else{
		$password = md5($password);
		$query = mysqli_query($conn, "INSERT INTO admin VALUES('','$username','$jenis_kelamin','$alamat','$password','$level')");
		header("Location:login.php");
	}

 ?>
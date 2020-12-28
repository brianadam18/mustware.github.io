<?php 
include_once "koneksi.php";

var_dump($_POST);

$username = $_POST['username'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$re_Password = $_POST['password2'];
$password = $_POST['password'];
$level = "user";

$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
$row = mysqli_fetch_assoc($query);

	if ($password != $re_Password){
		header("Location:register.php?notif=password");
	}elseif($row['username'] == $username){
		header("Location:register.php?notif=username");
	}else{
		$password = md5($password);
		$query = mysqli_query($conn, "INSERT INTO tb_user VALUES('','$username','$password','$alamat',       '$no_telp','$level')");
		header("Location:login.php");
	}

 ?>
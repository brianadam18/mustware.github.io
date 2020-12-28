<?php 
	
	include_once "koneksi.php";
	$nama = $_POST["nama"];
	$password = md5($_POST["password"]);

	$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$nama' AND password = '$password'");

	$cek_hasil = mysqli_num_rows($query);

	if ($cek_hasil == 0) {
		header("Location:login.php?notif=true");
	}else{
		$row = mysqli_fetch_assoc($query);

		session_start();
		$_SESSION["id"] = $row["id"];
		$_SESSION["nama"] = $row["username"];
		$_SESSION["level"] = $row["level"];

		header("Location:index.php");
	}


 ?>

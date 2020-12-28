<?php 

session_start();
  $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;

  if ($nama == NULL) {
    header("Location:login.php");
  }

include_once 'dbconfig.php';
include 'header.php'; 
include 'footer.php'; 

 ?>

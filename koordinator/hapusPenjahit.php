<?php 
  require '../database/db_login.php';
  session_start();
  $kode_penjahit = $_GET['kode_penjahit'];
  $user = $_GET['user'];
  $query = "DELETE FROM penjahit WHERE kode_penjahit = '$kode_penjahit'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='dataPenjahitKoordinator.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='dataPenjahitKoordinator.php?user=$user';</script>";
	}
?>
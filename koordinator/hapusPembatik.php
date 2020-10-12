<?php 
  require '../database/db_login.php';
  session_start();
  $kode_pembatik = $_GET['kode_pembatik'];
  $user = $_GET['user'];
  $query = "DELETE FROM pembatik WHERE kode_pembatik = '$kode_pembatik'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='dataPembatikKoordinator.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='dataPembatikKoordinator.php?user=$user';</script>";
	}
?>
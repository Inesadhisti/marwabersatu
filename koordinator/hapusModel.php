<?php 
  require '../database/db_login.php';
  session_start();
  $kode_model = $_GET['kode_model'];
  $user = $_GET['user'];
  $query = "DELETE FROM model WHERE kode_model = '$kode_model'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='motifModelKoordinator.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='motifModelKoordinator.php?user=$user';</script>";
	}
?>
<?php 
  require '../database/db_login.php';
  session_start();
  $kode_motif = $_GET['kode_motif'];
  $user = $_GET['user'];
  $query = "DELETE FROM motif WHERE kode_motif = '$kode_motif'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='motifModelKoordinator.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='motifModelKoordinator.php?user=$user';</script>";
	}
?>
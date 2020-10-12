<?php 
  require '../database/db_login.php';
  session_start();
  $id = $_GET['id'];
  $query = "DELETE FROM kain_putih WHERE id = '$id'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='kainputih.php?user=$user';</script>";
	}
  else{
		 echo "<script>window.location='kainputih.php?user=$user';</script>";
  }
	
?>
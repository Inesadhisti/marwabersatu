<?php 
  require '../database/db_login.php';
  session_start();
  $username = $_GET['username'];
  $user = $_GET['user'];
  $query = "DELETE FROM user WHERE username = '$username'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='../owner/editKoordinatorOwner.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='../owner/editKoordinatorOwner.php?user=$user';</script>";
	}
?>
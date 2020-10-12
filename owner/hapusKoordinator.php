<?php 
  hapus();
  function hapus(){
    session_start();
    $username = $_GET['username'];
    $user = $_GET['user'];
    require '../database/db_login.php';
    $query = "DELETE FROM user WHERE username = '$username'";
    $result = $db->query($query);
    if($result){
		echo "<script>window.location='../owner/editKoordinatorOwner.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='../owner/editKoordinatorOwner.php?user=$user';</script>";
	}
  }
?>
<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "INSERT INTO user values ('$username','$password','33')";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.alert('STAFF DITAMBAHKAN'); window.location='editStaffKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF USERNAME SUDAH ADA'); window.location='editStaffKoordinator.php?user=$user'</script>";
  }
?>
<?php 
  if(isset($_POST['tambah']));
  simpan();
  function simpan(){
    $user = $_GET['user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass = md5($password);
    require '../database/db_login.php';
    $query = "INSERT INTO user values ('$username','$pass',2)";
    $result = $db->query($query);
    if ($result) {
      echo "<script>window.alert('KOORDINATOR DITAMBAHKAN'); window.location='editKoordinatorOwner.php?user=$user'</script>";
    }
    else{
      echo "<script>window.alert('MOHON MAAF USERNAME SUDAH ADA'); window.location='editKoordinatorOwner.php?user=$user'</script>";
    }
  }
?>
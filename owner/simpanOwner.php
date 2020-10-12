<?php
  if(isset($_POST['submit']));
  simpan();
  function simpan(){
    $user = $_GET['user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if($password == $repassword){
      require '../database/db_login.php';
      $query = "UPDATE user SET username = '$username', password = '$password' WHERE username = '$user'";
      $result = $db->query($query);
      if ($result) {
          session_start();
          session_destroy();
          session_start();
          $_SESSION['user']=$username;
          echo "<script>window.alert('DATA BERHASIL DIUBAH'); window.location='editProfileOwner.php?user=$username'</script>";
      }
      else{
          echo "<script>window.alert('GAGAL'); window.location='editProfileOwner.php?user=$username'</script>";
      }
    }
    else{
      echo "<script>window.alert('Password berbeda'); window.location='editProfileOwner.php?user=$username'</script>";
    }
  }
?>
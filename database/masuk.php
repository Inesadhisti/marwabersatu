<?php 
  login();
  function login(){
    require 'db_login.php';
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE username='$user' AND password='$password'";
    $result = $db->query($query);
    $cek=mysqli_num_rows($result);
    if ($cek < 1){
      echo "<script>window.alert('Email atau password salah'); window.location='../index.php';</script>";
    }
    else {
      $tes=mysqli_fetch_array($result);
      $level = $tes['level'];
        if ($level == '1'){
          $_SESSION['user']=$user;
          echo "<script>window.alert('Selamat Datang Owner'); window.location='../owner/dashboard.php?user=$user'</script>";
        }
        else if ($level == '2'){
          $_SESSION['user']=$user;
          echo "<script>window.alert('Selamat Datang Koordinator'); window.location='../koordinator/dashboard.php?user=$user'</script>";
        }
        else if ($level == '3'){
          $_SESSION['user']=$user;
          echo "<script>window.alert('Selamat Datang Staff'); window.location='../staff/dashboard.php?user=$user'</script>";
        }
        else if ($level == '11'){
          $_SESSION['user']=$user;
          echo "<script>window.alert('Selamat Datang Owner'); window.location='../owner1/dashboard.php?user=$user'</script>";
        }
        else if ($level == '22'){
          $_SESSION['user']=$user;
          echo "<script>window.alert('Selamat Datang Koordinator'); window.location='../koordinator1/dashboard.php?user=$user'</script>";
        }
        else if ($level == '33'){
          $_SESSION['user']=$user;
          echo "<script>window.alert('Selamat Datang Staff'); window.location='../staff1/dashboard.php?user=$user'</script>";
        }
    }
  }
?>
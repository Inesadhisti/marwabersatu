<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $kode_pembatik = $_POST['kode_pembatik'];
  $nama_pembatik = $_POST['nama_pembatik'];
  $kuota = $_POST['kuota'];
  $query = "INSERT INTO pembatik values ('$kode_pembatik','$nama_pembatik','$kuota')";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='dataPembatikKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF KODE PEMBATIK SUDAH ADA'); window.location='dataPembatikKoordinator.php?user=$user'</script>";
  }
?>
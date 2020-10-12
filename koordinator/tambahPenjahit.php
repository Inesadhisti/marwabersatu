<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $kode_penjahit = $_POST['kode_penjahit'];
  $nama_penjahit = $_POST['nama_penjahit'];
  $kuota = $_POST['kuota'];
  $query = "INSERT INTO penjahit values ('$kode_penjahit','$nama_penjahit','$kuota')";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='dataPenjahitKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF KODE motif SUDAH ADA'); window.location='dataPenjahitKoordinator.php?user=$user'</script>";
  }
?>
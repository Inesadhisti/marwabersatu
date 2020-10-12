<?php 
  require '../database/db_login.php';
  if(isset($_POST['ubah']));
  $user = $_GET['user'];
  $kode_penjahit = $_GET['kode_penjahit'];
  $kuota = $_POST['kuota'];
  $query = "UPDATE penjahit SET kuota = '$kuota' WHERE kode_penjahit = '$kode_penjahit'";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='dataPenjahitKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF TIDAK BISA DIMASUKKAN'); window.location='dataPenjahitKoordinator.php?user=$user'</script>";
  }
?>
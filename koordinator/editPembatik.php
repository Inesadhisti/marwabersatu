<?php 
  require '../database/db_login.php';
  if(isset($_POST['ubah']));
  $user = $_GET['user'];
  $kode_pembatik = $_GET['kode_pembatik'];
  $kuota = $_POST['kuota'];
  $query = "UPDATE pembatik SET kuota = '$kuota' WHERE kode_pembatik = '$kode_pembatik'";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='dataPembatikKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF TIDAK BISA DIMASUKKAN'); window.location='dataPembatikKoordinator.php?user=$user'</script>";
  }
?>
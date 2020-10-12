<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $kode_model = $_POST['kode_model'];
  $nama_model = $_POST['nama_model'];
  $query = "INSERT INTO model values ('$kode_model','$nama_model')";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='motifmodelKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF KODE model SUDAH ADA'); window.location='motifModelKoordinator.php?user=$user'</script>";
  }
?>
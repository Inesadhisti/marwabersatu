<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $kode_motif = $_POST['kode_motif'];
  $nama_motif = $_POST['nama_motif'];
  $query = "INSERT INTO motif values ('$kode_motif','$nama_motif')";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='motifmodelKoordinator.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF KODE MOTIF SUDAH ADA'); window.location='motifModelKoordinator.php?user=$user'</script>";
  }
?>
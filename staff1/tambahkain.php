<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $id = $_POST['id'];
  $jenis = $_POST['jeniskain'];
  $jumlah = $_POST['jumlah'];
  $tanggal_masuk = $_POST['tanggal'];
  $query = "INSERT INTO kain_putih (id,jenis,jumlah,tanggal_masuk) values ('$id','$jenis',$jumlah,'$tanggal_masuk')";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='kainputih.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF KODE MOTIF SUDAH ADA'); window.location='kainputih.php?user=$user'</script>";
  }
?>
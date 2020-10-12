<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $id = $_GET['id'];
  $tanggal = $_GET['tanggal'];
  $keluar = $_POST['tanggal_keluar'];
  $ukuran = $_POST['ukuran'];
  $jenis = $_GET['jenis'];
  $jumlah = $_GET['jumlah'];
  $tanggal_keluar = date('Y-m-d', strtotime($keluar));
  $query = "UPDATE kain_putih SET Tanggal_keluar = '$tanggal_keluar' WHERE id = '$id' AND tanggal_masuk = '$tanggal'";

  $query2 ="insert into kain_putih_potong (id,jenis_kain,jumlah,tanggal_masuk,ukuran) values('$id','$jenis',$jumlah,'$tanggal_keluar',$ukuran) ";
  $result2 = $db->query($query2);
  $result = $db->query($query);
  if ($result && $result2) {
   echo "<script>window.location='kainputih.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIMASUKKAN'); window.location='kainputih.php?user=$user'</script>";
  }
?>
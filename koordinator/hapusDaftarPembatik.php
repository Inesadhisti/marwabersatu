<?php 
  require '../database/db_login.php';
  session_start();
  $kode_pembatik = $_GET['pembatik'];
  $user = $_GET['user'];
  $tanggal = $_GET['tanggal'];
  $motif = $_GET['motif'];
  $jumlah = $_GET['jumlah'];
  $jenis_kain = $_GET['jenis_kain'];
  $query = "DELETE FROM daftar_pembatik WHERE kode_pembatik = '$kode_pembatik' AND batas = '$tanggal' AND kode_motif = '$motif' AND jumlah_kain = '$jumlah' AND jenis_kain = '$jenis_kain'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='daftarPembatikKoordinator.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='daftarPembatikKoordinator.php?user=$user';</script>";
	}
?>
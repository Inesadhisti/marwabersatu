<?php 
  require '../database/db_login.php';
  session_start();
  $kode_penjahit = $_GET['penjahit'];
  $user = $_GET['user'];
  $tanggal = $_GET['tanggal'];
  $jumlah = $_GET['jumlah'];
  $model = $_GET['model'];
  $ukuran = $_GET['ukuran'];
  $kain = $_GET['kain'];
  $query = "DELETE FROM daftar_penjahit WHERE kode_penjahit = '$kode_penjahit' AND kain = '$kain' AND ukuran = '$ukuran' AND batas = '$tanggal' AND kode_model = '$model' AND jumlah_kain = '$jumlah' AND ukuran = '$ukuran' AND kain = '$kain'";
  $result = $db->query($query);
  if($result){
		echo "<script>window.location='daftarPenjahitKoordinator.php?user=$user';</script>";
	}
	else{
		echo "<script>window.location='daftarPenjahitKoordinator.php?user=$user';</script>";
	}
?>
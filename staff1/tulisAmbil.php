<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $pembatik = $_GET['pembatik'];
  $tanggal = $_GET['tanggal'];
  $ambil = $_POST['ambil'];
  $tanggal_ambil = date('d-m-Y', strtotime($ambil));
  $query = "UPDATE daftar_pembatik SET tanggal_ambil = '$tanggal_ambil' WHERE kode_pembatik = '$pembatik' AND batas = '$tanggal'";
  $result = $db->query($query);
  if ($result) {
    echo "<script>window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
  else{
    echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIMASUKKAN'); window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
?>
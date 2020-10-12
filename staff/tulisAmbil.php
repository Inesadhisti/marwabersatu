<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $pembatik = $_GET['pembatik'];
  $tanggal = $_GET['tanggal'];
  $id = $_GET['jenis_kain'];
  $ambil = $_POST['ambil'];
  $tanggal_ambil = date('Y-m-d', strtotime($ambil));
  $hari_ambil = date ('l', strtotime($ambil));
  if ($hari_ambil == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' AND batas = '$tanggal'");
    while ($row = $result2->fetch_object()){
      if ($tanggal_ambil >= $row->batas){
        $kain_putih_potong = $db->query("UPDATE kain_putih_potong SET tanggal_keluar = '$tanggal_ambil' WHERE id = '$id'");
        $query = "UPDATE daftar_pembatik SET tanggal_ambil = '$tanggal_ambil', oleh = '$user' WHERE kode_pembatik = '$pembatik' AND batas = '$tanggal'";
        $result = $db->query($query);
        if ($result && $kain_putih_potong) {
          echo "<script>window.location='daftarPembatikStaff.php?user=$user'</script>";
        }
        else{
          echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIMASUKKAN'); window.location='daftarPembatikStaff.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF TANGGAL TIDAK BOLEH KURANG DARI TANGGAL PELAKSANAAN'); window.location='daftarPembatikStaff.php?user=$user'</script>";
      }
    }
  }
?>
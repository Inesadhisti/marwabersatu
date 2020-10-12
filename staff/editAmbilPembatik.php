<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $pembatik = $_GET['pembatik'];
  $batas = $_GET['tanggal'];
  $tanggal_kembali = $_GET['tglKembali'];
  $jumlah_kain = $_GET['jumlah'];
  $motif = $_GET['motif'];
  $kain = $_GET['jenis_kain'];
  $tgl_ambil = $_POST['ambil'];
  $ambil = date('Y-m-d', strtotime($tgl_ambil));
  $hari_ambil = date('l', strtotime($tgl_ambil));
  if ($hari_ambil == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' AND batas = '$batas'");
    while ($row = $result2->fetch_object()){
      if ($ambil >= $row->batas){
        $query = "UPDATE daftar_pembatik SET tanggal_ambil = '$ambil', oleh = '$user' WHERE kode_pembatik = '$pembatik' AND batas = '$batas' AND jumlah_kain = '$jumlah_kain' AND kode_motif = '$motif' AND jenis_kain = '$kain'";
        $result = $db->query($query);
        if ($result) {
          echo "<script>window.location='daftarPembatikStaff.php?user=$user'</script>";
        }
        else{
          echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIUBAH'); window.location='daftarPembatikStaff.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF TANGGAL TIDAK BOLEH KURANG DARI TANGGAL PELAKSANAAN'); window.location='daftarPembatikStaff.php?user=$user'</script>";
      }
    }
  }
?>
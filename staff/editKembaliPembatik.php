<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $pembatik = $_GET['pembatik'];
  $batas = $_GET['tanggal'];
  $tanggal_ambil = $_GET['tglAmbil'];
  $jumlah_kain = $_GET['jumlah'];
  $motif = $_GET['motif'];
  $kain = $_GET['jenis_kain'];
  $tgl_kembali = $_POST['kembali'];
  $kembali = date('Y-m-d', strtotime($tgl_kembali));
  $hari_kembali = date('l', strtotime($tgl_kembali));
  if ($hari_kembali == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' AND batas = '$batas'");
    while ($row = $result2->fetch_object()){
      if ($kembali >= $row->tanggal_ambil){
        $query = "UPDATE daftar_pembatik SET tanggal_kembali = '$kembali', oleh = '$user' WHERE kode_pembatik = '$pembatik' AND batas = '$batas' AND jumlah_kain = '$jumlah_kain' AND kode_motif = '$motif' AND tanggal_ambil = '$tanggal_ambil' AND jenis_kain = '$kain'";
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
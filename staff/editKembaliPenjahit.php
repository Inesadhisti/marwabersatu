<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $penjahit = $_GET['penjahit'];
  $batas = $_GET['tanggal'];
  $tanggal_ambil = $_GET['tglAmbil'];
  $jumlah_kain = $_GET['jumlah'];
  $model = $_GET['model'];
  $kain = $_GET['kain'];
  $ukuran = $_GET['ukuran'];
  $tgl_kembali = $_POST['kembali'];
  $kembali = date('Y-m-d', strtotime($tgl_kembali));
  $hari_kembali = date('l', strtotime($tgl_kembali));
  if ($hari_kembali == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_penjahit WHERE kode_penjahit = '$penjahit' AND batas = '$batas'");
    while ($row = $result2->fetch_object()){
      if ($kembali >= $row->ambil){
        $query = "UPDATE daftar_penjahit SET tanggal_kembali = '$kembali', oleh = '$user' WHERE kode_penjahit = '$penjahit' AND batas = '$batas' AND jumlah_kain = '$jumlah_kain' AND kode_model = '$model' AND tanggal_ambil = '$tanggal_ambil' AND kain = '$kain' AND ukuran = '$ukuran'";
        $result = $db->query($query);
        if ($result) {
          echo "<script>window.location='daftarPenjahitStaff.php?user=$user'</script>";
        }
        else{
          echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIUBAH'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF TANGGAL TIDAK BOLEH KURANG DARI TANGGAL PELAKSANAAN'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
      }
    }
  }
?>
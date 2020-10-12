<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $penjahit = $_GET['penjahit'];
  $tanggal = $_GET['tanggal'];
  $kode = $_GET['kode'];
  $ukuran = $_GET['ukuran'];
  $ambil = $_POST['ambil'];
  $tanggal_ambil = date('Y-m-d', strtotime($ambil));
  $hari_ambil = date ('l', strtotime($ambil));
  if ($hari_ambil == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_penjahit WHERE kode_penjahit = '$penjahit' AND batas = '$tanggal'");
    while ($row = $result2->fetch_object()){
      if ($tanggal_ambil >= $row->batas){
        $kain_batik = $db->query("UPDATE kain_batik SET Tanggal_keluar = '$tanggal_ambil' WHERE kode_motif = '$kode'");
        $query = "UPDATE daftar_penjahit SET tanggal_ambil = '$tanggal_ambil', oleh = '$user' WHERE kode_penjahit = '$penjahit' AND batas = '$tanggal' AND kain = '$kode' AND ukuran = '$ukuran'";
        $result = $db->query($query);
        if ($result && $kain_batik) {
          echo "<script>window.location='daftarPenjahitStaff.php?user=$user'</script>";
        }
        else{
          echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIMASUKKAN'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF TANGGAL TIDAK BOLEH KURANG DARI TANGGAL PELAKSANAAN'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
      }
    }
  }
?>
<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $pembatik = $_GET['pembatik'];
  $tanggal = $_GET['tanggal'];
  $jumlah = $_GET['jumlah'];
  $jenis_kain = $_GET['jenis_kain'];
  $kembali = $_POST['kembali'];
  $id = $_POST['id'];
  $nama_motif = $_POST['nama'];
  $tanggal_kembali = date('Y-m-d', strtotime($kembali));
  $hari_kembali = date('l', strtotime($kembali));
  if ($hari_kembali == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' AND batas = '$tanggal'");
    while ($row = $result2->fetch_object()){
      if ($tanggal_kembali >= $row->tanggal_ambil){
        $query5 = "SELECT * FROM kain_potong WHERE id = '$jenis_kain'";
        $result5 = $db->query($query5);
        $tes1 = mysqli_fetch_array($result5);
        $ukuran = $tes1['ukuran'];
        $query1 = $db->query("INSERT INTO kain_batik (kode_motif, Nama_motif, jumlah, tanggal_masuk, ukuran, jenis_kain) values ('$id', '$nama_motif', $jumlah, '$tanggal_kembali', $ukuran, '$jenis_kain')");
        $query2 = $db->query("INSERT INTO kain_batik_jadi (kode_motif, nama_motif, ukuran, jumlah, jenis_kain) values ('$id', '$nama_motif', $ukuran, $jumlah, '$jenis_kain')");
        if ($query1 && $query2){
          $query = "UPDATE daftar_pembatik SET tanggal_kembali = '$tanggal_kembali', oleh = '$user' WHERE kode_pembatik = '$pembatik' AND batas = '$tanggal'";
          $result = $db->query($query);
          if ($result) {
            echo "<script>window.location='daftarPembatikStaff.php?user=$user'</script>";
          }
          else{
            echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIMASUKKAN'); window.location='daftarPembatikStaff.php?user=$user'</script>";
          }
        }
        else {
          echo "<script>window.alert('MOHON MAAF ID ATAU NAMA SUDAH ADA'); window.location='daftarPembatikStaff.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF TANGGAL TIDAK BOLEH KURANG DARI TANGGAL PELAKSANAAN'); window.location='daftarPembatikStaff.php?user=$user'</script>";
      }
    }
  }
?>
<?php 
  require '../database/db_login.php';
  if(isset($_POST['simpan']));
  $user = $_GET['user'];
  $penjahit = $_GET['penjahit'];
  $tanggal = $_GET['tanggal'];
  $jumlah = $_GET['jumlah'];
  $kode_motif = $_GET['kode'];
  $kode_kain = $_GET['kain'];
  $ukuran = $_GET['ukuran'];
  $kembali = $_POST['kembali'];
  $nama_model = $_POST['nama'];
  $id = $_POST['id'];
  $tanggal_kembali = date('Y-m-d', strtotime($kembali));
  $hari_kembali = date('l', strtotime($kembali));
  if ($hari_kembali == 'Friday'){
    echo "<script>window.alert('MOHON MAAF HARI JUMAT LIBUR'); window.location='daftarPembatikStaff.php?user=$user'</script>";
  }
  else {
    $result2 = $db->query("SELECT * FROM daftar_penjahit WHERE kode_penjahit = '$penjahit' AND batas = '$tanggal' AND ukuran = '$ukuran' AND kain = '$kode_kain' AND jumlah_kain = '$jumlah'");
    while ($row = $result2->fetch_object()){
      if ($tanggal_kembali >= $row->tanggal_ambil){
        $query5 = "SELECT * FROM kain_batik WHERE kode_motif = '$kode_kain'";
        $result5 = $db->query($query5);
        $tes1 = mysqli_fetch_array($result5);
        $nama_motif = $tes1['Nama_motif'];
        $query1 = $db->query("INSERT INTO pakaian (id_pakaian, model, motif, jumlah, tanggal_masuk) values ('$id', '$nama_model', '$nama_motif', $jumlah, '$tanggal_kembali')");
        if ($query1){
          $query = "UPDATE daftar_penjahit SET tanggal_kembali = '$tanggal_kembali', oleh = '$user' WHERE kode_penjahit = '$penjahit' AND batas = '$tanggal' AND ukuran = '$ukuran' AND kain = '$kode_kain' AND jumlah_kain = '$jumlah'";
          $result = $db->query($query);
          if ($result) {
            echo "<script>window.location='daftarPenjahitStaff.php?user=$user'</script>";
          }
          else{
            echo "<script>window.alert('MOHON MAAF DATA TIDAK BISA DIMASUKKAN'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
          }  
        }
        else {
         echo "<script>window.alert('MOHON MAAF ID ATAU NAMA SUDAH ADA'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF TANGGAL TIDAK BOLEH KURANG DARI TANGGAL PELAKSANAAN'); window.location='daftarPenjahitStaff.php?user=$user'</script>";
      }
    }
  }
?>
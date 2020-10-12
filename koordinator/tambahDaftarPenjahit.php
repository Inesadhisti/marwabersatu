<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $penjahit = $_POST['penjahit'];
  $model = $_POST['model'];
  $tgl = $_POST['tanggal'];
  $kain = $_POST['kain'];
  $ukuran = $_POST['ukuran'];
  $tanggal = date('Y-m-d', strtotime($tgl));
  $hari_tanggal = date('l', strtotime($tgl));
  $tanggal_ini = new DateTime($tanggal);
  $jumlah = $_POST['jumlah'];
  $jumlah_ini = (int)$jumlah;
  $awal = '';
  $total = 0;
  $result3 = $db->query("SELECT * FROM daftar_penjahit WHERE kode_penjahit = '$penjahit' AND batas = '$tanggal' AND kode_model = '$model' AND jumlah_kain = '$jumlah' AND ukuran = '$ukuran' AND kain = '$kain'");
  $cek = mysqli_num_rows($result3);
  $cek1 = (int)$cek;
  if ($cek1 >= 1){
    echo "<script>window.alert('MOHON MAAF DATA SUDAH ADA'); window.location='daftarPenjahitKoordinator.php?user=$user'</script>";
  }
  else {
    if ($hari_tanggal == 'Saturday'){
      $awal = $tanggal;
    }
    else if ($hari_tanggal == 'Friday'){
      echo "<script>window.alert('MOHON MAAF UNTUK HARI JUMAT TIDAK BISA'); window.location='daftarPenjahitKoordinator.php?user=$user'</script>";
    }
    else {
      $result2 = $db->query("SELECT * FROM daftar_penjahit WHERE kode_penjahit = '$penjahit' ORDER BY batas desc");
      while ($row = $result2->fetch_object()){
        $batas = date('Y-m-d', strtotime($row->batas));
        $hari_batas = date('l', strtotime($row->batas));
        $tanggal_batas = new DateTime($batas);
        $difference = $tanggal_batas->diff($tanggal_ini);
        if (($hari_batas == 'Thursday') && ($difference->days < 2) && ($batas <= $tanggal)){
          $awal = $batas;
        }
        else if (($hari_batas == 'Wednesday') && ($difference->days < 3) && ($batas <= $tanggal)){
          $awal = $batas;
        }
        else if (($hari_batas == 'Tuesday') && ($difference->days < 4) && ($batas <= $tanggal)){
          $awal = $batas;
        }
        else if (($hari_batas == 'Monday') && ($difference->days < 5) && ($batas <= $tanggal)){
          $awal = $batas;
        }
        else if (($hari_batas == 'Sunday') && ($difference->days < 6) && ($batas <= $tanggal)){
          $awal = $batas;
        }
        else if (($hari_batas == 'Saturday') && ($difference->days < 7) && ($batas <= $tanggal)){
          $awal = $batas;
        }
      }
      if ($awal == ''){
        $awal = $tanggal;
      }
    }
    $tanggal_awal = new DateTime($awal);
    $result2 = $db->query("SELECT * FROM daftar_penjahit WHERE kode_penjahit = '$penjahit' ORDER BY batas desc");
    while ($row = $result2->fetch_object()){
      $ini = date('Y-m-d', strtotime($row->batas));
      $tanggal_ini1 = new DateTime($ini);
      if (($ini >= $awal) && ($ini <= $tanggal)){
        $jumlah1 = $row->jumlah_kain;
        $jum = (int)$jumlah1;
        $total = $total + $jum;
      }
    }
    $total = $total + $jumlah_ini;
    $result4 = $db->query("SELECT * FROM penjahit WHERE kode_penjahit = '$penjahit'");
    $tes = mysqli_fetch_array($result4);
    $kuota = $tes['kuota'];
    if ($total <= $kuota){
      $query5 = "SELECT * FROM kain_batik_jadi WHERE kode_motif = '$kain'";
      $result5 = $db->query($query5);
      $tes1 = mysqli_fetch_array($result5);
      $sisa = $tes1['jumlah'];
      if ($jumlah <= $sisa){
        $jumlah_sisa = (int)$sisa;
        $jumlah_total = (int)$jumlah;
        $hasil = $jumlah_sisa - $jumlah_total;
        $hasil_query = $db->query("UPDATE kain_batik_jadi SET jumlah = $hasil WHERE kode_motif = '$kain'");
        $query = "INSERT INTO daftar_penjahit (jumlah_kain, kode_penjahit, batas, kode_model, kain, ukuran) values ('$jumlah','$penjahit','$tanggal','$model', '$kain', '$ukuran')";
        $result = $db->query($query);
        if ($result && $hasil_query) {
          echo "<script>window.location='daftarPenjahitKoordinator.php?user=$user'</script>";
        }
        else{
          echo "<script>window.alert('MOHON MAAF'); window.location='daftarPenjahitKoordinator.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF SISA BARANG TIDAK CUKUP SISA HANYA $sisa'); window.location='daftarPenjahitKoordinator.php?user=$user'</script>";
      }
    }
    else{
      echo "<script>window.alert('MOHON MAAF KUOTA MELEBIHI'); window.location='daftarPenjahitKoordinator.php?user=$user'</script>";
    }
  }
?>
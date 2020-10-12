<?php 
  require '../database/db_login.php';
  if(isset($_POST['tambah']));
  $user = $_GET['user'];
  $pembatik = $_POST['pembatik'];
  $motif = $_POST['motif'];
  $tgl = $_POST['tanggal'];
  $jenis_kain = $_POST['jenis_kain'];
  $tanggal = date('Y-m-d', strtotime($tgl));
  $hari_tanggal = date('l', strtotime($tgl));
  $tanggal_ini = new DateTime($tanggal);
  $jumlah = $_POST['jumlah'];
  $jumlah_ini = (int)$jumlah;
  $awal = '';
  $total = 0;
  $result3 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' AND batas = '$tanggal' AND kode_motif = '$motif' AND jumlah_kain = '$jumlah'");
  $cek = mysqli_num_rows($result3);
  $cek1 = (int)$cek;
  if ($cek1 >= 1){
    echo "<script>window.alert('MOHON MAAF DATA SUDAH ADA'); window.location='daftarPembatikKoordinator.php?user=$user'</script>";
  }
  else {
    if ($hari_tanggal == 'Saturday'){
      $awal = $tanggal;
    }
    else if ($hari_tanggal == 'Friday'){
      echo "<script>window.alert('MOHON MAAF UNTUK HARI JUMAT TIDAK BISA'); window.location='daftarPembatikKoordinator.php?user=$user'</script>";
    }
    else {
      $result2 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' ORDER BY batas desc");
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
    $result2 = $db->query("SELECT * FROM daftar_pembatik WHERE kode_pembatik = '$pembatik' ORDER BY batas desc");
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
    $result4 = $db->query("SELECT * FROM pembatik WHERE kode_pembatik = '$pembatik'");
    $tes = mysqli_fetch_array($result4);
    $kuota = $tes['kuota'];
    if ($total <= $kuota){
      $query5 = "SELECT * FROM kain_potong WHERE id = '$jenis_kain'";
      $result5 = $db->query($query5);
      $tes1 = mysqli_fetch_array($result5);
      $sisa = $tes1['jumlah'];
      if ($jumlah <= $sisa){
        $jumlah_sisa = (int)$sisa;
        $jumlah_total = (int)$jumlah;
        $hasil = $jumlah_sisa - $jumlah_total;
        $hasil_query = $db->query("UPDATE kain_potong SET jumlah = $hasil WHERE id = '$jenis_kain'");
        $query = "INSERT INTO daftar_pembatik (jumlah_kain, kode_pembatik, batas, kode_motif, jenis_kain) values ('$jumlah','$pembatik','$tanggal','$motif','$jenis_kain')";
        $result = $db->query($query);
        if ($result) {
          echo "<script>window.location='daftarPembatikKoordinator.php?user=$user'</script>";
        }
        else{
          echo "<script>window.alert('MOHON MAAF'); window.location='daftarPembatikKoordinator.php?user=$user'</script>";
        }
      }
      else {
        echo "<script>window.alert('MOHON MAAF SISA BARANG TIDAK CUKUP SISA HANYA $sisa'); window.location='daftarPembatikKoordinator.php?user=$user'</script>";
      }
    }
    else{
      echo "<script>window.alert('MOHON MAAF KUOTA MELEBIHI'); window.location='daftarPembatikKoordinator.php?user=$user'</script>";
    }
  }
?>
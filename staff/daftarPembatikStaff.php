<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
  if(isset($_POST['tglAmbil'])){
    $tglAmbil = $_POST['tglAmbil'];
    $tanggal_ambil = date('Y-m-d', strtotime($tglAmbil));
  }
  else if(isset($_POST['tglKembali'])){
    $tglKembali = $_POST['tglKembali'];
    $tanggal_kembali = date('Y-m-d', strtotime($tglKembali));
  }
  else if(isset($_POST['tglSekarang'])){
    $tglSekarang = $_POST['tglSekarang'];
    $tanggal_sekarang = date('Y-m-d', strtotime($tglSekarang));
  }
  else if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
  }
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/bootstrap-datepicker.css" rel="stylesheet" />
  
</head>

<body>
  <!-- container section start -->
  <section id="container">
    <header class="header dark-bg">
      <a href="" class="logo">Si <span class="lite">Kerja</span></a>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub">
            <a class="" href="dashboard.php?user=<?php echo $user; ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="daftarPembatikStaff.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>Daftar Pembatik</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="daftarPenjahitStaff.php?user=<?php echo $user; ?>">
                          <i class="icon_document"></i>
                          <span>Daftar Penjahit</span>
                      </a>
          </li>
          
          <li class="sub">
            <a class="" href="editProfileStaff.php?user=<?php echo $user; ?>">
                          <i class="icon_pencil-edit"></i>
                          <span>Edit Profile</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="../keluar.php?user=<?php echo $user; ?>">
                          <i class="icon_close_alt2"></i>
                          <span>Keluar</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
  </section>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_group"></i>Daftar Pembatik</h3>
          </div>
        </div>
        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPembatikStaff.php?user=<?php echo $user;?>">
                Cari Nama Pembatik :
                <input placeholder="Masukkan Nama Pembatik" type="text" class="form-control datepicker" name="nama" id="nama" >
                <button type="submit" name="submitNama" id="cari">Cari</button>
              </form>
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPembatikStaff.php?user=<?php echo $user;?>">
                Cari Tanggal Pelaksanaan :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglSekarang" id="tgl" >
                <button type="submit" name="submitSekarang" id="cari">Cari</button>
              </form>
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPembatikStaff.php?user=<?php echo $user;?>">
                Cari Tanggal Ambil :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglAmbil" id="tgl" >
                <button type="submit" name="submitAmbil" id="cari">Cari</button>
              </form>
              
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPembatikStaff.php?user=<?php echo $user;?>">
                Cari Tanggal Kembali :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglKembali" id="tgl" >
                <button type="submit" name="submitKembali" id="cari">Cari</button>
              </form>
              
            </div>
          </div>
        </div>
        
        <br/>
        <div class="col-md-16 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Daftar motif</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Motif</th>
                      <th scope="col">Jumlah Kain</th>
                      <th scope="col">Jenis Kain</th>
                      <th scope="col">Pelaksanaan</th>
                      <th scope="col">Tanggal Ambil</th>
                      <th scope="col">Tanggal Kembali</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Oleh</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if ((isset($_POST['submitNama'])) || (isset($_POST['submitSekarang'])) || (isset($_POST['submitAmbil'])) || (isset($_POST['submitKembali']))){
                        require_once ('../database/db_login.php');
                        if ((isset($_POST['submitNama']))){
                            $query = "SELECT d.oleh AS oleh, d.jenis_kain AS id, d.kode_motif AS kode_motif, d.kode_pembatik AS kode_pembatik, p.nama_pembatik AS nama, m.nama_motif AS nama_motif, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali, k.jenis_kain AS nama_kain FROM daftar_pembatik d, motif m, pembatik p, kain_potong k WHERE d.jenis_kain = k.id AND d.kode_motif = m.kode_motif AND d.kode_pembatik = p.kode_pembatik AND p.nama_pembatik = '$nama' ORDER BY d.batas desc";
                        }
                        else if (isset($_POST['submitSekarang'])){
                            $query = "SELECT d.oleh AS oleh, d.jenis_kain AS id, d.kode_motif AS kode_motif, d.kode_pembatik AS kode_pembatik, p.nama_pembatik AS nama, m.nama_motif AS nama_motif, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali, k.jenis_kain AS nama_kain FROM daftar_pembatik d, motif m, pembatik p, kain_potong k WHERE d.jenis_kain = k.id AND d.kode_motif = m.kode_motif AND d.kode_pembatik = p.kode_pembatik AND d.batas = '$tanggal_sekarang' ORDER BY d.batas desc";
                        }
                        else if (isset($_POST['submitAmbil'])){
                            $query = "SELECT d.oleh AS oleh, d.jenis_kain AS id, d.kode_motif AS kode_motif, d.kode_pembatik AS kode_pembatik, p.nama_pembatik AS nama, m.nama_motif AS nama_motif, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali, k.jenis_kain AS nama_kain FROM daftar_pembatik d, motif m, pembatik p, kain_potong k WHERE d.jenis_kain = k.id AND d.kode_motif = m.kode_motif AND d.kode_pembatik = p.kode_pembatik AND d.tanggal_ambil = '$tanggal_ambil' ORDER BY d.batas desc";
                        }
                        else if (isset($_POST['submitKembali'])){
                            $query = "SELECT d.oleh AS oleh, d.jenis_kain AS id, d.kode_motif AS kode_motif, d.kode_pembatik AS kode_pembatik, p.nama_pembatik AS nama, m.nama_motif AS nama_motif, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali, k.jenis_kain AS nama_kain FROM daftar_pembatik d, motif m, pembatik p, kain_potong k WHERE d.jenis_kain = k.id AND d.kode_motif = m.kode_motif AND d.kode_pembatik = p.kode_pembatik AND d.tanggal_kembali = '$tanggal_kembali' ORDER BY d.batas desc";
                        }
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->nama</th>";
                          echo "<td>$row->nama_motif</td>";
                          echo "<td>$row->jumlah_kain</td>";
                          echo "<td>$row->nama_kain</td>";
                          $tglBatas = $row->batas;
                          $batas = date('d-m-Y', strtotime($tglBatas));
                          echo "<td>$batas</td>";
                          if($row->tanggal_ambil == ''){
                            echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&jenis_kain=$row->id&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                          else{
                            if (isset ($row->tanggal_ambil)){
                              $ambil2 = $row->tanggal_ambil;
                              $tanggalAmbil = date('d-m-Y', strtotime($ambil2));
                              echo "<td>$tanggalAmbil</td>";
                            }
                            else {
                              echo "<td></td>";
                            }
                          }
                          if (isset($row->tanggal_ambil)){
                            if($row->tanggal_kembali == ''){
                              echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&jenis_kain=$row->id&jumlah=$row->jumlah_kain&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              if (isset ($row->tanggal_kembali)){
                                $kembali2 = $row->tanggal_kembali;
                                $tanggalKembali = date('d-m-Y', strtotime($kembali2));
                                echo "<td>$tanggalKembali</td>";
                              }
                              else {
                                echo "<td></td>";
                              }
                            }
                          }
                          else {
                              echo "<td></td>";
                          }
                          $ambil = date('d-m-Y', strtotime($row->tanggal_ambil));
                          $saat_ini = date('d-m-Y', strtotime('now'));
                          $batas = date('d-m-Y', strtotime($row->batas));
                          $tanggal_ambil = new DateTime($ambil);
                          $tanggal_batas = new DateTime($batas);
                          $tanggal_saat_ini = new DateTime($saat_ini);
                          $difference = $tanggal_ambil->diff($tanggal_saat_ini);
                          $difference2 = $tanggal_batas->diff($tanggal_saat_ini);
                          if (($tanggal_batas < $tanggal_saat_ini) && (!isset($row->tanggal_ambil)) && ($difference2->days > 0)){
                            echo "<td>Belum diambil</td>";
                          }
                          else if (($tanggal_ambil < $tanggal_saat_ini) && (!isset($row->tanggal_kembali)) && (isset($row->tanggal_ambil)) && ($difference->days > 6)){
                            echo "<td>Belum dikembalikan</td>";
                          }
                          else {
                            echo "<td></td>";
                          }
                          echo "<td>$row->oleh</td>";
                          if (isset($row->tanggal_ambil) || isset($row->tanggal_kembali)){
                            if (isset($row->tanggal_ambil) && isset($row->tanggal_kembali)){
                              echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain&jenis_kain=$row->id'><button type='button' class='btn btn-success'>Ubah Ambil</button></a><br/><br/><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglAmbil=$row->tanggal_ambil&motif=$row->kode_motif&jumlah=$row->jumlah_kain&jenis_kain=$row->id'><button type='button' class='btn btn-success'>Ubah Kembali</button></a></td>";
                            }
                            else if (isset($row->tanggal_ambil)){
                              echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain&jenis_kain=$row->id'><button type='button' class='btn btn-success'>Ubah Ambil</button></a></td>";
                            }
                          }
                          echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                    }
                      else{
                        require_once ('../database/db_login.php');
                        $halaman = 10;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $query2 = "SELECT * FROM daftar_pembatik";
                        $result2 = $db->query($query2);
                        $total = mysqli_num_rows($result2);
                        $pages = ceil($total/$halaman);     
                        $no =$mulai+1;
                        $query = "SELECT d.oleh AS oleh, d.jenis_kain AS id, d.kode_motif AS kode_motif, d.kode_pembatik AS kode_pembatik, p.nama_pembatik AS nama, m.nama_motif AS nama_motif, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali, k.jenis_kain AS nama_kain FROM daftar_pembatik d, motif m, pembatik p, kain_potong k WHERE d.jenis_kain = k.id AND d.kode_motif = m.kode_motif AND d.kode_pembatik = p.kode_pembatik ORDER BY d.batas desc LIMIT $mulai, $halaman";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          $no++;
                          echo "<tr>";
                          echo "<th scope='row'>$row->nama</th>";
                          echo "<td>$row->nama_motif</td>";
                          echo "<td>$row->jumlah_kain</td>";
                          echo "<td>$row->nama_kain</td>";
                          $tglBatas = $row->batas;
                          $batas = date('d-m-Y', strtotime($tglBatas));
                          echo "<td>$batas</td>";
                          if($row->tanggal_ambil == ''){
                            echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&jenis_kain=$row->id&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                          else{
                            if (isset ($row->tanggal_ambil)){
                              $ambil2 = $row->tanggal_ambil;
                              $tanggalAmbil = date('d-m-Y', strtotime($ambil2));
                              echo "<td>$tanggalAmbil</td>";
                            }
                            else {
                              echo "<td></td>";
                            }
                          }
                          if (isset($row->tanggal_ambil)){
                            if($row->tanggal_kembali == ''){
                              echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&jenis_kain=$row->id&jumlah=$row->jumlah_kain&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              if (isset ($row->tanggal_kembali)){
                                $kembali2 = $row->tanggal_kembali;
                                $tanggalKembali = date('d-m-Y', strtotime($kembali2));
                                echo "<td>$tanggalKembali</td>";
                              }
                              else {
                                echo "<td></td>";
                              }
                            }
                          }
                          else {
                              echo "<td></td>";
                          }
                          $ambil = date('d-m-Y', strtotime($row->tanggal_ambil));
                          $saat_ini = date('d-m-Y', strtotime('now'));
                          $batas = date('d-m-Y', strtotime($row->batas));
                          $tanggal_ambil = new DateTime($ambil);
                          $tanggal_batas = new DateTime($batas);
                          $tanggal_saat_ini = new DateTime($saat_ini);
                          $difference = $tanggal_ambil->diff($tanggal_saat_ini);
                          $difference2 = $tanggal_saat_ini->diff($tanggal_batas);
                          if (($tanggal_batas < $tanggal_saat_ini) && (!isset($row->tanggal_ambil)) && ($difference2->days > 0)){
                            echo "<td>Belum diambil</td>";
                          }
                          else if (($tanggal_ambil < $tanggal_saat_ini) && (!isset($row->tanggal_kembali)) && (isset($row->tanggal_ambil)) && ($difference->days > 6)){
                            echo "<td>Belum dikembalikan</td>";
                          }
                          else {
                            echo "<td></td>";
                          }
                          echo "<td>$row->oleh</td>";
                          if (isset($row->tanggal_ambil) || isset($row->tanggal_kembali)){
                            if (isset($row->tanggal_ambil) && isset($row->tanggal_kembali)){
                              echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain&jenis_kain=$row->id'><button type='button' class='btn btn-success'>Ubah Ambil</button></a><br/><br/><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglAmbil=$row->tanggal_ambil&motif=$row->kode_motif&jumlah=$row->jumlah_kain&jenis_kain=$row->id'><button type='button' class='btn btn-success'>Ubah Kembali</button></a></td>";
                            }
                            else if (isset($row->tanggal_ambil)){
                              echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain&jenis_kain=$row->id'><button type='button' class='btn btn-success'>Ubah Ambil</button></a></td>";
                            }
                          }
                          echo "</tr>";
                        } ?>
                        </tbody>
                        </table>
                        <div class="">
                          Pages :
                          <?php for ($i=1; $i<=$pages ; $i++){ ?>
                          <a href="?user=<?php echo $user; ?>&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                          <?php } ?>
                        </div>
                      <?php }
                    ?>
              </div>
            </div>
          </div>
        </section>
    </section>
    
    <!-- Modal -->
    <div class="modal fade" id="tulisAmbil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tanggal Ambil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="tulisAmbil.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&jenis_kain=<?php echo $_GET['jenis_kain']; ?>">
                  <div class="form-group">
                    <label>Pilih Tanggal Ambil</label>
                    <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="ambil" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="editAmbil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Tanggal Ambil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="editAmbilPembatik.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tglKembali=<?php echo $_GET['tglKembali']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&motif=<?php echo $_GET['motif']; ?>&jumlah=<?php echo $_GET['jumlah']; ?>&jenis_kain=<?php echo $_GET['jenis_kain']; ?>">
                  <div class="form-group">
                    <label>Pilih Tanggal Ambil</label>
                    <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="ambil">
                  </div>
                  <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Modal -->
    <div class="modal fade" id="editKembali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Tanggal Kembali</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="editKembaliPembatik.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tglAmbil=<?php echo $_GET['tglAmbil']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&motif=<?php echo $_GET['motif']; ?>&jumlah=<?php echo $_GET['jumlah']; ?>&jenis_kain=<?php echo $_GET['jenis_kain']; ?>">
                  <div class="form-group">
                    <label>Pilih Tanggal Kembali</label>
                    <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="kembali">
                  </div>
                  <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Modal -->
    <div class="modal fade" id="tulisKembali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tanggal Kembali</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="tulisKembali.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&jenis_kain=<?php echo $_GET['jenis_kain']; ?>&jumlah=<?php echo $_GET['jumlah']; ?>">
                  <div class="form-group">
                    <label>ID Motif (tidak boleh sama)</label>
                    <input placeholder="Masukkan ID" type="text" class="form-control" name="id" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Motif (tidak boleh sama)</label>
                    <input placeholder="Masukkan Nama Motif" type="text" class="form-control" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label>Pilih Tanggal Kembali</label>
                    <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="kembali" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </form>
            <br/>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Nama Motif</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once ('../database/db_login.php');
                $query = $db->query("SELECT * from kain_batik_jadi");
                while ($row = $query->fetch_object()){
                  echo "<tr>";
                  echo "<td>$row->kode_motif</td>";
                  echo "<td>$row->nama_motif</td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</body>
  <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['ambil']) && isset($_GET['jenis_kain'])){
            ?>
            <script type="text/javascript">
                $("#tulisAmbil").modal();
            </script>
    <?php
        }
    ?>
  <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['kembali']) && isset($_GET['jenis_kain']) && isset($_GET['jumlah'])){
            ?>
            <script type="text/javascript">
                $("#tulisKembali").modal();
            </script>
    <?php
        }
    ?>
    <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['tglKembali']) && isset($_GET['motif']) && isset($_GET['jumlah']) && isset($_GET['jenis_kain'])){
            ?>
            <script type="text/javascript">
                $("#editAmbil").modal();
            </script>
    <?php
        }
    ?>
    <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['tglAmbil']) && isset($_GET['motif']) && isset($_GET['jumlah']) && isset($_GET['jenis_kain'])){
            ?>
            <script type="text/javascript">
                $("#editKembali").modal();
            </script>
    <?php
        }
    ?>
</html>
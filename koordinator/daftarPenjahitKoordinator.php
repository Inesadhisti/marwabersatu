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
          <li class="sub">
            <a class="" href="daftarPembatikKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>Daftar Pembatik</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="daftarPenjahitKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_document"></i>
                          <span>Daftar Penjahit</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="dataPembatikKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_group"></i>
                          <span>Data Pembatik</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="dataPenjahitKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_profile"></i>
                          <span>Data Penjahit</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="editStaffKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_documents_alt"></i>
                          <span>Edit Staff</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="editProfileKoordinator.php?user=<?php echo $user; ?>">
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
            <h3 class="page-header"><i class="icon_profile"></i>Daftar Penjahit</h3>
          </div>
        </div>
        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPenjahitKoordinator.php?user=<?php echo $user;?>">
                Cari Nama Penjahit :
                <input placeholder="Masukkan Nama Penjahit" type="text" class="form-control datepicker" name="nama" id="nama" >
                <button type="submit" name="submitNama" id="cari">Cari</button>
              </form>
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPenjahitKoordinator.php?user=<?php echo $user;?>">
                Cari Tanggal Pelaksanaan :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglSekarang" id="tgl" >
                <button type="submit" name="submitSekarang" id="cari">Cari</button>
              </form>
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPenjahitKoordinator.php?user=<?php echo $user;?>">
                Cari Tanggal Ambil :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglAmbil" id="tgl" >
                <button type="submit" name="submitAmbil" id="cari">Cari</button>
              </form>
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="daftarPenjahitKoordinator.php?user=<?php echo $user;?>">
                Cari Tanggal Kembali :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglKembali" id="tgl" >
                <button type="submit" name="submitKembali" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>
        <button style="font-size: 14px; " type='button' class='btn btn-success' data-toggle="modal" data-target="#tambahModal">Tambah Data</button><br/><br/>
        <div class="col-md-16 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Daftar Penjahit</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Model</th>
                      <th scope="col">Jumlah Kain</th>
                      <th scope="col">Pelaksanaan</th>
                      <th scope="col">Tanggal Ambil</th>
                      <th scope="col">Tanggal Kembali</th>
                      <th scope="col">Kain</th>
                      <th scope="col">Ukuran</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Oleh</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if ((isset($_POST['submitNama'])) || (isset($_POST['submitSekarang'])) || (isset($_POST['submitAmbil'])) || (isset($_POST['submitKembali']))){
                        require_once ('../database/db_login.php');
                        if (isset($_POST['submitNama'])){
                            $query = "SELECT d.oleh AS oleh, d.kain AS kain, k.nama_motif AS nama_kain, d.ukuran AS ukuran, d.kode_model AS kode_model, d.kode_penjahit AS kode_penjahit, p.nama_penjahit AS nama, m.nama_model AS nama_model, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali FROM daftar_penjahit d, model m, penjahit p, kain_batik_jadi k WHERE d.kode_model = m.kode_model AND d.kode_penjahit = p.kode_penjahit AND d.kain = k.kode_motif AND p.nama_penjahit = '$nama' ORDER BY d.batas desc";
                        }
                        else if (isset($_POST['submitSekarang'])){
                            $query = "SELECT d.oleh AS oleh, d.kain AS kain, k.nama_motif AS nama_kain, d.ukuran AS ukuran, d.kode_model AS kode_model, d.kode_penjahit AS kode_penjahit, p.nama_penjahit AS nama, m.nama_model AS nama_model, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali FROM daftar_penjahit d, model m, penjahit p, kain_batik_jadi k WHERE d.kode_model = m.kode_model AND d.kode_penjahit = p.kode_penjahit AND d.kain = k.kode_motif AND d.batas = '$tanggal_sekarang' ORDER BY d.batas desc";
                        }
                        else if (isset($_POST['submitAmbil'])){
                            $query = "SELECT d.oleh AS oleh, d.kain AS kain, k.nama_motif AS nama_kain, d.ukuran AS ukuran, d.kode_model AS kode_model, d.kode_penjahit AS kode_penjahit, p.nama_penjahit AS nama, m.nama_model AS nama_model, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali FROM daftar_penjahit d, model m, penjahit p, kain_batik_jadi k WHERE d.kode_model = m.kode_model AND d.kode_penjahit = p.kode_penjahit AND d.kain = k.kode_motif AND d.tanggal_ambil = '$tanggal_ambil' ORDER BY d.batas desc";
                        }
                        else if (isset($_POST['submitKembali'])){
                            $query = "SELECT d.oleh AS oleh, d.kain AS kain, k.nama_motif AS nama_kain, d.ukuran AS ukuran, d.kode_model AS kode_model, d.kode_penjahit AS kode_penjahit, p.nama_penjahit AS nama, m.nama_model AS nama_model, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali FROM daftar_penjahit d, model m, penjahit p, kain_batik_jadi k WHERE d.kode_model = m.kode_model AND d.kode_penjahit = p.kode_penjahit AND d.kain = k.kode_motif AND d.tanggal_kembali = '$tanggal_kembali' ORDER BY d.batas desc";
                        }
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->nama</th>";
                          echo "<td>$row->nama_model</td>";
                          echo "<td>$row->jumlah_kain</td>";
                          $tglBatas = $row->batas;
                          $batas = date('d-m-Y', strtotime($tglBatas));
                          echo "<td>$batas</td>";
                          if (isset ($row->tanggal_ambil)){
                            $ambil2 = $row->tanggal_ambil;
                            $tanggalAmbil = date('d-m-Y', strtotime($ambil2));
                            echo "<td>$tanggalAmbil</td>";
                          }
                          else {
                            echo "<td></td>";
                          }
                          if (isset ($row->tanggal_kembali)){
                            $kembali2 = $row->tanggal_kembali;
                            $tanggalKembali = date('d-m-Y', strtotime($kembali2));
                            echo "<td>$tanggalKembali</td>";
                          }
                          else {
                            echo "<td></td>";
                          }
                          echo "<td>$row->nama_kain</td>";
                          echo "<td>$row->ukuran</td>";
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
                          echo "<td><a href='hapusDaftarPenjahit.php?user=$user&penjahit=$row->kode_penjahit&tanggal=$row->batas&model=$row->kode_model&jumlah=$row->jumlah_kain&kain=$row->kain&ukuran=$row->ukuran' onclick= 'return confirm()'><button style='font-size: 12px; ' type='button' class='btn btn-danger' data-toggle='modal' data-target='#hapusModal'>Hapus</button></a></td>";
                          echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                      }
                      else {
                        require_once ('../database/db_login.php');
                        $halaman = 10;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $query2 = "SELECT * FROM daftar_penjahit";
                        $result2 = $db->query($query2);
                        $total = mysqli_num_rows($result2);
                        $pages = ceil($total/$halaman);     
                        $no =$mulai+1; 
                        $query = "SELECT d.oleh AS oleh, d.kain AS kain, k.nama_motif AS nama_kain, d.ukuran AS ukuran, d.kode_model AS kode_model, d.kode_penjahit AS kode_penjahit, p.nama_penjahit AS nama, m.nama_model AS nama_model, d.jumlah_kain AS jumlah_kain, d.batas AS batas, d.tanggal_ambil AS tanggal_ambil, d.tanggal_kembali AS tanggal_kembali FROM daftar_penjahit d, model m, penjahit p, kain_batik_jadi k WHERE d.kode_model = m.kode_model AND d.kode_penjahit = p.kode_penjahit AND d.kain = k.kode_motif order by d.batas desc LIMIT $mulai, $halaman";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          $no++; 
                          echo "<tr>";
                          echo "<th scope='row'>$row->nama</th>";
                          echo "<td>$row->nama_model</td>";
                          echo "<td>$row->jumlah_kain</td>";
                          $tglBatas = $row->batas;
                          $batas = date('d-m-Y', strtotime($tglBatas));
                          echo "<td>$batas</td>";
                          if (isset ($row->tanggal_ambil)){
                            $ambil2 = $row->tanggal_ambil;
                            $tanggalAmbil = date('d-m-Y', strtotime($ambil2));
                            echo "<td>$tanggalAmbil</td>";
                          }
                          else {
                            echo "<td></td>";
                          }
                          if (isset ($row->tanggal_kembali)){
                            $kembali2 = $row->tanggal_kembali;
                            $tanggalKembali = date('d-m-Y', strtotime($kembali2));
                            echo "<td>$tanggalKembali</td>";
                          }
                          else {
                            echo "<td></td>";
                          }
                          echo "<td>$row->nama_kain</td>";
                          echo "<td>$row->ukuran</td>";
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
                          echo "<td><a href='hapusDaftarPenjahit.php?user=$user&penjahit=$row->kode_penjahit&tanggal=$row->batas&model=$row->kode_model&jumlah=$row->jumlah_kain&kain=$row->kain&ukuran=$row->ukuran' onclick= 'return confirm()'><button style='font-size: 12px; ' type='button' class='btn btn-danger'>Hapus</button></a></td>";
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
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Penjahit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="tambahDaftarPenjahit.php?user=<?php echo $user; ?>">
                  <div class="form-group">
                    <label>Pilih Penjahit</label>
                    <select name="penjahit" class="form-control" required>
						<option value="">Pilih Penjahit</option>
                        <?php
                          require_once ('../database/db_login.php');
                          $query = "SELECT * FROM penjahit";
                          $result = $db->query($query);
                          while ($row = $result->fetch_object()){
                            echo "<option value='$row->kode_penjahit'>$row->nama_penjahit</option>";
                          }
                        ?>
					</select>
                  </div>
                  <div class="form-group">
                    <label>Pilih Model</label>
                    <select name="model" class="form-control" required>
						<option value="">Pilih Model</option>
                        <?php
                          require_once ('../database/db_login.php');
                          $query = "SELECT * FROM model";
                          $result = $db->query($query);
                          while ($row = $result->fetch_object()){
                            echo "<option value='$row->kode_model'>$row->nama_model</option>";
                          }
                        ?>
					</select>
                  </div>
                  <div class="form-group">
                    <label>Pilih Jenis Kain</label>
                    <select name="kain" class="form-control" required>
						<option value="">Pilih Jenis Kain</option>
                        <?php
                          require_once ('../database/db_login.php');
                          $query = "SELECT * FROM kain_batik_jadi k, kain_potong p WHERE k.jenis_kain = p.id";
                          $result = $db->query($query);
                          while ($row = $result->fetch_object()){
                            echo "<option value='$row->kode_motif'>$row->nama_motif (Jenis kain : $row->jenis_kain, ukuran : $row->ukuran)</option>";
                          }
                        ?>
					</select>
                  </div>
                  <div class="form-group">
                    <label>Pilih Ukuran</label>
                    <select name="ukuran" class="form-control" required>
						<option value="">Pilih Ukuran Pakaian</option>
                          <option value='S'>S</option>
                          <option value='M'>M</option>
                          <option value='L'>L</option>
                          <option value='XL'>XL</option>
                          <option value='XXL'>XXL</option>
                          <option value='XXXL'>XXXL</option>
					</select>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Kain</label>
                    <input placeholder="Masukkan Jumlah Kain" type="number" class="form-control" name="jumlah" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Pelaksanaan</label>
                    <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tanggal" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
                </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
  if(isset($_POST['penjahit'])){
    $penjahit = $_POST['penjahit'];
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
          <li class="sub">
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
          <li class="active">
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
            <h3 class="page-header"><i class="icon_profile"></i>Data penjahit</h3>
          </div>
        </div>
        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="dataPenjahitKoordinator.php?user=<?php echo $user?>">
                Cari Nama Penjahit :
                <input placeholder="Masukkan Nama Penjahit" type="text" class="form-control" name="penjahit">
                <button type="submit" name="submit" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>
        <button style="font-size: 14px; " type='button' class='btn btn-success' data-toggle="modal" data-target="#tambahModal">Tambah Penjahit</button><br/><br/>
        <div class="col-md-16 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Data Penjahit</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Kode Penjahit</th>
                      <th scope="col">Nama Penjahit</th>
                      <th scope="col">Kuota</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (isset($penjahit)){
                        require_once ('../database/db_login.php');
                        $query = "SELECT * FROM penjahit WHERE nama_penjahit = '$penjahit'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_penjahit</th>";
                          echo "<td>$row->nama_penjahit</td>";
                          echo "<td>$row->kuota</td>";
                          echo "<td><a href='dataPenjahitKoordinator.php?user=$user&kode_penjahit=$row->kode_penjahit'><button style='font-size: 12px; ' type='button' class='btn btn-primary' data-toggle='modal' data-target='#edit'>Ubah Kuota</button></a> <a href='hapusPenjahit.php?user=$user&kode_penjahit=$row->kode_penjahit' onclick= 'return confirm()'><button style='font-size: 12px; ' type='button' class='btn btn-danger' data-toggle='modal' data-target='#hapusModal'>Hapus</button></a></td>";
                          echo "</tr>";
                        }
                      }
                      else {
                        require_once ('../database/db_login.php');
                        $query = "SELECT * FROM penjahit";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_penjahit</th>";
                          echo "<td>$row->nama_penjahit</td>";
                          echo "<td>$row->kuota</td>";
                          echo "<td><a href='dataPenjahitKoordinator.php?user=$user&kode_penjahit=$row->kode_penjahit'><button style='font-size: 12px; ' type='button' class='btn btn-primary' data-toggle='modal' data-target='#edit'>Ubah Kuota</button></a> <a href='hapusPenjahit.php?user=$user&kode_penjahit=$row->kode_penjahit' onclick= 'return confirm()'><button style='font-size: 12px; ' type='button' class='btn btn-danger' data-toggle='modal' data-target='#hapusModal'>Hapus</button></a></td>"; 
                          echo "</tr>";
                        }
                      }
                    ?>
                  </tbody>
                </table>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Penjahit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="form" method="post" action="tambahPenjahit.php?user=<?php echo $user; ?>">
                    <div class="form-group">
                      <label>Kode Penjahit</label>
                      <input type="number" class="form-control" placeholder="Kode Penjahit" name="kode_penjahit" minlength="1" maxlength="4" required autofocus>
                    </div>
                    <div class="form-group">
                      <label>Nama Penjahit</label>
                      <input type="text" class="form-control" placeholder="Nama Penjahit" name="nama_penjahit" pattern="[a-zA-Z ]+" maxlength="20" required autofocus>
                    </div>
                    <div class="form-group">
                      <label>Kuota</label>
                      <input type="number" class="form-control" placeholder="Kuota" name="kuota" minlength="1" maxlength="4" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Kuota</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="editPenjahit.php?user=<?php echo $user; ?>&kode_penjahit=<?php echo $_GET['kode_penjahit']; ?>">
              <div class="form-group">
                <?php
                $kode_penjahit = $_GET['kode_penjahit'];
                require_once ('../database/db_login.php');
                $query2 = "SELECT * FROM penjahit WHERE kode_penjahit='$kode_penjahit'";
                $result2 = $db->query($query2);
                while ($row = $result2->fetch_object()){
                      echo "<label>Ubah Kuota Penjahit : $row->nama_penjahit</label>";
                    }
                    ?>
                    <input type="number" class="form-control" placeholder="Kuota" name="kuota" minlength="1" maxlength="4" required autofocus>
              </div>
              <button type="submit" class="btn btn-primary" value="ubah">Ubah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
    <?php
        if(isset($_GET['user']) && isset($_GET['kode_penjahit'])){
            ?>
            <script type="text/javascript">
                $("#edit").modal();
            </script>
    <?php
        }
    ?>
</html>
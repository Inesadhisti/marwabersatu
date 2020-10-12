<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
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
            <a class="" href="kainputih.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>Data Kain Putih</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="kainbatik.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>Data Kain Batik</span>
                      </a>
          </li>
          
         
          <li class="sub">  
            <a class="" href="Pakaian.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>Data Pakaian jadi</span>
                      </a>
          </li>


            <li class="active">
            <a class="" href="motifModelKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_tags"></i>
                          <span>Motif dan Model</span>
                      </a>
          </li>

            <li class="sub">
            <a class="" href="editStaffKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_pencil-edit"></i>
                          <span>Edit Staff</span>
                      </a>
          </li>

            <li class="sub">
            <a class="" href="editProfileKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_pencil_alt"></i>
                          <span>Edit Profile</span>
                      </a>
          </li>


          <li class="sub">
            <a class="" href="../keluar.php?user=<?php echo $user; ?>">
                          <i class="icon_close_alt2"></i>
                          <span>keluar</span>
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
            <h3 class="page-header"><i class="icon_genius"></i>Motif dan Model</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 portlets">
            <button style="font-size: 14px; " type='button' class='btn btn-success' data-toggle="modal" data-target="#tambahMotif">Tambah Motif</button><br/><br/>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Motif</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Kode Motif</th>
                      <th scope="col">Nama Motif</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      require_once ('../database/db_login.php');
                      $query = "SELECT * FROM motif";
                      $result = $db->query($query);
                      while ($row = $result->fetch_object()){
                        echo "<tr>";
                        echo "<th scope='row'>$row->kode_motif</th>";
                        echo "<td>$row->nama_motif</td>";
                        echo "<td><a href='hapusMotif.php?user=$user&kode_motif=$row->kode_motif'><button style='font-size: 12px; ' type='button' class='btn btn-danger'>Hapus</button></a></td>";
                        echo "</tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6 portlets">
            <button style="font-size: 14px; " type='button' class='btn btn-success' data-toggle="modal" data-target="#tambahModel">Tambah Model</button><br/><br/>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Model</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Kode Model</th>
                      <th scope="col">Nama Model</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      require_once ('../database/db_login.php');
                      $query = "SELECT * FROM model";
                      $result = $db->query($query);
                      while ($row = $result->fetch_object()){
                        echo "<tr>";
                        echo "<th scope='row'>$row->kode_model</th>";
                        echo "<td>$row->nama_model</td>";
                        echo "<td><a href='hapusModel.php?user=$user&kode_model=$row->kode_model'><button style='font-size: 12px; ' type='button' class='btn btn-danger'>Hapus</button></a></td>";
                        echo "</tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  
    <!-- Modal -->
    <div class="modal fade" id="tambahMotif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Motif</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="tambahMotif.php?user=<?php echo $user; ?>">
                  <div class="form-group">
                    <label>Kode Motif</label>
                    <input type="number" class="form-control" placeholder="Kode Motif" name="kode_motif" minlength="1" maxlength="4" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nama Motif</label>
                    <input type="text" class="form-control" placeholder="Nama Motif" name="nama_motif" pattern="[a-zA-Z ]+" maxlength="20" required autofocus>
                  </div>
                  <button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
                </form>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Modal -->
    <div class="modal fade" id="tambahModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Model</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="tambahModel.php?user=<?php echo $user; ?>">
                  <div class="form-group">
                    <label>Kode Model</label>
                    <input type="number" class="form-control" placeholder="Kode Model" name="kode_model" minlength="1" maxlength="4" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Nama Model</label>
                    <input type="text" class="form-control" placeholder="Nama Model" name="nama_model" pattern="[a-zA-Z ]+" maxlength="20" required autofocus>
                  </div>
                  <button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
                </form>
          </div>
        </div>
      </div>
    </div>

</body>

</html>
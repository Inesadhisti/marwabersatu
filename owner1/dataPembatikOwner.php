<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
  if(isset($_POST['pembatik'])){
    $pembatik = $_POST['pembatik'];
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
            <a class="" href="daftarPembatikOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>Daftar Pembatik</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="daftarPenjahitOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_document"></i>
                          <span>Daftar Penjahit</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="dataPembatikOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_group"></i>
                          <span>Data Pembatik</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="dataPenjahitOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_profile"></i>
                          <span>Data Penjahit</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="motifModelOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_genius"></i>
                          <span>Motif dan Model</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="editKoordinatorOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_documents_alt"></i>
                          <span>Edit Koordinator</span>
                      </a>
          </li>
          <li class="sub">
            <a class="" href="editProfileOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_pencil-edit"></i>
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
            <h3 class="page-header"><i class="icon_group"></i>Data Pembatik</h3>
          </div>
        </div>
        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="dataPembatikOwner.php?user=<?php echo $user?>">
                Cari Nama Pembatik :
                <input placeholder="Masukkan Nama Pembatik" type="text" class="form-control" name="pembatik">
                <button type="submit" name="submit" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>
        <br/>
        <div class="col-md-16 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Data Pembatik</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Kode Pembatik</th>
                      <th scope="col">Nama Pembatik</th>
                      <th scope="col">Kuota</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (isset($pembatik)){
                        require_once ('../database/db_login.php');
                        $query = "SELECT * FROM pembatik WHERE nama_pembatik='$pembatik'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_pembatik</th>";
                          echo "<td>$row->nama_pembatik</td>";
                          echo "<td>$row->kuota</td>";
                          echo "</tr>";
                        }
                      }
                      else {
                        require_once ('../database/db_login.php');
                        $query = "SELECT * FROM pembatik";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_pembatik</th>";
                          echo "<td>$row->nama_pembatik</td>";
                          echo "<td>$row->kuota</td>";
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

</body>

</html>
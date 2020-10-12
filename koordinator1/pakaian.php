<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
  if(isset($_POST['tglkeluar'])){ //ambil=keluar
    $tglAmbil = $_POST['tglkeluar'];
    $Tanggal_keluar = date('d-m-Y', strtotime($tglAmbil));
  }
  else if(isset($_POST['tglmasuk'])){ // kembali = masuk
    $tanggal_masuk = $_POST['tglmasuk'];
    $Tanggal_masuk = date('d-m-Y', strtotime($tanggal_masuk));
  }

  elseif (isset($_POST ['motif'])) {
    $motif = $_POST ['motif'];
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
          
          <li class="active">
            <a class="" href="Pakaian.php?user=<?php echo $user; ?>">
                          <i class="icon_document"></i>
                          <span>Data Pakaian jadi</span>
                      </a>
          </li>
          
            <li class="sub">
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
         <h3> <div class="col-lg-12">Daftar Pakaian</h3>
          </div>
        </div>

          <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="pakaian.php?user=<?php echo $user?>">
                Cari Nama motif :
                <input placeholder="Masukkan pakaian yang di cari" type="text" class="form-control" name="motif">
                <button type="submit" name="submit" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>



        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="pakaian.php?user=<?php echo $user;?>">
                Cari Tanggal keluar :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglkeluar" id="tgl" >
                <button type="submit" name="submitkeluar" id="cari">Cari</button>
              </form>
              
            </div>
          </div>
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="pakaian.php?user=<?php echo $user;?>">
                Cari Tanggal masuk:
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglmasuk" id="tgl" >
                <button type="submit" name="submitmasuk">Cari</button>
              </form>
              
            </div>
          </div>
        </div>
        
        <br/>
        <div class="col-md-16 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Daftar Pakaian</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Id Pakaian</th>
                      <th scope="col">Motif</th>
                      <th scope="col">Model </th>
                      <th scope="col">Jumlah </th>
                      <th scope="col">Tanggal masuk</th>
                      <th scope="col">Tanggal keluar</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (isset($_POST['submit'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT p.id_pakaian as id_pakaian,p.model as model,p.motif as motif,p.jumlah as jumlah,p.tanggal_masuk as tanggal_masuk,p.tanggal_keluar as tanggal_keluar FROM pakaian p where p.motif = '$motif'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id_pakaian</th>";
                          echo "<td>$row->model</td>";
                          echo "<td>$row->motif</td>";
                          echo "<td>$row->jumlah</td>";


                          if($row->tanggal_masuk == ''){
                            echo "<td><a href='pakaian.php?user=$user&pembatik=$row->id_pakaian&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                          else{
                            echo "<td>$row->tanggal_masuk</td>";
                          }
                          if (isset($row->tanggal_masuk)){
                            if($row->tanggal_masuk == ''){
                              echo "<td><a href='pakaian.php?user=$user&pembatik=$row->id_pakaian&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->tanggal_masuk</td>";
                            }
                          }
                          
                            echo "<td></td>";
                          
                         
                           
                            echo "<td></td>";
                          
                          
                          echo "</tr>";
                        }
                      }

                      else if (isset($_POST['submitkeluar'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT p.id_pakaian as id_pakaian,p.model as model,p.motif as motif,p.jumlah as jumlah,p.tanggal_masuk as tanggal_masuk,p.tanggal_keluar as tanggal_keluar FROM pakaian p where p.Tanggal_keluar = '$Tanggal_keluar'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id_pakaian</th>";
                          echo "<td>$row->model</td>";
                          echo "<td>$row->motif</td>";
                          echo "<td>$row->jumlah</td>";

                          if($row->tanggal_masuk == ''){
                            echo "<td><a href='pakaian.php?user=$user&pembatik=$row->id_pakaian&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                          else{
                            echo "<td>$row->tanggal_masuk</td>";
                          }
                          if (isset($row->tanggal_masuk)){
                            if($row->tanggal_masuk == ''){
                              echo "<td><a href='pakaian.php?user=$user&pembatik=$row->id_pakaian&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->tanggal_keluar</td>";
                            }
                          }
                          
                            echo "<td></td>";
                          
                         
                           
                            echo "<td></td>";
                          
                             echo "</tr>";
                        }
                      }

                      else if (isset($_POST['submitmasuk'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT p.id_pakaian as id_pakaian,p.model as model,p.motif as motif,p.jumlah as jumlah,p.tanggal_masuk as tanggal_masuk,p.tanggal_keluar as tanggal_keluar FROM pakaian p where p.tanggal_masuk = '$Tanggal_masuk'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id_pakaian</th>";
                          echo "<td>$row->model</td>";
                          echo "<td>$row->motif</td>";
                          echo "<td>$row->jumlah</td>";

                             if($row->tanggal_keluar == ''){
                            echo "<td><a href='pakaian.php?user=$user&pembatik=$row->id_pakaian&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";

                          }
                          else{
                            echo "<td>$row->tanggal_keluar</td>";
                          }
                          if (isset($row->tanggal_keluar)){
                            if($row->tanggal_masuk == ''){
                              echo "<td><a href='pakaian.php?user=$user&pembatik=$row->id_pakaian&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->tanggal_masuk</td>";
                            }
                          }
                          else {
                            echo "<td></td>";
                            echo "<td></td>";
                          }
                          
                          echo "</tr>";
                        }
                      }
                      else{
                        require_once ('../database/db_login.php');
                        $query = "SELECT p.id_pakaian as id_pakaian,p.model as model,p.motif as motif,p.jumlah as jumlah,p.tanggal_masuk as tanggal_masuk,p.tanggal_keluar as tanggal_keluar FROM pakaian p";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id_pakaian</th>";
                          echo "<td>$row->model</td>";
                          echo "<td>$row->motif</td>";
                          echo "<td>$row->jumlah</td>";

                    
                            echo "<td>$row->tanggal_masuk</td>";
                          
                 
                              echo "<td>$row->tanggal_keluar</td>";
                        
                   
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
            <form id="form" method="post" action="tulisAmbil.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>">
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
            <form id="form" method="post" action="editAmbilPembatik.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tglKembali=<?php echo $_GET['tglKembali']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&motif=<?php echo $_GET['motif']; ?>&jumlah=<?php echo $_GET['jumlah']; ?>">
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
            <form id="form" method="post" action="editKembaliPembatik.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tglAmbil=<?php echo $_GET['tglAmbil']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>&motif=<?php echo $_GET['motif']; ?>&jumlah=<?php echo $_GET['jumlah']; ?>">
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
            <form id="form" method="post" action="tulisKembali.php?user=<?php echo $user; ?>&pembatik=<?php echo $_GET['pembatik']; ?>&tanggal=<?php echo $_GET['tanggal']; ?>">
                  <div class="form-group">
                    <label>Pilih Tanggal Kembali</label>
                    <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="kembali" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </form>
          </div>
        </div>
      </div>
    </div>
</body>
  <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['ambil'])){
            ?>
            <script type="text/javascript">
                $("#tulisAmbil").modal();
            </script>
    <?php
        }
    ?>
  <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['kembali'])){
            ?>
            <script type="text/javascript">
                $("#tulisKembali").modal();
            </script>
    <?php
        }
    ?>
    <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['tglKembali']) && isset($_GET['motif']) && isset($_GET['jumlah'])){
            ?>
            <script type="text/javascript">
                $("#editAmbil").modal();
            </script>
    <?php
        }
    ?>
    <?php
        if(isset($_GET['pembatik']) && isset($_GET['tanggal']) && isset($_GET['tglAmbil']) && isset($_GET['motif']) && isset($_GET['jumlah'])){
            ?>
            <script type="text/javascript">
                $("#editKembali").modal();
            </script>
    <?php
        }
    ?>
</html>
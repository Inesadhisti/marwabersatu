<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
  if(isset($_POST['tglAmbil'])){
    $tglAmbil = $_POST['tglAmbil'];
    $Tanggal_keluar = date('d-m-Y', strtotime($tglAmbil));
  }
  else if(isset($_POST['tglKembali'])){
    $tglKembali = $_POST['tglKembali'];
    $tanggal_masuk = date('d-m-Y', strtotime($tglKembali));
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
                          <span>Kain Putih</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="kainbatik.php?user=<?php echo $user; ?>">
                          <i class="icon_document"></i>
                          <span>Kain Batik</span>
                      </a>
          </li>
          
           <li class="sub">
            <a class="" href="pakaian.php?user=<?php echo $user; ?>">
                          <i class="icon_document_alt"></i>
                          <span>pakaian</span>
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
        </div>
         <h3> <div class="col-lg-12">Daftar Kain Batik</h3>
          </div>
        </div>

         <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainbatik.php?user=<?php echo $user?>">
                Cari Nama Kain Batik :
                <input placeholder="Masukkan kain batik yang di cari" type="text" class="form-control" name="motif">
                <button type="submit" name="submit" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>


        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainbatik.php?user=<?php echo $user;?>">
                Cari Tanggal Masuk :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglKembali" id="tgl" >
                <button type="submit" name="submitmasuk" id="cari">Cari</button>
              </form>
              
            </div>
          </div>

          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainbatik.php?user=<?php echo $user;?>">
                Cari Tanggal keluar :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="tglAmbil" id="tgl" >
                <button type="submit" name="submitkeluar" id="cari">Cari</button>
              </form>
              
            </div>
          </div>
          
        </div>
        
      <br/>
        <div class="col-md-16 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Daftar kain Batik</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Kode Motif</th>
                      <th scope="col">Nama Motif</th>
                      <th scope="col">jumlah</th>
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">Tanggal Keluar</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if (isset($_POST['submit'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT d.kode_motif AS kode_motif, d.Nama_motif AS Nama_motif, d.Jumlah AS jumlah,  d.Tanggal_masuk AS Tanggal_masuk, d.Tanggal_keluar AS Tanggal_keluar FROM kain_batik d WHERE d.Nama_motif= '$motif' ";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_motif</th>";
                          echo "<td>$row->Nama_motif</td>";
                          echo "<td>$row->jumlah</td>";

                            if($row->Tanggal_masuk == ''){
                            echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                            
                          else{
                            echo "<td>$row->Tanggal_masuk</td>";
                          }
                          if (isset($row->Tanggal_masuk)){
                            if($row->Tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->Tanggal_keluar</td>";
                            }
                          }
                          
                            echo "<td></td>";
                            echo "<td></td>";



                          
                          if (isset($row->tanggal_ambil) || isset($row->tanggal_kembali)){
                            if (isset($row->tanggal_ambil) && isset($row->tanggal_kembali)){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a><br/><br/><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglAmbil=$row->tanggal_ambil&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Kembali</button></a></td>";
                            }
                            else if (isset($row->tanggal_ambil)){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a></td>";
                            }
                          }
                          echo "</tr>";
                        }
                      }                     
                      else if (isset($_POST['submitmasuk'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT d.kode_motif AS kode_motif, d.Nama_motif AS Nama_motif, d.Jumlah AS jumlah,  d.Tanggal_masuk AS Tanggal_masuk, d.Tanggal_keluar AS Tanggal_keluar FROM kain_batik d WHERE d.Tanggal_masuk = '$tanggal_masuk' ";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_motif</th>";
                          echo "<td>$row->Nama_motif</td>";
                          echo "<td>$row->jumlah</td>";

                            if($row->Tanggal_masuk == ''){
                            echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                            
                          else{
                            echo "<td>$row->Tanggal_masuk</td>";
                          }
                          if (isset($row->Tanggal_masuk)){
                            if($row->Tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->Tanggal_keluar</td>";
                            }
                          }
                          
                            echo "<td></td>";
                          
                         
                           
                            echo "<td></td>";
                          
                          if (isset($row->tanggal_ambil) || isset($row->tanggal_kembali)){
                            if (isset($row->tanggal_ambil) && isset($row->tanggal_kembali)){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a><br/><br/><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglAmbil=$row->tanggal_ambil&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Kembali</button></a></td>";
                            }
                            else if (isset($row->tanggal_ambil)){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a></td>";
                            }
                          }
                          echo "</tr>";
                        }
                      }

                      else if (isset($_POST['submitkeluar'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT d.kode_motif AS kode_motif, d.Nama_motif AS Nama_motif, d.Jumlah AS jumlah,  d.Tanggal_masuk AS Tanggal_masuk, d.Tanggal_keluar AS Tanggal_keluar FROM kain_batik d WHERE d.Tanggal_keluar = '$Tanggal_keluar' ";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_motif</th>";
                          echo "<td>$row->Nama_motif</td>";
                          echo "<td>$row->jumlah</td>";

                            if($row->Tanggal_masuk == ''){
                            echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          }
                            
                          else{
                            echo "<td>$row->Tanggal_masuk</td>";
                          }
                          if (isset($row->Tanggal_masuk)){
                            if($row->Tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->Tanggal_keluar</td>";
                            }
                          }
                          
                            echo "<td></td>";
                          
                         
                           
                            echo "<td></td>";
                          
                          if (isset($row->tanggal_ambil) || isset($row->tanggal_kembali)){
                            if (isset($row->tanggal_ambil) && isset($row->tanggal_kembali)){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a><br/><br/><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglAmbil=$row->tanggal_ambil&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Kembali</button></a></td>";
                            }
                            else if (isset($row->tanggal_ambil)){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a></td>";
                            }
                          }
                          echo "</tr>";
                        }
                      }

                      else{
                        require_once ('../database/db_login.php');
                        $query = "SELECT d.kode_motif AS kode_motif, d.Nama_motif AS Nama_motif, d.Jumlah AS jumlah,  d.Tanggal_masuk AS Tanggal_masuk, d.Tanggal_keluar AS Tanggal_keluar FROM kain_batik d";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->kode_motif</th>";
                          echo "<td>$row->Nama_motif</td>";
                          echo "<td>$row->jumlah</td>";
                          echo "<td>$row->Tanggal_masuk</td>";
                          echo "<td>$row->Tanggal_keluar</td>";
                          // if($row->tanggal_ambil == ''){
                          //   echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";
                          // }
                          // else{
                          //   echo "<td>$row->tanggal_ambil</td>";
                          // }
                          // if (isset($row->tanggal_ambil)){
                          //   if($row->tanggal_kembali == ''){
                          //     echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                          //   }
                          //   else{
                          //     echo "<td>$row->tanggal_kembali</td>";
                          //   }
                          // }
                          // else {
                          //   echo "<td></td>";
                          // }
                          //   echo "<td></td>";
                          // if (isset($row->tanggal_ambil) || isset($row->tanggal_kembali)){
                          //   if (isset($row->tanggal_ambil) && isset($row->tanggal_kembali)){
                          //     echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a><br/><br/><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglAmbil=$row->tanggal_ambil&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Kembali</button></a></td>";
                          //   }
                          //   else if (isset($row->tanggal_ambil)){
                          //     echo "<td><a href='daftarPembatikStaff.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&tglKembali=$row->tanggal_kembali&motif=$row->kode_motif&jumlah=$row->jumlah_kain'><button type='button' class='btn btn-success'>Ubah Ambil</button></a></td>";
                          //   }
                          // }
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

        <!-- buaut nambah -->

</html>
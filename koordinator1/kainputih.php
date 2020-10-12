<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  $user=$_SESSION['user'];
  
  if(isset($_POST['Tanggal_keluar'])){
    $TanggalK = $_POST['Tanggal_keluar'];
    $tanggalK = date('Y-m-d', strtotime($TanggalK));
  }
  else if(isset($_POST['Tanggal_masuk'])){
    $TanggalM = $_POST['Tanggal_masuk'];
    $tanggalM = date('Y-m-d', strtotime($TanggalM));
  }

  else if(isset($_POST ['jenis'])) {
    $jenis = $_POST ['jenis'];
  }
  else if(isset($_POST ['jenisP'])) {
    $jenisP = $_POST ['jenisP'];
  }

  else if(isset($_POST['Tanggal_keluar'])){
    $TanggalK = $_POST['Tanggal_keluar'];
    $tanggalK = date('Y-m-d', strtotime($TanggalK));
  }

  else if(isset($_POST['Tanggal_masuk'])){
    $TanggalM = $_POST['Tanggal_masuk'];
    $tanggalM = date('Y-m-d', strtotime($TanggalM));
  }
  
  else if(isset($_POST ['jenis'])) {
    $jenis = $_POST ['jenis1'];
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
            <a class="" href="kainputih.php?user=<?php echo $user; ?>">
                          <i class="icon_document"></i>
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
         <h3> <div class="col-lg-12">Daftar Kain Putih</div></h3>
          </div>
          


        
        <br/>
<!-- kiri -->
         <div class="row">

        <div class="col-md-6 portlets">
          <div>
          <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainputih.php?user=<?php echo $user?>">
                Cari Nama Jenis Kain :
                <input placeholder="Masukkan jenis yang ingin di cari" type="text" class="form-control" name="jenis">
                <button type="submit" name="submit" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>

        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainputih.php?user=<?php echo $user;?>">
                Cari Tanggal Masuk :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="Tanggal_masuk" id="tgl" >
                <button type="submit" name="submitmasuk" id="cari">Cari</button>
              </form>
              
            </div>
        </div>
        
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainputih.php?user=<?php echo $user;?>">
                Cari Tanggal keluar :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="Tanggal_keluar" id="tgl" >
                <button type="submit" name="submitkeluar" id="cari">Cari</button>
              </form>
              
            </div>
          </div>         
        </div>
      </div>
            <br>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Daftar kain Putih Sebelum di Potong</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">jenis</th>
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
                        $query = "SELECT kp.id, kp.jenis, kkp.jumlah,kp.Tanggal_masuk,kp.Tanggal_keluar FROM kain_putih kp where kp.jenis = '$jenis'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis</td>";
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
                        $query = "SELECT kp.id, kp.jenis, kp.jumlah,kp.Tanggal_masuk,kp.Tanggal_keluar FROM kain_putih kp where kp.Tanggal_keluar = '$tanggalK'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis</td>";
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
                      else if (isset($_POST ['submitmasuk'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT kp.id, kp.jenis, kp.jumlah,kp.Tanggal_masuk,kp.Tanggal_keluar FROM kain_putih kp where kp.Tanggal_masuk = '$tanggalM'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis</td>";
                          echo "<td>$row->jumlah</td>";
                          if($row->Tanggal_keluar == ''){
                            echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";

                          }
                          else{
                            echo "<td>$row->Tanggal_keluar</td>";
                          }
                          if (isset($row->Tanggal_keluar)){
                            if($row->Tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->Tanggal_masuk</td>";
                            }
                          }
                          else {
                            echo "<td></td>";
                            echo "<td></td>";
                          }
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
                        $query = "SELECT kp.id, kp.jenis,kp.jumlah,kp.Tanggal_masuk,kp.Tanggal_keluar FROM kain_putih kp";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis</td>";
                          echo "<td>$row->jumlah</td>";
                          echo "<td>$row->Tanggal_masuk</td>";
                         
                         echo "<td>$row->Tanggal_keluar</td>"; 

                          echo "</tr>";
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<!-- kanan -->
            
        
          
            <div class="col-md-6 portlets">
              <div>
          <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainputih.php?user=<?php echo $user?>">
                Cari Nama Jenis Kain :
                <input placeholder="Masukkan jenis yang ingin di cari" type="text" class="form-control" name="jenis">
                <button type="submit" name="submit1" id="cari">Cari</button>
              </form>
            </div>
          </div>
        </div>

        <div class="row" id="panel_cari">
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainputih.php?user=<?php echo $user;?>">
                Cari Tanggal Masuk :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="Tanggal_masuk" id="tgl" >
                <button type="submit" name="submitmasuk1" id="cari">Cari</button>
              </form>
              
            </div>
        </div>
        
          <div class="col-md-3 portlets">
            <div class="panel">
              <form method="POST" action="kainputih.php?user=<?php echo $user;?>">
                Cari Tanggal keluar :
                <input placeholder="Masukkan Tanggal" type="date" class="form-control datepicker" name="Tanggal_keluar" id="tgl" >
                <button type="submit" name="submitkeluar1" id="cari">Cari</button>
              </form>
              
            </div>
          </div>         
        </div>
      </div>
                <br>
                <br>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Daftar kain Putih Sudah di Potong</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">jenis</th>
                      <th scope="col">ukuran kain</th>
                      <th scope="col">jumlah</th>
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">Tanggal Keluar</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    if (isset($_POST['submit1'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT kpp.id,kpp.jenis_kain,kpp.ukuran,kpp.jumlah,kpp.tanggal_masuk,kpp.tanggal_keluar from kain_putih_potong kpp where kpp.jenis_kain = '$jenis'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis_kain</td>";
                          echo "<td>$row->ukuran</td>";
                          echo "<td>$row->jumlah</td>";

                           
                            
                      
                            echo "<td>$row->tanggal_masuk</td>";
                          
                          if (isset($row->Tanggal_masuk)){
                            if($row->tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&id=$row->id&tanggal=$row->tanggal_masuk'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->tanggal_keluar</td>";
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
                        $query = "SELECT kp.id, kp.jenis,kp.jumlah,kp.Tanggal_masuk,kp.Tanggal_keluar FROM kain_putih kp where kp.Tanggal_keluar = '$tanggalK'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis</td>";
                          echo "<td>$row->ukuran</td>";
                          echo "<td>$row->jumlah</td>";
                          echo "<td>$row->Tanggal_masuk</td>";
                          echo "<td>$row->Tanggal_keluar</td>";

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
                      else if (isset($_POST ['submitmasuk'])){
                        require_once ('../database/db_login.php');
                        $query = "SELECT kp.id, kp.jenis, kp.jumlah,kp.Tanggal_masuk,kp.Tanggal_keluar FROM kain_putih kp where kp.Tanggal_masuk = '$tanggalM'";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis</td>";
                          echo "<td>$row->ukuran</td>";
                          echo "<td>$row->jumlah</td>";
                          echo "<td>$row->Tanggal_masuk</td>";
                          echo "<td>$row->Tanggal_keluar</td>";
                          if($row->Tanggal_keluar == ''){
                            echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&ambil=1'><button type='button' class='btn btn-primary'>Tulis</button></a></td>";

                          }
                          else{
                            echo "<td>$row->Tanggal_keluar</td>";
                          }
                          if (isset($row->Tanggal_keluar)){
                            if($row->Tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&pembatik=$row->kode_pembatik&tanggal=$row->batas&kembali=1'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->Tanggal_masuk</td>";
                            }
                          }
                          else {
                            echo "<td></td>";
                            echo "<td></td>";
                          }
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
                        $query = "SELECT kpp.id,kpp.jenis_kain,kpp.ukuran,kpp.jumlah,kpp.tanggal_masuk,kpp.tanggal_keluar from kain_putih_potong kpp";
                        $result = $db->query($query);
                        while ($row = $result->fetch_object()){
                          echo "<tr>";
                          echo "<th scope='row'>$row->id</th>";
                          echo "<td>$row->jenis_kain</td>";
                          echo "<td>$row->ukuran</td>";
                          echo "<td>$row->jumlah</td>";
                          echo "<td>$row->tanggal_masuk";
                          
                           if (isset($row->Tanggal_masuk)){
                            if($row->tanggal_masuk == ''){
                              echo "<td><a href='kainputih.php?user=$user&id=$row->id&tanggal=$row->tanggal_masuk'><button type='button' class='btn btn-secondary'>Tulis</button></a></td>";
                            }
                            else{
                              echo "<td>$row->tanggal_keluar</td>";
                            }
                          }

                          echo "</tr>";
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
        </section>
    </section>
    
    

</body>

</html>
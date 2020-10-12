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
      <a href="" class="logo">Si <span class="lite">Kerja</span></a><br/>
      <ul class="nav pull-right top-menu">Owner</ul>
    </header>

    <!--main content start-->
    <section id="main">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="daftarPembatikOwner.php?user=<?php echo $user; ?>">
                <div class="info-box green-bg">
                  <i class="icon_document_alt"></i>
                  <div class="count">Daftar Pembatik</div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="daftarPenjahitOwner.php?user=<?php echo $user; ?>">
                <div class="info-box green-bg">
                  <i class="icon_document"></i>
                  <div class="count">Daftar Penjahit</div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="dataPembatikOwner.php?user=<?php echo $user; ?>">
                <div class="info-box blue-bg">
                  <i class="icon_group"></i>
                  <div class="count">Data Pembatik</div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="dataPenjahitOwner.php?user=<?php echo $user; ?>">
                <div class="info-box blue-bg">
                  <i class="icon_profile"></i>
                  <div class="count">Data Penjahit</div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="editKoordinatorOwner.php?user=<?php echo $user; ?>">
              <div class="info-box dark-bg">
                <i class="icon_documents"></i>
                <div class="count">Edit Koordinator</div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="editProfileOwner.php?user=<?php echo $user; ?>">
              <div class="info-box purple-bg">
                <i class="icon_pencil-edit"></i>
                <div class="count">Edit Profile</div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="../keluar.php?user=<?php echo $user; ?>">
                <div class="info-box red-bg">
                  <i class="icon_close_alt2"></i>
                  <div class="count">Keluar</div>
                </div>
              </a>
            </div>
        </div>

    </section>
    <!--main content end-->
  </section>
  </section>

</body>

</html>

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
  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="../stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/xcharts.min.css" rel=" stylesheet">
  <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container">
    <header class="header dark-bg">
      <a href="" class="logo">Si <span class="lite">Kerja</span></a><br/>
      <ul class="nav pull-right top-menu">Koordinator</ul>
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
              <a href="kainputih.php?user=<?php echo $user; ?>">
                <div class="info-box green-bg">
                  <i class="icon_document_alt"></i>
                  <div class="count">Data kain putih</div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="kainbatik.php?user=<?php echo $user; ?>">
                <div class="info-box green-bg">
                  <i class="icon_document"></i>
                  <div class="count">Data Kain Batik</div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="pakaian.php?user=<?php echo $user; ?>">
                <div class="info-box blue-bg">
                  <i class="icon_group"></i>
                  <div class="count">Data pakaian jadi</div>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="motifModelKoordinator.php?user=<?php echo $user; ?>">
              <div class="info-box orange-bg">
                <i class="icon_genius"></i>
                <div class="count">Motif dan Model</div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="editStaffKoordinator.php?user=<?php echo $user; ?>">
              <div class="info-box dark-bg">
                <i class="icon_documents"></i>
                <div class="count">Edit Staff</div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="editProfileKoordinator.php?user=<?php echo $user; ?>">
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

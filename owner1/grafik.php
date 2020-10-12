<?php
  session_start();
  if (empty($_SESSION['user'])){
    echo "<script>window.alert('Silahkan masuk dahulu'); window.location='../index.php';</script>";
  }
  require '../database/db_login.php';
  $user=$_SESSION['user'];
  $query2 = "SELECT * FROM user WHERE username='$user'";
            $hehe = mysqli_query($db,$query2);
            $id = mysqli_fetch_array($hehe);
                $username = $id['username'];
                $password = $id['password'];
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
  <script>
    (function() {
    
        var showHide = function( element, field ) {
            this.element = element;
            this.field = field;
            
            this.toggle();    
        };
        
        showHide.prototype = {
            toggle: function() {
                var self = this;
                self.element.addEventListener( "change", function() {
                    if(self.element.checked) {self.field.setAttribute( "type", "text" );}
                    else {self.field.setAttribute( "type", "password" );}
                }, false);
            }
        };
        
        document.addEventListener( "DOMContentLoaded", function() {
            var checkbox = document.querySelector( "#show-hide" ),
                password = document.querySelector( "#password" ),
                form = document.querySelector( "#form" );
                
                var toggler = new showHide( checkbox, password );
        });
        
    })();
</script>
<script type="text/javascript" src="../js/Chartjs/Chart.js"></script>
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
          
            <li class="sub">
            <a class="" href="motifModelOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_tags"></i>
                          <span>Motif dan Model</span>
                      </a>
          </li>

          <li class="active">
            <a class="" href="grafik.php?user=<?php echo $user; ?>">
                          <i class="icon_datareport_alt"></i>
                          <span>Grafik</span>
                      </a>
          </li>

            <li class="sub">
            <a class="" href="editKoordinatorOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_pencil-edit"></i>
                          <span>Edit Koordinator</span>
                      </a>
          </li>

            <li class="sub">
            <a class="" href="editProfileOwner.php?user=<?php echo $user; ?>">
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
            <h3 class="page-header"><i class="icon_pencil-edit"></i>Grafik</h3>
            <?php
          $pakaian = mysqli_query($db, "SELECT * FROM pakaian ");
          $pakaian1 = mysqli_query($db, "SELECT * FROM pakaian ");
          $kain_putih_potong = mysqli_query($db, "SELECT * FROM kain_putih_potong ");
          $kain_putih_potong1 = mysqli_query($db, "SELECT * FROM kain_putih_potong ");
          $kain_putih = mysqli_query($db, "SELECT * FROM kain_putih ");
          $kain_putih1 = mysqli_query($db, "SELECT * FROM kain_putih ");
          $kain_batik = mysqli_query($db, "SELECT * FROM kain_batik ");
          $kain_batik1 = mysqli_query($db, "SELECT * FROM kain_batik ");                         

                           ?>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12 portlets">
            <div class="panel panel-default">
              <div class="panel-body">
                Grafik Pakaian
                <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
  </div>


                 
 

              </div>
            </div>
          </div>

<!-- 2 -->          
<div class="col-md-12 portlets">
            <div class="panel panel-default">
              <div class="panel-body">
                Grafik Kain Putih
                <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart1"></canvas>
  </div>

            </div>
            </div>
          </div>
<!-- 3 -->
<div class="col-md-12 portlets">
            <div class="panel panel-default">
              <div class="panel-body">
                Grafik Kain Putih Potong
                <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart2"></canvas>
  </div>

            </div>
            </div>
          </div>
<!-- 4 -->
          <div class="col-md-12 portlets">
            <div class="panel panel-default">
              <div class="panel-body">
                Grafik Kain Batik
                <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart3"></canvas>
  </div>

            </div>
            </div>
          </div>


        </div>
      </section>
    </section>




  
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');

    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [<?php while ($b = mysqli_fetch_array($pakaian)) { echo '"' . $b['motif'] . '",';} ?>],
        
        datasets: [{
          label: '',
          data: [<?php while ($c = mysqli_fetch_array($pakaian1)) { echo $c['jumlah'] . ',';} ?>],
          
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 2
        }]
      },
      
    });



  </script>

 <script > var ctx = document.getElementById("myChart1").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [<?php while ($b = mysqli_fetch_array($kain_putih)) { echo '"' . $b['jenis'] . '",';} ?>],

        datasets: [{
          label: '',
          data: [<?php while ($c = mysqli_fetch_array($kain_putih1)) { echo $c['jumlah'] . ',';} ?>],
          
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 2
        }]
      },
      
    });
</script>

<script > var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [<?php while ($b = mysqli_fetch_array($kain_putih_potong)) { echo '"' . $b['jenis_kain'] . '",';} ?>],

        datasets: [{
          label: '',
          data: [<?php while ($c = mysqli_fetch_array($kain_putih_potong1)) { echo $c['jumlah'] . ',';} ?>],
          
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 2
        }]
      },
      
    });
</script>

<script > var ctx = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [<?php while ($b = mysqli_fetch_array($kain_batik)) { echo '"' . $b['Nama_motif'] . '",';} ?>],

        datasets: [{
          label: '',
          data: [<?php while ($c = mysqli_fetch_array($kain_batik1)) { echo $c['Jumlah'] . ',';} ?>],
          
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 2
        }]
      },
      
    });
</script>

</body>
</html>
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
            <a class="" href="grafik.php?user=<?php echo $user; ?>">
                          <i class="icon_datareport_alt"></i>
                          <span>Grafik</span>
                      </a>
          </li>
          
            <li class="sub">
            <a class="" href="motifModelOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_tags"></i>
                          <span>Motif dan Model</span>
                      </a>
          </li>

            <li class="sub">
            <a class="" href="editKoordinatorOwner.php?user=<?php echo $user; ?>">
                          <i class="icon_pencil-edit"></i>
                          <span>Edit Koordinator</span>
                      </a>
          </li>

            <li class="active">
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
            <h3 class="page-header"><i class="icon_pencil-edit"></i>Edit Profile</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-body">
                <form id="form" method="post" action="simpanOwner.php?user=<?php echo $user; ?>">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?php echo $username; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?php echo $password; ?>" required>
                    <div>
                        <input type="checkbox" id="show-hide" name="show-hide" value="" />
                        <label for="show-hide">Show password</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Ulangi Password</label>
                    <input type="password" class="form-control" id="repassword" placeholder="Ulangi Password" name="repassword" required>
                  </div>
                  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  
</body>
</html>
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
          <li class="sub">
            <a class="" href="dataPenjahitKoordinator.php?user=<?php echo $user; ?>">
                          <i class="icon_profile"></i>
                          <span>Data Penjahit</span>
                      </a>
          </li>
          <li class="active">
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
            <h3 class="page-header"><i class="icon_documents_alt"></i>Edit Koordinator</h3>
          </div>
        </div>
        <button style="font-size: 14px; " type='button' class='btn btn-success' data-toggle="modal" data-target="#editModal">Tambah Staff</button><br/><br/>
        <div class="col-md-10 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Data Staff</strong></h2>
              </div>
              <div class="panel-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      require_once ('../database/db_login.php');
                      $query = "SELECT * FROM user WHERE level='3'";
                      $result = $db->query($query);
                      while ($row = $result->fetch_object()){
                        echo "<tr>";
                        echo "<th scope='row'>$row->username</th>";
                        echo "<td><a href='hapusStaff.php?user=$user&username=$row->username' onclick= 'return confirm()'><button style='font-size: 12px;' type='button' class='btn btn-danger'>Hapus</button></a></td>";
                        echo "</tr>";
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
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="form" method="post" action="tambahStaff.php?user=<?php echo $user; ?>">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required pattern="[a-zA-Z0-9]{8,20}" >
                    <div>
                        <input type="checkbox" id="show-hide" name="show-hide" value="" />
                        <label for="show-hide">Show password</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" value="tambah">Tambah</button>
                </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.pmin.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body class="login-img3-body">

  <div class="container">
    <form class="login-form" action="database/masuk.php" method="post">
      <div class="login-wrap">
        <p style="text-align: center; font-size: 30px;" >SIKERJA</p><br/>
        <p class="login-img"><img style="height: 300px;" src="img/logo.png"></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
  </div>


</body>

</html>

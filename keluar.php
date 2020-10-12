<?php
logout();
function logout(){
  require 'database/db_login.php';
  session_start();
  session_destroy();
  echo "<script> window.location='index.php';</script>";;
}
?>
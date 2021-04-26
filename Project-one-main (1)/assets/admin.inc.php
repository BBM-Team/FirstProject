<?php
if (isset($_POST["loginBtn"])) {

  $login = $_POST["login"];
  $password = $_POST["password"];

  require 'dbh.inc.php';
  require 'functions.inc.php';

  if(emptyAdminLogin($login, $password) !== false){
    header("location: ../Admin.php?error=emptyinput");
    exit();
  }

  loginAdmin($conn, $login, $password);
}
else {
  header("location: ../Admin.php");
  exit();
}

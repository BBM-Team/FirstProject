<?php
if (isset($_POST["submit"])) {

  $email = $_POST["email"];
  $password = $_POST["password"];

  require 'dbh.inc.php';
  require 'functions.inc.php';

  if(emptyInputLogin($email, $password) !== false){
    header("location: ../Login.php?error=emptyinput");
    exit();
  }

  loginCustomer($conn, $email, $password);
}
else {
  header("location: ../Login.php");
  exit();
}

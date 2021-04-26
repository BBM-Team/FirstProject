<?php
if (isset($_POST["submit"])){

  $name = $_POST["name"];
  $nameL = $_POST["nameL"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $passwordc = $_POST["passwordc"];

  require 'dbh.inc.php';
  require 'functions.inc.php';

  if(emptyInputSignup($name, $nameL, $email, $password, $passwordc) !== false){
    header("location: ../Login.php?error=emptyinput");
    exit();
  }
  if(invalidemail($email) !== false){
    header("location: ../Login.php?error=invalidemail");
    exit();
  }
  if(pwdMatch( $password, $passwordc) !== false){
    header("location: ../Login.php?error=matcherror");
    exit();
  }
  if(uemailExists( $conn, $email) !== false){
    header("location: ../Login.php?error=emailtaken");
    exit();
  }

  createCustomer($conn, $name, $nameL, $email, $password);
}
else{
  header("location: ../Login.php");
  exit();
}

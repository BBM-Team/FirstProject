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
    header("location: ../System.php?error=emptyinput");
    exit();
  }
  if(invalidemail($email) !== false){
    header("location: ../System.php?error=invalidemail");
    exit();
  }
  if(pwdMatch( $password, $passwordc) !== false){
    header("location: ../System.php?error=matcherror");
    exit();
  }
  if(uemailExistsAdd( $conn, $email) !== false){
    header("location: ../System.php?error=emailtaken");
    exit();
  }

  createCustomerAdd($conn, $name, $nameL, $email, $password);
}
else{
  header("location: ../System.php");
  exit();
}

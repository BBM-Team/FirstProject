<?php
if (isset($_POST["submitR"])){

  $email = $_POST["emailR"];
  $bookId = $_POST["bookId"];
  $name = $_POST["nameR"];
  $nameL = $_POST["nameLR"];
  $inputDate = $_POST["inputDate"];
  $inputDateA = $_POST["inputDateA"];



  require 'dbh.inc.php';
  require 'functions.inc.php';

  if(emptyInputR($email, $bookId, $name, $nameL, $inputDate, $inputDateA) !== false){
    header("location: ../System.php?error=emptyinput");
    exit();
  }
  if(invalidemail($email) !== false){
    header("location: ../System.php?error=invalidemail");
    exit();
  }
  


  createReserve($conn, $email, $bookId, $name, $nameL, $inputDate, $inputDateA);
}
else{
  header("location: ../System.php");
  exit();
}

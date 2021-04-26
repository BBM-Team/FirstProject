<?php
if (isset($_POST["submit"])){

  $name = $_POST["name"];
  $nameL = $_POST["nameL"];
  $bookId = $_POST["bookId"];
  $email = $_POST["email"];
  $inputDate = $_POST["inputDate"];
  $inputDateA = $_POST["inputDateA"];

  require 'dbh.inc.php';
  require 'functions.inc.php';


  createReserveL($conn, $email, $bookId, $name, $nameL, $inputDate, $inputDateA);
  
}
else{
  header("location: ../Reserve.php");
  exit();
}

<?php
if (isset($_POST["submitB"])){

  $name = $_POST["nameB"];
  $author = $_POST["author"];
  $description = $_POST["description"];
  $image = $_POST["image"];



  require 'dbh.inc.php';
  require 'functions.inc.php';

  if(emptyInputB($name, $author, $description, $image) !== false){
    header("location: ../System.php?error=emptyinput");
    exit();
  }

  createBook($conn, $name, $author, $description, $image);
}
else{
  header("location: ../System.php");
  exit();
}

<?php

$servername = "localhost";
$dbUsername = "root";
$dbPwd = "";
$dbname = "project1SW";

$conn = mysqli_connect($servername, $dbUsername, $dbPwd, $dbname);

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

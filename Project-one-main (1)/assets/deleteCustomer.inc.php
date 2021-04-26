<?php
 require 'dbh.inc.php';
 error_reporting(0);

 $customerId=$_GET['rn'];
 $sql = "DELETE FROM customers WHERE customerId = '$customerId';";
 $data = mysqli_query($conn,$sql);

 if($data){
   header("location: ../System.php?error=none");
   exit();
 }
 else{
   echo "<font color ='red'> Failed to Delete Book ";
 }
 

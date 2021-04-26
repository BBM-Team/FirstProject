<?php
 require 'dbh.inc.php';
 error_reporting(0);

 $bookId=$_GET['rn'];
 $sql = "DELETE FROM books WHERE bookId = '$bookId';";
 $data = mysqli_query($conn,$sql);

 if($data){
   header("location: ../System.php?error=none");
   exit();
 }
 else{
   echo "<font color ='red'> Failed to Delete Book ";
 }


 

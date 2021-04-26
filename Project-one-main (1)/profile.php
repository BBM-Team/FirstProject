<?php
  include 'header.php';

 ?>
 <style>
 table {
 border-collapse: collapse;
 width: 100%;
 color: black;
 font-family: monospace;
 font-size: 14px;
 text-align: center;

 }

 th {
 color: white;
 }
 tr {
   color: white;
 }
 h3 {
   color: white;
   text-align: center;
 }
 h5 {
   color: white;
   text-align: center;
 }
 </style>
 <?php
   $email = $_SESSION["email"];
  echo "<h3> Welcome $email</h3>";
  ?>
  <h5> Your Reservation</h5>

    <table border="2" >
    <tr>
    <th>Book Name</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Reservation Date</th>
    <th>Return Date</th>
    <th>Return Book</th>
    </tr>
         <?php
         require 'assets/dbh.inc.php';

                if (isset($_SESSION["email"])){

                //$email = $_SESSION["email"];
                $sql = "SELECT * FROM reservations WHERE email = '$email';";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                  while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>

                    <td>" . $row["bookId"] . "</td>
                    <td>" . $row["customerFName"]. "</td>
                    <td>" . $row["customerLName"]. "</td>
                    <td>" . $row["dateI"]. "</td>
                    <td>" . $row["dateR"]. "</td>
                    <td><a href = 'assets/return.inc.php?rn=$row[Id]' class='btn btn-primary mb-2'>Return</td>

                  </tr>";
                }
                echo "</table>";
              }else { echo "<font color ='red'> You have no reservation(s)";
                       }
          }
?>
</table>


 <?php
   include 'footer.php';
  ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 14px;
text-align: center;

}
#btn{
  background-color: #AB2328;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table border="2">
<tr>
<th>Id </th>
<th>Email</th>
<th>Book Name</th>
<th>Customer First Name</th>
<th>Customer Last Name</th>
<th>Reservation Date</th>
<th>Return Date</th>
<th colspan="2" align="center">Operations</th>
</tr>
<?php
require 'dbh.inc.php';

$sql = "SELECT * FROM reservations;";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>" . $row["Id"]. "</td>
    <td>" . $row["email"] . "</td>
    <td>" . $row["bookId"] . "</td>
    <td>" . $row["customerFName"]. "</td>
    <td>" . $row["customerLName"]. "</td>
    <td>" . $row["dateI"]. "</td>
    <td>" . $row["dateR"]. "</td>
    <td><a href = 'assets/updateReservation.inc.php?rn=$row[Id]&em=$row[email]
                  &bd=$row[bookId]&fn=$row[customerFName]&ln=$row[customerLName]
                  &di=$row[dateI] &dr=$row[dateR]' class='btn btn-primary mb-2'>Update</td>

    <td><a href = 'assets/deleteReservation.inc.php?rn=$row[Id]' class='btn btn-primary mb-2' id='btn'>Delete</td>
    </tr>";
  }
  echo "</table>";
}else { echo "0 results"; }
 ?>

</table>
</body>
</html>

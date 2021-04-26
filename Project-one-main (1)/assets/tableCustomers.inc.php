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
<th> First Name</th>
<th> Last Name</th>
<th>Email</th>
<th>Password</th>
<th colspan="2" align="center">Operations</th>
</tr>
<?php
require 'dbh.inc.php';

$sql = "SELECT * FROM customers;";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>" . $row["customerId"]. "</td>
    <td>" . $row["customerFname"] . "</td>
    <td>" . $row["customerLname"] . "</td>
    <td>" . $row["email"]. "</td>
    <td>" . $row["password"]. "</td>
    <td><a href = 'assets/updateCustomer.inc.php?rn=$row[customerId]&fn=$row[customerFname]
                  &ln=$row[customerLname]&em=$row[email]&ps=$row[password]' class='btn btn-primary mb-2'>Update</td>
    <td><a href = 'assets/deleteCustomer.inc.php?rn=$row[customerId]' class='btn btn-primary mb-2' id='btn'>Delete</td>
    </tr>";
  }
  echo "</table>";
}else { echo "0 results"; }
 ?>

</table>
</body>
</html>

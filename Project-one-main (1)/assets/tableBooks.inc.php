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
<th>Name</th>
<th>Author</th>
<th>Image URL</th>

<th colspan="2" align="center">Operations</th>
</tr>
<?php
require 'dbh.inc.php';

$sql = "SELECT * FROM books;";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>" . $row["bookId"]. "</td>
    <td>" . $row["bookName"] . "</td>
    <td>" . $row["author"]. "</td>
    <td>" . $row["imageURL"]. "</td>
    <td><a href = 'assets/update.inc.php?rn=$row[bookId]&bn=$row[bookName]
                  &an=$row[author]&ds=$row[description]&iu=$row[imageURL]' class='btn btn-primary mb-2'>Update</td>
    <td><a href = 'assets/delete.inc.php?rn=$row[bookId]' class='btn btn-primary mb-2' id='btn'>Delete</td>
    </tr>";
  }
  echo "</table>";
}else { echo "0 results"; }
 ?>

</table>
</body>
</html>

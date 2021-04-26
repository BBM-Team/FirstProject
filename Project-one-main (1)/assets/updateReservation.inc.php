<?php
require 'dbh.inc.php';
error_reporting(0);
$rn = $_GET['rn'];
$em = $_GET['em'];
$bd = $_GET['bd'];
$fn = $_GET['fn'];
$ln = $_GET['ln'];
$di = $_GET['di'];
$dr = $_GET['dr'];
?>
<html>
<head>
<title>Update Customers</title>
<style>
table{
  color: white;
  background-color: black;
  border-radius: 30px;
}
#btn{
  background-color: orange;
  color: white;
  height: 35px;
  width: 100px;
  border-radius: 25px;
}
</style>
</head>
<body style="background: #5a5751">
<br><br><br><br><br><br>
<form>
<table align="center" cellspacing="15">
<tr><td>Customer ID<td><input type="text" value="<?php echo "$rn"?>" placeholder="Resevation ID" name="Id" required/></td></tr>
<tr><td>Email<td><input type="text" value="<?php echo "$em"?>" placeholder="Email" name="email" required/></td></tr>
<tr><td>Book Name<td><input type="text" value="<?php echo "$bd"?>" placeholder="Book Name" name="bookId" required/></td></tr>
<tr><td>Customer First Name<td><input type="text" value="<?php echo "$fn"?>" placeholder="First Name" name="customerFName" required/></td></tr>
<tr><td>Customer Last Name<td><input type="text" value="<?php echo "$ln"?>" placeholder="Last Name" name="customerLName" required/></td></tr>
<tr><td>Reservation Date<td><input type="text" value="<?php echo "$di"?>" placeholder="Reservation Date" name="dateI" required/></td></tr>
<tr><td>Return<td><input type="text" value="<?php echo "$dr"?>" placeholder="Return Date" name="dateR" required/></td></tr>
<tr><td align="center" colspan="2"><input type="submit" id="btn" name="submit"></td></tr>

</table>
</form>
</body>
</html>
<?php
if ($_GET['submit']) {
  $reserveId = $_GET['Id'];
  $email = $_GET['email'];
  $bookId = $_GET['bookId'];
  $customerFname = $_GET['customerFName'];
  $customerLname = $_GET['customerLName'];
  $dateI = $_GET['dateI'];
  $dateR = $_GET['dateR'];

$sql = "UPDATE reservations SET Id = '$reserveId', email = '$email', bookId = '$bookId', customerFName = '$customerFname', customerLName = '$customerLname',
                                    dateI = '$dateI', dateR = '$dateR' WHERE Id = '$reserveId';";
$data = mysqli_query($conn,$sql);

if($data){
  header("location: ../System.php?error=none");
  exit();
}
else{
  echo "<font color ='red'> Failed to Update Reservation ";
}
}
 ?>

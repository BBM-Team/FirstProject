<?php
require 'dbh.inc.php';
error_reporting(0);
$rn = $_GET['rn'];
$fn = $_GET['fn'];
$ln = $_GET['ln'];
$em = $_GET['em'];
$ps = $_GET['ps'];
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
<tr><td>Customer ID<td><input type="text" value="<?php echo "$rn"?>" placeholder="Customer ID" name="customerId" required/></td></tr>
<tr><td>First Name<td><input type="text" value="<?php echo "$fn"?>" placeholder="First Name" name="customerFname" required/></td></tr>
<tr><td>Last Name<td><input type="text" value="<?php echo "$ln"?>" placeholder="Last Name" name="customerLname" required/></td></tr>
<tr><td>Email<td><input type="text" value="<?php echo "$em"?>" placeholder="Email" name="email" required/></td></tr>
<tr><td>Password<td><input type="text" value="<?php echo "$ps"?>" placeholder="Password" name="password" required/></td></tr>
<tr><td align="center" colspan="2"><input type="submit" id="btn" name="submit"></td></tr>

</table>
</form>
</body>
</html>
<?php
if ($_GET['submit']) {
  $customerId = $_GET['customerId'];
  $customerFname = $_GET['customerFname'];
  $customerLname = $_GET['customerLname'];
  $email = $_GET['email'];
  $password = $_GET['password'];
$sql = "UPDATE customers SET customerId = '$customerId', customerFname = '$customerFname', customerLname = '$customerLname',
                                    email = '$email', password = '$password' WHERE customerId = '$customerId';";
$data = mysqli_query($conn,$sql);

if($data){
  header("location: ../System.php?error=none");
  exit();
}
else{
  echo "<font color ='red'> Failed to Update Customer ";
}
}
 ?>

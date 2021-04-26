<?php
require 'dbh.inc.php';
error_reporting(0);
$rn = $_GET['rn'];
$bn = $_GET['bn'];
$an = $_GET['an'];
$ds = $_GET['ds'];
$iu = $_GET['iu'];
?>
<html>
<head>
<title>Update Books</title>
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
<tr><td>Book ID<td><input type="text" value="<?php echo "$rn"?>" placeholder="Book ID " name="bookId" required/></td></tr>
<tr><td>Name<td><input type="text" value="<?php echo "$bn"?>" placeholder="Book Name" name="bookName" required/></td></tr>
<tr><td>Author<td><input type="text" value="<?php echo "$an"?>" placeholder="Book Author" name="author" required/></td></tr>
<tr><td>Book Description<td><input type="text" value="<?php echo "$ds"?>" placeholder="Book Description" name="description" required/></td></tr>
<tr><td>Image URL <td><input type="text" value="<?php echo "$iu"?>" placeholder="Image URL" name="imageURL" required/></td></tr>
<tr><td align="center" colspan="2"><input type="submit" id="btn" name="submit"></td></tr>

</table>
</form>
</body>
</html>
<?php
if ($_GET['submit']) {
  $bookId = $_GET['bookId'];
  $bookName = $_GET['bookName'];
  $author = $_GET['author'];
  $description = $_GET['description'];
  $imageURL = $_GET['imageURL'];
$sql = "UPDATE books SET bookId = '$bookId', bookName = '$bookName', author = '$author',
                                    description = '$description', imageURL = '$imageURL' WHERE bookId = '$bookId';";
$data = mysqli_query($conn,$sql);

if($data){
  header("location: ../System.php?error=none");
  exit();
}
else{
  echo "<font color ='red'> Failed to Update Book ";
}
}
 ?>

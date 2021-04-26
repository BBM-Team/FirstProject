<?php
function emptyInputSignup($name, $nameL, $email, $password, $passwordc){
  $result;
  if (empty($name) ||empty($nameL) ||empty($email) ||empty($password) ||empty($passwordc)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function emptyInputB($name, $author, $description, $image){
  $result;
  if (empty($name) ||empty($author) ||empty($description) ||empty($image)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function emptyInputR($email, $bookId, $name, $nameL, $inputDate, $inputDateA){
  $result;
  if (empty($email) || empty($bookId) || empty($name) ||empty($nameL) ||empty($inputDate) ||empty($inputDateA)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidemail($email){
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}



function pwdMatch($password, $passwordc){
  $result;
  if ($password !== $passwordc)  {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function uemailExists( $conn, $email){
  $sql = "SELECT * FROM customers WHERE email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../Login.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function uemailExistsAdd( $conn, $email){
  $sql = "SELECT * FROM customers WHERE email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../System.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function adminExists( $conn, $login){
  $sql = "SELECT * FROM admin WHERE adminId = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../Login.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $login);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}


function createCustomer($conn, $name, $nameL, $email, $password){
  $sql = "INSERT INTO customers (customerFName, customerLName, email,  password) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../Login.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss",  $name, $nameL, $email, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../Login.php?error=none");
  exit();
}

function createCustomerAdd($conn, $name, $nameL, $email, $password){
  $sql = "INSERT INTO customers (customerFName, customerLName, email,  password) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../System.php?error=stmtfailed");
    exit();
  }

 $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss",  $name, $nameL, $email, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../System.php?error=none");
  exit();
}


function createBook($conn, $name, $author, $description, $image){
  $sql = "INSERT INTO books (bookName, author, description, imageURL) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../System.php?error=stmtfailed");
    exit();
  }


  mysqli_stmt_bind_param($stmt, "ssss",  $name, $author, $description, $image);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../System.php?error=none");
  exit();
}
function createReserve($conn, $email, $bookId, $name, $nameL, $inputDate, $inputDateA){
  $sql = "INSERT INTO reservations (email, bookId, customerFName, customerLName, dateI, dateR) VALUES (?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../System.php?error=stmtfailed");
    exit();
  }


  mysqli_stmt_bind_param($stmt, "ssssss",  $email, $bookId, $name, $nameL, $inputDate, $inputDateA);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../System.php?error=none");
  exit();
}

function createReserveL($conn, $email, $bookId, $name, $nameL, $inputDate, $inputDateA){
  $sql = "INSERT INTO reservations (email, bookId, customerFName, customerLName, dateI, dateR) VALUES (?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../Reserve.php?error=stmtfailed");
    exit();
  }


  mysqli_stmt_bind_param($stmt, "ssssss",  $email, $bookId, $name, $nameL, $inputDate, $inputDateA);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../Reserve.php?reservationcomplete");
  exit();
}

function emptyInputLogin($email, $passwordL){
  $result;
  if (empty($email) || empty($passwordL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginCustomer($conn, $email, $password){
  $emailExits = uemailExists( $conn, $email);

  if ($emailExits === false) {
    header("location: ../Login.php?error=wrongemail");
    exit();
  }

  $pwdHashed = $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
  $checkPwd = password_verify($password, $pwdHashed);

  if ($checkPwd == false) {
     header("location: ../Login.php?error=wrongpwd");
    exit();
  }
  elseif ($checkPwd) {
    session_start();
    $_SESSION["customerId"] = $emailExits["customerId"];
    $_SESSION["email"] = $emailExits["email"];
    header("location: ../Home.php");
    exit();
  }
}

function emptyAdminLogin($login, $password){
  $result;
  if (empty($login) || empty($password)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function loginAdmin($conn, $login, $password){
  $aExits = adminExists( $conn, $login);

  if ($aExits === false) {
    header("location: ../Admin.php?error=wrongemail");
    exit();
  }

  $pwdHashed = $aExits["password"];
  //$checkPwd = password_verify($passwordL, $pwdHashed);

  if ($pwdHashed !== $password) {
    header("location: ../Admin.php?error=wrongpwd");
    exit();
  }
  elseif ($pwdHashed === $password) {
    session_start();
    $_SESSION["id"] = $aExits["id"];
    $_SESSION["adminId"] = $aExits["adminId"];
    header("location: ../System.php");
    exit();
  }
}

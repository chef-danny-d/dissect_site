<?php
session_start();
include "head.php";
include "menu.php";
include "nav.php";
include "bread.php";
include "script.php";
include "footer.php";
include 'var.php';
include 'connect.php';
$uid = $_POST['uid'];
$password = $_POST['password'];

$sql  = "SELECT * FROM user WHERE uid='$uid' AND password='$password'";
$result = $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)){
  echo "Your username or password is incorrect";
}
else {
  echo "Welcome $uid";
}
?>

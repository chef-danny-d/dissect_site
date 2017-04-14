<?php
session_start();
header("location:user_profile.php");
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
  $_SESSION['passVar'] = true;
}
else{
  $_SESSION['uid'] = $row['uid'];
  $_SESSION['pass'] = $row['password'];
  $_SESSION['passVar'] = false;
}
?>

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
//selects id num from db for the uid associated with it
$sql = "SELECT id FROM $tablename WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
//making connection if uid and password match
$sql  = "SELECT * FROM $tablename WHERE uid='$uid' AND password='$password'";
$result = $conn->query($sql);
//adding ip to database ..false try
$ip = $_SERVER['REMOTE_ADDR'];
$sql  = "INSERT INTO $tablename(`ip`) VALUE ($uid) WHERE uid=$uid AND password='$password'";

if (!$row = mysqli_fetch_assoc($result)){
  //checking if password is correct or not
  //this scenario is when it's not correct
  $_SESSION['passVar'] = true;
}
else{
  //this is correct scenario
  $_SESSION['uid'] = $row['uid'];
  $_SESSION['pass'] = $row['password'];
  $_SESSION['id'] = $row["id"];
  $_SESSION['passVar'] = false;
}
?>

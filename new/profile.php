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

$sql = "SELECT id FROM $tablename WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . "<br>";
  }
} else {
  echo "0 results";
}
$sql  = "SELECT * FROM $tablename WHERE uid='$uid' AND password='$password'";
$result = $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)){
  $_SESSION['passVar'] = true;
}
else{
  $_SESSION['uid'] = $row['uid'];
  $_SESSION['pass'] = $row['password'];
  $_SESSION['id'] = $row["id"];
  $_SESSION['passVar'] = false;
}
?>

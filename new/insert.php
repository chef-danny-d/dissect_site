<?php
session_start();
header("location: reg2.php");
include 'var.php';
include 'connect.php';
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$password = $_POST['password'];

$sql  = "INSERT INTO $tablename (first, last, uid, password) VALUES ('$first', '$last', '$uid', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully....";
    echo "Redirecting...";
    $_SESSION['uid'] = $uid;
    $_SESSION['pass'] = $password;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

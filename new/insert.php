<?php

include 'var.php';
include 'connect.php';
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$password = $_POST['password'];

$sql  = "INSERT INTO user (first, last, uid, password) VALUES ('$first', '$last', '$uid', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully....";
    echo "Redirecting...";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: fetch.php");
mysqli_close($conn);

?>

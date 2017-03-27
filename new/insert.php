<?php

include 'var.php';
include 'connect.php';
$callName = $_POST["name"];
$callUname = $_POST["uname"];
$callId = $_POST["id"];
$callPass= $_POST["pass"];

$sql  = "INSERT INTO test_tb (name, id, pass, uname) VALUES ('$callName', '$callId', '$callPass', '$callUname')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully....";
    echo "Redirecting...";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("refresh:1; url=fetch.php");
mysqli_close($conn);

?>

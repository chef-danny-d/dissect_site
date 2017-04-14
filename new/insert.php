<meta http-equiv="refresh" content="0; url=http://localhost:8888/new/profile.php" />
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
mysqli_close($conn);

?>

<?php
include 'var.php';
include 'connect.php';

$sql = "SELECT name, id, pass, uname FROM test_tb";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "- id: " . $row["id"]. "- Name: " . $row["name"]. "- Username:" . $row["uname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

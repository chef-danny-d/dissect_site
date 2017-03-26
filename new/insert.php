<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
- get data from form
- covert it into string
- send the new variable to VALUES
- check db if entered
*/
$callName = $_POST["email"];
$callName = mysqli_real_escape_string($callName);

$sql  = 'INSERT INTO `test_tb` (`name`, `id`, `pass`, `uname`) VALUES (\'$callName\', \'1234\', \'password\', \'admin\')';

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully....";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

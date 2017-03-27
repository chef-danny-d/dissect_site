<?php
include 'var.php';
include 'connect.php';

mysqli_select_db($dbname) or die("no db :'(");
$query = mysqli_query("SELECT * FROM $tablename WHERE username='$user'");

$numrows = mysqli_num_rows($query);


if ($numrows!=0)
{
//while loop
  while ($row = mysql_fetch_assoc($query))
  {
    $dbusername = $row['username'];
    $dbpassword = $row['password'];
  }
  else
      die("incorrect username/password!");
}
else
  echo "user does not exist!";
}
else
    die("please enter a username and password!");

?>

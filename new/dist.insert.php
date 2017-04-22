<?php
session_start();
header( "Refresh:5; url=user_profile.php");
include 'var.php';
include 'connect.php';
$uid = $_SESSION['uid'];
$password = $_SESSION['pass'];
$id = $_SESSION['id'];

$RI1 = $_POST['textInputOne'];
$iRI1 = (int)$RI1;
$RI2 = $_POST['textInputTwo'];
$iRI2 = (int)$RI2;
$RI3 = $_POST['textInputThree'];
$iRI3 = (int)$RI3;
$RI4 = $_POST['textInputFour'];
$iRI4 = (int)$RI4;
$RI5 = $_POST['textInputFive'];
$iRI5 = (int)$RI5;
$RI6 = $_POST['textInputSix'];
$iRI6 = (int)$RI6;
$RI7 = $_POST['textInputSeven'];
$iRI7 = (int)$RI7;
$RI8 = $_POST['textInputEight'];
$iRI8 = (int)$RI8;

$sum = 0;

$sum = $iRI1 + $iRI2 + $iRI3 + $iRI4 + $iRI5 + $iRI6 + $iRI7 + $iRI8;

if($sum > 100){
    echo "Your file can't be partitioned into ", $sum,"%", "<br>";
    echo "Please consider changing the values of the partitioning so it adds up to 100%.", "<br>";
    echo "This page will automatically take you back to the partitioning screen.", "<br>";
    echo "If it doesn't please click the following link: ", "<a href='user_profile.php'>Go back</a>", "<br>";
    $sumVar = false;
}
else {
    print "it works " ;
    echo $RI1, "\n" ;
    echo $RI2, "\n" ;
    echo $RI3, "\n" ;
    echo $RI4, "\n" ;
    echo $RI5, "\n" ;
    echo $RI6, "\n" ;
    echo $RI7, "\n" ;
    echo $RI8, "\n" ;
    $sql = "UPDATE $tablename SET `drive1`=$RI1,`drive2`=$RI2,`drive3`=$RI3,`drive4`=$RI4,`drive5`=$RI5,`drive6`=$RI6,`drive7`=$RI7,`drive8`=$RI8 WHERE id = $id";
}

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully....";
    echo "Redirecting...";
    $_SESSION['uid'] = $uid;
    $_SESSION['pass'] = $password;
}else if($sumVar=false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
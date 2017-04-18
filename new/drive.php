<?php
session_start();
include "funtion.php" ;
auth();
include "head.php";
include "menu.php";
include "nav.php";
include "bread.php";
include "script.php";
include "footer.php";
include 'var.php';
include 'connect.php';
echo $_SESSION['uid'];
?>
<?php
session_start();
if (!$_SESSION['uid']){
    header("location:sign.php");
}
include "head.php";
include "menu.php";
include "nav.php";
include "bread.php";
include "script.php";
include "footer.php";





?>
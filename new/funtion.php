<?php
session_start();
if (!$_SESSION['uid']){
    header("location:sign.php");
}
include 'var.php';
?>
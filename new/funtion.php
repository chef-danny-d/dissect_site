<?php
/**
 * Created by PhpStorm.
 * User: danielpapp
 * Date: 4/13/17
 * Time: 11:25 PM
 */
function auth(){
    if (!$_SESSION['uid']){
        header("location:sign.php");
    }
}
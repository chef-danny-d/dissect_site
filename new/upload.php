<?php
session_start();
include "funtion.php" ;
include "head.php";
include "menu.php";
include "nav.php";
include "bread.php";
include "script.php";
include 'var.php';
include 'connect.php';
echo $_SESSION['uid'];
?>

<section class="main-cont"><form action="put.php" class="dropzone" id="drop" enctype="multipart/form-data">

</form></section>
<?php include "footer.php";?>
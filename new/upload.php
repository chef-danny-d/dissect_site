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
?>

<section class="main-cont">
    <form action="put.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit">
        <!--need to include file partitioning % sliders here when the user adds a file-->
    </form>
</section>
<?php include "footer.php";?>
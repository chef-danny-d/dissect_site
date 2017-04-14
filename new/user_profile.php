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
<form>
  <label>username:</label>
  <input type="text" placeholder="<?php echo $_SESSION['uid']; ?>"/>

  <label>new password:</label>
  <input type="password" placeholder="<?php echo $_SESSION['pass']; ?>"/>

  <label>re password:</label>
  <input type="password" placeholder="<?php echo $_SESSION['pass']; ?>"/>

  <button type="submit">Update</button>
</form>

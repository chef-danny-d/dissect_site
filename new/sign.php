<?php
session_start();
include "head.php";
include "menu.php";
include "nav.php";
include "bread.php";
include "script.php";
include "footer.php";
?>
<div id="wrapper sign">
    <form method="post" action="profile.php">
      <label style="text-align: center; width: 100%;">UID</label>
      <input required style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="uid" placeholder="username" required><br>

      <label style="text-align: center; width: 100%;">Password</em></label>
      <input required style="width: 50%; margin-left: 25%;" type="password" class="form-control" name="password" placeholder="username" required><br>
        <button style="width: 50%; margin-left: 25%; margin-top: 1.5em;" type="submit" class="btn btn-default">Sign in</button>
    </form>
    <form action="logout.php">
      <button type="">Log out</button>
    </form>
</div>
<?php
if(isset($_SESSION['id'])){
  echo $_SESSION['id'];
}
else{
  echo "You are not logged in";
}
?>

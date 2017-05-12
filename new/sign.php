<?php
session_start();
if ($_SESSION['uid']){//redirect if user is logged in
    header("location:user_profile.php");
}
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
      <input style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="uid" placeholder="username" required><br>

      <label style="text-align: center; width: 100%;">Password</em></label>
      <input style="width: 50%; margin-left: 25%;" type="password" class="form-control" name="password" placeholder="password" required><br>
        <button style="width: 50%; margin-left: 25%; margin-top: 1.5em;" type="submit" class="btn btn-default">Sign in</button>
    </form>
</div>
<?php

if(isset($_SESSION['uid'])){
  echo $_SESSION['uid'];//displays username if there is any in the session
}
if(isset($_SESSION['passVar'])){
    $passVar = false ;//sets password variable false as default which will be used in profile.php
    $_SESSION['passVar'] = $passVar['pass'];//makes the variable into a session so it can be accessible locally
    echo "\nYour password or username isn't matching in our database. Please try again ";//error handling
}
else{
    unset($passVar);//sets null for the variable
}
?>

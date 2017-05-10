<?php
session_start();
include_once "head.php";
include_once "menu.php";
include_once "nav.php";
include_once "bread.php";
include_once "script.php";
?>
<div id="wrapper sign" class="main-cont">
    <form method="post" action="insert.php">
        <label style="text-align: center; width: 100%;">First name</label>
        <input required style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="first" placeholder="First" required><br>

        <label style="text-align: center; width: 100%;">Last name</label>
        <input required style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="last" placeholder="Last" required><br>

        <label style="text-align: center; width: 100%;">UID</label>
        <input required style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="uid" placeholder="Username" required><br>

        <label style="text-align: center; width: 100%;">Password</em></label>
        <input required style="width: 50%; margin-left: 25%;" type="password" class="form-control" name="password" placeholder="Password" required><br>

        <label style="text-align: center; width: 100%;">Password</em></label>
        <input required style="width: 50%; margin-left: 25%;" type="password" class="form-control" name="re-password" placeholder="Re-Password" required><br>
        <button type="submit">Next step</button>
    </form>
</div>
<?php include_once "footer.php"; ?>
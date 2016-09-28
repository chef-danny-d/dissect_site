<?php include "header.php"; ?>
<?php include "script.php"; ?>
<style>
    #log form{
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        background-clip: black;
    }
    #logimg{
        width: 33%;
        text-align: center;
        margin-left: 33%;
    }
    #log input{
        width: 50% !important;
        margin-left: 25%;
    }
    #log label{
        width: 50%;
        text-align: center;
        margin-top: 2%;
    }
    #log button{
        width: 50%;
        margin-top: 5%;
</style>
<body  id="acc_body">
<div id="wrapper log">
    <img id="logimg" src="SynkMonster-Updated-Logo_V2_no-name.png" alt="...">
<form action="profile.php" method="get">
    <form action="profile.php" method="get">
        <label style="text-align: center; width: 100%;">E-mail*</label> <input style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="email" placeholder="example@example.com" required><br>
        <label style="text-align: center; width: 100%;">Password*</label> <input style="width: 50%; margin-left: 25%;" required type="password" class="form-control" name="password" placeholder="Password"><br>
        <button style="width: 50%; margin-left: 25%; margin-top: 1.5em;" type="submit" class="btn btn-default">Login</button>
    </form>
</form>
</div>
</body>
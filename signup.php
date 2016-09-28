<?php include "header.php"; ?>
<?php include "script.php"; ?>
<body  id="acc_body">
<style>
    #sign form{
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        background-clip: black;
    }
    #signimg{
        width: 33%;
        text-align: center;
        margin-left: 33%;
    }
    #sign input{
        width: 50% !important;
        margin-left: 25%;
    }
    #sign label{
        width: 50%;
        text-align: center;
        margin-top: 2%;
    }
    #sign button{
        width: 50%;
        margin-top: 5%;
    }
</style>
<div id="wrapper sign">
    <img id="signimg" src="SynkMonster-Updated-Logo_V2_no-name.png" alt="...">
    <form action="profile.php" method="get">
        <label style="text-align: center; width: 100%;">Name<em>*required</em></label> <input style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="name" placeholder="Full Name" required><br>
        <label style="text-align: center; width: 100%;">E-mail<em>*required</em></label> <input style="width: 50%; margin-left: 25%;" type="text" class="form-control" name="email" placeholder="example@example.com" required><br>
        <label style="text-align: center; width: 100%;">Password<em>*required</em></label> <input style="width: 50%; margin-left: 25%;" required type="password" class="form-control" name="password" placeholder="Password"></br>
        <label style="text-align: center; width: 100%;">Re-Type Password<em>*required</em></label> <input style="width: 50%; margin-left: 25%;" required type="password" class="form-control" name="password" placeholder="Re-Type Password">
        <button style="width: 50%; margin-left: 25%; margin-top: 1.5em;" type="submit" class="btn btn-default">Login</button>
    </form>
</div>
</body>

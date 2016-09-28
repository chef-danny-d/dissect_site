<html  manifest="video.appcache">
<?php include "header.php"; ?>

<style>
    body{
        padding-top: 0em;
        -webkit-font-smoothing: antialiased;
    }
    #particles{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #power{
        text-align: center;
        text-transform: uppercase;
        position: absolute;
        font-family: "Myriad Set Pro","Helvetica Neue","Helvetica","Arial",sans-serif;
        color: black ;
    }
    #power a{
        text-decoration: none;
        color: black ;
    }
</style>


    <div id="particles">
        <div id="power">

            <h1>This is a <a href="home.php"><strong>POWER</strong></a> quote</h1>
            <h3>Yup. It sure is</h3>

        </div>
    </div>

    <!-- jQuery -->
    <?php include "script.php"; ?>
</html>

<?php include "header.php"; ?>
<html  manifest="video.appcache">
<?php include "nav.php"; ?>



<!-- Header Carousel =

    <header id="carousel-example-generic" class="carousel slide" data-ride="carousel">
// Indicators
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
</ol>

// Wrapper for slides
<div class="carousel-inner" role="listbox">
<div class="item active">
  <img src="http://placehold.it/1920x1080" alt="...">
  <div class="carousel-caption">

  </div>
</div>
<div class="item">
  <img src="http://placehold.it/1920x1080" alt="...">
  <div class="carousel-caption">
  </div>
</div>

</div>
</header>
-->




<!-- Modal Log in -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Log in</h4>
            </div>
            <div class="modal-body">
                <form method="get">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Sign up</button>
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sign up -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Sign up</h4>
            </div>
            <div class="modal-body">
                <form method="get">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Log in</button>
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container-fluid">

    <!-- Marketing Icons Section -->
    <section id="features">
        <div class="row">
            <h2 class="page-header text-center">FEATURES</h2>
            <div class="col-md-4">
                <img class="img-responsive img-circle" src="../img/fade.JPG">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-circle" src="../img/fade.JPG">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-circle" src="../img/fade.JPG">
            </div>
        </div>
        <a href="features.php" class="btn btnn btn-default hvr-sweep-to-right">Read more</a>


    </section>
    <!-- /#features -->

    <!-- Portfolio Section -->
    <section id="price">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">PRICES</h2>
            </div>
        </div>

        <div class="row pricecar">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="prices">
                        <span class="glyphicon glyphicon-user"></span>
                        <h3>Starter</h3>
                        <ul>
                            <li>500GB Cloud Storage</li>
                            <li>3 mailing account</li>
                            <li>2% discount on reference</li>
                        </ul>
                        <a href="#" class="btn btnn btn-default">Buy</a>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="prices">
                        <span class="glyphicon glyphicon-user"></span>
                        <h3>Deluxe</h3>
                        <ul>
                            <li>1TB Cloud Storage</li>
                            <li>15 mailing account</li>
                            <li>5% discount on reference</li>
                        </ul>
                        <a href="#" class="btn btnn btn-default">Buy</a>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="prices">
                        <span class="glyphicon glyphicon-user"></span>
                        <h3>Expert</h3>
                        <ul>
                            <li>5TB Cloud Storage</li>
                            <li>50 mailing account</li>
                            <li>7% discount on reference</li>
                        </ul>
                        <a href="#" class="btn btnn btn-default">Buy</a>
                    </div>

                </div>
            </div>

            <div id="bg">
                <video id="img pricebg" width="100%" autoplay loop>
                    <source src="../img/boat.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>


        </div>
        <!-- /.row -->
    </section>


    <!-- Features Section -->
    <div id="contform">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">CONTACT US</h2>
            </div>
            <div class="col-md-12">
                <form id="cont">
                    <div class="form-group">
                        <label for="Email1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label><br/>
                        <textarea rows="4" cols="50" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>



    <?php include "footer.php"; ?>

</div>
<!-- /.container -->

<!-- jQuery -->
<?php include "script.php"; ?>

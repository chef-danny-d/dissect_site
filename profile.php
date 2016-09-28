<?php include "header.php"; ?>

<?php include "profile_nav.php"; ?>

<body id="acc_body">
    <!--
        Facebook share button api start
        -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!--
    Facebook share button api end
    -->
    <div id="wrapper">
        <div class="well well-lg">
                <div class="stor">
                  <h4>Cloud storages</h4>
                    <div class="dropbox col-md-2 col-md-offset-1">
                      <i class="fa fa-dropbox" aria-hidden="true"></i>
                      <p class="cap">Dropbox</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div class="drive col-md-2 col-md-offset-2">
                      <i class="fa fa-google" aria-hidden="true"></i>
                      <p class="cap">Google Drive</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>

                    <div class="mega col-md-2 col-md-offset-2">
                      <i class="fa fa-cloud" aria-hidden="true"></i>
                      <p class="cap">Mega Upload</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                  </div>

                </div><!-- connected accounts, tiles of cloud accounts, 3x4 grid including thumbnails and rounded progressbars -->
                <div class="col-md-12 pack">
                  <h4>Package type used</h4>
                    <p>This account is assassinated with <?php echo $_GET["name"]; ?><!--$Account Username here$--></p>
                  <p>This account is using the basic package. 2GB used of 50GB<a class="btn btn-default" href="upgrade.php">Upgrade</a></p>
                </div><!-- package type used on this account -->

                <div class="col-md-12 inv">
                  <h4>Invite friends</h4>
                  <p>Invite firends and get free space towards your drive. you already invited $number$ friends. Your are rewarded by $number$*$x amound$. </p>
                  <form class="form-inline col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" placeholder="example@example.com">
                    </div>
                    <button type="submit" class="btn btn-default">Send invite</button>
                  </form>
                    <div class="col-md-3"><a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                    <div class="fb-share-button col-md-3" data-href="http://syncmonster.io" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsyncmonster.io%2F&amp;src=sdkpreparse">Share</a></div>
                </div><!-- invite friends -->
                <div class="del col-md-12">
                  <h4></h4>
                  <p><a href="">Delete account</a></p>
                </div><!-- delete account  -->


        
        </div>
    </div>
</body>

<?php include "script.php"; ?>
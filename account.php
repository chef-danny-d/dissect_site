<?php include "header.php"; ?>

<?php include "acc_nav.php"; ?>

<body id="acc_body">
    <div id="wrapper">
        <div id="top-bar">
            <div><i class="fa fa-angle-right"></i> <a href="#">Main folder</a></div>
        </div>
        <div class="row" style="padding-top: 5%;">
            <div class="folders">
                <a href="#">
                    <div class="col-md-3 col-sm-6">
                        <div id="folder" class="uploaded" >
                            <i class="fa fa-folder-open"></i>
                            <hr>
                            <p>My folder</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="files">
                <a href="#">
                    <div class="col-md-3 col-sm-12">
                         <div id="pic" class="uploaded">
                            <i class="fa fa-file-image-o"></i>
                             <hr>
                            <p>My picture</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-md-3 col-sm-12">
                        <div id="doc"  class="uploaded">
                            <i class="fa fa-file"></i>
                            <hr>
                            <p>My document</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-md-3 col-sm-12">
                        <div id="zip" class="uploaded">
                            <i class="fa fa-file-archive-o"></i>
                            <hr>
                            <p>My zipped folder</p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
        
        
       
        
        
    </div>
</body>

<?php include "script.php"; ?>
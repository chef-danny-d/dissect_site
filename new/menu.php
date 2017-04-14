<nav class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading pure-menu-link">DISSECT</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="upload.php" class="pure-menu-link">Upload</a></li>
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Files</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Trash</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Shared</a></li>
        <li class="pure-menu-item pure-menu-has-children">
            <a href="#menu5" id="menuLink1" class="pure-menu-link"><span class="menu-item">Settings</span></a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item"><a href="#level1" class="pure-menu-link"><span class="menu-item">Billing</span></a></li>
                <li class="pure-menu-item"><a href="#level2" class="pure-menu-link"><span class="menu-item">Drive</span></a></li>
                <li class="pure-menu-item pure-menu-has-children">
                    <a href="#" id="menuLink1" class="pure-menu-link"><span class="menu-item">Account</span></a>
                    <ul class="pure-menu-children">
                        <li class="pure-menu-item"><a href="#level3" class="pure-menu-link"><span class="menu-item">Notifications</span></a></li>
                        <li class="pure-menu-item"><a href="#level4" class="pure-menu-link"><span class="menu-item">Privacy</span></a></li>
                        <li class="pure-menu-item"><a href="#level5" class="pure-menu-link"><span class="menu-item">Preferences</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Download</a></li>
        <?php
        if(isset($_SESSION['uid'])){
          echo "You are logged in as: ";
          echo $_SESSION['uid'];
          echo "<li class='pure-menu-item'>";
          echo "<a href='logout.php' class='pure-menu-link'>";
          echo "Logout";
          echo "</a>";
          echo "</li>";
        }
        else{
          echo "<li class='pure-menu-item'>";
          echo "<a href='sign.php' class='pure-menu-link'>";
          echo "Login";
          echo "</a>";
          echo "</li>";
          echo "<li class='pure-menu-item'>";
          echo "<a href='register.php' class='pure-menu-link'>";
          echo "Sign up";
          echo "</a>";
          echo "</li>";
        }
        ?>
    </ul>
</nav>

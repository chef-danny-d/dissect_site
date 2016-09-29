<?php include "header.php"; ?>
<?php include "profile_nav.php"; ?>
<?php include "script.php"; ?>

    <body id="acc_body">
        <div id="wrapper">
            <div class="well well-lg">

                <h4 class="title">Security</h4>
                <table class="table table-hover">
                    <tr>
                        <th>Device</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Severity</th>
                    </tr>
                    <tr>
                        <td><i class="fa fa-android" aria-hidden="true"></i></td>
                        <td>Las Vegas, Nevada, USA (IP: 99.184.188.40)</td>
                        <td>07/25/2016 5:01 GMT</td>
                        <td>Failed login attempt </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-firefox" aria-hidden="true"></i></td>
                        <td>San Francisco, California, USA (IP: 99.184.188.40)</td>
                        <td>07/10/2015 10:09 GMT</td>
                        <td class="text-danger">Successful login attempt </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-edge" aria-hidden="true"></i></td>
                        <td>Tokyo, Japan (IP: 101.184.188.45)</td>
                        <td>09/12/2016 7:55 GMT</td>
                        <td>Failed login attempt </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-opera" aria-hidden="true"></i></td>
                        <td>Las Vegas, Nevada, USA (IP: 87.184.188.50)</td>
                        <td>01/25/2016 22:23 GMT</td>
                        <td>Failed login attempt </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-chrome" aria-hidden="true"></i></td>
                        <td>Washington DC, USA (IP: 42.150.133.25)</td>
                        <td>07/01/2016 12:35 GMT</td>
                        <td>Failed login attempt </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-apple" aria-hidden="true"></i></td>
                        <td>Huston, Texas, USA (IP: 88.100.100.10)</td>
                        <td>02/02/2002 2:22 GMT</td>
                        <td class="text-danger">Successful login attempt </td>
                    </tr>
                </table>

                <div class="forgot">
                    <h4>Change password</h4>
                    <form>
                        <div>
                            <p>Your current e-mail is <?php echo $_GET["email"]; ?>. Is it still active ?</p>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Re-Type Password</label>
                            <input type="password" class="form-control" placeholder="Re-type password">
                        </div>
                        <button type="submit" class="btn btn-default">Change password</button>
                    </form>
                </div>

                <div class="twostep">
                    <h4>Two-step verification</h4>
                    <form>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$" placeholder="Phone number" maxlength="10">
                        </div>
                        <button type="submit" class="btn btn-default">Set two-step verification up</button>
                    </form>
                </div>


            </div>
        </div>
    </body>

<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: index.php');}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            #settings{
                margin-top: 100px;
                margin-bottom: 50px;
            }
            #address{
                margin: 0px 0px 50px 0px;
            }
        </style>
        <title>Travel Assistant</title>
    </head>  
    <body style="background: url(img/back1.jpg) no-repeat center;">    
        <?php
        include 'includes/header.php';
        ?>
        <div class="container" id="settings">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
                    <form method="POST" action="setting_script.php">
                        <h2>Change Password</h2><br>
                        <div class="form-group"><?php if(isset($_GET['invalid'])) echo $_GET['invalid'];?>
                            <input type="password" class="form-control" placeholder="Old Password" name="old" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="newpass" required
                                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder=" Confirm New Password" name="confirm" required
                                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form><?php if(isset($_GET['match_error'])) echo $_GET['match_error'];?>
                </div>
            </div>
            <br><hr><br>
            <div class="row" id="address">
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
                    <form method="POST" action="address_script.php">
                        <h2>Change Address</h2><br>
                        <div class="form-group"><?php if(isset($_GET['invalid_add'])) echo $_GET['invalid_add'];?>
                            <input type="password" class="form-control" placeholder="Password" name="old" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="New Address" name="newadd" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form><?php if(isset($_GET['match_error_add'])) echo $_GET['match_error_add'];?>
                </div>
            </div>
        </div>     
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>


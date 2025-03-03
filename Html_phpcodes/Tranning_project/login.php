<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location: product.php');
}
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
            #loginportal{
    margin: 50px 0px;
    padding-top: 50px;
    padding-bottom: 180px;
        </style>
        <title>Travel Assistant</title>
    </head>  
    <body style="background: url(img/back.jpg) no-repeat center;">     
        <?php
        include 'includes/header.php';
        ?>
        <div id="loginportal">
        <div class="row row-style">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to purchase</p>
                        <form method="POST" action="login_submit.php">
                            <div class="form-group"><input  type="email" class="form-control" name="email" required="true" placeholder="Email"></div>
                            <div class="form-group"><input  type="password" class="form-control" name="password" placeholder="Password" required= "true" pattern=".{6,}"></div>
                            <?php if(isset($_GET['email_error'])) echo $_GET['email_error'];?>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer">Don't have an account!<a href="signup.php">Register Now</a></div>
                </div>    
            </div>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

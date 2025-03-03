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
            #signup_portal{
    margin: 50px 0px;
    padding-top: 50px;
    padding-bottom: 100px;
        </style>
        <title>Travel Assistant</title>
    </head>  
    <body style="background: url(img/back.jpg) no-repeat center;">     
        <?php
        include 'includes/header.php';
        ?>
        <div id="signup_portal">
        <div class="row row-style">
            <div class="col-xs-4 col-xs-offset-4">
                <h2><b>SIGN UP</b></h2>                    
                <form  method="POST" action="signup_submit.php">
                    <div class="form-group"><input  type="text" required class="form-control" name="name" placeholder="Name"></div>
                    <div class="form-group"><input  type="email" required class="form-control" name="email" placeholder="Email">
                         <?php if(isset($_GET['match_error'])){echo"<br>"; echo $_GET['match_error'];}?></div>
                    <div class="form-group"><input  type="password" required class="form-control" name="password" placeholder="Password"
                                                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"></div>
                    <div class="form-group"><input  type="text" required class="form-control" name="contact" placeholder="Contact"></div>
                    <div class="form-group"><input  type="text" required class="form-control" name="state" placeholder="State"></div>
                    <div class="form-group"><input  type="text" required class="form-control" name="address" placeholder="Address"></div>
                    <div class="form-group"><input  type="text" required class="form-control" name="zipcode" placeholder="Zip-code"></div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
            </div>
        </div>
        </div>
        <div><?php
        include 'includes/footer.php';
        ?></div>
    </body>
</html>

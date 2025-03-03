<?php
require 'includes/common.php';
if (isset($_SESSION['email'])){
header('location: product.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <title>Travel Assistant</title>
    </head>  
    <body>    
        <?php
        include'includes/header.php';
        include 'includes/banner.php';
        ?>
        <div class="container">
            <div class="row text-center" style="margin: 40px 0px ;">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/sony.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                        <a href="product.php" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/fasttrack.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Fastrack Watch</h3>
                        <p>Price:Rs.12000.00</p>
                        <a href="product.php" class="btn btn-primary btn-block">Buy Now</a>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/multitool.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Leatherman Multitool</h3>
                        <p>Price:Rs.2599.00</p>
                        <a href="product.php" class="btn btn-primary btn-block">Buy Now</a>                    
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/case.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Passport Case</h3>
                        <p>Price:Rs.1000.00</p>
                        <a href="product.php" class="btn btn-primary btn-block">Buy Now</a>                    
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <ul type="circle" class="list-group text-center">
                    <li class="list-group-item "><h4>Venture to most amazing places on earth.</h4></li>
                    <li class="list-group-item "><h4>Experience versatile cultures.</h4></li>
                    <li class="list-group-item "><h4><strong>Or</strong> have a Relaxing vacation just on a single <a href="product.php">click.</a></h4></li>
                </ul>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

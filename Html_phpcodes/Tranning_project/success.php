<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: index.php');}
$id=$_SESSION['to_confirm'];
$trips=$_SESSION['to_confirm_trip'];
foreach ($trips as $trips){
    $update_trip_query="UPDATE trip_order SET status ='Confirmed' WHERE trip_id=$trips";
    $result_trip= mysqli_query($con, $update_trip_query) or die(mysqli_error($con));
}
foreach ($id as $id){
    $update_query="UPDATE orders SET status ='Confirmed' WHERE item_id=$id";
    $result_items= mysqli_query($con, $update_query) or die(mysqli_error($con));
}?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            #message{
            margin-top: 100px;
            }
        </style>
        <title>Travel Assistant</title>
    </head>  
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div id="message">
                <br><br><br><br><br>
                <h3>Your Order has been confirmed</h3>
                <p>Thank you for shopping with us. <a href="product.php">Click here</a> to purchase any other item.</p>
            </div>
        </div>        
        <footer>
            <div class="container">
                Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
            </div>
        </footer>
    </body>
</html>


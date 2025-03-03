<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Travel Assistant</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="css/style.css" type="text/css">        
    </head>  
    <body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
        <div class="container">
            <div class="jumbotron" style="margin-top: 100px;">
                <h1>All you need All in one place</h1>
                <P>Enjoy your trip with Travel Assistant.<br>Let us take care of you.</P>
            </div>            
            <form method="post" action="filt.php">
                        <label for="filter" class="col-xs-2">Filter Search: </label>
                        <div class="col-xs-4"><input  type="radio" value="0" name="filter"> All &emsp;
                        <input  type="radio" value="1" name="filter"> Trip Packages &emsp;
                        <input  type="radio" value="2" name="filter"> Products</div> &emsp;
                        <div class="col-xs-1"><button type="submit" class="btn btn-primary" >Search</button></div>
                </form>
            <br>
            <?php
            if(isset($_GET['search'])){$filtervar=$_GET['search'];} else {$filtervar=0;}
            if($filtervar==0){
                echo '<h2>Destinations :</h2>';
                include 'includes/bannertrip.php';
                echo '<br><br>';
                echo '<h2>Products :</h2>';
                include 'includes/items.php';
            } elseif ($filtervar==1) {
                include 'includes/trip_bookings.php';
            }else{
                include 'includes/items.php';
            } ?>
        </div>
            <?php include 'includes/footer.php';?>
    </body>
</html> 
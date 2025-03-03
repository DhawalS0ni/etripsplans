<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: login.php');
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
        <title>Travel Assistant</title>
    </head>  
    <body>    
        <?php
        include 'includes/header.php';
        $user_select_query="SELECT * FROM `users`";
        $result= mysqli_query($con, $user_select_query);
        $row= mysqli_fetch_array($result);
        ?>
        <div class="container" style="margin-top: 100px;">
            <h3>Account Details</h3><br>
            <div class="row">
                <div class="col-xs-2 col-xs-offset-2">
                    <h4>Name:</h4>
                </div>            
                <div class="col-xs-8">
                    <h4><?php echo $row['name']; ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-xs-offset-2">
                    <h4>Email:</h4>
                </div>            
                <div class="col-xs-8">
                    <h4><?php echo $row['email']; ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-xs-offset-2">
                    <h4>Contact</h4>
                </div>            
                <div class="col-xs-8">
                    <h4><?php echo $row['contact']; ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-xs-offset-2">
                    <h4>Address:</h4>
                </div>            
                <div class="col-xs-8">
                    <h4><?php echo $row['address']; echo ','.$row['state'];echo ','.$row['zip_code']; ?></h4>
                </div>
            </div>
            <hr>
            <h3>Order History</h3>
            <?php
            $no=1;
            $user_id=$_SESSION['user_id'];
            $select_query="SELECT * FROM items INNER JOIN orders WHERE cust_id=$user_id AND orders.item_id=items.item_id AND status='Confirmed'";
            $result_item= mysqli_query($con, $select_query) or die(mysqli_error($con));
            $trip_select="SELECT * FROM trips INNER JOIN trip_order WHERE user_id=$user_id AND trip_order.trip_id=trips.trip_id AND status='Confirmed'";
            $tripresult= mysqli_query($con, $trip_select) or die(mysqli_error($con));
            if (mysqli_num_rows($result)==0 && mysqli_num_rows($tripresult)==0){
                echo 'Nothing to Show.. :(';
            } else {?>
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">  
                <table class="table" style="margin-bottom: 100px;">
                    <tbody>
                    <tr>
                        <th>ItemNumber</th>
                        <th>ItemName</th>
                        <th>Price</th>
                        <th>Number</th>
                    </tr>
                    <?php while ($row1= mysqli_fetch_array($result_item)){?> 
                    <tr>
                        <td><?php echo $no.':'?></td>
                        <td><?php echo $row1['item_name'];?></td>
                        <td><?php echo $row1['price'];?></td>
                        <td><?php echo $row1['number'];?></td>
                    </tr>
                    <?php $no=$no+1;}?>
                    <?php while ($row2= mysqli_fetch_array($tripresult)){
                    ?> 
                    <tr>
                        <td><?php echo $no.':'?></td>
                        <td><?php echo $row2['pack'];?></td>
                        <td><?php echo $row2['price'];?></td>
                        <td><?php echo $row2['travelers'];?></td>
                    </tr>
                    <?php $no=$no+1;}?>
                    </tbody>
            </table>
            </div>
            </div>
            <?php }?>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
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
        ?>
        <?php
        $sum=0;
        $no=1;
        $id = new ArrayObject(array());
        $user_id=$_SESSION['user_id'];
        $select_query="SELECT * FROM items INNER JOIN orders WHERE cust_id=$user_id AND orders.item_id=items.item_id AND status='Added to cart'";
        $result= mysqli_query($con, $select_query) or die(mysqli_error($con));
        $trips=new ArrayObject(array());
        $trip_select="SELECT * FROM trips INNER JOIN trip_order WHERE user_id=$user_id AND trip_order.trip_id=trips.trip_id AND status='Added to cart'";
        $tripresult= mysqli_query($con, $trip_select) or die(mysqli_error($con));
        if (mysqli_num_rows($result)==0 && mysqli_num_rows($tripresult)==0){
            echo '<script>alert("ADD ITEM TO CART FIRST!");window.location.href = "product.php";</script>';
        } else {?>
        <div class="container" style="margin-top: 100px;">
        <div class="col-sm-8 col-sm-offset-2">  
        <table class="table">
                <tbody>
                <tr>
                    <th>ItemNumber</th>
                    <th>ItemName</th>
                    <th>Price</th>
                    <th>Number</th>
                    <th></th>
                </tr>
                <?php while ($row= mysqli_fetch_array($result)){
                $sum= $sum + ($row['number']*$row['price']);
                $id->append($row['item_id']);
                ?> 
                <tr>
                    <td><?php echo $no.':'?></td>
                    <td><?php echo $row['item_name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['number'];?></td>
                    <td><a href=cart-remove.php?id=<?php echo $row[0];?> class=remove_item_link> Remove</a></td>
                </tr>
                <?php $no=$no+1;}?>
                <?php while ($row1= mysqli_fetch_array($tripresult)){
                $sum= $sum + ($row1['travelers']*$row1['price']);
                $trips->append($row1['trip_id']);
                ?> 
                <tr>
                    <td><?php echo $no.':'?></td>
                    <td><?php echo $row1['pack'];?></td>
                    <td><?php echo $row1['price'];?></td>
                    <td><?php echo $row1['travelers'];?></td>
                    <td><a href=cart-remove-trip.php?id=<?php echo $row1[0];?> class=remove_item_link> Remove</a></td>
                </tr>
                <?php $no=$no+1;}?>
                <tr>
                    <td></td>
                    <td> <b>Total Price:</b></td>
                    <td> <?php echo $sum;?></td>
                    <td></td>
                    <td><a href='success.php' class="btn btn-primary"> Confirm Order</a></td>
                <tr>
                </tbody>
        </table>
        </div>
        </div>
        <div style="margin-top: 100px">
        <?php }
        $_SESSION['to_confirm']=$id;
        $_SESSION['to_confirm_trip']=$trips;
        include 'includes/footer.php';
        ?>
        </div>
    </body>
</html>

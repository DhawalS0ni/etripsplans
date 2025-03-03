<?php
function check_if_added_to_cart($item_id){
$con= mysqli_connect('localhost', 'root','','tourism_made');
$user_id=$_SESSION['user_id'];
$check_query="SELECT * FROM orders WHERE item_id='$item_id' AND cust_id ='$user_id' AND status='Added to cart'";
$result= mysqli_query($con,$check_query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>=1){
return 1;
}else{
    return 0;
}}
function check_if_added_to_cart_trip($trip_id){
$con= mysqli_connect('localhost', 'root','','tourism_made');
$user_id=$_SESSION['user_id'];
$check_query="SELECT * FROM trip_order WHERE trip_id='$trip_id' AND user_id ='$user_id' AND status='Added to cart'";
$result= mysqli_query($con,$check_query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>=1){
return 1;
}else{
    return 0;
}}
?>
<?php
include 'includes/common.php';
$id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$delete_query="DELETE FROM orders WHERE cust_id='$user_id' AND item_id='$id'";
$result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location: cart.php');
?>
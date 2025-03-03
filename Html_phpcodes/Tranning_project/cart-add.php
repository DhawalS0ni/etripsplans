<?php
$item_id=$_GET['id'];
$num=$_GET['num'];
include 'includes/common.php';
$user_id=$_SESSION['user_id'];
$insert_query="INSERT INTO `orders`(`cust_id`, `item_id`, `status`,`number`) VALUES ($user_id,$item_id,'Added to cart',$num)";
mysqli_query($con, $insert_query)or die(mysqli_error($con));
header("location: product.php");
?>
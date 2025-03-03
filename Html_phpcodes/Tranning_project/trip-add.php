<?php
$trip_id=$_GET['id'];
$travelers=$_GET['num'];
include 'includes/common.php';
$user_id=$_SESSION['user_id'];
$insert_query="INSERT INTO `trip_order`(`user_id`, `trip_id`, `status`,`travelers`) VALUES ($user_id,$trip_id,'Added to cart',$travelers)";
mysqli_query($con, $insert_query)or die(mysqli_error($con));
header("location: product.php");
?>
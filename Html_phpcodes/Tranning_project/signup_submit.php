<?php
include 'includes/common.php';
$email=$_POST['email'];
$password=$_POST['password'];
if (strlen($password) < 6) {
echo "Password should have at-least 6 characters";
}
$email_validation_query="SELECT 'user_id' FROM users where email='$email'";
$email_validation= mysqli_query($con, $email_validation_query) or die(mysqli_error($con));
if (mysqli_num_rows($email_validation)>0){
   header('location:signup.php?match_error=Email Exist!!Try login.');
} else {
$name=$_POST['name'];
$state=$_POST['state'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$zip=$_POST['zipcode'];
$password= md5($password);
$insert_query="INSERT INTO `users`( `name`, `email`, `password`, `contact`, `state`, `address`, `zip_code`) VALUES ('$name','$email','$password','$contact','$state','$address','$zip')";
$data_insert= mysqli_query($con, $insert_query)or die(mysqli_error($con));
$_SESSION['email']=$email;
$_SESSION['user_id']= mysqli_insert_id($con);
header("location: product.php");
}
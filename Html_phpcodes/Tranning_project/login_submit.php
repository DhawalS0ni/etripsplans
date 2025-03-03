<?php
include 'includes/common.php';
$email=$_POST['email'];
$password=$_POST['password'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
 echo "Incorrect email";}
if (strlen($password) < 6) {
echo "Password should have at-least 6 characters";
}
$email = mysqli_real_escape_string($con, $email);
$password= md5($password);
$password = mysqli_real_escape_string($con, $password);
$id_select_query="SELECT user_id,email FROM users WHERE email='$email' AND password='$password' ";
$user= mysqli_query($con, $id_select_query)or die(mysqli_error($con));
if (mysqli_num_rows($user)==0){
     header('location:login.php?email_error=Wrong Password or Email');;
}else{
    $row= mysqli_fetch_array($user);
    $user_id=$row[0];
    $user_email=$row[1];
    $_SESSION['email']=$user_email;
    $_SESSION['user_id']=$user_id;
    header('location: product.php');
}
?>
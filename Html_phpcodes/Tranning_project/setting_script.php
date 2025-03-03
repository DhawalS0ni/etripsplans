<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: index.php');}
$emailp=$_SESSION['email'];
$old=$_POST['old'];
$new=$_POST['newpass'];
$confirm=$_POST['confirm'];
if($new!=$confirm){
    header('location:setting.php?match_error=New Password does not match');
}else {
    $pass_select_query="SELECT password FROM users WHERE email='$emailp' ";
    $result=mysqli_query($con, $pass_select_query)or die(mysqli_error($con));
    $re= mysqli_fetch_array($result);
    if(md5($old)==$re[0]){
    $new= md5($new);    
    $select_querys="UPDATE users SET password='$new' WHERE email='$emailp'";
    mysqli_query($con, $select_querys) or die(mysqli_error($con));
    header('location:setting.php?match_error=CHANGED');
}else{
    header('location:setting.php?invalid=Incorrect Password');
}}
?>
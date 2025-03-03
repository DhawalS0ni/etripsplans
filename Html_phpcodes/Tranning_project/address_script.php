<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: index.php');}
$emailp=$_SESSION['email'];
$old=$_POST['old'];
$new=$_POST['newadd'];
    $pass_select_query="SELECT password FROM users WHERE email='$emailp' ";
    $result=mysqli_query($con, $pass_select_query)or die(mysqli_error($con));
    $re= mysqli_fetch_array($result);
    if(md5($old)==$re[0]){    
    $select_querys="UPDATE users SET address='$new' WHERE email='$emailp'";
    mysqli_query($con, $select_querys) or die(mysqli_error($con));
    header('location:setting.php?match_error_add=CHANGED');
}else{
    header('location:setting.php?invalid_add=Incorrect Password');
}
?>
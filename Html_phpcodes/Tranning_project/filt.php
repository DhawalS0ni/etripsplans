<?php
include 'includes/common.php';
$var=$_POST['filter'];
if($var==1){
    header('location:product.php?search=1');
} elseif ($var==2) {
    header('location:product.php?search=2');        
} else {
    header('location:product.php?search=0');    
}
?>
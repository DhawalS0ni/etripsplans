<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location: index.php');
}
session_destroy();
header('location: index.php');
?>
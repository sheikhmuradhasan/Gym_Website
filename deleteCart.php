<?php
session_start();
include 'config.php';

if(!isset($_SESSION['user_id'])){
    echo "<script>alert('Please login to your account!');</script>";
    echo "<script>location.href='index.html';</script>";
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];
    $product_id = $_SESSION['product_id'];

    $deleteQuery = 
}


?>


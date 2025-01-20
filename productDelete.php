<?php
    include 'config.php';
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `products` WHERE product_id='$id'";
    mysqli_query($conn,$deleteQuery);
    header('location:productList.php');
?>
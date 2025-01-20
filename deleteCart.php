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

    $deleteQuery = "DELETE FROM `cart` WHERE user_id = '$user_id' AND product_id = '$product_id'";

    if(mysqli_query($conn, $deleteQuery)){
        echo "<script>alert('Product deleted successfully from cart!!')</script>;";
    } else{
        echo "<script>alert('There is an error. Product couldn't deleted.')</script>;";
    }

    echo "<script>location.href='cart.php'</script>;";

}


?>


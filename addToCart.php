<?php
session_start();
include 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to add products to your cart!');</script>";
    echo "<script>location.href='login.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];

    // Check if the product is already in the cart for this user
    $checkQuery = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>alert('This product is already in your cart!');</script>";
    } else {
        // Add product to the cart
        $addQuery = "INSERT INTO cart (user_id, product_id, added_at) VALUES ('$user_id', '$product_id', NOW())";
        if (mysqli_query($conn, $addQuery)) {
            echo "<script>alert('Product added to cart successfully!');</script>";
        } else {
            echo "<script>alert('Failed to add product to cart.');</script>";
        }
    }

    echo "<script>location.href='shop.php';</script>";
}
?>

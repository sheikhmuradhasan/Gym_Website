<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login to view your cart!');</script>";
    echo "<script>location.href='login.php';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "
    SELECT products.product_id, products.name, products.price, products.image
    FROM cart
    INNER JOIN products ON cart.product_id = products.product_id
    WHERE cart.user_id = '$user_id'
";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Your Cart</h1>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image" width="100"></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td>$<?php echo htmlspecialchars($row['price']); ?></td>                            
                            <td>
                                <form action="deleteCart.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($row['product_id']); ?>">
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center mt-4">Your cart is empty.</p>
        <?php endif; ?>
        <div class="card-footer d-flex text-center ">
            <a href="shop.php" class="btn btn-primary w-100 m-2">Back to shop</a>
            <a href="userAccount.php" class="btn btn-primary w-100 m-2">Back to profile</a>
        </div>
        
    </div>
    
</body>
</html>

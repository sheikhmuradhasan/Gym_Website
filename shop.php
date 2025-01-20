<?php
include 'config.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }
    .card:hover {
        transform: scale(1.05);
    }
</style>

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Shop</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php while ($product = mysqli_fetch_assoc($result)): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="Product Image" style="height: 200px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text">$<?php echo htmlspecialchars($product['price']); ?></p>
                            <form action="addToCart.php" method="post">
                                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
                                <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <a href="userAccount.php" class="btn btn-primary w-100 mt-2 mb-2">Back to profile</a>
    </div>
</body>
</html>

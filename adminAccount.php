<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">
                <h1>Account Information</h1>
            </div>
            <div class="card-body p-2">

            <?php
                session_start();
                include 'config.php';

                if (!isset($_SESSION['user_id'])) {
                    echo "<p>You are not logged in. Please <a href='login.php'>log in</a>.</p>";
                    exit();
                }else{
                    $userId = $_SESSION['user_id']; 
                    $allData = mysqli_query($conn, "SELECT * FROM `admin` WHERE id = '$userId'");

                    if ($row = mysqli_fetch_assoc($allData)) {
                        echo "
                        <div class='text-center mb-4'>
                            <img src='./img/userprofile.jpg' width='100' alt='User Profile' class='rounded-circle'>
                        </div>
                        <ul class='list-group'>
                            <li class='list-group-item'><strong>Username:</strong> {$row['username']}</li>
                            <li class='list-group-item'><strong>Email:</strong> {$row['email']}</li>
                            <li class='list-group-item'><strong>Mobile:</strong> {$row['mobile']}</li>
                            <li class='list-group-item'><strong>Role:</strong> {$row['role']}</li>
                        </ul>
                        ";
                    } else {
                        echo "<div class='alert alert-warning text-center'>No data found for the current user.</div>";
                    }
                }
            ?>
            </div>
            <div class="card-footer text-center p-3">
                <h3 class="me-2">You can perform below operations:</h3>
                <a href="index.html" class="btn btn-success me-2">Homepage</a>
                <a href="productList.php" class="btn btn-success me-2">Check Product Lists</a>
                <a href="productInsertForm.php" class="btn btn-success me-2">Add Products</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

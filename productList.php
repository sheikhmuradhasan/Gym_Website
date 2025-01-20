<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container-fluid mt-2">
    <h2 class="text-center mb-3">Product List</h2>
    <div class="d-flex justify-content-between mb-2">
        <a href="adminAccount.php" class="btn btn-success">Back to profile</a>
        <a href="productInsertForm.php" class="btn btn-success">Add new product</a>
    </div>
        <table class="table table-striped table-light table-hover">
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Update</th>
                    <th scope='col'>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config.php';
                    $allData = mysqli_query($conn,"SELECT * FROM `products`");
                    while($row=mysqli_fetch_array($allData)){
                        echo "<tr>
                            <td>$row[product_id]</td>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td><img src='$row[image]' alt='Product Image' width='100px'></td>
                         <td><a class='btn btn-success' href='productUpdateForm.php?id=$row[product_id]'>Update</a></td>
                            <td><a class='btn btn-danger' href='productDelete.php?id=$row[product_id]'>Delete</a></td>
                        </tr>";
                        
                    }
                ?>
            </tbody>
        </table>                   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
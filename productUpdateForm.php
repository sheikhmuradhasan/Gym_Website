<?php
include 'config.php';
$id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `products` WHERE product_id = '$id'";
$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
    <title>Crud Operation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="productUpdateAction.php" method="post" enctype="multipart/form-data">
                    <h1>Update your product</h1>
                    <div class="mb-3">
                        Product Name :
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>"
                            required>

                    </div>
                    <div class="mb-3">
                        Product Price :
                        <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        Product Image :
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="mb-3">
                        <img src="<?php echo $data['image'] ?>" width="200px" alt="">
                    </div>

                    <input type="hidden" name='id' value="<?php echo $data['product_id'] ?>">
                    <input class="btn btn-warning col-12" type="submit" name="update" value="update" id="">
                </form>
                <div class="d-flex justify-content-between mb-2">
                    <a href="adminAccount.php" class="btn btn-success">Back to profile</a>
                    <a href="productInsertForm.php" class="btn btn-success">Add new product</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
    include 'config.php';

    $name= $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

     $imageLocation = $_FILES['image']['tmp_name'];
     $imageName = $_FILES['image']['name'];
     $image_des = "image/".$imageName;
     move_uploaded_file($imageLocation,$image_des);

     $insertQuery = "INSERT INTO `products`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";

     if(mysqli_query($conn,$insertQuery)){
      //echo "<script>alert('Inserted!!! !!')</script>";
        echo "<script>location.href='productList.php'</script>";
     }

?>
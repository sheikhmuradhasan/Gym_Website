<?php
    include 'config.php';
    $a_username = $_POST['a_username'];
    $a_pass = $_POST["a_pass"];
    $a_con_pass = $_POST["a_con_pass"];
    $a_email = $_POST["a_email"];
    $a_mobile = $_POST["a_mobile"];

    $insert_query ="INSERT INTO `admin`(`username`, `email`, `mobile`, `password`) VALUES ( '$a_username','$a_email','$a_mobile','$a_pass')";

    if(!mysqli_query($conn,$insert_query)){
        die("not inserted!!");
    }
    else{
        echo "<script>alert('Inserted!!')</script>";
        echo "<script>location.href='adminLogin.php'</script>";
    } 

    ?>
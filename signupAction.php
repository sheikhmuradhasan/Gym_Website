<?php
    include 'config.php';
    $a_username = $_POST['a_username'];
    $a_pass = $_POST["a_pass"];
    $a_con_pass = $_POST["a_con_pass"];
    $a_email = $_POST["a_email"];
    $a_mobile = $_POST["a_mobile"];

    $insert_query ="INSERT INTO `admin`(`Username`, `Password`, `email`, `phone`) VALUES ( '$a_username','$a_pass','$a_email','$a_mobile')";

    if(!mysqli_query($conn,$insert_query)){
        die("not inserted!!");
    }
    else{
        echo "<script>alert('Inserted!!')</script>";
        echo "<script>location.href='login.php'</script>";
    } 
<?php
    include 'config.php';
    $u_username = $_POST['u_username'];
    $u_pass = $_POST["u_pass"];
    $u_con_pass = $_POST["u_con_pass"];
    $u_email = $_POST["u_email"];
    $u_mobile = $_POST["u_mobile"];

    $insert_query ="INSERT INTO `user`(`username`, `email`, `mobile`, `password`) VALUES ( '$u_username','$u_email','$u_mobile','$u_pass')";

    if(!mysqli_query($conn,$insert_query)){
        die("not inserted!!");
    }
    else{
        echo "<script>alert('Inserted!!')</script>";
        echo "<script>location.href='userLogin.php'</script>";
    } 

    ?>
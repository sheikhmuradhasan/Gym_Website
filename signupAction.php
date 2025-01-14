<?php
    include 'config.php';
    $r_username = $_POST['r_username'];
    $r_pass = $_POST["r_pass"];
    $r_con_pass = $_POST["r_con_pass"];
    $r_email = $_POST["r_email"];
    $r_mobile = $_POST["r_mobile"];

    $insert_query ="INSERT INTO `web`(`Username`, `Password`, `email`, `phone`) VALUES ( '$r_username','$r_pass',   '$r_email','$r_mobile')";

    if(!mysqli_query($conn,$insert_query)){
        die("not inserted!!");
    }
    else{
        echo "<script>alert('Inserted!!')</script>";
        echo "<script>location.href='login.php'</script>";
    } 
<?php

if(isset($_POST['adminLoginForm'])){
    include 'config.php';
    $a_email = $_POST['a_email'];
    $a_password = $_POST['a_password']

    $result = mysqli_query($conn,"SELECT * FROM `admin` WHERE username='$a_username' And password='$a_pass'");

    if(mysqli_num_rows($result)>0){
        $_SESSION['username']=$a_username;
        echo "<script>location.href='index.html'</script>";
    }

    else{
        echo "<script>alert('Invalid email or password')</script>";
        echo "<script>location.href='index.html'</script>";
    }

}

?>
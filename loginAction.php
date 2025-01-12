<?php

if(isset($_POST['loginForm'])){
    include 'config.php';
    $l_email = $_POST['l_email'];
    $l_password = $_POST['l_password']

    $result = mysqli_query();

    if(mysqli_num_rows($result)>0){
        $_SESSION['username']=$l_username;
        echo "<script>location.href='index.html'</script>";
    }

    else{
        echo "<script>alert('Invalid email or password')</script>";
        echo "<script>location.href='index.html'</script>";
    }

}

?>
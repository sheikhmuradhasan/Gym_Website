<?php

if(isset($_POST['userLoginForm'])){
    include 'config.php';
    $u_useremail = $_POST['u_useremail'];
    $u_password = $_POST['u_pass'];
    
    $result = mysqli_query($conn, "SELECT * FROM `user` WHERE (email='$u_useremail' OR username='$u_useremail') AND password='$u_password'");

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);

        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        echo "<script>location.href='index.html'</script>";
    }

    else{
        echo "<script>alert('Invalid email or password')</script>";
        echo "<script>location.href='userRegister.php'</script>";
    }

}
?> 
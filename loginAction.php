<?php

if(isset($_POST['adminLoginForm'])){
    include 'config.php';
    $a_useremail = $_POST['a_useremail'];
    $a_password = $_POST['a_pass'];
    
    $result = mysqli_query($conn, "SELECT * FROM `admin` WHERE (email='$a_useremail' OR username='$a_useremail') AND password='$a_password'");

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
        echo "<script>location.href='adminLogin.php'</script>";
    }

}
else{
    echo "<script>alert('Form not submission Failed!!')</script>";
}

?> 
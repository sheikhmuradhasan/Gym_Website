<?php
session_start();

$userRole = $_SESSION['role'];

if ($userRole === 'admin') {
    header("Location: adminAccount.php");
    exit();
} else if ($userRole === 'user') {
    header("Location: userAccount.php");
    exit();
} else {
    // Handle unknown roles
    echo "Please Login to your account first";
    header("Location: adminLogin.php");
    exit();
}
?>
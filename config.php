<?php 
$servername = "localhost";
$username ="root";
$password="";
$dbName="ironWarriors"

$conn =mysqli_connect($servername,$username,$password,$dbName);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
} else{
    echo "<script>alert('DB Connected!')</script>";
}

?>
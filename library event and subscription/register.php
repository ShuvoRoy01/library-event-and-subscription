<?php
include 'register.html';
include 'databaseconnection.php';

if (isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    echo '$name';
    $query = "INSERT INTO user(name, email, password, address, mobile) VALUES ('$name','$email','$password','$address','$mobile')";
    
    $result = $conn->query($query);
    
}
?>
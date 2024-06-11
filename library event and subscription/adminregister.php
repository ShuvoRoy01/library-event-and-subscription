<?php
include 'adminregister.html';
include 'databaseconnection.php';

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO admin( email, password) VALUES ('$email','$password')";
    
    $result = $conn->query($query);
    
}
?>
<?php

$conn = mysqli_connect("localhost", "root", "", "itlab");

if(!$conn) {
    die("connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

// Authentication
if ($email === $valid_email && $password === $valid_password) {
    echo "<h1>Login Successful</h1>";
} else {
    echo "<h1>Invalid Email or Password</h1>";
}

?>


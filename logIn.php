<?php

$conn = mysqli_connect("localhost", "root", "", "itlab");

if(!$conn) {
    die("connection failed");
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Authentication
if ($email === $valid_email && $password === $valid_password) {
    echo "<h1>Login Successful</h1>";
} else {
    echo "<h1>Invalid Email or Password</h1>";
}

?>

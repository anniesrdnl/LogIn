<?php

$valid_email = "johndoe@gmail.com";
$valid_password = "12345";

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
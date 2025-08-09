<?php

$conn = mysqli_connect("localhost", "root", "", "itlab");

if(!$conn) {
    die("connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = 'password'";
$result = mysqli_query($conn, $sql);

} else {
    echo "<h1>Invalid Email or Password</h1>";
}

?>



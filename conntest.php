<?php
$servername = "198.11.234.73";
$username = "uOhajD8IbnTnp";
$password = "plLA5HRhhiF93";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
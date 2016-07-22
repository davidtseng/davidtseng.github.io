<?php
$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "b83ae8dff5984c";
$password = "e484cf1c";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
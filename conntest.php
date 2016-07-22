<?php
$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "b83ae8dff5984c";
$password = "e484cf1c";
$dbname = "ad_901f7e03732dc89";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<?php
$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "b0f671b73443cd";
$password = "9139d83f";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
?>
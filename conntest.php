<?php
$servername = "198.11.234.73";
$username = "uOhajD8IbnTnp";
$password = "plLA5HRhhiF93";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
?>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root"; // Use the correct password here
$dbname = "user_management";
$port = 3307; // Specify the port number

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

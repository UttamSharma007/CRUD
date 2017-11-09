<?php

$dbHost = 'localhost';
$dbName = 'test';
$dbUsername = 'root';
$dbPassword = '';

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

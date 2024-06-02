<?php
$servername = "localhost";
$username = "root";
$password = "film123456789";
$dbname="IOT";
// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
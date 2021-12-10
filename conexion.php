<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="bdwebbb";

// Create connection
$con = mysqli_connect($servername, $username, $password) or die("error");

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>
<?php
// connection Detels
$servername = "localhost";
$username = "root";
$password = "";
$Database = "portfilo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$Database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
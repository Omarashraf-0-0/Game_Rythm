<?php
$serverName = "localhost";  
$userName = "root";  
$password = "";  
$dbName = "gamerythm";
// Establishes the connection
$conn =  mysqli_connect($serverName, $userName, $password, $dbName);


if (!$conn) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
$servername = "mysql";
$username = "magento";
$password = "123456";
$database = "magento243";
$port = 33066;

$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
/*
try {
  $conn = new PDO("mysql:host=$servername;dbname=$database;port=33066", $username, $password);
  // set the PDO error mode to exception
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}*/
?>

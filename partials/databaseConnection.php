<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=portfolio", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return "Database connection succesfull!";
} catch(PDOException $e) {
  return "Something went very wrong ;-;: " . $e->getMessage();
}
?>
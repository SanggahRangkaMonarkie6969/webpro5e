<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE db_webpro5e";
if ($conn->query($sql) === TRUE) {
  echo "Database db_webpro5e created successfully";
} else {
  echo "Error creating database db_webpro5e: " . $conn->error;
}

// Close connection
$conn->close();
?>

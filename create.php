<?php

$prodName = $_POST['name'];
$prodDesc = $_POST['desc'];
$prodPrice = $_POST['price'];

echo "Product Name: " . $prodName . "<br>";
echo "Product Description: " . $prodDesc . "<br>";  
echo "Product Price: " . $prodPrice . "<br>";
// Create Connection
include 'connect1.php';

// Insert Data
$sql = "INSERT INTO products (name, description, price)
VALUES ('$prodName', '$prodDesc', '$prodPrice')";

if ($conn->query($sql) == TRUE) {
  // echo "New product added successfully";
  // redirect to file read_one.php (view data)
  header("Location: read_one.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
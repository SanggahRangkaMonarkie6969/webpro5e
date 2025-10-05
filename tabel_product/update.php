<?php

$prodDescid = $_POST['id'];
$prodName = $_POST['name'];
$prodDesc = $_POST['desc'];
$prodPrice = $_POST['price'];

// Create Connection
include 'connect1.php';

// Update Data
$sql = "UPDATE products 
        SET name = '$prodName',
            description = '$prodDesc', 
            price = $prodPrice
        WHERE id = $prodDescid";

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully.<br>";
    echo "<a href='read_all.php'>Back to Product List</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br><a href='read_all.php'>Back to Product List</a>";
}

// Close connection
mysqli_close($conn);
?>
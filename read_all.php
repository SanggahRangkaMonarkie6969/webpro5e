<?php
include 'connect1.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo "<a href='form_input_product.php'>Add Product</a><br><br>";

    // View data using table
    echo "<table border='1'>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Created</th>
            <th>Action</th>
        </tr>";
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr> 
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['description'] . "</td>
            <td>" . $row['price'] . "</td>
            <td>" . $row['created'] . "</td>
            <td>
                <a href='form_edit_product.php?id=" . $row['id'] . "'>Edit</a> | 
                <a href='form_delete_product.php?id=" . $row['id'] . "'>Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results - Table is empty";
}

$conn->close();
?>
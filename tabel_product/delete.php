<?php
// create connection
include 'connect1.php';

$sql = "DELETE FROM products WHERE id=" . $_GET[id];
if ($conn->query($sql) === TRUE) {
    header("Location: read_all.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
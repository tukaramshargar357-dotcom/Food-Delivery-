<?php
include("../db/db.php");

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "INSERT INTO order_status (id, name) VALUES ('$id', '$name')";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
} else {
    echo "Error: " . $conn->error;
}
?>
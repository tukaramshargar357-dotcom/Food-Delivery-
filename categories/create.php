<?php
include("../db/db.php");

$id = $_POST["id"] ?? 0;
$restaurant_id = $_POST["restaurant_id"] ?? '';
$name = $_POST["name"] ?? '';

$sql = "INSERT INTO categories (id, restaurant_id, name) VALUES ($id, '$restaurant_id', '$name')";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
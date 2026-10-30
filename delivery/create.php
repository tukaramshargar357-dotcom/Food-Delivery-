<?php

include("../db/db.php");

$id = $_POST["id"] ?? 0;
$order_id = $_POST["order_id"] ?? '';
$delivery_boy_id = $_POST["delivery_boy_id"] ?? '';
$status_id = $_POST["status_id"] ?? '';
$assigned_at = $_POST["assigned_at"] ?? '';
$delivered_at = $_POST["delivered_at"] ?? '';

$sql = "INSERT INTO delivery 
        (id, order_id, delivery_boy_id, status_id, assigned_at, delivered_at) 
        VALUES 
        ($id, '$order_id', '$delivery_boy_id', '$status_id', '$assigned_at', '$delivered_at')";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

?>
<?php

include("../db/db.php");

$id = $_POST['id'];
$order_id = $_POST['order_id'];
$delivery_boy_id = $_POST['delivery_boy_id'];
$status_id = $_POST['status_id'];
$assigned_at = $_POST['assigned_at'];
$delivered_at = $_POST['delivered_at'];

$sql = "UPDATE delivery SET 
        order_id = '$order_id',
        delivery_boy_id = '$delivery_boy_id',
        status_id = '$status_id',
        assigned_at = '$assigned_at',
        delivered_at = '$delivered_at'
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

?>

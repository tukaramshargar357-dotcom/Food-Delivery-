<?php
include("../db/db.php");

$id = $_POST['id'];
$order_id = $_POST['order_id'];
$payment_method_id = $_POST['payment_method_id'];
$payment_status_id = $_POST['payment_status_id'];
$transaction_id = $_POST['transaction_id'];
$paid_at = $_POST['paid_at'];

// Check duplicate ID
$check = "SELECT id FROM payments WHERE id='$id'";
$result = $conn->query($check);

if ($result && $result->num_rows > 0) {
    $sql = "SELECT MAX(id) AS max_id FROM payments";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $id = $row['max_id'] + 1;
}

// Insert data
$insert = "INSERT INTO payments 
(id, order_id, payment_method_id, payment_status_id, transaction_id, paid_at)
VALUES 
('$id', '$order_id', '$payment_method_id', '$payment_status_id', '$transaction_id', '$paid_at')";

if ($conn->query($insert) === TRUE) {
    echo "<script>alert('Payment added successfully'); window.location='table.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
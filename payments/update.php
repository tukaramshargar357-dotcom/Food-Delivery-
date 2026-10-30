<?php
include("../db/db.php");

$id = $_POST['id'];
$order_id = $_POST['order_id'];
$payment_method_id = $_POST['payment_method_id'];
$payment_status_id = $_POST['payment_status_id'];
$transaction_id = $_POST['transaction_id'];
$paid_at = $_POST['paid_at'];

$sql = "UPDATE payments SET 
order_id='$order_id',
payment_method_id='$payment_method_id',
payment_status_id='$payment_status_id',
transaction_id='$transaction_id',
paid_at='$paid_at'
WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
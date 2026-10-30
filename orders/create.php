<?php
include("../db/db.php");

$id = $_POST['id'];
$user_id = $_POST['user_id'];
$restaurant_id = $_POST['restaurant_id'];
$address_id = $_POST['address_id'];
$status_id = $_POST['status_id'];
$total_amount = $_POST['total_amount'];

$check = "SELECT id FROM orders WHERE id='$id'";
$result = $conn->query($check);

if ($result && $result->num_rows > 0) {
    $sql = "SELECT MAX(id) AS max_id FROM orders";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $id = $row['max_id'] + 1;
}

$insert = "INSERT INTO orders (id, user_id, restaurant_id, address_id, status_id, total_amount)
VALUES ('$id', '$user_id', '$restaurant_id', '$address_id', '$status_id', '$total_amount')";

if ($conn->query($insert) === TRUE) {
    header("Location: table.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
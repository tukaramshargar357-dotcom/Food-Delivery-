<?php
include("../db/db.php");

$id = $_POST['id'];
$order_id = $_POST['order_id'];
$menu_item_id = $_POST['menu_item_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$check = "SELECT id FROM order_items WHERE id = '$id'";
$result = $conn->query($check);

if ($result && $result->num_rows > 0) {

    $sql = "SELECT MAX(id) AS max_id FROM order_items";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $id = $row['max_id'] + 1;
}

$insert = "INSERT INTO order_items (id, order_id, menu_item_id, quantity, price)
VALUES ('$id', '$order_id', '$menu_item_id', '$quantity', '$price')";

if ($conn->query($insert) === TRUE) {
    echo "<script>alert('Data inserted successfully'); window.location='table.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
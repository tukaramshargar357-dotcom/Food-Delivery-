<?php
include("../db/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $order_id = $_POST['order_id'];
    $menu_item_id = $_POST['menu_item_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "UPDATE order_items SET
        order_id='$order_id',
        menu_item_id='$menu_item_id',
        quantity='$quantity',
        price='$price'
        WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Updated Successfully'); window.location='table.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
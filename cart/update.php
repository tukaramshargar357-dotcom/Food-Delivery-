<?php

include("../db/db.php");

$id = $_POST['id'];
$user_id = $_POST['user_id'];
$menu_item_id = $_POST['menu_item_id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE cart SET user_id = '$user_id',menu_item_id = '$menu_item_id',quantity = '$quantity'WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

?>
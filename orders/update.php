<?php
include("../db/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $restaurant_id = $_POST['restaurant_id'];
    $address_id = $_POST['address_id'];
    $status_id = $_POST['status_id'];
    $total_amount = $_POST['total_amount'];

    $sql = "UPDATE orders SET
        user_id='$user_id',
        restaurant_id='$restaurant_id',
        address_id='$address_id',
        status_id='$status_id',
        total_amount='$total_amount'
        WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Order Updated Successfully'); window.location='table.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<?php

include("../db/db.php");

$id = $_POST['id'];
$restaurant_id = $_POST['restaurant_id'];
$name = $_POST['name'];

$sql = "UPDATE categories SET restaurant_id = '$restaurant_id',name = '$name'WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

?>
<?php
include("../db/db.php");

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE payment_methods SET name='$name' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
} else {
    echo "Error: " . $conn->error;
}
?>
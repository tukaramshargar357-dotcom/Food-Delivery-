<?php
include("../db/db.php");

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "INSERT INTO payment_methods (id, name) VALUES ('$id', '$name')";

if ($conn->query($sql) === TRUE) {
    header("Location: table.php");
} else {
    echo "Error: " . $conn->error;
}
?>
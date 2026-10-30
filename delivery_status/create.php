<?php

include("../db/db.php");

$id = $_POST["id"] ?? 0;
$name = $_POST["name"] ?? '';

$sql = "INSERT INTO delivery_status (id, name) 
VALUES ($id, '$name')";

if ($conn->query($sql)) {
    header("Location: table.php");
    exit;
} else {
    echo $conn->error;
}

?>
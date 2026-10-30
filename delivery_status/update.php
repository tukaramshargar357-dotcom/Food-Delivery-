<?php

include("../db/db.php");

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE delivery_status SET name='$name' WHERE id=$id";

$conn->query($sql);

header("Location: table.php");

?>
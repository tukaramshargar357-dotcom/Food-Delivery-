<?php
include("../db/db.php");

$id = $_POST['id'];

$sql = "UPDATE restaurants SET
name='{$_POST['name']}',
city='{$_POST['city']}',
rating='{$_POST['rating']}'
WHERE id='$id'";

$conn->query($sql);

header("Location: table.php");
?>
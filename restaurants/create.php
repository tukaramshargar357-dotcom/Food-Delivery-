<?php
include("../db/db.php");

$id = $_POST['id'];

$check = "SELECT id FROM restaurants WHERE id='$id'";
$result = $conn->query($check);

if ($result->num_rows > 0) {
    $res = $conn->query("SELECT MAX(id) AS max_id FROM restaurants");
    $row = $res->fetch_assoc();
    $id = $row['max_id'] + 1;
}

$sql = "INSERT INTO restaurants 
(id,name,owner_id,address,city,rating,is_open,created_at)
VALUES 
('$id','{$_POST['name']}','{$_POST['owner_id']}','{$_POST['address']}','{$_POST['city']}','{$_POST['rating']}','{$_POST['is_open']}','{$_POST['created_at']}')";

$conn->query($sql);

header("Location: table.php");
?>
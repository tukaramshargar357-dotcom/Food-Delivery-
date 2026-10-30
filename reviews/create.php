<?php
include("../db/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id']; 
    $user_id = $_POST['user_id'];
    $restaurant_id = $_POST['restaurant_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $created_at = $_POST['created_at'];

    $sql = "INSERT INTO reviews 
    (id, user_id, restaurant_id, rating, comment, created_at)
    VALUES 
    ('$id','$user_id','$restaurant_id','$rating','$comment','$created_at')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inserted Successfully'); window.location='table.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
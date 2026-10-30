<?php
include("../db/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $restaurant_id = $_POST['restaurant_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $is_available = $_POST['is_available'];

    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $new_name = time() . "_" . $image_name;
    $folder = "uploads/" . $new_name;

    move_uploaded_file($tmp_name, $folder);

    $sql = "INSERT INTO menu_items 
    (id, restaurant_id, category_id, name, description, price, is_available, image)
    VALUES 
    ('$id','$restaurant_id','$category_id','$name','$description','$price','$is_available','$new_name')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inserted Successfully'); window.location='table.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
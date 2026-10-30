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

    $old_image = $_POST['old_image'];

    // Check if new image uploaded
    if ($_FILES['image']['name'] != "") {

        $image_name = time() . "_" . $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $folder = "uploads/" . $image_name;

        move_uploaded_file($tmp_name, $folder);

    } else {
        $image_name = $old_image;
    }

    $sql = "UPDATE menu_items SET
        restaurant_id='$restaurant_id',
        category_id='$category_id',
        name='$name',
        description='$description',
        price='$price',
        is_available='$is_available',
        image='$image_name'
        WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Updated Successfully'); window.location='table.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
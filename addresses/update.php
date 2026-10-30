<?php

    include("../db/db.php");
    
$id = $_POST["id"];
$user_id = $_POST["user_id"];
$address_line = $_POST["address_line"];
$city = $_POST["city"];
$state = $_POST["state"];
$pincode = $_POST["pincode"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
   
    // $sql = "UPDATE `my_table` SET `name`='".$name."',`mobile`='".$mobile."' WHERE id = ".$id;

    $sql = "UPDATE `addresses` SET `user_id`='".$user_id."',`address_line`='".$address_line."',`city`='".$city."',`state`='".$state."',`pincode`='".$pincode."',`latitude`='".$latitude."',`longitude`='".$longitude."' WHERE id = ".$id;


    if ($conn->query($sql) === TRUE) {
        // echo "record updated successfully";
        // Redirect to a specific page
        header("Location: table.php");
        exit; // Stop further script execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    // echo "<pre>";
    // print_r($result_data);
    // echo "</pre>";


   
?>

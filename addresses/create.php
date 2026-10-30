<?php
include("../db/db.php");
 	

$id = $_POST["id"] ?? 0;
$user_id = $_POST["user_id"] ?? '';
$address_line = $_POST["address_line"] ?? '';
$city = $_POST["city"] ?? '';
$state = $_POST["state"] ?? '';
$pincode = $_POST["pincode"] ?? '';
$latitude = $_POST["latitude"] ?? '';
$longitude = $_POST["longitude"] ?? '';

$sql = "INSERT INTO `addresses`(`id`, `user_id`, `address_line`, `city`, `state`, `pincode`, `latitude`, `longitude`) VALUES ($id,'". $user_id."','". $address_line."','". $city."','". $state."','". $pincode."','". $latitude."','". $longitude."')";

//Execute and Check Query
if ($conn->query($sql) === TRUE) {
 	echo "New record created successfully";
	// Redirect to a specific page
	header("Location: table.php");
	exit; // Stop further script execution
 } else {
 	echo "Record not created.";
  	echo "Error: " . $sql . "<br>" . $conn->error;
 }




?>
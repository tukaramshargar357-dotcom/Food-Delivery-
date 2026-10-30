<?php
include("../db/db.php");

$id = $_POST["id"] ?? 0;
$user_id = $_POST["user_id"] ?? '';
$menu_item_id = $_POST["menu_item_id"] ?? '';
$menu_item_id = $_POST["menu_item_id"] ?? '';
$quantity = $_POST["quantity"] ?? 0;

$sql = "INSERT INTO `cart`(`id`, `user_id`, `menu_item_id`, `quantity`) VALUES ($id,'". $user_id."','". $menu_item_id."',$quantity)";

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
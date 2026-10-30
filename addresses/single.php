<?php
include("../db/db.php");

$user_id = 1;
$user_id = $_GET['id'];


$sql = "SELECT * FROM `addresses` WHERE id=".$user_id;
$result_data = $conn->query($sql);
// print_r($result_data);
// echo "<br>";
// echo "<br>";
if ($result_data->num_rows > 0) {
  // Fetch the data as an associative array
  $row_data = $result_data->fetch_assoc();
//   print_r($row_data);
// echo "<br>";
// echo "<br>";


  
$id = $row_data["id"];
$user_id = $row_data["user_id"];
$address_line = $row_data["address_line"];
$city = $row_data["city"];
$state = $row_data["state"];
$pincode = $row_data["pincode"];
$latitude = $row_data["latitude"];
$longitude = $row_data["longitude"];

}


?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOOD_DELIVERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-info">

  <?php  include("../nav.php");  ?>
  
    <div class="container py-5">
        <div class="row py-5 ">
            <div class="col-md-3"></div>
            <div class="col-6 bg-info-subtle py-5 px-5">
                <h1><u>VIEW Address</u></h1>

                <form class="row g-3" action="update.php" method="post" >
  <div class="col-md-2">
    <label for="id" class="form-label">ID</label>
    <span>= <?php echo $id; ?></span>
  </div>

  <div class="col-12">
    <label for="user_id" class="form-label">User Id</label>
    <span>= <?php echo $user_id; ?></span>
  </div>

  <div class="col-md-12">
    <label for="address_line" class="form-label">Address Line</label>
    <span>= <?php echo $address_line; ?></span>
  </div>

  <div class="col-12">
    <label for="city" class="form-label">City</label>
    <span>= <?php echo $city; ?></span>
  </div>
 
  <div class="col-12">
    <label for="state" class="form-label">State</label>
    <span>= <?php echo $state; ?></span>
  </div>

  <div class="col-12">
    <label for="pincode" class="form-label">Pincode</label>
    <span>= <?php echo $pincode; ?></span>
  </div>

  <div class="col-12">
    <label for="latitude" class="form-label">Latitude</label>
    <span>= <?php echo $latitude; ?></span>
  </div>

  <div class="col-12">
    <label for="longitude" class="form-label">Longitude</label>
    <span>= <?php echo $longitude; ?></span>
  </div>

  
 
  <div class="col-12">
    <a class="btn btn-success mb-3" href="http://localhost/projet/food-delivery/addresses/table.php" role="button">Go back</a>
  </div>
</form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
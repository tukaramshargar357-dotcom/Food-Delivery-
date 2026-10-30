<?php

include("../db/db.php");

$user_id = 1;
$user_id = $_GET['id'];


$sql = "SELECT * FROM `addresses` WHERE id=".$user_id;
$result_data = $conn->query($sql);
$designation_result = $conn->query("SELECT id, name FROM users ORDER BY name ASC");

if ($result_data->num_rows > 0) {
  // Fetch the data as an associative array
  $row_data = $result_data->fetch_assoc();


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

<?php
  include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Edit Addresses</h3>
<form class="row g-3" action="update.php" method="post" >
  <div class="col-md-12">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" readonly id="id" name="id" value="<?php echo $id; ?>">
  </div>
  <div class="col-md-12">
    <label for="user_id" class="form-label">User</label>
    <select class="form-select" id="user_id" name="user_id"> 
        <?php
        if ($designation_result && $designation_result->num_rows > 0) {
            while ($designation_row = $designation_result->fetch_assoc()) {
        ?>
        <option value="<?= $designation_row['id'] ?>" <?= ((string)$user_id === (string)$designation_row['id']) ? 'selected' : '' ?>><?= htmlspecialchars($designation_row['name']) ?></option>
        <?php
            }
        }
        ?>
    </select>
  </div>
  <div class="col-md-12">
    <label for="address_line" class="form-label">Address Line</label>
    <input type="text" class="form-control" id="address_line" name="address_line" value="<?php echo $address_line; ?>">
  </div>
  <div class="col-12">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="enter name" value="<?php echo $city; ?>">
  </div>
  <div class="col-12">
    <label for="state" class="form-label">State</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="enter name" value="<?php echo $state; ?>">
  </div>
  <div class="col-12">
    <label for="pincode" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="enter name" value="<?php echo $pincode; ?>">
  </div>
  <div class="col-12">
    <label for="latitude" class="form-label">Latitude</label>
    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="enter name" value="<?php echo $latitude; ?>">
  </div>
  <div class="col-12">
    <label for="longitude" class="form-label">Longitude</label>
    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="enter name" value="<?php echo $longitude; ?>">
  </div>
  
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
    <a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/addresses/table.php" role="button">Go back</a>
  </div>
  </div>
</form>

<?php
  include ("../template/footer.php");
?>
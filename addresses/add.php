<?php  

 include("../db/db.php");

$sql = "SELECT MAX(id) AS highest_score FROM addresses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // echo "The highest score is: " . $row['highest_score'];
} else {
    echo "No results found.";
}
$maxid = $row['highest_score'] + 1;

$designation_sql = "SELECT id, name FROM users ORDER BY name ASC";
$designation_result = $conn->query($designation_sql);
?>

<?php
  include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Add Addresses</h3>

<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/addresses/table.php" role="button">See data</a>
<form class="row g-3" action="create.php" method="post" >
  <div class="col-md-2">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" readonly id="id" name="id" value="<?php echo $maxid ?>" >
  </div>
  <div class="col-12">
    <label for="user_id" class="form-label">User Id</label>
    <select class="form-select" aria-label="Default select example" id="user_id" name="user_id">
      <option selected value="">--SELECT--</option>
      <?php
        if ($designation_result && $designation_result->num_rows > 0) {
            while ($designation_row = $designation_result->fetch_assoc()) {
        ?>
            <option value="<?= $designation_row['id'] ?>"><?= $designation_row['name'] ?></option>
        <?php
            }
        }
        ?>
    </select>
  </div>
  <div class="col-md-12">
    <label for="address_line" class="form-label">Address Line</label>
    <input type="text" class="form-control" id="address_line" name="address_line" placeholder="enter address line">
  </div>
  <div class="col-12">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="enter city" >
  </div>
  <div class="col-12">
    <label for="state" class="form-label">State</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="enter state" >
  </div>
  <div class="col-12">
    <label for="pincode" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="enter pincode" >
  </div>
  <div class="col-12">
    <label for="latitude" class="form-label">Latitude</label>
    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="enter latitude" >
  </div>
  <div class="col-12">
    <label for="longitude" class="form-label">Longitude</label>
    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="enter longitude" >
  </div>
  
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
  </div>
</form>

<?php
  include ("../template/footer.php");
?>

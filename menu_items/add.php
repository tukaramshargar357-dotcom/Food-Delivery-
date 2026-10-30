<?php  
 include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM menu_items";
$result = $conn->query($sql);

$maxid = 1;

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maxid = ($row['max_id'] != null) ? $row['max_id'] + 1 : 1;
}
?>


<?php
    include ("../template/hedder.php");
?>
<h3 class="text text-center">Add Menu Items</h3>

                <a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/menu_items/table.php">See data</a>

                <form class="row g-3" action="create.php" method="post" enctype="multipart/form-data">

  <div class="col-12">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $maxid ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Restaurant ID</label>
    <input type="text" class="form-control" name="restaurant_id">
  </div>

  <div class="col-12">
    <label class="form-label">Category ID</label>
    <input type="text" class="form-control" name="category_id">
  </div>

  <div class="col-12">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter item name">
  </div>

  <div class="col-12">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="description" placeholder="enter description"></textarea>
  </div>

  <div class="col-12">
    <label class="form-label">Price</label>
    <input type="text" class="form-control" name="price">
  </div>

  <div class="col-12">
    <label class="form-label">Availability</label>
    <select class="form-control" name="is_available">
      <option value="1">---Select---</option>
      <option value="1">Available</option>
      <option value="0">Not Available</option>
    </select>
  </div>

  <div class="col-12">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
  </div>

</form>

<?php
    include ("../template/footer.php");
?>
<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM menu_items WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<?php
    include ("../template/hedder.php");
?>
<h3 class="text-secondary text-center">Edit Menu Items</h3>
<form class="row g-3" action="update.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">

<div class="col-12">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">Restaurant ID</label>
<input type="text" class="form-control" name="restaurant_id" value="<?php echo $row['restaurant_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">Category ID</label>
<input type="text" class="form-control" name="category_id" value="<?php echo $row['category_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">Name</label>
<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
</div>

<div class="col-12">
<label class="form-label">Description</label>
<textarea class="form-control" name="description"><?php echo $row['description']; ?></textarea>
</div>

<div class="col-12">
<label class="form-label">Price</label>
<input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
</div>

<div class="col-12">
<label class="form-label">Availability</label>
<select class="form-control" name="is_available">
<option value="1" <?php if($row['is_available']==1) echo "selected"; ?>>Available</option>
<option value="0" <?php if($row['is_available']==0) echo "selected"; ?>>Not Available</option>
</select>
</div>

<div class="col-12">
<label class="form-label">Current Image</label><br>
<img src="uploads/<?php echo $row['image']; ?>" width="100">
</div>

<div class="col-12">
<label class="form-label">Change Image</label>
<input type="file" class="form-control" name="image">
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary mb-3">Update</button>
<a class="btn btn-success mb-3" href="table.php">Go back</a>
</div>

</form>


<?php
    include ("../template/footer.php");
?>

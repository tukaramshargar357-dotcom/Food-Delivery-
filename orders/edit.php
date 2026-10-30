<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM orders WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Edit Order</h3>
<form class="row g-3" action="update.php" method="post">

<div class="col-12">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">User ID</label>
<input type="text" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">Restaurant ID</label>
<input type="text" class="form-control" name="restaurant_id" value="<?php echo $row['restaurant_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">Address ID</label>
<input type="text" class="form-control" name="address_id" value="<?php echo $row['address_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">Status ID</label>
<input type="text" class="form-control" name="status_id" value="<?php echo $row['status_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">Total Amount</label>
<input type="text" class="form-control" name="total_amount" value="<?php echo $row['total_amount']; ?>">
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary mb-3">Update</button>
<a class="btn btn-success mb-3" href="table.php">Go back</a>
</div>

</form>

<?php
include("../template/footer.php");
?>

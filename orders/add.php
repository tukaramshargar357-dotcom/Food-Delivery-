<?php  
include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM orders";
$result = $conn->query($sql);

$maxid = 1;

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maxid = ($row['max_id'] != null) ? $row['max_id'] + 1 : 1;
}
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Add Order</h3>
<a class="btn btn-success mb-3" href="table.php">See Data</a>

<form class="row g-3" action="create.php" method="post">

<div class="col-12">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $maxid; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">User ID</label>
<input type="number" class="form-control" name="user_id" required>
</div>

<div class="col-12">
<label class="form-label">Restaurant ID</label>
<input type="number" class="form-control" name="restaurant_id" required>
</div>

<div class="col-12">
<label class="form-label">Address ID</label>
<input type="number" class="form-control" name="address_id" required>
</div>

<div class="col-12">
<label class="form-label">Status ID</label>
<input type="number" class="form-control" name="status_id" required>
</div>

<div class="col-12">
<label class="form-label">Total Amount</label>
<input type="number" step="0.01" class="form-control" name="total_amount" required>
</div>

<div class="col-1 text-center">
<button type="submit" class="btn btn-primary px-4">Submit</button>
</div>

</form>


<?php
include("../template/footer.php");
?>
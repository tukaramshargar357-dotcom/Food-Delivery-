<?php  
include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM restaurants";
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
<h3 class="text-secondary text-center">Add Restaurant</h3>

<a class="btn btn-success mb-3" href="table.php">See data</a>

<form class="row g-3" action="create.php" method="post">

<div class="col-md-2">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $maxid; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">Name</label>
<input type="text" class="form-control" name="name">
</div>

<div class="col-12">
<label class="form-label">Owner ID</label>
<input type="text" class="form-control" name="owner_id">
</div>

<div class="col-12">
<label class="form-label">Address</label>
<input type="text" class="form-control" name="address">
</div>

<div class="col-12">
<label class="form-label">City</label>
<input type="text" class="form-control" name="city">
</div>

<div class="col-12">
<label class="form-label">Rating</label>
<input type="text" class="form-control" name="rating">
</div>

<div class="col-12">
<label class="form-label">Is Open</label>
<input type="text" class="form-control" name="is_open">
</div>

<div class="col-12">
<label class="form-label">Created At</label>
<input type="datetime-local" class="form-control" name="created_at">
</div>

<div class="col-12">
<button class="btn btn-primary mb-3">Submit</button>
</div>

</form>



<?php
    include ("../template/footer.php");
?>

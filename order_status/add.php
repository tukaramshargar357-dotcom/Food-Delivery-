<?php  
include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM  order_status";
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

<h2 class="mb-4 text-center">Add Order status</h2>

<a class="btn btn-success mb-3" href="table.php">See Data</a>

<form class="row g-3" action="create.php" method="post">

<div class="col-md-3">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $maxid; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">Name</label>
<input type="text" class="form-control" name="name" required placeholder="Enter name">
</div>

<div class="col-1 text-center">
<button type="submit" class="btn btn-primary mb-3">Submit</button>
</div>

</form>

<?php
  include "../template/footer.php"
?>
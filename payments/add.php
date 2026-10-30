<?php  
include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM payments";
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

<h2 class="mb-4 text-center">Add Payment</h2>
<a class="btn btn-success mb-3" href="table.php">See data</a>

<form class="row g-3" action="create.php" method="post">

<div class="col-md-2">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $maxid; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">Order ID</label>
<input type="number" class="form-control" name="order_id" required>
</div>

<div class="col-12">
<label class="form-label">Payment Method ID</label>
<input type="number" class="form-control" name="payment_method_id" required>
</div>

<div class="col-12">
<label class="form-label">Payment Status ID</label>
<input type="number" class="form-control" name="payment_status_id" required>
</div>

<div class="col-12">
<label class="form-label">Transaction ID</label>
<input type="text" class="form-control" name="transaction_id" required>
</div>

<div class="col-12">
<label class="form-label">Paid At</label>
<input type="datetime-local" class="form-control" name="paid_at" required>
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary mb-3">Submit</button>
</div>

</form>

<?php
    include ("../template/footer.php");
?>
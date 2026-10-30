<?php
include("../db/db.php");

$id = intval($_GET['id']);

$sql = "SELECT * FROM payments WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $order_id = $row['order_id'];
    $payment_method_id = $row['payment_method_id'];
    $payment_status_id = $row['payment_status_id'];
    $transaction_id = $row['transaction_id'];
    $paid_at = $row['paid_at'];
}
?>


<?php
    include ("../template/hedder.php");
?>

<h2 class="mb-4 text-center">Edit Payment</h2>
<form class="row g-3" action="update.php" method="post">

<div class="col-md-3">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">Order ID</label>
<input type="number" class="form-control" name="order_id" value="<?php echo $order_id; ?>" required>
</div>

<div class="col-12">
<label class="form-label">Payment Method ID</label>
<input type="number" class="form-control" name="payment_method_id" value="<?php echo $payment_method_id; ?>" required>
</div>

<div class="col-12">
<label class="form-label">Payment Status ID</label>
<input type="number" class="form-control" name="payment_status_id" value="<?php echo $payment_status_id; ?>" required>
</div>

<div class="col-12">
<label class="form-label">Transaction ID</label>
<input type="text" class="form-control" name="transaction_id" value="<?php echo $transaction_id; ?>" required>
</div>

<div class="col-12">
<label class="form-label">Paid At</label>
<input type="datetime-local" class="form-control" name="paid_at" 
value="<?php echo date('Y-m-d\TH:i', strtotime($paid_at)); ?>" required>
</div>

<div class="col-12 text-center">
<button type="submit" class="btn btn-primary px-4">Update</button>
<a href="table.php" class="btn btn-secondary px-4">Cancel</a>
</div>

</form>

<?php
    include ("../template/footer.php");
?>

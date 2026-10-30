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
} else {
    echo "No record found";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>View Payment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info">

<?php include("../nav.php"); ?>

<div class="container py-5">
<div class="row py-5">
<div class="col-md-3"></div>

<div class="col-6 bg-info-subtle py-5 px-5">
<h2 class="text-center mb-4">Payment Details</h2>

<div class="mb-3">
<label class="form-label">ID</label>
<span>= <?php echo $id; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Order ID</label>
<span>= <?php echo $order_id; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Payment Method ID</label>
<span>= <?php echo $payment_method_id; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Payment Status ID</label>
<span>= <?php echo $payment_status_id; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Transaction ID</label>
<span>= <?php echo $transaction_id; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Paid At</label>
<span>= <?php echo $paid_at; ?></span>
</div>

<div class="mt-3">
<a class="btn btn-success" href="table.php">Go Back</a>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
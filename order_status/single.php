<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT id, name FROM order_status WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>View Order Status</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info">

<?php include("../nav.php"); ?>

<div class="container py-5">
<div class="row py-5">
<div class="col-md-3"></div>

<div class="col-6 bg-info-subtle py-5 px-5 rounded shadow">
<h2 class="text-center mb-4">Order Status Details</h2>

<a class="btn btn-success mb-3" href="table.php">Back</a>

<div class="mb-3">
<label class="form-label">ID</label>
<input type="text" class="form-control" value="<?php echo $row['id']; ?>" readonly>
</div>

<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
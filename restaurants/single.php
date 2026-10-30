<?php
include("../db/db.php");

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM restaurants WHERE id='$id'");
$row = $res->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FOOD_DELIVERY</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info">

<?php include("../nav.php"); ?>

<div class="container py-5">
<div class="row py-5">
<div class="col-md-3"></div>

<div class="col-6 bg-info-subtle py-5 px-5">
<h1><u>View Restaurant</u></h1>

<div class="mb-3">
<label class="form-label">ID</label>
<span>= <?php echo $row['id']; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Name</label>
<span>= <?php echo $row['name']; ?></span>
</div>

<div class="mb-3">
<label class="form-label">City</label>
<span>= <?php echo $row['city']; ?></span>
</div>

<div class="mb-3">
<label class="form-label">Rating</label>
<span>= <?php echo $row['rating']; ?></span>
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
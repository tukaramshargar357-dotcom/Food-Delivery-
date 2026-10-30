<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM reviews WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
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
<div class="row py-5 ">
<div class="col-md-3"></div>

<div class="col-6 bg-info-subtle py-5 px-5">
<h1><u>Review Details</u></h1>

<a class="btn btn-secondary mb-3" href="table.php">Back</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<td><?php echo $row['id']; ?></td>
</tr>

<tr>
<th>USER ID</th>
<td><?php echo $row['user_id']; ?></td>
</tr>

<tr>
<th>RESTAURANT ID</th>
<td><?php echo $row['restaurant_id']; ?></td>
</tr>

<tr>
<th>RATING</th>
<td><?php echo $row['rating']; ?></td>
</tr>

<tr>
<th>COMMENT</th>
<td><?php echo $row['comment']; ?></td>
</tr>

<tr>
<th>CREATED AT</th>
<td><?php echo $row['created_at']; ?></td>
</tr>

</table>

</div>
</div>
</div>

</body>
</html>
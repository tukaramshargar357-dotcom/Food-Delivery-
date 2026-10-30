<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM order_items WHERE id='$id'";
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

  <body class="bg-primary bg-gradient">

<?php include("../nav.php"); ?>

<div class="container py-5">
<div class="row">
<div class="col-12 bg-primary-subtle p-4 rounded">

<h3 class="text-secondary text-center">Order Item Details</h3>

<a class="btn btn-secondary mb-3" href="table.php">Back</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<td><b><?php echo $row['id']; ?></b></td>
</tr>

<tr>
<th>Order ID</th>
<td><?php echo $row['order_id']; ?></td>
</tr>

<tr>
<th>Menu Item ID</th>
<td><?php echo $row['menu_item_id']; ?></td>
</tr>

<tr>
<th>Quantity</th>
<td><?php echo $row['quantity']; ?></td>
</tr>

<tr>
<th>Price</th>
<td>₹<?php echo $row['price']; ?></td>
</tr>

</table>

</div>
</div>
</div>

</body>
</html>
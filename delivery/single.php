<?php

include("../db/db.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM delivery WHERE id=".$id;
$result_data = $conn->query($sql);

$order_id = "";
$delivery_boy_id = "";
$status_id = "";
$assigned_at = "";
$delivered_at = "";

if ($result_data && $result_data->num_rows > 0) {
    $row_data = $result_data->fetch_assoc();

    $id = $row_data['id'];
    $order_id = $row_data['order_id'];
    $delivery_boy_id = $row_data['delivery_boy_id'];
    $status_id = $row_data['status_id'];
    $assigned_at = $row_data['assigned_at'];
    $delivered_at = $row_data['delivered_at'];
}

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
                <h1><u>VIEW DELIVERY</u></h1>

                <div class="row g-3">

  <div class="col-md-12">
    <label class="form-label">ID</label>
    <span>= <?php echo $id; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Order ID</label>
    <span>= <?php echo $order_id; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Delivery Boy ID</label>
    <span>= <?php echo $delivery_boy_id; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Status ID</label>
    <span>= <?php echo $status_id; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Assigned At</label>
    <span>= <?php echo $assigned_at; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Delivered At</label>
    <span>= <?php echo $delivered_at; ?></span>
  </div>

  <div class="col-12">
    <a class="btn btn-success mb-3" href="http://localhost/projet/food-delivery/delivery/table.php">Go back</a>
  </div>

</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
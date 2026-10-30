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

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Edit Order Items</h3>
<form class="row g-3" action="update.php" method="post">

  <div class="col-md-2">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $id; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Order ID</label>
    <input type="text" class="form-control" name="order_id" value="<?php echo $order_id; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Delivery Boy ID</label>
    <input type="text" class="form-control" name="delivery_boy_id" value="<?php echo $delivery_boy_id; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Status ID</label>
    <input type="text" class="form-control" name="status_id" value="<?php echo $status_id; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Assigned At</label>
    <input type="time" class="form-control" name="assigned_at" value="<?php echo $assigned_at; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Delivered At</label>
    <input type="time" class="form-control" name="delivered_at" value="<?php echo $delivered_at; ?>">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">update</button>
    <a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/delivery/table.php">Go back</a>
  </div>

</form>
        

<?php
include("../template/footer.php");
?>

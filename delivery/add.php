<?php  
 include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM delivery";
$result = $conn->query($sql);

$maxid = 1;

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maxid = ($row['max_id'] != null) ? $row['max_id'] + 1 : 1;
}
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Add Delivery</h3>
<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/delivery/table.php">See data</a>

                <form class="row g-3" action="create.php" method="post">

  <div class="col-md-2">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $maxid ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Order ID</label>
    <input type="text" class="form-control" name="order_id" placeholder="enter order id">
  </div>

  <div class="col-12">
    <label class="form-label">Delivery Boy ID</label>
    <input type="text" class="form-control" name="delivery_boy_id" placeholder="enter delivery boy id">
  </div>

  <div class="col-12">
    <label class="form-label">Status ID</label>
    <input type="text" class="form-control" name="status_id" placeholder="enter status id">
  </div>

  <div class="col-12">
    <label class="form-label">Assigned At</label>
    <input type="time" class="form-control" name="assigned_at">
  </div>

  <div class="col-12">
    <label class="form-label">Delivered At</label>
    <input type="time" class="form-control" name="delivered_at">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
  </div>

</form>
        

<?php
include("../template/footer.php");
?>

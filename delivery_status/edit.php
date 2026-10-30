<?php

include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM delivery_status WHERE id=".$id;
$result = $conn->query($sql);

$name = "";

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $name = $row['name'];
}

?>

<?php
  include ("../template/hedder.php");
?>

<h2 class="mb-4 text-center">Add Delivery status</h2>

                <form class="r ow g-3" action="update.php" method="post">

  <div class="col-md-2">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $id; ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">update</button>
    <a class="btn btn-success mb-3" href="http://localhost/projet/food-delivery/delivery_status/table.php">Go back</a>
  </div>

</form>

<?php
  include ("../template/footer.php");
?>

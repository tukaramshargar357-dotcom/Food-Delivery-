<?php  
  include "../db/db.php";

  $sql = "SELECT MAX(id) AS max_id FROM delivery_status";
  $result = $conn->query($sql);

  $maxid = 1;

  if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $maxid = ($row['max_id'] != null) ? $row['max_id'] + 1 : 1;
  }
?>

<?php
include ("../template/hedder.php");
?>
<h2 class="mb-4 text-center">Add Delivery status</h2>
 <a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/delivery_status/table.php">See data</a>

 <form class="ro w g-3" action="create.php" method="post">

  <div class="col-md-2">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $maxid ?>">
  </div>

  <div class="col-12">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter status name">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3 px-4" style="margin-top: 10px;">submit</button>
  </div>

</form>



<?php
  include "../template/footer.php"
?>

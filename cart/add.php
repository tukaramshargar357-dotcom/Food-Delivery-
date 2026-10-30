<?php  
 include("../db/db.php");

$sql = "SELECT MAX(id) AS highest_score FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // echo "The highest score is: " . $row['highest_score'];
} else {
    echo "No results found.";
}
$maxid = $row['highest_score'] + 1;

// $designation_sql = "SELECT id, menu_items FROM menu_items ORDER BY menu_items ASC";
// $designation_result = $conn->query($designation_sql);
?>

<?php
  include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Add Cart</h3>
<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/cart/table.php" role="button">See data</a>
                <form class="row g-3" action="create.php" method="post" >
  <div class="col-md-2">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" readonly id="id" name="id" value="<?php echo $maxid ?>" >
  </div>
  <div class="col-12">
    <label for="user_id" class="form-label">User Id</label>
    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="enter your name" >
  </div>
<div class="col-12">
    <label for="menu_item_id" class="form-label">Menu Item Id</label>
    <select class="form-select" aria-label="Default select example" id="menu_item_id" name="menu_item_id">
      <option selected value="">--SELECT--</option>
      <!-- <?php
        if ($designation_result && $designation_result->num_rows > 0) {
            while ($designation_row = $designation_result->fetch_assoc()) {
        ?>
            <option value="<?= $designation_row['id'] ?>"><?= $designation_row['menu_item_id'] ?></option>
        <?php
            }
        }
        ?> -->
    </select>
  </div>
  <div class="col-md-12 ">
    <label for="quantity" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="enter your address">

   <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
  </div>
</form>
<?php
  include ("../template/footer.php");
?>

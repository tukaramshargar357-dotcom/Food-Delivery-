<?php  
include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM categories";
$result = $conn->query($sql);

$maxid = 1;

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maxid = ($row['max_id'] != null) ? $row['max_id'] + 1 : 1;
}

/* Restaurant Table Data */
$restaurant_sql = "SELECT id, name FROM restaurants ORDER BY name ASC";
$restaurant_result = $conn->query($restaurant_sql);

?>

<?php
include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Add Categories</h3>

<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/categories/table.php" role="button">
See data
</a>

<form class="row g-3" action="create.php" method="post">

    <div class="col-md-2">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" readonly name="id" value="<?php echo $maxid ?>">
    </div>

    <!-- Restaurant Dropdown -->
    <div class="col-12">
        <label class="form-label">Restaurant</label>

        <select class="form-select" name="restaurant_id">

            <option value="">-- Select Restaurant --</option>

            <?php
            if ($restaurant_result && $restaurant_result->num_rows > 0) {

                while ($restaurant = $restaurant_result->fetch_assoc()) {
            ?>

            <option value="<?php echo $restaurant['id']; ?>">

                <?php echo htmlspecialchars($restaurant['name']); ?>

            </option>

            <?php
                }
            }
            ?>

        </select>
    </div>

    <div class="col-12">
        <label class="form-label">Category Name</label>

        <input type="text" class="form-control" name="name" placeholder="enter category name">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary mb-3">submit</button>
    </div>

</form>

<?php
include ("../template/footer.php");
?>
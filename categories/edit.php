<?php

include("../db/db.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM categories WHERE id=".$id;
$result_data = $conn->query($sql);

$restaurant_id = "";
$name = "";

if ($result_data && $result_data->num_rows > 0) {

    $row_data = $result_data->fetch_assoc();

    $id = $row_data['id'];
    $restaurant_id = $row_data['restaurant_id'];
    $name = $row_data['name'];
}

$restaurant_sql = "SELECT id, name FROM restaurants ORDER BY name ASC";
$restaurant_result = $conn->query($restaurant_sql);

?>

<?php
include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Edit Categories</h3>

<form class="row g-3" action="update.php" method="post">

    <div class="col-md-2">
        <label class="form-label">ID</label>

        <input type="text" class="form-control" readonly name="id"
        value="<?php echo $id; ?>">
    </div>

    <div class="col-12">

        <label class="form-label">Restaurant</label>

        <select class="form-select" name="restaurant_id">

            <?php
            if ($restaurant_result && $restaurant_result->num_rows > 0) {

                while ($restaurant = $restaurant_result->fetch_assoc()) {
            ?>

            <option value="<?php echo $restaurant['id']; ?>"

            <?php
            if ($restaurant_id == $restaurant['id']) {
                echo "selected";
            }
            ?>>

            <?php echo htmlspecialchars($restaurant['name']); ?>

            </option>

            <?php
                }
            }
            ?>

        </select>

    </div>

    <div class="col-12">

        <label class="form-label">Name</label>

        <input type="text" class="form-control" name="name"
        value="<?php echo $name; ?>">

    </div>

    <div class="col-12">

        <button type="submit" class="btn btn-primary mb-3">
            submit
        </button>

        <a class="btn btn-success mb-3"
        href="http://localhost/projet/fooddelivery/categories/table.php">

        Go back

        </a>

    </div>

</form>

<?php
include ("../template/footer.php");
?>
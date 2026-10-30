<?php
include("../db/db.php");

// Get ID safely
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Default values
$user_id = "";
$menu_item_id = "";
$quantity = "";

// Fetch cart data
$sql = "SELECT * FROM cart WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $id = $row['id'];
    $user_id = $row['user_id'];
    $menu_item_id = $row['menu_item_id'];
    $quantity = $row['quantity'];
}

// Fetch menu items
$menu_sql = "SELECT id, name FROM menu_items ORDER BY name ASC";
$menu_result = $conn->query($menu_sql);
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Edit Cart</h3>
<form class="row g-3" action="update.php" method="post">

        <div class="col-md-2">
          <label class="form-label">ID</label>
          <input type="text" class="form-control" readonly name="id" value="<?= $id ?>">
        </div>
        <div class="col-12">
          <label class="form-label">User ID</label>
          <input type="text" class="form-control" name="user_id" value="<?= $user_id ?>">
        </div>
        <div class="col-12">
          <label class="form-label">Menu Item</label>
          <select class="form-select" name="menu_item_id">
            <option value="">--SELECT--</option>
            <!-- <?php
            if ($menu_result && $menu_result->num_rows > 0) {
                while ($menu = $menu_result->fetch_assoc()) {
                    $selected = ($menu['id'] == $menu_item_id) ? "selected" : "";
                    echo "<option value='{$menu['id']}' $selected>{$menu['menu_items']}</option>";
                }
            }
            ?> -->
          </select>
        </div>
        <div class="col-12">
          <label class="form-label">Quantity</label>
          <input type="number" class="form-control" name="quantity" value="<?= $quantity ?>">
        </div>
        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-primary">Update</button>
          <a class="btn btn-success" href="table.php">Go Back</a>
        </div>

      </form>

<?php
include("../template/footer.php");
?>
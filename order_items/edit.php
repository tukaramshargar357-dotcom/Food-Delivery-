<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM order_items WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Add Order Items</h3>
<a class="btn btn-success mb-3" href="table.php">See Data</a>

            <form class="row g-3" action="update.php" method="post">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="col-md-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" value="<?php echo $row['id']; ?>" readonly>
                </div>

                <div class="col-12">
                    <label class="form-label">Order ID</label>
                    <input type="number" class="form-control" name="order_id" required 
                           value="<?php echo $row['order_id']; ?>">
                </div>

                <div class="col-12">
                    <label class="form-label">Menu Item ID</label>
                    <input type="number" class="form-control" name="menu_item_id" required 
                           value="<?php echo $row['menu_item_id']; ?>">
                </div>

                <div class="col-12">
                    <label class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" required min="1"
                           value="<?php echo $row['quantity']; ?>">
                </div>

                <div class="col-12">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" required
                           value="<?php echo $row['price']; ?>">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary mb-3">Update</button>
                    <a class="btn btn-success mb-3" href="table.php">Go back</a>
                </div>

            </form>
        

<?php
include("../template/footer.php");
?>

<?php  
include("../db/db.php");


$sql = "SELECT MAX(id) AS max_id FROM order_items";
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

<h3 class="text-secondary text-center">Add Order Items</h3>
<a class="btn btn-success mb-3" href="table.php">See Data</a>

            <form class="row g-3" action="create.php" method="post">

               
                <div class="col-md-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $maxid ?>">
                </div>


                <div class="col-12">
                    <label class="form-label">Order ID</label>
                    <input type="number" class="form-control" name="order_id" required placeholder="Enter order ID">
                </div>

                
                <div class="col-12">
                    <label class="form-label">Menu Item ID</label>
                    <input type="number" class="form-control" name="menu_item_id" required placeholder="Enter menu item ID">
                </div>

                
                <div class="col-12">
                    <label class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" required min="1" placeholder="Enter quantity">
                </div>

                
                <div class="col-12">
                    <label class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" required placeholder="Enter price">
                </div>

                
                <div class="col-1 text-center">
                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                </div>

            </form>
        

<?php
include("../template/footer.php");
?>
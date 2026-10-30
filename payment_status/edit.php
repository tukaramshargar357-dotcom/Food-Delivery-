<?php
include("../db/db.php");

$user_id = intval($_GET['id']);

$sql = "SELECT id, name FROM payment_status WHERE id=".$user_id;
$result_data = $conn->query($sql);

if ($result_data->num_rows > 0) {
    $row_data = $result_data->fetch_assoc();

    $id = $row_data['id'];
    $name = $row_data['name'];
}
?>


<?php
    include ("../template/hedder.php");
?>

<h2 class="mb-4 text-center">Edit Payment Status</h2>


<form class="row g-3" action="update.php" method="post">

<div class="col-md-2">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">NAME</label>
<input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary mb-3">Submit</button>
<a class="btn btn-success mb-3" href="table.php">Go back</a>
</div>

</form>

<?php
    include ("../template/footer.php");
?>

<?php
include("../db/db.php");

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM restaurants WHERE id='$id'");
$row = $res->fetch_assoc();
?>

<?php
    include ("../template/hedder.php")
?>
<h3 class="text-secondary text-center">Edit Restaurant</h3>

<form class="row g-3" action="update.php" method="post">

<div class="col-md-2">
<label class="form-label">ID</label>
<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
</div>

<div class="col-12">
<label class="form-label">Name</label>
<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
</div>

<div class="col-12">
<label class="form-label">City</label>
<input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
</div>

<div class="col-12">
<label class="form-label">Rating</label>
<input type="text" class="form-control" name="rating" value="<?php echo $row['rating']; ?>">
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary mb-3">Update</button>
<a class="btn btn-success mb-3" href="table.php">Go back</a>
</div>

</form>


<?php
    include ("../template/footer.php")
?>

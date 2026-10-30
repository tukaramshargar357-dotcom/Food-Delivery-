<?php
include("../db/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM reviews WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FOOD_DELIVERY</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info">

<?php include("../nav.php"); ?>

<div class="container py-5">
<div class="row py-5 ">
<div class="col-md-3"></div>

<div class="col-6 bg-info-subtle py-5 px-5">
<h1><u>Review Application</u></h1>

<form class="row g-3" action="update.php" method="post">

<div class="col-md-2">
<label class="form-label">ID</label>
<input type="text" class="form-control" readonly name="id" value="<?php echo $row['id']; ?>">
</div>

<div class="col-12">
<label class="form-label">USER ID</label>
<input type="text" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">RESTAURANT ID</label>
<input type="text" class="form-control" name="restaurant_id" value="<?php echo $row['restaurant_id']; ?>">
</div>

<div class="col-12">
<label class="form-label">RATING</label>
<input type="text" class="form-control" name="rating" value="<?php echo $row['rating']; ?>">
</div>

<div class="col-12">
<label class="form-label">COMMENT</label>
<input type="text" class="form-control" name="comment" value="<?php echo $row['comment']; ?>">
</div>

<div class="col-12">
<label class="form-label">CREATED AT</label>
<input type="datetime-local" class="form-control" name="created_at" value="<?php echo $row['created_at']; ?>">
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary mb-3">update</button>
</div>

</form>

</div>
</div>
</div>

</body>
</html>
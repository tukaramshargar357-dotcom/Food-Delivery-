<?php  
 include("../db/db.php");

$sql = "SELECT MAX(id) AS max_id FROM reviews";
$result = $conn->query($sql);

$maxid = 1;

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $maxid = ($row['max_id'] !== null) ? ((int)$row['max_id'] + 1) : 1;
}
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

                <a class="btn btn-success mb-3" href="table.php">See data</a>

                <form class="row g-3" action="create.php" method="post">

  <div class="col-md-2">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $maxid ?>">
  </div>

  <div class="col-12">
    <label class="form-label">USER ID</label>
    <input type="text" class="form-control" name="user_id" required>
  </div>

  <div class="col-12">
    <label class="form-label">RESTAURANT ID</label>
    <input type="text" class="form-control" name="restaurant_id" required>
  </div>

  <div class="col-12">
    <label class="form-label">RATING</label>
    <input type="text" class="form-control" name="rating" required>
  </div>

  <div class="col-12">
    <label class="form-label">COMMENT</label>
    <input type="text" class="form-control" name="comment" required>
  </div>

  <div class="col-12">
    <label class="form-label">CREATED AT</label>
    <input type="datetime-local" class="form-control" name="created_at" required>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
  </div>

</form>

            </div>
        </div>
    </div>

  </body>
</html>
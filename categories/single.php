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
                <h1><u>VIEW DATA</u></h1>

                <div class="row g-3">

  <div class="col-md-12">
    <label class="form-label">ID</label>
    <span>= <?php echo $id; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Restaurant ID</label>
    <span>= <?php echo $restaurant_id; ?></span>
  </div>

  <div class="col-12">
    <label class="form-label">Name</label>
    <span>= <?php echo $name; ?></span>
  </div>

  <div class="col-12">
    <a class="btn btn-success mb-3" href="http://localhost/projet/food-delivery/categories/table.php">Go back</a>
  </div>

</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
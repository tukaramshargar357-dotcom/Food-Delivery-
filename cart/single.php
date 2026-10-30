<?php
include("../db/db.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM cart WHERE id = $id";
$result = $conn->query($sql);

$user_id = "";
$menu_item_id = "";
$quantity = "";

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $id = $row['id'];
    $user_id = $row['user_id'];
    $menu_item_id = $row['menu_item_id'];
    $quantity = $row['quantity'];
}

$menu_sql = "SELECT id, menu_items FROM menu_items";
$menu_result = $conn->query($menu_sql);

$menu_name = "";
if ($menu_result && $menu_result->num_rows > 0) {
    while ($menu = $menu_result->fetch_assoc()) {
        if ($menu['id'] == $menu_item_id) {
            $menu_name = $menu['menu_items'];
            break;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VIEW DATA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info">

<?php include("../nav.php"); ?>

<div class="container py-5">
  <div class="row py-5">
    <div class="col-md-3"></div>

    <div class="col-6 bg-info-subtle py-5 px-5">
      <h1><u>View Cart</u></h1>

      <div class="row g-3">

        <div class="col-md-12">
          <label class="form-label">ID</label>
          <span>= <?= $id ?></span>
        </div>

        <div class="col-12">
          <label class="form-label">User ID</label>
          <span>= <?= $user_id ?></span>
        </div>

        <div class="col-12">
          <label class="form-label">Menu Item</label>
          <span>= <?= $menu_name ?></span>
        </div>

        <div class="col-12">
          <label class="form-label">Quantity</label>
          <span>= <?= $quantity ?></span>
        </div>

        <div class="col-12">
          <a class="btn btn-success" href="table.php">Go Back</a>
        </div>

      </div>
    </div>

  </div>
</div>

</body>
</html>
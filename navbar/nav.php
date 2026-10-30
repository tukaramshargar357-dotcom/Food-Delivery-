<?php
include("../db.php"); 
$sql = "SELECT 
            users.*, 
            roles.name AS role_name  
        FROM users  
        LEFT JOIN roles 
            ON users.role_id = roles.id 
        ORDER BY users.id ASC";  
$result = $conn->query($sql); 
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
    <div class="container-flude">
        <div class="row">
            <div class="col-sm-2 bg-primary min-vh-100" style="padding: 25px;">
              <h3>Food Delivery</h3>
              <div class="row"> 
                <div class="col-sm-4">
                  <img src="https://picsum.photos/id/8/100/100" class="img-thumbnail rounded-circle" alt="...">
                </div>
                <div class="col-sm-8 pt-3">
                  <p class="m-0 p-0">Welcome</p>
                  <p class="m-0 p-0">Tukaram</p>
                </div>
              </div>
              <div class="row pt-3">
                <h5>Master Forms</h5>
                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../users/table.php">Users</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../users/table.php">Roles</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../addresses/table.php">Addresses</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../restaurants/table.php">Restaurants</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../categories/table.php">Categories</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../menu_items/table.php">Menu</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../cart/table.php">Cart</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../orders/table.php">Orders</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../order_items/table.php">Order Items</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../payments/table.php">Payments</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../payment_methods/table.php">Payment Methods</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../payment_status/table.php">Payment Status</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../delivery/table.php">Delivery</a></p>

                <p class="p-y-3 m-y-0"><a class="link-opacity-100 link-light link-underline-opacity-0" href="../delivery_status/table.php">Delivery Status</a></p>

            

              </div>
            </div>
            <div class="col-sm-10"> 
              <div class="row">
                <div class="col-12">
                  <img style="height: 40px; width: 40px; float: left;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP._YIVnx6_CSl_jIJcMiv5PQHaHa%3Fpid%3DApi&f=1&ipt=d8c7f1897d0082a56169587650bb384ec7f9e160184a347e22697d57094efe74&ipo=images" alt="">
                    <div class="col-sm-4" style="float: right;">
                      <p class="m-0 p-0" style="float: right;"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.IuqkFS4hKBD6iVxtZGaxYwHaHa%3Fpid%3DApi&f=1&ipt=006fce53e772ab41c4a86ffa872b5743f1b4c2f264af2bf34fddb75dab8436b6&ipo=images" style="height: 30px;" alt=""><img src="https://picsum.photos/id/8/40/40" class="img-thumbnail rounded-circle" style="margin-left: 10px;" alt="...">Welcome</p>
                    </div>
                </div>
                <div class="col-12" style="border: 1px solid black;">
                  <span class="fs-3">Form Design</span><span style="margin-left: 10px;">different form elements</span>
                  <span><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.JB1euR_h47EiN_QqN4XuZgHaHa%3Fpid%3DApi&f=1&ipt=8db968e6b775420dd7abccd8a25809fdbde98714ab975678b010f45187549b43&ipo=images" style="height: 30px; float: right; margin-right: 20px;" alt=""></span>
                </div>
                <div class="col-12" style="border: 1px solid black; border-top: hidden;">
                  

<div class="container py-5">
<div class="row py-5 ">


</body>
</html>

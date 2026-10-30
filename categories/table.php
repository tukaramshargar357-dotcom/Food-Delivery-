<?php

include("../db/db.php");

/* JOIN categories with restaurants table */

$sql = "SELECT c.*, r.name AS restaurant_name
        FROM categories c
        LEFT JOIN restaurants r
        ON c.restaurant_id = r.id
        ORDER BY c.id ASC";

$dbresult = $conn->query($sql);

?>

<?php
include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Categories Data</h3>

<a class="btn btn-success mb-3"
href="http://localhost/projet/fooddelivery/categories/add.php">

Add data

</a>

<table class="table table-striped-columns">

    <thead>
        <tr>
            <th>Id</th>
            <th>Restaurant</th>
            <th>Name</th>
            <th width="220">Action</th>
        </tr>
    </thead>

    <tbody>

<?php

if ($dbresult && $dbresult->num_rows > 0) {

    while ($row_data = $dbresult->fetch_assoc()) {

        echo "<tr>";

        echo "<td>".$row_data['id']."</td>";

        /* Restaurant Name */
        echo "<td>".$row_data['restaurant_name']."</td>";

        /* Category Name */
        echo "<td>".$row_data['name']."</td>";

        echo "<td>

            <a class='btn btn-primary btn-sm'
            href='http://localhost/projet/fooddelivery/categories/edit.php?id=".$row_data['id']."'>
            Edit
            </a>

            <a class='btn btn-danger btn-sm'
            href='http://localhost/projet/fooddelivery/categories/delete.php?id=".$row_data['id']."'
            onclick='return confirm(\"Are you sure?\");'>
            Delete
            </a>

            <a class='btn btn-secondary btn-sm'
            href='http://localhost/projet/fooddelivery/categories/single.php?id=".$row_data['id']."'>
            View
            </a>

        </td>";

        echo "</tr>";
    }
}
?>

    </tbody>

</table>

<?php
include ("../template/footer.php");
?>
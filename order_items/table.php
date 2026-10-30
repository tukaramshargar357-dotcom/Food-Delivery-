<?php
include("../db/db.php");
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Order Items Data</h3>
<a class="btn btn-success mb-3" href="add.php">Add data</a>

<table class="table table-striped-columns">

<thead>
<tr>
<th>Id</th>
<th>Order ID</th>
<th>Menu Item ID</th>
<th>Quantity</th>
<th>Price</th>
<th width="220">ACTION</th>
</tr>
</thead>

<tbody>

<?php
$sql = "SELECT * FROM order_items ORDER BY id ASC";
$dbresult = $conn->query($sql);

if ($dbresult->num_rows > 0) {

    while ($row_data = $dbresult->fetch_assoc()) {

        echo '<tr>';

        // SAME STUDENT STYLE LOOP
        foreach ($row_data as $value) {
            echo '<td>' . $value . '</td>';
        }

        echo "<td>
            <a class='btn btn-primary btn-sm' href='edit.php?id=".$row_data['id']."'>Edit</a>

            <a class='btn btn-danger btn-sm' href='delete.php?id=".$row_data['id']."' onclick='return confirm(\"Are you sure?\");'>Delete</a>

            <a class='btn btn-secondary btn-sm' href='single.php?id=".$row_data['id']."'>View</a>
        </td>";

        echo '</tr>';
    }
}
?>

</tbody>
</table>

<?php
include("../template/footer.php");
?>

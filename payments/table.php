<?php
include("../db/db.php");
?>



<?php
    include ("../template/hedder.php");
?>

<h2 class="mb-4 text-center">Payment Data</h2>
<a class="btn btn-success mb-3" href="add.php">Add Payment</a>

<table class="table table-striped-columns">
<thead>
<tr>
<th>Id</th>
<th>Order ID</th>
<th>Payment Method ID</th>
<th>Payment Status ID</th>
<th>Transaction ID</th>
<th>Paid At</th>
<th width="220">Action</th>
</tr>
</thead>

<tbody>

<?php
$sql = "SELECT * FROM payments ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['order_id']."</td>";
        echo "<td>".$row['payment_method_id']."</td>";
        echo "<td>".$row['payment_status_id']."</td>";
        echo "<td>".$row['transaction_id']."</td>";
        echo "<td>".$row['paid_at']."</td>";

        echo "<td>
            <a class='btn btn-primary btn-sm' href='edit.php?id=".$row['id']."'>Edit</a>

            <a class='btn btn-danger btn-sm' 
            href='delete.php?id=".$row['id']."' 
            onclick='return confirm(\"Are you sure?\");'>Delete</a>

            <a class='btn btn-secondary btn-sm' 
            href='single.php?id=".$row['id']."'>View</a>
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

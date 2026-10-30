<?php
include("../db/db.php");
?>


<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Order Data</h3>
<a class="btn btn-success mb-3" href="add.php">Add data</a>

<table class="table table-striped-columns">
<thead>
<tr>
<th>Id</th>
<th>User ID</th>
<th>Restaurant ID</th>
<th>Address ID</th>
<th>Status ID</th>
<th>Total Amount</th>
<th>Created At</th>
<th width="220">ACTION</th>
</tr>
</thead>

<tbody>

<?php
$sql = "SELECT * FROM orders ORDER BY id ASC";
$dbresult = $conn->query($sql);

if ($dbresult->num_rows > 0) {
    
    while ($row_data = $dbresult->fetch_assoc()) {

        echo '<tr>';    

        // SAME FOREACH PATTERN (like your student code)
        foreach ($row_data as $value) {
            echo '<td>' . $value . '</td>';
        }

        echo "<td>
            <a class='btn btn-primary btn-sm' href='edit.php?id=".$row_data['id']."'>Edit</a>

            <a class='btn btn-danger btn-sm' href='delete.php?id=".$row_data['id']."' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
            
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

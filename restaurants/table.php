<?php
include("../db/db.php");

  $sql =  "SELECT
        r.*,
        u.name AS owner_name
    FROM restaurants r
    LEFT JOIN users u
    ON r.owner_id = u.id
    ORDER BY r.id ASC";

$dbresult = $conn->query($sql);
?>

<?php
    include ("../template/hedder.php")
?>
<h3 class="text-secondary text-center">Restaurant Data</h3>

<a class="btn btn-success mb-3" href="add.php">Add data</a>

<table class="table table-striped-columns">

<thead>
<tr>
<?php
$head_result = $conn->query("SELECT * FROM restaurants LIMIT 1");

if ($head_result && $head_result->num_rows > 0) {
    $head_row = $head_result->fetch_assoc();

    foreach(array_keys($head_row) as $column){
        echo "<th>$column</th>";
    }
}
?>
<th width="220">Action</th>
</tr>
</thead>

<tbody>

<?php
$result = $conn->query("SELECT * FROM restaurants ORDER BY id ASC");

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<tr>";

        foreach($row as $value){
            echo "<td>$value</td>";
        }

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
    include ("../template/footer.php")
?>

<?php
include("../db/db.php");
?>

<?php
    include ("../template/hedder.php");
?>
<h3 class="text-secondary text-center">Menu Items Data</h3>
<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/menu_items/add.php">Add data</a>

<table class="table table-striped-columns">
<thead>
<tr>
<th>Id</th>
<th>Restaurant ID</th>
<th>Category ID</th>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Status</th>
<th>Image</th>
<th width="220">Action</th>
</tr>
</thead>

<tbody>

<?php
$sql = "SELECT * FROM menu_items ORDER BY id ASC";
$dbresult = $conn->query($sql);

if ($dbresult->num_rows > 0) {
    
    while ($row_data = $dbresult->fetch_assoc()) {

        echo '<tr>';    

        // Manual fields (so we can control image & status)
        echo '<td>'.$row_data['id'].'</td>';
        echo '<td>'.$row_data['restaurant_id'].'</td>';
        echo '<td>'.$row_data['category_id'].'</td>';
        echo '<td>'.$row_data['name'].'</td>';
        echo '<td>'.$row_data['description'].'</td>';
        echo '<td>₹'.$row_data['price'].'</td>';

        echo '<td>'.($row_data['is_available'] == 1 ? 'Available' : 'Not Available').'</td>';

        echo '<td><img src="uploads/'.$row_data['image'].'" width="70"></td>';

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
    include ("../template/footer.php");
?>

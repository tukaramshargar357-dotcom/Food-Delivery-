<?php

include("../db/db.php");
    
?>

<?php
include("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Delivery Data</h3>
<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/delivery/add.php">Add data</a>
                
                <table class="table table-striped-columns">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Order ID</th>
                            <th>Delivery Boy ID</th>
                            <th>Status ID</th>
                            <th>Assigned At</th>
                            <th>Delivered At</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
$sql = "SELECT * FROM delivery ORDER BY id ASC";
$dbresult = $conn->query($sql);

if ($dbresult && $dbresult->num_rows > 0) {
    while ($row_data = $dbresult->fetch_assoc()) {

        echo "<tr>";

        echo "<td>".$row_data['id']."</td>";
        echo "<td>".$row_data['order_id']."</td>";
        echo "<td>".$row_data['delivery_boy_id']."</td>";
        echo "<td>".$row_data['status_id']."</td>";
        echo "<td>".$row_data['assigned_at']."</td>";
        echo "<td>".$row_data['delivered_at']."</td>";

        echo "<td>
            <a class='btn btn-primary btn-sm' href='http://localhost/projet/fooddelivery/delivery/edit.php?id=".$row_data['id']."'>Edit</a>

            <a class='btn btn-danger btn-sm' href='http://localhost/projet/fooddelivery/delivery/delete.php?id=".$row_data['id']."' onclick='return confirm(\"Are you sure?\");'>Delete</a>

            <a class='btn btn-secondary btn-sm' href='http://localhost/projet/fooddelivery/delivery/single.php?id=".$row_data['id']."'>View</a>
        </td>";

        echo "</tr>";
    }
}
?>
                        
                    </tbody>
                </table>
        

<?php
include("../template/footer.php");
?>
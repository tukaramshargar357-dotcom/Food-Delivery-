<?php

include("../db/db.php");
    
?>

<?php

include("../template/hedder.php");
    
?>
<h2 class="mb-4 text-center"> Delivery status Data</h2>

 <a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/delivery_status/add.php">Add data</a>
                
                <table class="table table-striped-columns">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th width="220">Action</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
$sql = "SELECT * FROM delivery_status ORDER BY id ASC";
$dbresult = $conn->query($sql);

if ($dbresult && $dbresult->num_rows > 0) {
    while ($row_data = $dbresult->fetch_assoc()) {

        echo "<tr>";

        echo "<td>".$row_data['id']."</td>";
        echo "<td>".$row_data['name']."</td>";

        echo "<td>
            <a class='btn btn-primary btn-sm' href='http://localhost/projet/fooddelivery/delivery_status/edit.php?id=".$row_data['id']."'>Edit</a>

            <a class='btn btn-danger btn-sm' href='http://localhost/projet/fooddelivery/delivery_status/delete.php?id=".$row_data['id']."' onclick='return confirm(\"Are you sure?\");'>Delete</a>

            <a class='btn btn-secondary btn-sm' href='http://localhost/projet/fooddelivery/delivery_status/single.php?id=".$row_data['id']."'>View</a>
        </td>";

        echo "</tr>";
    }
}
?>
                        
                    </tbody>
                </table>



<?php

include("../db/db.php");
    
?>


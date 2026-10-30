 <?php

include("../db/db.php");
    
?>

<?php
    include ("../template/hedder.php");
?>
<h2 class="mb-4 text-center">Order status Data</h2>
<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/order_status/add.php" role="button">Add data</a>
                
                <!-- table starts -->
                <table class="table table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col" width="220">ACTION</th>
                            
                        </tr>
                    </thead>
                    <tbody>

<?php
    $sql = "SELECT * FROM order_status ORDER BY id ASC";
        $dbresult = $conn->query($sql);
    
    
    if ($dbresult->num_rows > 0) {
        
        while ($row_data = $dbresult->fetch_assoc()) {

            echo '<tr>';    

            foreach ($row_data as $value) {
                echo '<td>' . $value . '</td>';
                
            }
            echo "<td >
                <a class='btn btn-primary btn-sm' role='button' href='http://localhost/projet/fooddelivery/order_status/edit.php?id=" .$row_data['id']. "'>Edit</a>

                <a class='btn btn-danger btn-sm' role='button' href='http://localhost/projet/fooddelivery/order_status/delete.php?id=" .$row_data['id']. "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                
                <a class='btn btn-secondary btn-sm' role='button' href='http://localhost/projet/fooddelivery/order_status/single.php?id=" .$row_data['id']. "'>View</a>
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
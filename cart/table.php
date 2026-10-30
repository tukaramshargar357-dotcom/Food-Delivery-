 <?php

include("../db/db.php");
    
?>


<?php
  include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Cart Data</h3>
<a class="btn btn-success mb-3" href="http://localhost/projet/fooddelivery/cart/add.php" role="button">Add data</a>
                
                <!-- table starts -->
                <table class="table table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Menu Item Id</th>
                            <th scope="col">Quantity</th>
                            <th scope="col" width="220">ACTION</th>
                            
                        </tr>
                    </thead>
                    <tbody>

<?php
    $sql = "SELECT * FROM cart ORDER BY id ASC";
        $dbresult = $conn->query($sql);
    
    
    if ($dbresult->num_rows > 0) {
        
        while ($row_data = $dbresult->fetch_assoc()) {

            echo '<tr>';    

            foreach ($row_data as $value) {
                echo '<td>' . $value . '</td>';
                
            }
            echo "<td >
                <a class='btn btn-primary btn-sm' role='button' href='http://localhost/projet/fooddelivery/cart/edit.php?id=" .$row_data['id']. "'>Edit</a>

                <a class='btn btn-danger btn-sm' role='button' href='http://localhost/projet/fooddelivery/cart/delete.php?id=" .$row_data['id']. "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                
                <a class='btn btn-secondary btn-sm' role='button' href='http://localhost/projet/fooddelivery/cart/single.php?id=" .$row_data['id']. "'>View</a>
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

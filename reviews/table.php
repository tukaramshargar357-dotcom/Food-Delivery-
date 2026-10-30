<?php
include("../db/db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOOD_DELIVERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-primary bg-gradient">

<?php include("../nav.php"); ?>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-12 bg-primary-subtle p-4 rounded">
                <h3 class="text-secondary text-center">Review Data</h3>

                <a class="btn btn-success mb-3" href="add.php" role="button">Add data</a>
                
                <table class="table table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Restaurant Id</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Created At</th>
                            <th scope="col" width="220">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
$sql = "SELECT * FROM reviews ORDER BY id ASC";
$dbresult = $conn->query($sql);

if ($dbresult->num_rows > 0) {
    while ($row_data = $dbresult->fetch_assoc()) {

        echo '<tr>';    

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

            </div>
        </div>
    </div>

  </body>
</html>
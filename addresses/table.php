<?php

include("../db/db.php");

$sql = "SELECT a.*,u.name AS user_name
        FROM addresses a
        LEFT JOIN users u
        ON a.user_id = u.id
        ORDER BY a.id ASC";

$dbresult = $conn->query($sql);

?>

<?php
    include ("../template/hedder.php");
?>

<h3 class="text-secondary text-center">Addresses Data</h3>

            <a class="btn btn-success mb-3"
               href="http://localhost/projet/fooddelivery/addresses/add.php">
                Add Data
            </a>

            <table class="table table-striped table-bordered">

                <thead class="table">

                    <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Address Line</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th width="220">Action</th>
                    </tr>

                </thead>

                <tbody>

<?php

if ($dbresult->num_rows > 0) {

    while ($row_data = $dbresult->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row_data['id'] . "</td>";

        echo "<td>" . $row_data['user_name'] . "</td>";

        echo "<td>" . $row_data['address_line'] . "</td>";

        echo "<td>" . $row_data['city'] . "</td>";

        echo "<td>" . $row_data['state'] . "</td>";

        echo "<td>" . $row_data['pincode'] . "</td>";

        echo "<td>" . $row_data['latitude'] . "</td>";

        echo "<td>" . $row_data['longitude'] . "</td>";

        echo "
        <td>

            <a class='btn btn-primary btn-sm'
               href='http://localhost/projet/fooddelivery/addresses/edit.php?id=".$row_data['id']."'>
               Edit
            </a>

            <a class='btn btn-danger btn-sm'
               href='http://localhost/projet/fooddelivery/addresses/delete.php?id=".$row_data['id']."'
               onclick='return confirm(\"Are you sure you want to delete this record?\");'>
               Delete
            </a>

            <a class='btn btn-secondary btn-sm'
               href='http://localhost/projet/fooddelivery/addresses/single.php?id=".$row_data['id']."'>
               View
            </a>

        </td>
        ";

        echo "</tr>";
    }

} else {

    echo "
    <tr>
        <td colspan='9' class='text-center text-danger'>
            No Records Found
        </td>
    </tr>
    ";
}

?>

                </tbody>

            </table>


<?php
    include ("../template/footer.php");
?>

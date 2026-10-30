    <?php
    include("../db/db.php");
        $id = $_GET['id'];
    
        $sql = "DELETE FROM `order_items` WHERE id = ".$id;


        if ($conn->query($sql) === TRUE) {
            // echo "Record deleted successfully";
            // Redirect to a specific page
            header("Location: table.php");
            exit; // Stop further script execution
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



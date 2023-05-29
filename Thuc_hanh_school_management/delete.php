        <?php 
        $con = new mysqli("localhost", "root", "", "school_management");
        if ($con->connect_error) {
            die("Connection Error");
        }

        $sql = "DELETE FROM school WHERE id = ".$_GET["id"]."";

        if ($con->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }
        ?>

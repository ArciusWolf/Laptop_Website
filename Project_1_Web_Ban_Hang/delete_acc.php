<?php 
        $con = new mysqli("localhost", "root", "", "c_1405");
        if ($con->connect_error) {
            die("Connection Error");
        }

        $sql = "DELETE FROM accounts WHERE username = '".$_GET["username"]."'";

        if ($con->query($sql) === TRUE) {
            header("Location: ../show_account.php");
        } else {
            echo "Error deleting record: " . $con->error;
        }
        ?>

<?php
    $con = new mysqli("localhost", "root", "", "school");
    if ($con->connect_error) {
        echo "Connect Failed!";
    }

    $id = $_GET["id"];

    $sqlDetail = "SELECT * FROM school WHERE id = $id";

    $result = $con->query($sqlDetail);

    $obj = null;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $obj = $row;
        }
    }

    $sess = $obj;
    ?>

    <?php
        session_start();
    ?>

    <?php
    if ($result-> num_rows> 0 ) {
        while ($row = $result->fetch_assoc()) {
            $sess['id'] = [''.$row['id'].''];
            $sess['Name'] = [''.$row['school_name'].''];
            $sess['address'] = [''.$row['address'].''];
            $sess['num_teacher'] = [''.$row['num_teacher'].''];
        }
    };
    $_SESSION["sess"]["$id"] = $sess;

    header("Location: index.php");
    ?>
<?php
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_errno) {
        die("connection error");
    }
    $id = $_REQUEST["id"];
    $states = $_REQUEST["states"];


    $update = "UPDATE orders SET states = '$states' WHERE id = $id";

    // var_export($id);
    // var_export($states);
    // var_export($update);
    // die();
    $con->query($update);

    header("Location: order.php?info=Order updated successfully");
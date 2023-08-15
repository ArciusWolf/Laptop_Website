<?php
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_errno) {
        die("connection error");
    }

    $sql = "DELETE FROM orders WHERE id = " . $_REQUEST["id"];
    $sql2 = "DELETE FROM order_details WHERE order_id = " . $_REQUEST["id"];

    $con->query($sql);
    $con->query($sql2);

    header("Location: order.php?info=Order deleted successfully")
?>
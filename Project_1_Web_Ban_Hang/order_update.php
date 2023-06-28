<?php
    $con = new mysqli("localhost", "root", "root", "c_1405");
    if ($con->connect_errno) {
        die("connection error");
    }

    $id = $_GET["id"];
    $states = $_GET["states"];

    $sql = "UPDATE orders SET states = '$states' WHERE id = $id";

    $con->query($sql);

    header("Location: index.php?page=orders_list.php");
<?php
    $con = new mysqli("localhost", "root", "root", "c1405_de_tai");
    if ($con->connect_errno) {
        die("connection error");
    }

    $id = $_GET["id"];
    $status = $_GET["status"];

    $sql = "";
    $sql .= " UPDATE orders ";
    $sql .= " SET ";
    $sql .= "   status    = '$status' ";
    $sql .= " WHERE ";
    $sql .= "   id              = $id ";

    $con->query($sql);

    header("Location: index.php?page=orders_list.php");

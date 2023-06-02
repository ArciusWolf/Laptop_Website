<?php
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        echo "Connect Failed!";
    }

    $id = $_GET["id"];

    $sqlDetail = "SELECT * FROM laptops WHERE id = $id";

    $result = $con->query($sqlDetail);

    $obj = null;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $obj = $row;
        }
    }

    $cart = $obj;

    $_SESSION["cart"] = $cart;
    var_dump($_SESSION["cart"]);
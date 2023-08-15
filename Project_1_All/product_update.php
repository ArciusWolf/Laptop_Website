<?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }

    $id = $_POST["id"];
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    $sql = "UPDATE product SET product_name = '$productName', price = $price, quantity = $quantity WHERE id = $id";

    $con->query($sql);

    header("Location: index.php?page=product_list.php");

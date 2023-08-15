<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $productName = $_POST["productName"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO product(product_name, price, quantity) VALUES('$productName', $price, $quantity)";
    $con->query($sql);

    header("Location: index.php?page=product_list.php");

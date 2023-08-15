<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $categoryName = $_POST["categoryName"];

    $sql = "INSERT INTO category(category_name) VALUES('$categoryName')";
    $con->query($sql);

    header("Location: index.php?page=category_list.php");

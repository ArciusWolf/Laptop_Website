<?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }

    $id = $_GET["id"];

    $sql = "DELETE FROM category WHERE id = $id";
    $con->query($sql);

    header("Location: category.php");
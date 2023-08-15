<?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }

    $id = $_POST["id"];
    $lapName = $_POST["name"];
    $card = $_POST["card"];
    $cpu = $_POST["cpu"];
    $ram = $_POST["ram"];
    $rom = $_POST["rom"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    $sql = "UPDATE laptops SET name='$lapName', card='$card', cpu='$cpu', ram='$ram', rom='$rom', price='$price', quantity='$quantity' WHERE id='$id'";

    $con->query($sql);

    header("Location: admin.php");

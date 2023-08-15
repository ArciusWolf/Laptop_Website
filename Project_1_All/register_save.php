<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "";
    $sql .= " INSERT INTO customer(username, password, full_name, email, phone, address) ";
    $sql .= " VALUES ( ";
    $sql .= "   '$username', '$password', '$fullName', ";
    $sql .= "   '$email', '$phone', '$address' ";
    $sql .= "   ) ";
    $con->query($sql);

    echo "Đăng ký thành công";
    header("Location: register_success.php");

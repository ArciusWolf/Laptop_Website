<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "";
    $sql .= " SELECT * ";
    $sql .= " FROM customer ";
    $sql .= " WHERE ";
    $sql .= "   username = '$username' ";
    $sql .= "   AND password = '$password' ";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        while ($row = $result->fetch_assoc()) {
            $_SESSION["fullName"] = $row["full_name"];
        }

        header("Location: index_home.php");
    } else {
        header("Location: login.php?msg=error");
    }

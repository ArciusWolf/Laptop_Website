<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $ids = $_POST["ids"];
    $customerName = $_POST["customerName"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    date_default_timezone_set("Asia/Bangkok");
    $dateBuy = date("Y-m-d H:i-s");

    $sql = "";
    $sql .= " INSERT INTO orders (customer_name, phone, address, date_buy, status) ";
    $sql .= " VALUES ('$customerName', '$phone', '$address', '$dateBuy', 'PENDING') ";

    $con->query($sql);
    $insertedId = $con->insert_id;

    // ids = 1,2 => array [1, 2]
    $arrId = explode(",", $ids);

    $sqlOrderDetail = "";
    $sqlOrderDetail .= " INSERT INTO orders_detail (product_id, quantity, orders_id) ";
    $sqlOrderDetail .= " VALUES ";
    for ($i = 0; $i < count($arrId); $i++) {
        if ($i != count($arrId) - 1) {
            $sqlOrderDetail .= " (".$arrId[$i].", 1, $insertedId), ";
        } else {
            $sqlOrderDetail .= " (".$arrId[$i].", 1, $insertedId) ";
        }
    }

    var_export($sqlOrderDetail);
    $con->query($sqlOrderDetail);

    echo "<br>Đặt hàng thành công";

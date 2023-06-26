<?php
if (isset($_POST["ids"])) {
$con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $ids = $_POST["ids"];
    $fullName = $_POST["fullName"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO orders (customerName, phone, address, date_buy) VALUES ('$fullName', '$phone', '$address', '$date')";

    $arrId = explode(",", $ids);

    for ($i = 0; $i < count($arrId); $i++) {
        if ($i != count($arrId) - 1){
            $sql .= ";INSERT INTO order_details (order_id, laptop_id) VALUES (L, $arrId[$i])";
        } else
        $sql .= ";INSERT INTO order_details (order_id, laptop_id) VALUES (LAST_INSERT_ID(), $arrId[$i])";
    }

    var_export($sql);

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        header("Location:cart.php?error=Order failed");
    }
};
?>
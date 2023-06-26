<?php
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }
?>

<?php
if (isset($_SESSION["cart"])) {
    $ids = $_POST["ids"];
    $fullName = $_POST["fullName"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO orders (fullName, phone, address) VALUES ('$fullName', '$phone', '$address')";
    $con->query($sql);
    $order_id = $con->insert_id;
};
?>
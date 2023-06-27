<?php
session_start();

$cart = $_SESSION["cart"];


$username = "";
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];
    // var_export($id);
} else {
    header("Location: sign_in.php?error=You need to login first");
    exit();
}
?>

<?php
if (isset($_GET["ids"])) {
$con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

// select user info from accounts and customers table
    $ids = $_GET["ids"];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');

    $sqlCustomer = "SELECT * FROM accounts WHERE username = '$username' ";
    $result = $con->query($sqlCustomer);
    $row = $result->fetch_assoc();
    $fullName = $row["name"];
    $phone = $row["phone_num"];
    $address = $row["address"];
    $email = $row["email"];



    $sql = "INSERT INTO orders (customerName, phone, address, date_buy, states, email) VALUES ('$fullName', '$phone', '$address', '$date', 'Pending', '$email')";
    $con->query($sql);

    $insertID = $con->insert_id;

    $arrId = explode(",", $ids);

    // count every laptop price in cart

// count and explode every laptop price in cart

    $arrPrice = array();
    foreach ($arrId as $id) {
        $sqlPrice = "SELECT * FROM laptops WHERE id = '$id'";
        $result = $con->query($sqlPrice);
        $row = $result->fetch_assoc();
        $price = $row["price"];
        array_push($arrPrice, $price);
    }

    $arrPrice1 = implode(",", $arrPrice);

    $arrPrice2 = explode(",", $arrPrice1);

    // var_export($arrId);


    // count total price
    $totalPrice = 0;
    foreach ($arrPrice as $price) {
        $totalPrice += $price;
    }
   

    $sqlOrderDetail = "";
    $sqlOrderDetail .= "INSERT INTO order_details (order_id, laptop_id, price, quantity, total) VALUES ";



    for ($i = 0; $i < count($arrId); ++$i) {
            if ($i != count($arrId) - 1){
            $sqlOrderDetail .= "('".$insertID."', '".$arrId[$i]."', '$arrPrice1', 1, '$totalPrice'),";
        } else
            $sqlOrderDetail .= "('".$insertID."', '".$arrId[$i]."', '$arrPrice1', 1, '$totalPrice')";
        };
    };
    for ($y = 0; $y < count($arrPrice2); ++$y) {
        if ($y != count($arrPrice2) - 1){
        $sqlOrderDetail .= "('".$insertID."', '".$arrPrice2[$y]."', 1, '$totalPrice'),";
    } else
        $sqlOrderDetail .= "('".$insertID."', '".$arrPrice2[$y]."', 1, '$totalPrice')";
    };
    $sqlOrderDetail .= ";";

    var_export($sqlOrderDetail);
    die();
    $con->query($sqlOrderDetail);
    header("location:cart.php");
?>
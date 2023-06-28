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

    $arrPrice = array();
    foreach ($arrId as $id) {
        $sqlPrice = "SELECT * FROM laptops WHERE id = '$id'";
        $result = $con->query($sqlPrice);
        $row = $result->fetch_assoc();
        $price = $row["price"];
        array_push($arrPrice, $price);
    }
    // count total price
    $totalPrice = 0;
    foreach ($arrPrice as $price) {
        $totalPrice += $price;
    }
   

    $sqlOrderDetail = "";
    $sqlOrderDetail .= "INSERT INTO order_details (order_id, laptop_id, price, quantity, total) VALUES ";

// count id and price and insert into order_details table
for ($i = 0; $i < count($arrId); ++$i) {
    for ($j = 0; $j < count($arrPrice); $j++) {
// check if $i == $j and $i != count($arrId) - 1
        if ($i == $j && $i != count($arrId) - 1) {
            $sqlOrderDetail .= "('".$insertID."', '".$arrId[$i]."', '".$arrPrice[$j]."', 1, '$totalPrice'),";
        } else if ($i == $j && $i == count($arrId) - 1) {
            $sqlOrderDetail .= "('".$insertID."', '".$arrId[$i]."', '".$arrPrice[$j]."', 1, '$totalPrice')";
        }
            

        
    // if (count($arrId) == count($arrPrice2)) {

    };
    };
    };

    $con->query($sqlOrderDetail);
    header("location:cart.php");
?>
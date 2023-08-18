<?php
    session_start();
?>

<?php
//delete a product in cart
    $id = $_GET["id"];
    $carts = $_SESSION["cart"];
    foreach ($carts as $key => $cart) {
        if($cart["id"] == $id) {
            unset($carts[$key]);
        }
    }
    $_SESSION["cart"] = $carts;
    header("Location: cart.php");
?>
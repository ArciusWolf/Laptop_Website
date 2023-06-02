<?php
    session_start()
?>

<h3>Add Session</h3>

<?php
    $cart["name"] = "Airplane";
    $cart["price"] = 1000000;

    $_SESSION["cart"] = $cart;
<?php
    session_start();
?>

<h3>Show Cart</h3>
<?php

$cart = $_SESSION["cart"];
var_dump($cart);
?>
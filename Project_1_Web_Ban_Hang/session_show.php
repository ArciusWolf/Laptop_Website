<?php
    session_start();
?>

<?php

$cart = $_SESSION["cart"];
echo '<pre>';
var_dump($cart);
echo '</pre>';
?>
<?php
session_start();
?>
<?php
// get customer info to session
if (isset($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["email"] = $_POST["email"];
}
header("Location: cart_confirm.php")
?>

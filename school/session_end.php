<?php
    session_start();
?>

<?php
    $_SESSION["sess"] = [];
    header("Location: index.php")
?>
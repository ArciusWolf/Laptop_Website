<?php
    session_start();
?>

<?php
    $sess = $_SESSION["sess"];
    echo '<pre>';
     var_dump($sess);
    echo '</pre>';
?>
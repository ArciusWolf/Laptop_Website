<?php
    session_start();
    $_SESSION["fullName"] = "";

    header("Location: index_home.php");

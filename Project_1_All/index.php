<?php
    $page = null;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    var_export($page);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=category_list.php">Category</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=product_list.php">Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=orders_list.php">Orders</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
            if ($page == null) {
                require_once ("category_list.php");
            } else if ($page == "category_list.php") {
                require_once ("category_list.php");
            } else if ($page == "category_add.php") {
                require_once ("category_add.php");

            } else if ($page == "product_list.php") {
                require_once ("product_list.php");
            } else if ($page == "product_add.php") {
                require_once ("product_add.php");
            } else if ($page == "product_edit.php") {
                require_once ("product_edit.php");

            } else if ($page == "orders_list.php") {
                require_once ("orders_list.php");
            }

        ?>
    </div>
</body>
</html>
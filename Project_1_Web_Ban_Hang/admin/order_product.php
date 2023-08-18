<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlphaFang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" />
    <!-- <link rel="stylesheet" href="../css/landing.css" type="text/css">
  <link rel="stylesheet" href="../css/all.css"> -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="admin.js" defer></script>
    <?php // Get data from Gaming Laptop table
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
      die("Connection Error");
    }

    $id = $_REQUEST["id"];
    $sql = "SELECT laptops.id, order_details.quantity, laptops.price, laptops.image, order_details.price, laptops.name FROM orders INNER JOIN order_details ON orders.id = order_details.order_id INNER JOIN laptops ON order_details.laptop_id = laptops.id WHERE orders.id = '$id'";
    
    ?>
  <?php
  session_start();
  ?>
  </head>
  <body>
    <!-- sidebar -->
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="../img/logo.png" alt="logo_img" />
        </span>
        <span class="logo_name">AlphaFang</span>
      </div>

      <div class="menu_container" style="transform: translateX(-9%)">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Dashboard</span>
              <span class="line"></span>
            </div>

            <li class="item">
              <a href="product_list.php" class="link flex">
                <i class="bx bx-grid-alt"></i>
                <span>Product List</span>
              </a>
            </li>
            <li class="item">
              <a href="order.php" class="link flex">
                <i class="bx bx-flag"></i>
                <span>Order</span>
              </a>
            </li>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Editor</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="product_add.php" class="link flex">
                <i class="bx bx-cloud-upload"></i>
                <span>Upload Product</span>
              </a>
            </li>
            <li class="item">
              <a href="user_manager.php" class="link flex">
                <i class="bx bxs-edit"></i>
                <span>User Manager</span>
              </a>
            </li>
            <li class="item">
              <a href="category.php" class="link flex">
                <i class="bx bx-folder"></i>
                <span>Category</span>
              </a>
            </li>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Setting</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="../landing.php" class="link flex">
                <i class="bx bx-arrow-from-right"></i>
                <span>Back To Store</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- sidebar end -->
    <div class="container" style="width: 1200px; transform: translateX(11%)">
      <div class="row">
        <div class="col-12">
        <h1 class="text-gra text-lg-center" style="transform: translateX(-1.5%);">Order List</h1>
        <a href="order.php" class="btn btn-warning" style="margin: 10px">Back to Order List</a>
        <br>
        <table class="table table-hover table-responsive table-bordered" style="background-color: #fff; color: #747474;">
        <tr class="table table-warning table-bordered">
        <th>Laptop ID</th>
        <th>Image</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        </tr>
        <tbody>
            <?php
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><button class="btn btn-primary"><?php echo $row["id"] ?></button></td>
                <td><img src="../upload /<?php echo $row["image"] ?>" alt="" width="100px"></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["quantity"] ?></td>
                <td><?php echo $row["price"] ?>$</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
  </body>
</html>

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
    $sql1 = "SELECT * FROM laptops where category = 'gaming' limit 10";
    $result1 = $con->query($sql1);
  ?>
  <?php // Get data from Gaming Office table
    $sql2 = "SELECT * FROM laptops where category = 'work' limit 10";
    $result2 = $con->query($sql2);
  ?>
    <?php // Get data from Laptop Category table
    $category = "SELECT * FROM laptops right join category on laptops.category_id = category.id group by category.id";
    $cate_result = $con->query($category);
  ?>
  <?php
  session_start();
  $username = "";
  if (isset($_SESSION["username"])) {
      $username = $_SESSION["username"];
  }
  ?>
  <?php // select all accounts
    $acc = "SELECT * FROM accounts where username = '$username'";
    $acc_result = $con->query($acc);
  ?>
  </head>
  <body>
    <!-- sidebar -->
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="images/logo.png" alt="logo_img" />
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
              <a href="admin.php" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span>Overview</span>
              </a>
            </li>
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
              <a href="add-product.php" class="link flex">
                <i class="bx bx-cloud-upload"></i>
                <span>Upload Product</span>
              </a>
            </li>
            <li class="item">
              <a href="edit_product.php" class="link flex">
                <i class="bx bxs-edit"></i>
                <span>Edit Product</span>
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
              <a href="landing.php" class="link flex">
                <i class="bx bx-cog"></i>
                <span>Back To Store</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="sidebar_profile flex">
          <div class="data_text">
            <span class="name">AlphaFang Studio</span>
          </div>
        </div>
      </div>
    </nav>
    <!-- sidebar end -->
  </body>
</html>

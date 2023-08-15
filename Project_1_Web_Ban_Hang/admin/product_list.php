<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlphaFang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="product_card.css" />
    <!-- <link rel="stylesheet" href="../css/landing.css" type="text/css">
  <link rel="stylesheet" href="../css/all.css"> -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="admin.js" defer></script>
    <?php // Get data from Gaming Laptop table
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
      die("Connection Error");
    }
    $sql = "SELECT * FROM laptops";
    $result = $con->query($sql);
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
    <?php
      if ($result-> num_rows> 0 ) {
        echo "<div class='container'>";
        echo "<div class='col-lg-12'>";
        echo "<div class='row align-items-start'>";
        while ($row = $result->fetch_assoc()) {
          echo 
          '<div class="card">
            <img class="card-img-top" width="300px" src="../upload/'.$row["image"].'" alt="Card image">
              <div class="card-body">
                <div>
                  <h4 class="card-title">'.$row['name'].'</h4>
                  <h4 class="card-text">'.$row["price"].'$</h4>
                  <div class="card_overlay">
                    <img src="../img/gpu.png" class="img-overlay" style="width:50px; height:50px">
                    <p class="card-description">'.$row["card"].'</p>
                    <img src="../img/cpu.png" class="img-overlay" style="width:35px; height:35px">
                    <p class="card-description">'.$row["cpu"].'</p>
                    <img src="../img/ram.png" class="img-overlay" style="width:50px; height:50px">
                    <p class="card-description">'.$row["ram"].'GB RAM</p>

                    <ul class="ul-btn">
                    <li class="li-btn"><button class="col btn btn-primary"><a style="text-decoration: none;color: #fff" href="edit_product.php?id='.$row["id"].'">Edit</a></button></li>
                    <li class="li-btn"><button class="col btn btn-danger"><a style="text-decoration: none;color: #fff" href="delete.php?id='.$row["id"].'">Delete</a></button></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>';
        }

      };
    ?>
  </div>
  </body>
</html>

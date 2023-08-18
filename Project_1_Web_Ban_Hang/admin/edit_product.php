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
    <?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM laptops WHERE id = $id";
    $result = $con->query($sql);
    $obj = null;
    if($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            $obj = $row;
        }
    }
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
    <div class="insert-box" style="transform: translateX(35%); margin-top: 20px;">
    <form action="product_update.php" method="post">
    <h1 class="text-gra">Edit Product</h1>
    Product ID: <input type="text" name="id" class="form-control-sm" value="<?php echo $obj['id']; ?>">

    <div class="mb-3 mt-3">
        <label for="productName">Product Name:</label>
        <input type="text" class="form-control form-control-sm" name="name" value="<?php echo $obj['name']; ?>" id="name" />
    </div>

    <div class="mb-3 mt-3">
        <label for="productName">Graphics Card:</label>
        <input type="text" class="form-control form-control-sm" name="card" value="<?php echo $obj['card']; ?>" id="card" />
    </div>

    <div class="mb-3 mt-3">
        <label for="productName">CPU:</label>
        <input type="text" class="form-control form-control-sm" name="cpu" value="<?php echo $obj['cpu']; ?>" id="cpu" />
    </div>

    <div class="mb-3 mt-3">
        <label for="productName">RAM:</label>
        <input type="text" class="form-control form-control-sm" name="ram" value="<?php echo $obj['ram']; ?>" id="ram" />
    </div>

    <div class="mb-3 mt-3">
        <label for="productName">Storage:</label>
        <input type="text" class="form-control form-control-sm" name="rom" value="<?php echo $obj['rom']; ?>" id="rom" />
    </div>

    <div class="mb-3 mt-3">
        <label for="price">Price:</label>
        <input type="text" class="form-control form-control-sm" name="price" value="<?php echo $obj['price']; ?>" id="price" />
    </div>

    <div class="mb-3 mt-3">
        <label for="quantity">Quantity:</label>
        <input type="text" class="form-control form-control-sm" name="quantity" value="<?php echo $obj['quantity']; ?>" id="quantity" />
    </div>

    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-warning">Update</button>
    </div>
    </div>
</form>
    </div>
  </body>
</html>

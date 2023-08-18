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
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
      die("Connection Error");
    }
  ?>

  <?php
// count laptop in each category
    $sql = "SELECT category.id, category.category, COUNT(laptops.category_id) AS count FROM category LEFT JOIN laptops ON category.id = laptops.category_id GROUP BY category.id";
    $result = $con->query($sql);
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
    <div class="container" style="width: 500px;">
      <h1 class="text-center">Category</h1>
        <table class="table table-hover table-responsive" style="transform: translateX(-50%); background-color: #fff;">
          <thead>
              <tr class="table-warning">
                  <td>Id</td>
                  <td>Category Name</td>
                  <td>Number of Products</td>
                  <td>Action</td>
              </tr>
          </thead>
          <tbody>
            <?php
                if ($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["category"]."</td>";
                        echo "<td>".$row["count"]."</td>";
                        echo "<td><a class='btn btn-danger' href='category_delete.php?id=".$row["id"]."'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
            ?>
            </tbody>
        </table>
      </div>
            <div class="box-cate">
            <form action="category_add.php" method="post">
            <h1 class="text">Add Category</h1>
                <label for="category" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category Name">
            <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
  </body>
</html>

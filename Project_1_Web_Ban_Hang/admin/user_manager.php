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
    $acc = "SELECT * FROM accounts";
    $result = $con->query($acc);
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
        <table class="table table-hover table-responsive" style="transform: translateX(-30%); background-color: #fff;">
          <thead>
              <tr class="table-warning">
                  <td>User Id</td>
                  <td>Username</td>
                  <td>Email</td>
                  <td>Phone Number</td>
                  <td>Admin</td>
                  <td>Delete</td>
              </tr>
          </thead>
          <tbody>
            <?php
                if ($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row["id"]."</td>";
                        if ($row["admin"] == 1) {
                          echo "<td style='color: #db0f00; font-weight:1000'><i>".$row["username"]."</i></td>";
                        } else {
                          echo "<td style='color: #00b8f5; font-weight:1000'>".$row["username"]."</td>";
                        }
                        
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["phone_num"]."</td>";
                        if ($row["admin"] == 1) {
                          echo "<td><button class='btn btn-success'>Yes</button></td>";
                        } else {
                          echo "<td><button class='btn btn-danger'>No</button></td>";
                        }
                        echo "<td><a class='btn btn-danger' href='user_delete.php?id=".$row["id"]."'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
            ?>
            </tbody>
        </table>
      </div>
            <div class="box-cate" style="top:60px;left: 600px">
            <form action="user_add.php" method="post">
            <h1 class="text">Add An Admin</h1>
                <label for="category" class="form-label">Username</label>
                <input type="text" class="form-control" name="user" placeholder="Enter Username">

                <label for="category" class="form-label">Password</label>
                <input type="text" class="form-control" name="pass" placeholder="Password">

                <label for="category" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone">

                <label for="category" class="form-label">Email</label>
                <input type="text" class="form-control" name="mail" placeholder="Email">

                <div class="">
                 <label for="price">Is This User Admin?:</label>
                  <select name="admin" class="form-select">
                    <option value="">- Choose One -</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
            <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
  </body>
</html>

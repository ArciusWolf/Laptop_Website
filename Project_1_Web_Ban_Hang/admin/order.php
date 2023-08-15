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
  <?php
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
      die("Connection Error");
    }
// select orders
    $sql = "SELECT * FROM orders";
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
    <div class="container" style="width: 1200px; transform: translateX(11%)">
      <div class="row">
        <div class="col-12">
        <h1 class="text-gra text-lg-center" style="transform: translateX(-1.5%);">Order List</h1>
          <table class="table table-hover table-responsive table-bordered" style="background-color: #fff; color: #747474;">
            <thead>
                <tr class="table table-warning table-bordered">
                <td>Order ID</td>
                <th>Order Status</th>
                <th>Order Date</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- show order detail and Status with colspan = 10 -->
              <?php
                $result = $con->query($sql);
                foreach ($result as $row) {
                    ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php if ($row['states'] == "Pending") {
                echo '<b><p style="color: #e6cf00;"><i> '.$row["states"].'</p></i></b>'; 
                } else {
                  if ($row['states'] == "On Shipment") {
                    echo '<b><p style="color: #00a8e6;"><i> '.$row["states"].'</p></i></b>'; 
                  } else {
                    if ($row['states'] == "Received") {
                      echo '<b><p style="color: #00e600;"><i> '.$row["states"].'</p></i></b>'; 
                    } else {
                      if ($row['states'] == "Cancelled") {
                        echo '<b><p style="color: #e60000;"><i> '.$row["states"].'</p></i></b>'; 
                      } else {
                        if ($row['states'] == "Confirmed") {
                          echo '<b><p style="color: #00e600;"><i> '.$row["states"].'</p></i></b>'; 
                        }}}}}?></td>
                <td><?php echo $row['date_buy']; ?></td>
                <td><?php echo $row['customerName']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                  <?php
                if ($row['states'] == "Pending") {
                    echo '
                    <form action="order_update.php?" method="POST">
                    <input type="hidden" name="id" value="'.$row["id"].'">
                    <select name="states" id="states" class="form-select-sm">
                      <option selected disabled><i>-- Action --</i></option>
                      <option value="Confirmed">Confirm</option>
                      <option value="Cancelled">Cancel Order</option>
                      <option value="On Shipment" disabled>Shipping</option>
                      <option value="Received" disabled>Received</option>   
                    </select>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>';
                } elseif ($row['states'] == "Confirmed") {
                    echo '
                    <form action="order_update.php?" method="POST">
                    <input type="hidden" name="id" value="'.$row["id"].'">
                    <select name="states" id="states" class="form-select-sm">
                      <option selected disabled><i>-- Action --</i></option>
                      <option value="Confirmed" disabled>Confirm</option>
                      <option value="Cancelled" disabled>Cancel Order</option>
                      <option value="On Shipment">Shipping</option>
                      <option value="Received" disabled>Received</option>   
                    </select>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>';
                } elseif ($row['states'] == "On Shipment") {
                  echo '
                  <form action="order_update.php?" method="POST">
                  <input type="hidden" name="id" value="'.$row["id"].'">
                  <select name="states" id="states" class="form-select-sm">
                    <option selected disabled><i>-- Action --</i></option>
                    <option value="Confirmed" disabled>Confirm</option>
                    <option value="Cancelled" disabled>Cancel Order</option>
                    <option value="On Shipment" disabled>Shipping</option>
                    <option value="Received">Received</option>   
                  </select>
                  <button type="submit" class="btn btn-primary">Update</button>
                  </form>';
              } elseif ($row['states'] == "Received") {
                echo '
                <form action="order_delete.php?" method="POST">
                <input type="hidden" name="id" value="'.$row["id"].'">
                <p>Recipient has received the packages</p>
                <button type="submit" class="btn btn-danger">Delete Order</button>
                </form>';
            } elseif ($row['states'] == "Cancelled") {
              echo '
              <form action="order_delete.php?" method="POST">
              <input type="hidden" name="id" value="'.$row["id"].'">
              <p>Order has been cancelled</p>
              <button type="submit" class="btn btn-danger">Delete Order</button>
              </form>';
            }
          }
                    ?>
              </td>
              </tr>
              <tr>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

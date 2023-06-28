<?php
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
      die("Connection Error");
    }
// select order and order detail from database
    $sql = "SELECT * FROM orders INNER JOIN order_details ON orders.id = order_details.order_id";
    ?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="landing.css" type="text/css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="sidebar.css">
  <link rel="stylesheet" href="slideshow.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<header>
      <div class="header">
        <div class="navbar">
          <img src="./img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='landing.php';">
          <h1 ><a href="#" class="header-h1">AlphaFang Store</a></h1>
            <?php if (isset($_GET['info'])) { ?>
              <p class="info-mess" >
            <?php echo $_GET['info']; ?>
              </p>
            <?php } ?>
            <?php if (isset($_GET['message'])) { ?>
              <p class="info-error">
            <?php echo $_GET['message']; ?>
              </p>
            <?php } ?>
            <ul>
            <div class="dropdown">
                <button class="dropbtn">Admin</button>
                <div class="dropdown-content">
                  <a href="sign_in.php">Dashboard</a>
                  <a href="products.php">Product List</a>
                  <a href="category_list.php">Category List</a>
                  <a href="account_list.php">Account List</a>
                  <a href="seller.php">Add Product</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                  <a href="sign_in.php">Sign In</a>
                  <a href="sign_up.php">Sign Up</a>
                </div>
              </div>
              <button class="headbtn" onclick="window.location.href='cart.php';"><i class="fa-solid fa-cart-shopping"></i></button>
            </ul>
        </div>
      </div>
  </header>
  <main>
<!-- Show order list -->
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1 class="text-gra text-lg-center" style="transform: translateX(-1.5%);">Order List</h1>
          <table class="table table-bordered table-hover table-dark table-responsive">
            <thead>
                <tr class="table-warning">
                <td>Order ID</td>
                <th>Order Date</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Address</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <!-- show order detail and Status with colspan = 10 -->
              <?php
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['date_buy']; ?></td>
                <td><?php echo $row['customerName']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['price']; ?>$</td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['total']; ?>$</td>
              </tr>
              <tr>
                <td colspan="6">
                  Order Status: <?php echo $row['states']; ?>
                </td>
                <td colspan="2">
                  <?php
                      if ($row['states'] == "Pending") {
                        echo '
                        <form action="order_update.php" method="post">
                        <input type="text" name="id" value='.$row["id"].'>
                        <select name="states" id="states">
                          <option value="Cancel">Cancel</option>
                          <option value="Shipping" disabled>Shipping</option>
                          <option value="Received" disabled>Received</option>
                          <option value="Confirm">Confirm</option>
                        </select>
                        <button type="submit" name="update">Update</button>';
                      } else {
                        if ($row['states'] == "Confirmed") {
                          echo '
                          <form action="order_update.php" method="post">
                          <input type="hidden" name="id" value='.$row["id"].'>
                          <select name="states" id="states" class="form-select">
                            <option value="Shipping">Shipping</option>
                            <option value="Received" disabled>Received</option>
                            <option value="Confirmed">Confirmed</option>
                          </select>
                          <button type="submit" name="update" class="btn-see">Update</button>';
                        } else {
                          if ($row['states'] == "Received") {
                            echo '
                            <form action="order_update.php" method="post">
                            <input type="text" name="id" value='.$row["id"].'>
                            <select name="states" id="states">
                              <option value="Received">Received</option>
                              <option value="Confirmed">Confirmed</option>
                            </select>
                            <button type="submit" name="update">Update</button>';
                          } else {
                            if ($row['states'] == "Confirmed") {
                              echo '
                              <form action="order_update.php" method="post">
                              <input type="text" name="id" value='.$row["id"].'>
                              <select name="states" id="states">
                                <option value="Confirmed">Confirmed</option>
                              </select>
                              <button type="submit" name="update">Update</button>';
                            }
                          }
                        }
                      }
                        }
                      }
                  ?>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
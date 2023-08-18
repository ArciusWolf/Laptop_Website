<!doctype html>
<html lang="en">
<head>
  <title>AlphaMall</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="landing.css" type="text/css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="all.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php
      $con = new mysqli("localhost", "root", "", "c_1405");
      if ($con->connect_error) {
        die("Connection Error");
      }
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
  $email = $_POST['email'];
  $phone = $_POST['phone'];
// select order and order details from current logged in username
$sql = "SELECT orders.id, orders.date_buy, orders.states, order_details.quantity, order_details.price, laptops.name, laptops.image FROM orders INNER JOIN order_details ON orders.id = order_details.order_id INNER JOIN laptops ON order_details.laptop_id = laptops.id WHERE orders.phone = '$phone' AND orders.email = '$email'";
  ?>
</head>

<body>
<header>
      <div class="header">
        <div class="navbar">
          <img src="../img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='../landing.php';">
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
              <?php
// check if user is admin
if ($acc_result->num_rows > 0) {
    while ($row = $acc_result->fetch_assoc()) {
        if ($row["admin"] == "1") {
          echo '
          <div class="dropdown">
              <button class="dropbtn">Admin</button>
              <div class="dropdown-content">
                <a href="sign_in.php">Dashboard</a>
                <a href="products.php">Product List</a>
                <a href="category_list.php">Category List</a>
                <a href="account_list.php">Account List</a>
                <a href="seller.php">Add Product</a>
                <a href="./order_details/order_detail.php">Orders</a>
              </div>
            </div>';
        }}}
            ?>
            <?php
              if ($username != "") {
                echo'
                <div class="dropdown">
                  <button class="dropbtn">Order</button>
                  <div class="dropdown-content">
                    <a href="./order_details/order_customer.php">Your Order</a>
                    <a href="sign_in.php">Search Order</a>
                  </div></div>
                    <div class="dropdown">
                      <button class="dropbtn">Account</button>
                    <div class="dropdown-content">
                      <a style="color:#ffffff;">Hello, '.$username.'!</a>
                      <a href="logout.php">Logout</a>';
                } else {
                ?>
              <div class="dropdown">
                <button class="dropbtn">Account</button>
              <div class="dropdown-content">
                <a href="sign_up.php">Register</a>
                <a href="sign_in.php">Login</a>
                    
                <?php
                  }
                ?>
              </div></div>
            <button class="headbtn" onclick="window.location.href='cart.php';"><i class="fa-solid fa-cart-shopping"></i></button>
          </ul>
        </div></div>
  </header>

  <main>
  <h1 class="text-gra text-center">Your Order</h1>
  <div class="container">
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col-lg-2">Order ID</th>
        <th scope="col-lg-2"></th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total Price</th>
        <th scope="col">Order Date</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo '
              <tr>
                <th scope="row">' . $row["id"] . '</th>
                <td><img src="../upload/' . $row["image"] . '" alt="laptop" width="100px" height="100px"></td>
                <td>' . $row["name"] . '</td>
                <td>' . $row["quantity"] . '</td>
                <td>' . $row["price"] . '$</td>
                <td>' . $row["date_buy"] . '</td>';
              if ($row['states'] == "Pending") {
                  echo '<td><b><p style="color: #e6cf00;"><i> '.$row["states"].'</p></i></b></td>'; 
                  } else {
                    if ($row['states'] == "On Shipment") {
                      echo '<td><b><p style="color: #00a8e6;"><i> '.$row["states"].'</p></i></b></td>'; 
                    } else {
                      if ($row['states'] == "Received") {
                        echo '<td><b><p style="color: #00e600;"><i> '.$row["states"].'</p></i></b></td>'; 
                      } else {
                        if ($row['states'] == "Cancelled") {
                          echo '<td><b><p style="color: #e60000;"><i> '.$row["states"].'</p></i></b></td>'; 
                        } else {
                          if ($row['states'] == "Confirmed") {
                            echo '<td><b><p style="color: #00e600;"><i> '.$row["states"].'</p></i></b></td>'; 
                          }}}}}
              echo '</tr>';
             
          }
          // count total price
          $total = "SELECT SUM(price) AS total FROM order_details INNER JOIN orders ON order_details.order_id = orders.id WHERE orders.customerName = 'Customer'";
          $total_result = $con->query($total);
          if ($total_result->num_rows > 0) {
            while ($row = $total_result->fetch_assoc()) {
              echo '
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td>Total: </td>
                <td>' . $row["total"] . '</td>
                <td></td>
                <td></td>
              </tr>';
            }
          }
      }
      ?>
    </tbody>
    </div>
  <?php
  
  ?>
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
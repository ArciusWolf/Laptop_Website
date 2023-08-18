<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <title>AlphaMall</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="css/landing.css"">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="sidebar.css">
  <link rel="stylesheet" href="slideshow.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM laptops";
    $result = $con->query($sql);
?>
</head>

<body>
  <!-- Header Section -->
  <header>
      <div class="header">
        <div class="navbar">
          <img src="./img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='landing.php';">
            <?php if (isset($_GET['info'])) { ?>
              <p class="info-mess" >
            <?php echo $_GET['info']; ?>
              </p>
            <?php } ?>
            <?php if (isset($_GET['message'])) { ?>
              <p class="info-mess">
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

  <?php
    $carts = $_SESSION["cart"];
?>

  <main>
    <div class="container">
      <h1 class="text-gra text-lg-center">Cart</h1>
      <form action=""></form>
      <table class="table table-bordered table-hover table-dark table-responsive">
        <thead>
          <tr class="table-warning">
            <td>ID</td>
            <td>Image</td>
            <td>Product Name</td>
            <td>Card</td>
            <td>CPU</td>
            <td>RAM</td>
            <td>ROM</td>
            <td>Price</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
        <?php
          if($carts != null) {
            foreach ($carts as $cart) {
            //Show Cart Items
              echo '<tr>';
              echo '<td>'.$cart["id"].'</td>';
              echo '<td><img src="upload/'.$cart["image"].'" alt="" width="100px"></td>';
              echo '<td>'.$cart["name"].'</td>';
              echo '<td>'.$cart["card"].'</td>';
              echo '<td>'.$cart["cpu"].'</td>';
              echo '<td>'.$cart["ram"].'GB</td>';
              echo '<td>'.$cart["rom"].'</td>';
              echo '<td>'.$cart["price"].'$</td>';
// delete a product in cart
              echo '<td><a href="cart_delete.php?id='.$cart["id"].'"><i class="fa-solid fa-trash"></i></a></td>';
              echo '</tr>';
                }
              }
            // Calculate Total Price of Cart
              $total = 0;
              foreach ($carts as $cart) {
                $total += $cart["price"];
              }
              echo '<tr class="table-danger">';
              echo '<td colspan="5">Total:</td>';
              echo '<td colspan="4">'.$total.'$</td>';
              echo '</tr>';
            ?>
        </tbody>
      </table>
      <!-- Confirm Buy -->
      <h1 class="text-gra text-lg-center">Confirm Buy</h1>
      <form action="order_details/order_save.php" method="post">
      <?php
          if($carts != null) {
            foreach ($carts as $cart) {
              echo '<input type="hidden" name="id" id="ids" value="'.$cart["id"].'" >';
              echo '<input type="hidden" name="prices" id="prices" value="'.$cart["price"].'" >';
              }
            }
        ?>
      </form>  

        <button type="submit" class="btn-see" id="order">Buy</button>
        <div class="container" >

          </div>
        <script>
          $(function () {
              $("#order").click(function () {
                  var ids = new Array();
                  $("input[name=id]").each(function() {
                      ids.push($(this).val());
                  });
                  location.href = "./order_details/order_save.php?ids=" + ids;
              });
          });
        </script>
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


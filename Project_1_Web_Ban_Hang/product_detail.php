<?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM laptops WHERE id = ".$_GET['id']."";
    $result = $con->query($sql);
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
  <link rel="stylesheet" href="landing.css"">
  <link rel="stylesheet" href="product.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="css/all.css">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
  <!-- Header Section -->
  <header>
      <div class="header">
        <div class="navbar">
          <img src="./img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='landing.php';">
          <h1 ><a href="#" class="header-h1">AlphaFang Store</a></h1>
            <ul>
            <div class="dropdown">
                <button class="dropbtn">Admin</button>
                <div class="dropdown-content">
                  <a href="sign_in.php">Dashboard</a>
                  <a href="products.php">Product List</a>
                  <a href="category_list.php">Category List</a>
                  <a href="account_list.php">Account List</a>
                  <a href="seller.php">Add Product</a>
                  <a href="order_detail.php">Orders</a>
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

    <div>
      <br>
      <div class="container">
        <div class="container">
          <?php if (isset($_GET['info'])) { ?>
            <p style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08;">
          <?php echo $_GET['info']; ?>
            </p>
          <?php } ?>
        </div>
      </div>
      <?php
      $obj = null;
          if ($result-> num_rows> 0 ) {
              while ($row = $result->fetch_assoc()) {
                $obj = $row;
                  echo "
                  <div class='container'>
                    <div class='container'>
                    <a href='landing.php'>Home</a> > <a href='product.php'>Product</a> > <a href='#'>".$obj["name"]."</a>
                    <br>
                    </div>
                    <br>
                    <h1 class='prd-name'>".$obj["name"]." (".$obj["ram"]." GB | ".$obj["card"]." | ".$obj["cpu"].")</h1>
                    <h6 class='prd-name text-center'>Product ID: ".$obj["id"]."</h6>
                    <div class='product'>
                      <div class='product_info'>
                        <div class='img-holder'>
                          <img src='upload/".$obj["image"]."' alt='product' class='product_img'>
                        </div>
                        <div class='product_detail'>
                          <br>
                          <h3>Device Information</h3>
                          <ul>
                          <li>Product Name: ".$obj["name"]."</li>
                          <li>RAM: ".$obj["ram"]." GB</li>
                          <li>ROM: ".$obj["rom"]." GB</li>
                          <li>VGA: ".$obj["card"]."</li>
                          <li>CPU: ".$obj["cpu"]."</li>
                          <li>Screen Resolution: ".$obj["screen_resolution"]."
                          </ul>
                          <h2 class='price'>Price: ".$obj["price"]."$</h2>

                          <div class='cart-btn'>
                          <a href='product_cart.php?id=".$obj["id"]."'><button class='btn_add_cart'>Add To Cart</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class='container'>
                  <div class='product_desc'>
                  <h1 class='text-gra'>About This Product</h1>
                    <p>".$obj["descriptions"]."</p>
                    </div>
                  </div>";
              }
          };    
      ?>
    </div>
    <br>


  </main>

  <!-- Footer Section -->


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <!-- Bootstrap JavaScript v5.2.1 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
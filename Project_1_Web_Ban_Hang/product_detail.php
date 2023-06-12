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
  <link rel="stylesheet" href="landing.css" type="text/css">
  <link rel="stylesheet" href="product.css">
  <link rel="stylesheet" href="header.css">

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
            <ul>
            <div class="container">
              <div class="src-box">
                <form method="post">
                <input type="text" name="string" placeholder="Search for product" class="search-box">
                <input type="image" src="./img/magnifying-glass.png" name="submit" value="" class="src-btn">
                </form>
              </div>
            </div>
              <div class="dropdown">
                <button class="dropbtn">Category</button>
                <div class="dropdown-content">
                  <a href="#">Asus</a>
                  <a href="#">Dell</a>
                  <a href="#">Acer</a>
                  <a href="#">Macbook</a>
                  <a href="#">Lenovo</a>
                  <a href="#">Apple</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                  <a href="#">Sign In</a>
                  <a href="#">Sign Up</a>
                </div>
              </div>
              <button class="headbtn" onclick="window.location.href='sign_in.html';">Sign In</button>
              <button class="headbtn" onclick="window.location.href='cart.php';">Cart</button>
            </ul>
        </div>
      </div>
  </header>

<!-- Main Section -->
  <main>
<!-- Slideshow Section -->

<!-- Slideshow End -->

<?php
$obj = null;
    if ($result-> num_rows> 0 ) {
        while ($row = $result->fetch_assoc()) {
          $obj = $row;
            echo "<div class='container'>

            <div class='img-holder'>
            <img src='upload/".$obj["image"]."' alt='product' class='product_img'>
            </div>

            <div class='product_info'>
            ".$obj["name"]."
            <br>
            ".$obj["price"]."$
            <br>
            ".$obj["ram"]."GB
            <br>
            ROM: ".$obj["rom"]."
            <br>
            VGA: ".$obj["card"]."
            <br>
            CPU: ".$obj["cpu"]."
            <br>
            Screen Resolution: ".$obj["screen_resolution"]."
            <br>
            Description: ".$obj["descriptions"]."
            </div>";
        }
    };    
?>
<button><a href="product_cart.php?id=<?php echo $obj['id']; ?>" class="btn_add_cart">Thêm vào giỏ hàng</a>

  </main>

  <!-- Footer Section -->
  <footer>
    <!-- place footer here -->
  </footer>

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
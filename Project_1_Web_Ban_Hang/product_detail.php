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
              <li><a href="./products.php" class="pro_btn">Products</a></li>
              <li>Category</li>
              <li>About</li>
              
              <button class="headbtn" onclick="window.location.href='sign_in.html';">Sign In</button>
              <button class="headbtn" onclick="window.location.href='seller.php';">Sell</button>
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
    if ($result-> num_rows> 0 ) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product_detail'>";
            echo "".$row["name"]."";
            echo "<br>";
            echo "".$row["price"]."$";
            echo "<br>";
            echo "".$row["ram"]."GB";
            echo "<br>";
            echo "ROM: ".$row["rom"]."";
            echo "<br>";
            echo "VGA: ".$row["card"]."";
            echo "<br>";
            echo "CPU: ".$row["cpu"]."";
            echo "<br>";
            echo "Screen Resolution: ".$row["screen_resolution"]."";
            echo "<br>";
            echo "Description: ".$row["descriptions"]."";
            echo "</div>";
        }
    };    
?>
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
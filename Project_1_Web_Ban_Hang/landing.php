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
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="sidebar.css">
  <link rel="stylesheet" href="slideshow.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <?php // Get data from Gaming Laptop table
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
      die("Connection Error");
    }
    $sql1 = "SELECT * FROM laptops where category = 'gaming' limit 10";
    $result1 = $con->query($sql1);
  ?>
  <?php // Get data from Gaming Office table
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }
    $sql2 = "SELECT * FROM laptops where category = 'work' limit 10";
    $result2 = $con->query($sql2);
  ?>
    <?php // Get data from Laptop Category table
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }
    $category = "SELECT * FROM laptops right join category on laptops.category_id = category.id group by category.id";
    $cate_result = $con->query($category);
  ?>
</head>

<body>
  <!-- Header Section -->
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

<!-- Main Section -->
  <main>
    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul>
          <div class="menu_title"><h3 class="text-gra">Laptop Categories</h3></div>
        </ul>
        <?php
          if ($cate_result->num_rows > 0) {
            echo"<div class='menu_title menu_editor'></div>
            <ul class='menu_items'>
            ";
            while ($row3 = $cate_result->fetch_assoc()) {
        echo "<li class='item'>";
        echo "<a href='products.php?category_id=".$row3["category_id"]."'>";
        echo "<span class='nav_link'>".$row3["category"]."</span>";
        echo "</a>";
        echo "</li>";
            }
          }
          ?>
        </div>
        </div>
    </nav>
    <br>


  <!-- Slideshow Section -->
  <div class="slideshow-banner">
    <div class="container">
      <div id="slideshow" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- Slideshow End -->
  </div>
  <br>
<!-- PHP Show products -->
  <div class="bg-pdt">
    <?php
      if ($result1-> num_rows> 0 ) {
        echo "<br>";
        echo "<div class='container'>";
        echo "<h1 class='text-center text-gra' 
        style='border: 2px solid #f5deb3; border-radius: 10px; padding: 10px;'>GAMING LAPTOP</h1>";
        echo "<div class='row'>";
        while ($row1 = $result1->fetch_assoc()) {
          echo 
          '<div class="card">
            <a href="product_detail.php?id='.$row1["id"].'">
            <img class="card-img-top" width="300px" src="upload/'.$row1["image"].'" alt="Card image">
              <div class="card-body">
                <div>
                  <h4 class="card-title">'.$row1['name'].'</h4>
                  <h4 class="card-text">'.$row1["price"].'$</h4>
                  <div class="card_overlay">
                    <img src="./img/gpu.png" class="img-overlay" style="width:50px; height:50px">
                    <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row1["card"].'</p>
                    <img src="./img/cpu.png" class="img-overlay" style="width:35px; height:35px">
                    <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row1["cpu"].'</p>
                    <img src="./img/ram.png" class="img-overlay" style="width:50px; height:50px">
                    <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row1["ram"].'GB RAM</p>
                  </div>
                </div>
              </div>
          </div>';
        }
        echo "<a href='products.php'><button class='btn-see'>Show More</button></a>";
      };

    ?>
    <?php
      if ($result2-> num_rows> 0 ) {
        echo "<div class='container'>";
        echo "<h1 class='text-center text-gra' 
        style='border: 2px solid #f5deb3; border-radius: 10px; padding: 10px'>OFFICE LAPTOP</h1>";
        echo "<div class='row'>";
        while ($row2 = $result2->fetch_assoc()) {
          echo 
          '<div class="card">
          <a href="product_detail.php?id='.$row2["id"].'">
          <img class="card-img-top" width="300px" src="upload/'.$row2["image"].'" alt="Card image">
          <div class="card-body">
          <div>
          <h4 class="card-title">'.$row2['name'].'</h4>
          <h4 class="card-text">'.$row2["price"].'$</h4>
          <div class="card_overlay">
          <img src="./img/gpu.png" class="img-overlay" style="width:50px; height:50px">
          <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row2["card"].'</p>
          <img src="./img/cpu.png" class="img-overlay" style="width:35px; height:35px">
          <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row2["cpu"].'</p>
          <img src="./img/ram.png" class="img-overlay" style="width:50px; height:50px">
          <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row2["ram"].'GB RAM</p>
          </div>
          </div>
          </div>
          </div>';
        }
        echo '<a href="products.php?category=work"><button class="btn-see">Show More</button></a>';
      };
    ?>
  </div>
<!-- End PHP Show products -->
 
  </main>
  <!-- Footer Section -->
  <footer style="backdrop-filter: blur(15px); border: solid #f3deb3;">
    <div class="footer-center">
        <p>
        © 2023 AlphaFang Store <br>
      Điện thoại: (077) 8486869 | Email: alphafang@studio.com <br>
    </p></div>
    <div class="footer-bottom">AlphaFang © 2023 - Copyright Belong To AlphaFang Studio</div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <!-- Bootstrap JavaScript v5.2.1 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- Script Section -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Script Section End-->
</body>

</html> 
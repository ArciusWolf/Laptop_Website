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
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">

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
            <ul>
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
                  <a href="sign_in.php">Sign In</a>
                  <a href="sign_up.php">Sign Up</a>
                </div>
              </div>
        
              <button class="headbtn" onclick="window.location.href='seller.php';">Upload</button>
              <button class="headbtn" onclick="window.location.href='cart.php';">Cart</button>
            </ul>
        </div>
      </div>
  </header>

<!-- Main Section -->
  <main>

  <?php if (isset($_GET['info'])) { ?>
        <p style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08;">
        <?php echo $_GET['info']; ?>
        </p>
        <?php } ?>

<!-- Slideshow Section -->
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
<!-- Slideshow End -->

<!-- PHP Show products -->
<div class="container">
  <?php
    if ($result-> num_rows> 0 ) {
      echo "<div class='container'>";
      echo "<div class='row'>";
      while ($row = $result->fetch_assoc()) {
        echo 
        '<div class="card">
        <a href="product_detail.php?id='.$row["id"].'">
        <img class="card-img-top" width="300px" src="upload/'.$row["image"].'" alt="Card image">
        <div class="card-body">
        <div>
        <h4 class="card-title">'.$row['name'].'</h4>
        <h4 class="card-text">'.$row["price"].'$</h4>
        <div class="card_overlay">
        <img src="./img/gpu.png" class="img-overlay" style="width:50px; height:50px">
        <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row["card"].'</p>
        <img src="./img/cpu.png" class="img-overlay" style="width:35px; height:35px">
        <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row["cpu"].'</p>
        <img src="./img/ram.png" class="img-overlay" style="width:50px; height:50px">
        <p class="card-description" style="font-family:Poppins, sans-serif; font-size:12px">'.$row["ram"].'GB RAM</p>
        </div>
        </div>
        </div>
        </div>';
      }
    };
  ?>
  </div>
<!-- End PHP Show products -->
  </main>
  <!-- Footer Section -->
  <footer style="backdrop-filter: blur(15px); border: 2px solid #f3deb3;">
    <div class="footer-center">
        <p>
        © 2023 AlphaFang Store / Address: 261 - 263 Khánh Hội, P5, Q4, TP. Hồ Chí Minh <br>
        GPĐKKD số 0311609355 do Sở KHĐT TP.HCM cấp ngày 08/03/2012. GP số 47/GP-TTĐT do sở TTTT TP HCM cấp ngày 02/07/2018. <br>
      Điện thoại: (028) 7302 3456. Email: fptshop@fpt.com.vn. Chịu trách nhiệm nội dung: Nguyễn Trịnh Nhật Linh. <br>
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
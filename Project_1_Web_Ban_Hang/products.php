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

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<body>
  <!-- Header Section -->
  <header>
      <div class="header">
        <div class="navbar">
          <img src="./img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='landing.php';">
            <ul>
            <div class="dropdown">
                <button class="dropbtn">Admin</button>
                <div class="dropdown-content">
                  <a href="sign_in.php">Dashboard</a>
                  <a href="products.php">Product List</a>
                  <a href="seller.php">Add Product</a>
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
                  <a href="sign_in.php">Sign In</a>
                  <a href="sign_up.php">Sign Up</a>
                </div>
              </div>
              <button class="headbtn" onclick="window.location.href='cart.php';"><i class="fa-solid fa-cart-shopping"></i></button>
            </ul>
        </div>
      </div>
  </header>
    <!-- End Header Section -->

<?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $category_id = $_GET['category_id'];

    $sql = "SELECT * FROM laptops where category_id = $category_id";
    $result = $con->query($sql);
?>

    <section>
        <div class="container">
        <?php if (isset($_GET['info'])) { ?>
        <p class="container" style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08; background-color: rgba(0, 255, 106, 0.2);">
        <?php echo $_GET['info']; ?>
        </p>
        <?php } ?>
            <br>
            <h1 style="color: #f5deb3;" class="text-center">Product List</h1>
            <div class="bg-pdt">
            <?php
      if ($result-> num_rows> 0 ) {
        echo "<br>";
        echo "<div class='container'>";
        echo "<h1 class='text-center text-gra' 
        style='border: 2px solid #f5deb3; border-radius: 10px; padding: 10px;'>GAMING LAPTOP</h1>";
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
        echo "<a href='products.php'><button class='btn-see'>Show More</button></a>";
      };
    ?>
    </div>
     </section>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
    <!-- <script>
        $(function () {
        var maxL = 100;
        $('.content').each(function () {
            var text = $(this).text();
            if(text.length > maxL) {
                
                var begin = text.substr(0, maxL),
                    end = text.substr(maxL);

                $(this).html(begin)
                    .append($('<a class="readmore"/>').attr('href', '#').html('read more...'))
                    .append($('<div class="hidden"/>').html(end));
            }
        });  
        $(document).on('click', '.readmore', function () {
                    $(this).next('.readmore').fadeOut("400");
            $(this).next('.hidden').slideToggle(400);
        })           
    });
    </script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

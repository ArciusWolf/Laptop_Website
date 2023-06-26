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
  <link rel="stylesheet" href="css/all.css">

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

  <main>
    <div>
      <section class="formbox">
        <h1 class="login_h1">Register</h1>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error" style="border: 2px solid red; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #ff0000;">
          <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>
      <div> 
        <form action="register.php" method="post">
        <div class="txt_field">
          <input type="text" required onInvalid ="setCustomValidity('Please enter your username!')" name="username">
          <span></span>
          <label><i class="fa-solid fa-user"></i> Username</label>
        </div>
        <div class="txt_field">
          <input type="text" required onInvalid ="setCustomValidity('Please enter your Email!')" name="email">
          <span></span>
          <label><i class="fa-solid fa-envelope"></i> Email</label>
        </div>
        <div class="txt_field">
          <input type="text" required onInvalid ="setCustomValidity('Please enter your phone number!')" name="phone_num">
          <span></span>
          <label><i class="fa-solid fa-mobile-screen-button"></i> Phone</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password" onInvalid ="setCustomValidity('Please enter your password!')">
          <span></span>
          <label><i class="fa-solid fa-lock"></i> Password</label>
        </div>

        <input type="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="sign_in.php">Login Here.</a>
                  <div class="pass">Forgot Password?</div>
        </div>
        </form>
      </div>
      </section>
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
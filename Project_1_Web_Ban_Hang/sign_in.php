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
    <link rel="stylesheet" href="./css/landing.css" type="text/css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/sidebar.css">
  <link rel="stylesheet" href="css/slideshow.css">
</head>

<?php 
    $conn = new mysqli("localhost", "root", "", "c_1405");
    if ($conn->connect_error) {
        die("Connection Error");
    }
?>
<body>

  <!-- Header Section -->
  <header style="transform: translateY(-116%);">
      <div class="header">
        <div class="navbar">
          <img src="./img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='landing.php';">
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
    <div class="container">
      <section class="formbox" style="height: 500px;">
        <h1 class="login_h1">Login</h1>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error" style="border: 2px solid red; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #ff0000;">
          <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>
      <div> 
        <form action="login.php" method="post">
        <div class="txt_field">
          <input type="text" required onInvalid ="setCustomValidity('Please enter your username')" name="username">
          <span></span>
          <label><i class="fa-solid fa-user"></i> Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password" onInvalid ="setCustomValidity('Please enter your password')">
          <span></span>
          <label><i class="fa-solid fa-lock"></i> Password</label>
        </div>

        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Register.</a>
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
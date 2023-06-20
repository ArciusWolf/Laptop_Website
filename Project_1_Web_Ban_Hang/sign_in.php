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
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>

<?php 
    $conn = new mysqli("localhost", "root", "", "c_1405");
    if ($conn->connect_error) {
        die("Connection Error");
    }
?>
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
                  <a href="#">Sign In</a>
                  <a href="#">Sign Up</a>
                </div>
              </div>
        
              <button class="headbtn" onclick="window.location.href='seller.php';">Upload</button>
              <button class="headbtn" onclick="window.location.href='cart.php';">Cart</button>
            </ul>
        </div>
      </div>
  </header>


  <main>
    <div>
      <section class="formbox">
        <h1 class="login_h1">Login</h1>
        <form action="login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error" style="border: 2px solid red; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #ff0000;">
        <?php echo $_GET['error']; ?>
        </p>
        <?php } ?>
          <div class="inputbox">
            <input type="text" name="username">
            <span data-placeholder="Username"></span>
          </div>

          <div class="inputbox">
            <input type="password" name="password">
            <span data-placeholder="Password"></span>
          </div>

          <button type="submit" class="login-btn">Login</button>
          <div class="login-func">
            <a href="#"><h6>Don't have an account?</h6></a>
            <a href="#"><h6>Forget your password?</h6></a>
          </div>
        </form>
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
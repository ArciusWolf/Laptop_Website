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
  <link rel="stylesheet" href="./css/landing.css"">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
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
            <ul>
            <div class="dropdown">
                <button class="dropbtn">Admin</button>
                <div class="dropdown-content">
                  <a href="sign_in.php">Dashboard</a>
                  <a href="products.php">Product List</a>
                  <a href="account_list.php">Account List</a>
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
  <!-- Main Section -->
  <main>
    <!-- Product Details Insert -->
    <br>
      <div class="container">
      <section class="insert-box">
        <form action="seller_upload.php" method="post" enctype="multipart/form-data">
          <br>
          <h1 class="text-center">Add Product</h1>
          <?php if (isset($_GET['message'])) { ?>
        <p class="container" style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08; background-color: rgba(0, 255, 106, 0.2);">
        <?php echo $_GET['message']; ?>
        </p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
        <p class="container" style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; backdrop-filter:blur(15px); color: #00ff08; background-color: rgba(0, 255, 106, 0.2);">
        <?php echo $_GET['error']; ?>
        </p>
        <?php } ?>
            <div>
              <label for="item">Name:</label>
              <input type = "text" name="name" id="NAME" placeholder = "Name" class="form-control "/>
            </div>
            <div class="">
              <label for="item">Price:</label>
              <input type = "text" name="price" id="price" placeholder = "Price" class="form-control "/>
            </div>
          <div class="spec-box">
            <div class="col-lg-2">
              <label for="item">Quantity:</label>
              <input type = "text" name="quantity" id="quantity" placeholder = "Quantity" class="form-control "/>
            </div>
            <div class="col-lg-2">  
              <label for="price">RAM:</label>
              <input type = "text" name="ram" id="ram" placeholder = "RAM Amount" class="form-control "/>
            </div>
            <div class="col-lg-2">
              <label for="price">ROM:</label>
              <input type = "text" name="rom" id="ROM" placeholder = "ROM Amount" class="form-control "/>
            </div>
            <div class="col-lg-2">
              <label for="price">Screen Resolution:</label>
              <input type = "text" name="screen_resolution" id="reso" placeholder = "Screen Resolution" class="form-control "/>
            </div>
            <div class="col-lg-2">
              <label for="price">Screen size:</label>
              <input type = "text" name="screen_size" id="s_size" placeholder = "Screen size" class="form-control "/>
            </div>
          </div>
            <br> 
          <label for="price">Card:</label>
          <input type = "text" name="card" id="Card" placeholder = "Card" class="form-control "/>
          <label for="price">CPU:</label>
          <input type = "text" name="cpu" id="CPU" placeholder = "CPU" class="form-control "/>
          <div class="col-lg-3">
            <label for="formFileMultiple" class="form-label">Add Product Image:</label>
            <input type="file" name="image" id="image" class="form-control " />
          </div>  
          <div class="d-flex justify-content-between">
          <div class="col-lg-1">
          <label for="price">Manufacturer:</label>
            <select name="category_id" class="form-select">
              <option value="">- Choose One -</option>
              <option value="1">Asus</option>
              <option value="2">Acer</option>
              <option value="3">Dell</option>
              <option value="4">MSI</option>
              <option value="5">Apple</option>
              <option value="6">Lenovo</option>
              <option value="7">Gigabyte</option>
              <option value="8">Alienware</option>
              <option value="9">Graphics Laptop</option>
              <option value="10">HP</option>
            </select>
          </div>
          <div class="col-lg-1">
          <label for="price">Purpose:</label>
            <select name="category" class="form-select">
              <option value="">- Choose One -</option>
              <option value="gaming">Gaming Laptop</option>
              <option value="work">Office Laptop</option>

            </select>
          </div>
          <div class="spec-box">
            <div class="col-lg-2">
              <label for="price">Length:</label>
              <input type = "text" name="length" id="length" placeholder = "Length" class="form-control "/>
            </div>
            <div class="col-lg-2">
              <label for="price">Width:</label>
              <input type = "text" name="width" id="width" placeholder = "Width" class="form-control "/>
            </div> 
            <div class="col-lg-2">
              <label for="price">Height:</label>
              <input type = "text" name="height" id="height" placeholder = "Height" class="form-control "/>
            </div> 
            <div class="col-lg-2">
              <label for="price">Weight:</label>
              <input type = "text" name="weight" id="weight" placeholder = "Weight" class="form-control "/>
            </div>
          </div>
          </div>
          

          <label for="price">Description:</label>
          <input type = "text" name="descriptions" id="descriptions" placeholder = "Description" class="form-control "/>
        
          <br>
          <button type="submit" class="form-control add-prd-btn">Add Product</button>
        </form>
      </div>
    </section>
    <br>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

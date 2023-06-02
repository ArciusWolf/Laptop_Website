
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
  <link rel="stylesheet" href="./landing.css">
</head>

<body>

  <!-- Header Section -->
  <header>
      <div class="header">
        <div class="navbar">
          <img src="./img/logo.png" alt="AlphaFang" class="logo" onclick="window.location.href='landing.php';">
            <ul>
              <li><a href="./products.php">Products</a></li>
              <li>Category</li>
              <li>About</li>
              <button class="headbtn" onclick="window.location.href='sign_in.html';">Sign In</button>
              <button class="headbtn" onclick="window.location.href='seller.php';">Sell</button>
            </ul>
        </div>
      </div>
  </header>
  <!-- Main Section -->
  <main>
    <!-- Product Details Insert -->
    <section>
      <div class="boxed">
        <form action="seller_upload.php" method="post" enctype="multipart/form-data">
          <br>
          <label for="item">Name</label>
          <input type = "text" name="name" id="NAME" placeholder = "Name"/>
          <i>

          <label for="item">Quantity</label>
          <input type = "text" name="quantity" id="quantity" placeholder = "Quantity"/>
          <i>

          <label for="item">Price</label>
          <input type = "text" name="price" id="price" placeholder = "Price"/>
          <i>
                
          <label for="price">RAM</label>
          <input type = "text" name="ram" id="ram" placeholder = "ram"/>
          <i>

          <label for="price">ROM</label>
          <input type = "text" name="rom" id="ROM" placeholder = "ROM"/>
          <br><br>
                
          <label for="price">lenght</label>
          <input type = "text" name="length" id="length" placeholder = "lenght"/>
          <i>
          
          <label for="price">width</label>
          <input type = "text" name="width" id="width" placeholder = "width"/>
          <i>

          <label for="price">height</label>
          <input type = "text" name="height" id="height" placeholder = "height"/>
          <i>

          <label for="price">weight</label> <input type = "text" name="weight" id="weight" placeholder = "weight"/>
          <i>

          <label for="price">Card</label>
          <input type = "text" name="card" id="Card" placeholder = "Card"/>
          <br><br>

          <label for="price">CPU</label>
          <input type = "text" name="cpu" id="CPU" placeholder = "CPU"/>
          <i>
          
          <label for="price">Screen Resolution</label>
          <input type = "text" name="screen_resolution" id="reso" placeholder = "reso"/>
          <i>

          <label for="price">Screen size</label>
          <input type = "text" name="screen_size" id="s_size" placeholder = "s_size"/>
          <i>

          <label for="price">Description</label>
          <input type = "text" name="descriptions" id="descriptions" placeholder = "desc"/>
          <br><br>

          <input type="file" name="image" id="image" />
          <button type="submit">Add Image</button>
        </form>
      </div>
    </section>

  </main>

  <!-- Footer Section -->
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
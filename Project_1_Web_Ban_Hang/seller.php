
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
      <div class="container">
        <form action="seller_upload.php" method="post" enctype="multipart/form-data">
          <br>
          <div>
          <label for="item">Name</label>
          <input type = "text" name="name" id="NAME" placeholder = "Name" class="form-control "/>
          </div>

          <label for="item">Quantity</label>
          <input type = "text" name="quantity" id="quantity" placeholder = "Quantity" class="form-control "/>


          <label for="item">Price</label>
          <input type = "text" name="price" id="price" placeholder = "Price" class="form-control "/>
                
          <label for="price">RAM</label>
          <input type = "text" name="ram" id="ram" placeholder = "RAM Amount" class="form-control "/>
          
          <label for="price">ROM</label>
          <input type = "text" name="rom" id="ROM" placeholder = "ROM Amount" class="form-control "/>
          <br>
          <div>
            <label for="formFileMultiple" class="form-label">Add Product Image:</label>
            <input type="file" name="image" id="image" class="form-control " />
          </div>  
          <br>       
          <label for="price">Length</label>
          <input type = "text" name="length" id="length" placeholder = "Length" class="form-control "/>
          
          <label for="price">Width</label>
          <input type = "text" name="width" id="width" placeholder = "Width" class="form-control "/>

          <label for="price">Height</label>
          <input type = "text" name="height" id="height" placeholder = "Height" class="form-control "/>

          <label for="price">Weight</label>
          <input type = "text" name="eight" id="weight" placeholder = "Weight" class="form-control "/>

          <label for="price">Card</label>
          <input type = "text" name="card" id="Card" placeholder = "Card" class="form-control "/>
        
          <label for="price">CPU</label>
          <input type = "text" name="cpu" id="CPU" placeholder = "CPU" class="form-control "/>
          
          <label for="price">Screen Resolution</label>
          <input type = "text" name="screen_resolution" id="reso" placeholder = "Screen Resolution" class="form-control "/>

          <label for="price">Screen size</label>
          <input type = "text" name="screen_size" id="s_size" placeholder = "Screen size" class="form-control "/>

          <label for="price">Description</label>
          <input type = "text" name="descriptions" id="descriptions" placeholder = "Description" class="form-control "/>
        
          <br>
          <button type="submit" class="form-control ">Add Product</button>
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
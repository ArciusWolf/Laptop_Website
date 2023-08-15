<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlphaFang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" />
    <!-- <link rel="stylesheet" href="../css/landing.css" type="text/css">-->
    <link rel="stylesheet" href="../css/all.css"> 
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="admin.js" defer></script>
  </head>
  <body>
    <!-- sidebar -->
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="images/logo.png" alt="logo_img" />
        </span>
        <span class="logo_name">AlphaFang</span>
      </div>

      <div class="menu_container" style="transform: translateX(-9%)">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Dashboard</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="admin.php" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span>Overview</span>
              </a>
            </li>
            <li class="item">
              <a href="product_list.php" class="link flex">
                <i class="bx bx-grid-alt"></i>
                <span>Product List</span>
              </a>
            </li>
            <li class="item">
              <a href="order.php" class="link flex">
                <i class="bx bx-flag"></i>
                <span>Order</span>
              </a>
            </li>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Editor</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="add-product.php" class="link flex">
                <i class="bx bx-cloud-upload"></i>
                <span>Upload Product</span>
              </a>
            </li>
            <li class="item">
              <a href="edit_product.php" class="link flex">
                <i class="bx bxs-edit"></i>
                <span>Edit Product</span>
              </a>
            </li>
            <li class="item">
              <a href="category.php" class="link flex">
                <i class="bx bx-folder"></i>
                <span>Category</span>
              </a>
            </li>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Setting</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="landing.php" class="link flex">
                <i class="bx bx-cog"></i>
                <span>Back To Store</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="sidebar_profile flex">
          <div class="data_text">
            <span class="name">AlphaFang Studio</span>
          </div>
        </div>
      </div>
    </nav>
    <!-- sidebar end -->
    <div class="container" style="transform: translateX(20%)">
      <section class="insert-box">
      <h1 class="title" style="transform: translateX(0%)">Add Product</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <br>

          <?php if (isset($_GET['message'])) { ?>
        <p class="container" style="border: 2px solid #00ff08; border-radius: 10px; padding:10px; color: #747474; background-color: rgba(255, 255, 255);">
        <?php echo $_GET['message']; ?>
        </p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
        <p class="container" style="border: 2px solid #ba0000; border-radius: 10px; padding:10px; color: #747474; background-color: rgba(255, 255, 255);">
        <?php echo $_GET['error']; ?>
        </p>
        <?php } ?>
            <div class="col-lg-12">
              <label for="item">Name:</label>
              <input type = "text" name="name" id="NAME" placeholder = "Name" class="form-control "/>
            </div>
            <div class="col-lg-12">
              <label for="item">Price:</label>
              <input type = "text" name="price" id="price" placeholder = "Price" class="form-control "/>
            </div>
          <div class="spec-box">
          <div class="row align-items-start">
            <div class="col-lg-2">
              <label for="item">Quantity:</label>
              <input type = "text" name="quantity" id="quantity" placeholder = "Quantity" class="form-control "/>
            </div>
            <div class="col-lg-2">  
              <label for="price">RAM:</label>
              <input type = "text" name="ram" id="ram" placeholder = "RAM" class="form-control "/>
            </div>
            <div class="col-lg-2">
              <label for="price">ROM:</label>
              <input type = "text" name="rom" id="ROM" placeholder = "ROM" class="form-control "/>
            </div>
            <div class="col-lg-3">
              <label for="price">Screen Resolution:</label>
              <input type = "text" name="screen_resolution" id="reso" placeholder = "Screen Resolution" class="form-control "/>
            </div>
            <div class="col-lg-3">
              <label for="price">Screen size:</label>
              <input type = "text" name="screen_size" id="s_size" placeholder = "Screen size" class="form-control "/>
            </div>
            </div>
          </div>
          <div class="col-lg-12">
          <label for="price">Card:</label>
          <input type = "text" name="card" id="Card" placeholder = "Card" class="form-control "/>
          </div>
          <div class="col-lg-12">
          <label for="price">CPU:</label>
          <input type = "text" name="cpu" id="CPU" placeholder = "CPU" class="form-control "/>
          </div>
          <div class="col-lg-6">
            <label for="formFileMultiple" class="form-label">Add Product Image:</label>
            <input type="file" name="image" id="image" class="form-control " />
          </div>
          <div class="d-flex justify-content-between">
          <div class="spec-box">
          <div class="row align-items-start">
          <div class="col-lg-4">
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
          <div class="col-lg-4">
          <label for="price">Purpose:</label>
            <select name="category" class="form-select">
              <option value="">- Choose One -</option>
              <option value="gaming">Gaming Laptop</option>
              <option value="work">Office Laptop</option>
            </select>
          </div>
          <div class="spec-box">
                      <div class="row align-items-start">
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
          <label for="price">Description:</label>
          <input type = "text" name="descriptions" id="descriptions" placeholder = "Description" class="form-control "/>
          <br>
          <button type="submit" class="form-control add-prd-btn">Add Product</button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>

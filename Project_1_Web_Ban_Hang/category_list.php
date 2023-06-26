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
  <link rel="stylesheet" href="sidebar.css">
  <link rel="stylesheet" href="slideshow.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM category";
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
                  <a href="category_list.php">Category List</a>
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
  <main>
    <div class="container">
        <h1 class="text-center text-warning">Category List</h1>
        <br>
        <a href="./function/category_add.php"><button class="btn-see" style="left: 10px">Add Category</button></a>
        <br>
  <table class="table table-bordered table-hover table-dark table-responsive">
  <thead>
      <tr class="table-warning">
          <td>Id</td>
          <td>Category Name</td>
          <td>Action</td>
      </tr>
  </thead>
  <tbody>
    <?php
        if ($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["category"]."</td>";
                echo "<td><a href='category_delete.php?id=".$row['id']."'><i class='fa-regular fa-trash-can text-danger'></i></a> | <a href='#'><i class='fa-regular fa-trash-can text-danger'></a></td>";                

                echo "</tr>";
            }
        }
    ?>
  </tbody>
</table>
</div>
  </main>
</body>

</html>
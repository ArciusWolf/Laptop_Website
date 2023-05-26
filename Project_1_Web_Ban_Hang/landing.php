
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
              <button class="headbtn" onclick="window.location.href='sign_in.php';">Sign In</button>
              <button class="headbtn" onclick="window.location.href='seller.php';">Sell</button>
            </ul>
        </div>
      </div>
  </header>

  <!-- Main Section -->
  <main>
  <table class="table table-bordered" id="table1">
                <thead>
                  <td>Name</td>
                  <td>Quantity</td>
                  <td>Price</td>
                  <td>Ram</td>
                  <td>Rom</td>
                  <td>Graphics Card</td>
                  <td>CPU</td>
                  <td>Screen Size</td>
                  <td>Resolution</td>
                  <td>Descriptions</td>
                  <td>Image</td>
                </thead>
                <tbody>

<?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM laptops";
    $result = $con->query($sql);
?>
<?php 
  if ($result-> num_rows>0 ) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row["name"]."</td>";
      echo "<td>".$row["quantity"]."</td>";
      echo "<td>".$row["price"]."</td>";
      echo "<td>".$row["ram"]."</td>";
      echo "<td>".$row["rom"]."</td>";
      echo "<td>".$row["card"]."</td>";
      echo "<td>".$row["cpu"]."</td>";
      echo "<td>".$row["screen_size"]."</td>";
      echo "<td>".$row["screen_resolution"]."</td>";
      echo "<td>".$row["descriptions"]."</td>";
      echo "<td>".$row["image"]."</td>";
      }
    };
  ?>
    </tbody>
  </table>

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
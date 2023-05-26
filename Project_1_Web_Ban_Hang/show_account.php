<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  
  <?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM accounts";
    $result = $con->query($sql);
?>
     


  <section>
        <div class="boxed">
            <a href="./products.php" class="link1"><h1>Products</h1></a>
            <br><br>
            <table class="table table-bordered" id="table1">
                <thead>
                </thead>
                <tbody>
                <a href="./products.php"><h1>Product</h1></a>
                <br><br>
                <a href="./insert_acc_input.php"><h1>Insert</h1></a>
                <br><br>
                 <table class="table table-striped table-bordered">
                  <thead>
                  </thead>
                  <tbody>
                      <?php 
                          if ($result-> num_rows>0 ) {
                              while ($row = $result->fetch_assoc()) {
                                  echo "<tr>";
                                  echo "<td>".$row["email"]."</td>";
                                  echo "<td>".$row["username"]."</td>";
                                  echo "<td>".$row["passwords"]."</td>";
                                  echo "<td>".$row["phone_num"]."</td>";
                                  echo "<td><a href='../Project_1_Web_Ban_Hang/insert.php?username=".$row["username"]."'>Edit</a></td>";
                                  echo "<td><a href='../Project_1_Web_Ban_Hang/delete_acc.php?username=".$row["username"]."'>Delete</a></td>";
                              }
                          };
                      ?>
                  </tbody>
            </table>
        </div>
  </section>
  


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

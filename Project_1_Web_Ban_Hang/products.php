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
    <link rel="stylesheet" href="style.css">
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

    $sql = "SELECT * FROM laptops";
    $result = $con->query($sql);
?>

    <section>
        <div class="boxed">
            <a href="./show_account.php" class="link1"><h1>Show Account</h1></a>
            <a href="./insert_product_input.php" class="link1"><h1>Insert</h1></a>
            <br><br>
            <table class="table table-bordered" id="table1">
                <thead>
                </thead>
                <tbody>
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

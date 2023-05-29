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

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM laptops";
    $result = $con->query($sql);
?>

<?php
    // if ($result -> num_rows > 0){
    //     while($row = $result -> fetch_assoc()){
    //         echo "<img width='100' src='upload/".$row["image"]."' alt=''>";
    //     }
    // }
?>
<?php
    if ($result -> num_rows > 0){
     while($row = $result -> fetch_assoc()){
 echo '<div class="card col-lg-2" style="width:400px; float:left;">';
 echo "<a href='product_detail.php?id=".$row["id"]."'><img class='card-img-top' src='upload/".$row["image"]."' alt='Card image'>";

    echo '<div class="card-body">';
    echo '<h4 class="card-title">'.$row["name"].'</h4>';
    echo '<h4 class="card-title">'.$row["price"].'</h4>';
    echo '<a href="#" class="btn btn-primary">BUY IT!</a>';
    echo '<p class="card-text">'.$row["descriptions"].'</p>';
    echo '</div>';

    echo '</div>';

     }};
?>




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


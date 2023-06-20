<?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }
    $sql = "SELECT * FROM category";
    $result = $con->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.css">

</head>

<body>
  <main>
    <div class="container">
        <h3>Category List</h3>
        <a href="./function/category_add.php" class="btn-primary"><i class="fa-solid fa-circle-plus"></i></a>
    </div>
  <table class="table table-bordered table-striped">
  <thead>
      <tr>
          <td>Id</td>
          <td>Category Name</td>
          <td>Delete</td>
          <td></td>
      </tr>
  </thead>

  <tbody>
    <?php
        if ($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["category"]."</td>";

                echo "<td></td>";
                echo "<td><a href='category_delete.php?id=".$row['id']."'><i class='fa-regular fa-trash-can text-danger'></i></a></td>";                

                echo "</tr>";
            }
        }
    ?>
  </tbody>
</table>
  </main>
</body>

</html>
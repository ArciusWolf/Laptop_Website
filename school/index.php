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

    <?php
        $con = new mysqli("localhost", "root", "", "school");
        if ($con->connect_error) {
            die("Connection Error");
        }

        $sql = "SELECT * FROM school";
        $result = $con->query($sql);
    ?>
</head>

<body>
  <main>
        <div class="container">
            <table class="table table-striped">
                <td>ID</td>
                <td>school_name</td>
                <td><a href="session_show.php">Show Session</td>
                <td><a href="session_end.php">End Session</td>
                

                <?php
    if ($result-> num_rows> 0 ) {
      while ($row = $result->fetch_assoc()) {
        echo 
        '<tr>
          <td>'.$row["id"].'</td>
          <td>'.$row["school_name"].'</td>
          <td><a href="detail.php?id='.$row["id"].'">Show</td>';
      }
    };
  ?>
            </table>
        </div>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
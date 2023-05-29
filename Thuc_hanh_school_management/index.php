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
  <main>

    <?php 
        $con = new mysqli("localhost", "root", "", "school_management");
        if ($con->connect_error) {
            die("Connection Error");
        }

        $sql = "SELECT * FROM school";
        $result = $con->query($sql);


    ?>
    <section>
        <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>School Name</td>
                    <td>Address</td>
                    <td>Phone Number</td>
                    <td>Employee's Number</td>
                    <td>Founded In</td>
                </tr>
            </thead>
            <tbody>

        <?php 
            if ($result-> num_rows>0 ) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["school_name"]."</td>";
                    echo "<td>".$row["address"]."</td>";
                    echo "<td>".$row["phone"]."</td>";
                    echo "<td>".$row["emp_num"]."</td>";
                    echo "<td>".$row["founded"]."</td>";

                    echo "<td><a href='../thuc_hanh_school_management/delete.php?id=".$row["id"]."'>Edit</a></td>";
                    echo "<td><a href='../thuc_hanh_school_management/delete.php?id=".$row["id"]."'>Delete</a></td>";
                    echo "</tr>";
                }
            };
        ?>
            </tbody>

        </table>
        </div>
    </section>
  </main>
</body>

</html>
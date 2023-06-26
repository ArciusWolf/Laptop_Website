<?php 
    $con = new mysqli("localhost", "root", "", "school");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM school WHERE id = ".$_GET['id']."";
    $result = $con->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
  <title>School</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <main>
<?php
$obj = null;
    if ($result-> num_rows> 0 ) {
        while ($row = $result->fetch_assoc()) {
          $obj = $row;
            echo "<div class='container'>
            <table class='table table-striped'>
            <tr>
            <td>ID</td>
            <td>school_name</td>
            <td>address</td>
            <td>num_teacher</td>
            </tr>
            <tr>
            <td>".$obj["id"]."</td>
            <td>".$obj["school_name"]."</td>
            <td>".$obj["address"]."</td>
            <td>".$obj["num_teacher"]."</td>
            </tr>
           
            </table>";
        }
    };    
?>
<button><a href="session_start.php?id=<?php echo $obj['id']; ?>">Add Session</a>

  </main>
</body>

</html>
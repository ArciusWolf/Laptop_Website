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

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="container">
        <h3>Thêm Thể Loại</h3>

        <form action="category_save.php" method="post">
            <div class="mb-3 mt-3">
                <label for="categoryName" class="form-label">Tên Thể Loại</label>
                <input type="text" required class="form-control" name="categoryName" id="categoryName">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</body>

</html>
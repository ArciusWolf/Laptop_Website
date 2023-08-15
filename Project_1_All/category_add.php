<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Thể Loại</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="container">
        <h3 class="text-primary">Thêm Thể Loại</h3>

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
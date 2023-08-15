
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">

<div class="container">
    <h3>Đăng Nhập</h3>

    <?php
    if (isset($_GET["msg"])) {
        echo "<p class='alert alert-danger'>Username hoặc password sai!</p>";
    }
    ?>

    <form action="login_success.php" method="post">
        <div class="mb-3 mt-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <button class="btn btn-sm btn-primary">Đăng Nhập</button>
        </div>
    </form>
</div>

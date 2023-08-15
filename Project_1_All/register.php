
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">

<div class="container">
    <h3>Đăng ký tài khoản</h3>

    <form action="register_save.php" method="post">
        <div class="mb-3 mt-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="password2">Re-Password</label>
            <input type="password" name="password2" id="password2" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="fullName">Full Name</label>
            <input type="text" name="fullName" id="fullName" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required class="form-control form-control-sm">
        </div>

        <div class="mb-3 mt-3">
            <button class="btn btn-success btn-sm float-end">Đăng Ký</button>
        </div>
    </form>
</div>
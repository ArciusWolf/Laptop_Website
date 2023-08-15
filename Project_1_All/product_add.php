<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $sql = "SELECT * FROM category ORDER BY id ASC";
    $result = $con->query($sql);
?>

<h3 class="text-primary">Thêm Sản Phẩm</h3>

<form action="product_save.php" method="post">
    <div class="mb-3 mt-3">
        <label for="productName" class="form-label">Tên Sản Phẩm</label>
        <input type="text" required class="form-control" name="productName" id="productName">
    </div>

    <div class="mb-3 mt-3">
        <label for="price" class="form-label">Giá Tiền</label>
        <!-- trong [] thì nhận 1 giá trị duy nhất -->
        <!-- 0-9 là phạm vi -->
        <!-- *: có thể điền 0 đến n giá trị -->
        <input type="text" required pattern="[0-9]*" class="form-control" name="price" id="price">
        <label><small class="text-secondary fst-italic">Chỉ được nhập số</small></label>
    </div>

    <div class="mb-3 mt-3">
        <label for="quantity" class="form-label">Số Lượng</label>
        <input type="number" required class="form-control" name="quantity" id="quantity">
        <label><small class="text-secondary fst-italic">Chỉ được nhập số</small></label>
    </div>

    <div class="mb-3 mt-3">
        <label for="category" class="form-label">Thể Loại</label>

        <select class="form-select">
            <option value="">Giày</option>
            <option value="">Áo</option>

            <?php
                if($result->num_rows >0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option>".$row["category_name"]."</option>";
                    }
                }
            ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $id = $_GET["id"];

    $sql = "";
    $sql .= " SELECT * ";
    $sql .= " FROM product ";
    $sql .= " WHERE id = $id ";

    $result = $con->query($sql);

    $obj = null;

    if($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            $obj = $row;
        }
    }

?>

<form action="product_update.php" method="post">
    <h3>Sửa Sản Phẩm</h3>
    <input type="text" name="id" value="<?php echo $obj['id']; ?>" />

    <div class="mb-3 mt-3">
        <label for="productName">Tên Sản Phẩm</label>
        <input type="text" class="form-control form-control-sm" name="productName" value="<?php echo $obj['product_name']; ?>" id="productName" />
    </div>

    <div class="mb-3 mt-3">
        <label for="price">Giá Tiền</label>
        <input type="text" class="form-control form-control-sm" name="price" value="<?php echo $obj['price']; ?>" id="price" />
    </div>

    <div class="mb-3 mt-3">
        <label for="quantity">Số Lượng</label>
        <input type="text" class="form-control form-control-sm" name="quantity" value="<?php echo $obj['quantity']; ?>" id="quantity" />
    </div>

    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </div>
</form>

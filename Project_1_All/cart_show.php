<?php
    session_start();
?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">
<script src="js/jquery.min.js"></script>

<h3>Cart</h3>


<?php
    $carts = $_SESSION["cart"];
//    var_export($carts);
?>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Product Name</td>
        <td>Price</td>

        <td></td>
        <td></td>
    </tr>
    </thead>

    <tbody>

    <?php
        if($carts != null) {
            foreach ($carts as $cart) {
                echo "<tr>";
                echo "<td>".$cart["id"]."</td>";
                echo "<td>".$cart["product_name"]."</td>";
                echo "<td>".$cart["price"]."</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<?php
    if($carts != null) {
        foreach ($carts as $cart) {
            echo '<input type="text" name="id" value="'.$cart["id"].'" >';
        }
    }
?>


<form action="order_save.php" method="post">
    ids:
    <input type="text" name="ids" id="ids" value="">
    <div>
        Họ Tên: <input type="text" required name="customerName">
    </div>
    <div>
        SĐT: <input type="text" required name="phone">
    </div>
    <div>
        Địa chỉ: <input type="text" required name="address">
    </div>
    <p>Ship COD</p>
    <div>
        <button type="submit" id="order" class="btn bg-info btn-sm">Đặt Hàng</button>
    </div>
</form>


<script>
    $(function () {
        $("#order").click(function () {
            var ids = new Array();
            $("input[name=id]").each(function() {
                ids.push($(this).val());
            });
            $("#ids").val(ids);
        });
    });
</script>

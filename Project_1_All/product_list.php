<?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }

    $sql = "";
    $sql .= " SELECT a.*, b.category_name ";
    $sql .= " FROM product a ";
    $sql .= " LEFT JOIN category b ON a.category_id = b.id ";
    $sql .= " ORDER BY a.id ASC ";

    $result = $con->query($sql);
?>

<h3 class="text-primary">List Product</h3>
<a href="index.php?page=product_add.php"><i class="fa-solid fa-circle-plus text-success"></i></a>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Category Name</td>

        <td></td>
        <td></td>
    </tr>
    </thead>

    <tbody>
    <?php
    if($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["product_name"]."</td>";
            echo "<td>".$row["price"]."</td>";
            echo "<td>".$row["quantity"]."</td>";
            echo "<td>".$row["category_name"]."</td>";

            echo "<td><a href='index.php?page=product_edit.php&id=".$row["id"]."'><i class='fa-regular fa-pen-to-square'></i></a></td>";
            echo "<td><a href='product_delete.php?id=".$row["id"]."'><i class='fa-regular fa-trash-can text-danger'></i></a></td>";

            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>

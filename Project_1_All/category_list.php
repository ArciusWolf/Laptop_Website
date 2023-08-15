<?php
    $con=new mysqli("localhost","root" ,"","c_1405");
    if($con->connect_errno){
        die("connection error");
    }

    $sql = "SELECT * FROM category ORDER BY id ASC";
    $result = $con->query($sql);
?>

<h3 class="text-primary">List Category</h3>
<a href="index.php?page=category_add.php"><i class="fa-solid fa-circle-plus text-success"></i></a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>Id</td>
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
                    echo "<td>".$row["category"]."</td>";

                    echo "<td></td>";
                    echo "<td><a href='category_delete.php?id=".$row["id"]."'><i class='fa-regular fa-trash-can text-danger'></i></a></td>";

                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>

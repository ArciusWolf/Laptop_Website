<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $sql = "";
    $sql .= " SELECT * ";
    $sql .= " FROM orders ";

    $result = $con->query($sql);
?>

<h3 class="text-primary">List Orders</h3>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Customer Name</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Date Buy</td>
        <td>Status</td>

        <td></td>
    </tr>
    </thead>

    <tbody>
    <?php
    if($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["customer_name"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["date_buy"]."</td>";
            echo "<td>".$row["status"]."</td>";

            echo "<td><a class='btn btn-info btn-sm' href='orders_update_status.php?id=".$row["id"]."&status=ACCEPTED'>Accepted</a></td>";

            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>

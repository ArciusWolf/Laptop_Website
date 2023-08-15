<?php
    session_start();
?>
<?php
    $fullName = "";
    if (isset($_SESSION["fullName"])) {
        $fullName = $_SESSION["fullName"];
    }

    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
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

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">

<a href="cart_show.php" class="btn btn-danger btn-sm">Cart</a>

<?php
    if ($fullName != "") {
        echo "Xin chào $fullName";
        echo '<a href="logout.php" class="btn btn-primary btn-sm">Đăng Xuất</a>';
    } else {
?>
    <a href="register.php" class="btn btn-outline-info btn-sm">Register</a>
    <a href="login.php" class="btn btn-primary btn-sm">Login</a>
<?php
    }
?>



<div class="container">
    <div class="row">

            <?php
                if($result->num_rows >0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';

                        echo "<div class='card'>";

                        echo '<img class="card-img-top" src="img_avatar1.png" alt="Card image">';

                        echo '<div class="card-body">';

                        echo '<h4 class="card-title">'.$row["product_name"].'</h4>';
                        echo '<p class="card-text">'.$row["price"].'</p>';
                        echo '<a href="product_order.php?id='.$row["id"].'" class="btn btn-primary">Add To Cart</a>';

                        echo '</div>';

                        echo "</div>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </div>
</div>


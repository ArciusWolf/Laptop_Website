<?php
    session_start();
?>
<?php
    $con=new mysqli("localhost","root" ,"root","c1405_de_tai");
    if($con->connect_errno){
        die("connection error");
    }

    $id = $_GET["id"];
    // lấy cả dòng product trong db từ $id

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
//    var_export($obj);
//    var_export($obj["id"]);
//    die();

    $_SESSION["cart"][$obj["id"]] = $obj;

<?php
$con=new mysqli("localhost","root" ,"","c_1405");
if($con->connect_errno){
    die("connection error");
}

$sql = "DELETE FROM laptops where id=".$_GET['id']."";
$con->query($sql);

header("location:../products.php?info=Deleted product with ID = ".$_GET['id']." successfully!");
?>

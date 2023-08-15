<?php
$con=new mysqli("localhost","root" ,"","c_1405");
if($con->connect_errno){
    die("connection error");
}

$category = $_POST['category'];
$sql = "INSERT INTO category (category) VALUES ('$category')";
$con->query($sql);

header("location:category.php");

?>
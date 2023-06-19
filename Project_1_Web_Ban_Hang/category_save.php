<?php
$con=new mysqli("localhost","root" ,"","c_1405");
if($con->connect_errno){
    die("connection error");
}

$categoryName = $_POST['categoryName'];
$sql = "INSERT INTO category (category) VALUES ('$categoryName')";
$con->query($sql);

header("location:category_list.php");

?>
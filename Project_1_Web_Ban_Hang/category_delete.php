<?php
$con=new mysqli("localhost","root" ,"","c_1405");
if($con->connect_errno){
    die("connection error");
}
$id = $_GET['id'];

$sql = "DELETE FROM category where id=".$_GET['id']."";
$con->query($sql);

header("location:category_list.php");
?>

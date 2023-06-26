<?php
$con=new mysqli("localhost","root" ,"","c_1405");
if($con->connect_errno){
    die("connection error");
}
$username = $_GET['username'];

$sql = "DELETE FROM accounts where username =".$_GET['username']."";
$con->query($sql);

header("location:../account_list.php?info=Deleted account successfully!");
?>

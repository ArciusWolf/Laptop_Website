<?php
$con=new mysqli("localhost","root" ,"","c_1405");
if($con->connect_errno){
    die("connection error");
}

$user = $_POST['user'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$admin = $_POST['admin'];
$sql = "INSERT INTO accounts (username, password, admin, phone_num, email) VALUES ('$user', '$pass', '$admin', '$phone', '$mail')";
$con->query($sql);

header("location:user_manager.php");

?>
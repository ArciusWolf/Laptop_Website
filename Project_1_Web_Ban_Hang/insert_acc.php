<?php
if (isset($_POST["username"])) {
    $con = new mysqli ("localhost", "root", "", "c_1405");
    $email = $_POST["email"];
    $username = $_POST["username"];
    $passwords = $_POST["passwords"];
    $phone_num =$_POST["phone_num"];
    $sql = "INSERT INTO accounts (email, username, passwords, phone_num) VALUE ('$email','$username','$passwords','$phone_num')";
    if($con->query($sql)===TRUE){
        echo "Insert success";
        header("Location:../show_account.php");
    }else{
        echo "Insert error".$con->error;
    }

}

?>
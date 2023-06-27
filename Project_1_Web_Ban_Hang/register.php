<!-- Data Insert -->
<?php
    $con = new mysqli ("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone_num = $_POST["phone_num"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $fullname = $_POST["fullName"];
//  SQL Query Command
    $sql = "INSERT INTO accounts ( username, email, phone_num, password, name, address)
    VALUES
    ('$username', '$email', '$phone_num', '$password', '$fullname', '$address')";

    if($con->query($sql) === TRUE){
        header("Location:landing.php?message=Account created successfully, please login.");
    } else {
        header("Location:sign_up.php?error=Insert Error").$con->error;;
        }
?>
<!-- Data Insert -->
<?php
if (isset($_POST["username"])) {
    $con = new mysqli ("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone_num = $_POST["phone_num"];
    $password = $_POST["password"];
//  SQL Query Command
    $sql = "INSERT INTO accounts ( username, email, phone_num, password)
    VALUES
    ('$username', '$email', '$phone_num', '$password')";


    if($con->query($sql) === TRUE){
        header("Location:landing.php?message=Account created successfully, please login.");
    } else {
        header("Location:sign_up.php?error=Insert Error").$con->error;;
        }
    }

?>
<?php 
    $conn = new mysqli("localhost", "root", "", "c_1405");
    if ($conn->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM accounts";
    $result = $conn->query($sql);
?>
<?php 
session_start(); 
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $name = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($name)) {
        header("Location: sign_in.php?error=Username is required");
        exit();
    }else if(empty($pass)){
        header("Location: sign_in.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM accounts WHERE username='$name' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $name && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: landing.php?info=Logged in successfully");
                exit();
            }else{
                header("Location: sign_in.php?error=Incorrect Username or password");
                exit();
            }
        }else{
            header("Location: sign_in.php?error=Incorrect Username or password");
            exit();
        }
    };
};
?>
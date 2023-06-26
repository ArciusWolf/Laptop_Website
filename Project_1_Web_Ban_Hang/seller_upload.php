<!-- Data Insert -->
<?php
if (isset($_POST["name"])) {
    $con = new mysqli ("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $ram =$_POST["ram"];
    $rom =$_POST["rom"];
    $length =$_POST["length"];
    $width =$_POST["width"];
    $height =$_POST["height"];
    $weight =$_POST["weight"];
    $card =$_POST["card"];
    $cpu =$_POST["cpu"];
    $screen_size =$_POST["screen_size"];
    $screen_resolution =$_POST["screen_resolution"];
    $description =$_POST["descriptions"];
    $category_id = $_POST["category_id"];
    $category = $_POST["category"];

    $files= $_FILES["image"];

// Image Condition Check
    if ($files["size"] > 50*1000000) {
        echo "<br> Sorry, your file is too large.";
    } else if ($files["type"] != "image/jpeg" && $files["type"] != "image/png" && $files["type"] != "image/jpg") {
        header("Location:seller.php?error=Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    } else {

    $fileName = $files["name"];

    $fileNameInfo = pathinfo($fileName);

    $fileNameEnd = $fileNameInfo["filename"]."_".date("Y_m_d_H_i_s").".".$fileNameInfo["extension"];

//  SQL Query Command
    $sql = "INSERT INTO 
    laptops (name, quantity, price, ram, rom, card, cpu, screen_size, screen_resolution, descriptions, weight, length, width, height, image, category_id, category ) 
    VALUES
    ('$name','$quantity','$price','$ram','$rom','$card','$cpu','$screen_size','$screen_resolution','$description','$weight','$length','$width','$height', '".$fileNameEnd."', '$category_id', '$category')";


    $fileUpload = "upload/".$fileNameEnd;


    if(move_uploaded_file($files["tmp_name"], $fileUpload)) {
    } else {
        echo "<br> File upload failed";
    }if($con->query($sql) === TRUE){
        header("Location:seller.php?message=Product added successfully");
    } else {
        header("Location:seller.php?error=Insert Error").$con->error;;
        }
    }
}
?>
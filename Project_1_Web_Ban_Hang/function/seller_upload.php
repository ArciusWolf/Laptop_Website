<!-- Data Insert -->
<?php
if (isset($_POST["name"])) {
    $con = new mysqli ("localhost", "root", "", "c_1405");
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

    $files= $_FILES["image"];

// Image Condition Check
    if ($files["size"] > 50*1000000) {
        echo "<br> Sorry, your file is too large.";
    } else if ($files["type"] != "image/jpeg" && $files["type"] != "image/png" && $files["type"] != "image/jpg") {
        echo "<br> Image JPEG, PNG, JPG only.";
    } else {

    $fileName = $files["name"];

    $fileNameInfo = pathinfo($fileName);

    $fileNameEnd = $fileNameInfo["filename"]."_".date("Y_m_d_H_i_s").".".$fileNameInfo["extension"];

//  SQL Query Command
    $sql = "INSERT INTO laptops 
    (name, quantity, price, ram, rom, card, cpu, screen_size, screen_resolution, descriptions, weight, length, width, height, image) 
    VALUES
    ('$name','$quantity','$price','$ram','$rom','$card','$cpu','$screen_size','$screen_resolution','$description','$weight','$length','$width','$height','".$fileNameEnd."')";


    $fileUpload = "upload/".$fileNameEnd;


    if(move_uploaded_file($files["tmp_name"], $fileUpload)) {
    } else {
        echo "<br> File upload failed";
    }if($con->query($sql) === TRUE){
        echo "<br> Insert Success";
        header("Location:seller.php");
    } else {
        echo "<br> Insert Error".$con->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Displaying Popups data on mouse hover using Jquery Ajax and PHP Mysql database</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="test.css">

<?php 
    $con = new mysqli("localhost", "root", "", "c_1405");
    if ($con->connect_error) {
        die("Connection Error");
    }

    $sql = "SELECT * FROM laptops";
    $result = $con->query($sql);
?>
<body>
    <?php
          if ($result-> num_rows> 0 ) {
            while ($row = $result->fetch_assoc()) {
    echo "
<div class='product-card'>
    <div class='main-images'>";
    echo "<a href=product_detail.php?id=".$row['id'].">
    <img class=card-img-top width=300px src=upload/".$row['image']." alt=Card image>";
    echo "
    </div>
    <div class='button'>
        <div class='button-layer'></div>
        <button>Add To Cart</button>
    </div>
</div>";
}
}

?>
</body>  
</html> 
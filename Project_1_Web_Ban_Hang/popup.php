<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/popup.css">
</head>
<body>
    <div class="container">
    <button type="button" class="close-btn" onclick="openPopup()">Open</button>
        <div class="popup" id="popup">
            <img src="img/1tick.png" alt="">
            <h2>Thank you!</h2>
            <p>Your order has been placed.</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>

    <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
</body>
</html>
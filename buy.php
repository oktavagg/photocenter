<?php
    session_start();
    require_once 'connectbuys.php';

    $product = $_POST['product'];
    $phonenumber = $_POST['phonenumber'];
    $delivery = $_POST['delivery'];
    $adress = $_POST['adress'];
    $count = $_POST['count'];
    $full_name = $_POST['fullname'];


    mysqli_query($connect2, "INSERT INTO `buys` (id, `product`, `phonenumber`, `adress`, `delivery`, `count`,`full_name`, `status` ) VALUES (NULL, '$product', '$phonenumber', '$adress', '$delivery', '$count', '$full_name', 'active')");




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Покупку оформлено</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        h1 {
            font-size: 6rem;
            color: green;
            animation-name: appear;
            animation-duration: 3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease-in-out;
        }
        
        @keyframes appear {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <h1>Покупку оформлено</h1>
    <script>
        setTimeout(function() {
            window.location.href = "Магазин.html";
        }, 3000);
    </script>
</body>
</html>

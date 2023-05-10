<?php
  session_start();
    require_once 'connectbuys.php';

$idtocancel = $_POST['idofordertocancel'];
mysqli_query($connect2, "UPDATE buys SET status = 'canceled' WHERE id = '$idtocancel'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Покупку відмінено</title>
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
            color: red;
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
    <h1>Покупку відмінено</h1>
    <script>
        setTimeout(function() {
            window.location.href = "Магазин.html";
        }, 3000);
    </script>
</body>
</html>

<?php
  session_start();
    require_once 'vendor/connect.php';

$unadmin = $_POST['unadmin'];
mysqli_query($connect, "UPDATE users SET status = 'user' WHERE login = '$unadmin'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Адміна видалено</title>
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
            color: blue;
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
    <h1>Адміна видалено</h1>
    <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 3000);
    </script>
</body>
</html>

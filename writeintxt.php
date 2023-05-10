<?php
require_once 'connectbuys.php';

$result = mysqli_query($connect2, "SELECT * FROM buys");

$file = fopen("buys.txt", "w");

while ($row = mysqli_fetch_assoc($result)) {
  fwrite($file, implode("\t", $row) . "\n");
}

$header = "Дані по покупкам за " . date('d.m.Y H:i:s') . "\n";
fwrite($file, $header);

fclose($file);
mysqli_free_result($result);
mysqli_close($connect2);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Звіт сформовано</title>
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
    <h1>Звіт сформовано!</h1>
    <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 3000);
    </script>
</body>
</html>


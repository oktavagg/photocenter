<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вивести</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="showon.php" method="post">
        <label>Введіть айді замовлення</label>
        <input type="text" name="idoforder" placeholder="ID">
        <button type="submit">Вивести</button>
    </form>

</body>
</html>
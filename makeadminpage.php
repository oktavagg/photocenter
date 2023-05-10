<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Додати адміна</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="make_admin.php" method="post">
        <label>Введіть логін користувача</label>
        <input type="text" name="logintoadmin" placeholder="Логін">
        <button type="submit">Додати адміна</button>
    </form>

</body>
</html>
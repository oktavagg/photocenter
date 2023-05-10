<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Додати менеджера</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="make_manager.php" method="post">
        <label>Введіть логін користувача</label>
        <input type="text" name="logintomanager" placeholder="Логін" required>
        <button type="submit">Додати менеджера</button>
    </form>

</body>
</html>
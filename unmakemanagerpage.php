<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Видалити менеджера</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="unmake_manager.php" method="post">
        <label>Введіть логін користувача</label>
        <input type="text" name="unmanager" placeholder="Логін" required>
        <button type="submit">Видалити менеджера</button>
    </form>

</body>
</html>
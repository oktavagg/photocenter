<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Видалити адміна</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="unmake_admin.php" method="post">
        <label>Введіть логін користувача</label>
        <input type="text" name="unadmin" placeholder="Логін" required>
        <button type="submit">Видалити адміна</button>
    </form>

</body>
</html>
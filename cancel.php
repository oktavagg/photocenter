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

    <form action="cancelconnection.php" method="post">
        <label>Введіть айді замовлення</label>
        <input type="text" name="idofordertocancel" placeholder="ID">
        <label>Введіть пароль від аккаунту</label>
        <input type="text" name="passwordtocancel" placeholder="Password">
        <button type="submit">Відмінити замовлення</button>
    </form>

</body>
</html>
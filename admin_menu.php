<?php
session_start();
require_once 'vendor/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Адмін меню</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?> (Адміністратор)</h2>
        <h4><?= $_SESSION['user']['email'] ?></h4>
        <br>
        <a href="Головна.html">На головну</a>
        <br>
        <a href="http://127.0.0.1/openserver/phpmyadmin/index.php">БД</a>
        <br>
        <a href="makemanagerpage.php">Додати менеджера</a>
        <br>
        <a href="unmakemanagerpage.php">Видалити менеджера</a>
        <br>
        <a href="writeintxt.php">Звіт</a>
        <br>
        <a href="vendor/logout.php" class="logout">Вийти</a>
    </form>

</body>


</html>
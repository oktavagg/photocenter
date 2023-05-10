<?php
session_start();
require_once 'vendor/connect.php';

$query = "SELECT * FROM users WHERE id = " . $_SESSION['user']['id'];
$result = mysqli_query($connect, $query);
$user = mysqli_fetch_assoc($result);

if ($user['status'] === "MAINadmin") {
    header('Location: MAINadmin_menu.php');
    exit;
}

if ($user['status'] === "admin") {
    header('Location: admin_menu.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація та регестрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <h4><?= $_SESSION['user']['email'] ?></h4>
        <br>
        <a href="Головна.html">На головну</a>
        <br>
        <a href="allorders.php">Подивитися всі замовлення</a>
        <br>
        <a href="showorder.php">Подивитися інформацію про замовлення</a>
        <br>
        <a href="cancel.php">Відмінити замовлення</a>
        <br>
        <a href="vendor/logout.php" class="logout">Вийти</a>
    </form>

</body>
</html>
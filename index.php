<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація та реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<br>
<body>
    <br>
    <form action="vendor/signin.php" method="post">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit">Ввійти</button>
        <p>
            У вас немає аккаунта? - <a href="/register.php">зареєструйтеся</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        
    </form>

</body>
</html>
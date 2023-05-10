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
    <title>Реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>


    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ПІБ</label>
        <input type="text" name="full_name" placeholder="ПІБ" required>
        <label>Логін</label>
        <input type="text" name="login" placeholder="Логін" required>
        <label>Електронна адреса</label>
        <input type="email" name="email" placeholder="Електронна адреса" required>
        <label>Зображення профілю</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Пароль" required>
        <label>Підтвердження паролю</label>
        <input type="password" name="password_confirm" placeholder="Підтвердження паролю" required>
        <button type="submit">Заруєструватися</button>
        <p>
            У вас уже є аккаунт? - <a href="/">авторизуйтеся</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        <p>Реєструючись ви погоджуєтеся з <a href="Ліцензії.html">правилами</a></p>
    </form>

</body>
</html>
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Купити</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="buy.php" method="post">
        <label>Виберіть товар</label>
        <input list="test" placeholder="Виберіть товар..." name="product">
        <datalist id="test">
          <option value="Canon EOS 250D BK 18-55 IS [19 550 UAH]"></option>
          <option value="Canon EF 50mm f/1.8 STM [9 310 UAH]"></option>
          <option value="Nikon AF-S Nikkor 85mm f/1.8G [12 340 UAH]"></option>
          <option value="Sony Alpha а7 III Body Black [35 250 UAH]"></option>
          <option value="Canon EOS 6D Mark II Body [23 560 UAH]"></option>
          <option value="SONY Cyber-Shot RX100 MkVI [59 910 UAH]"></option>
          <option value="Nikon Coolpix L830 Black [7 100 UAH]"></option>
          <option value="Canon EOS 5D Mark IV Body Black [99 900 UAH]"></option>
          <option value="Sony Alpha 7 II 28-70mm Kit Black [53 500 UAH]"></option>
        </datalist>
        <label>Введіть ваш номер телефону</label>
        <input type="text" name="phonenumber" placeholder="+380">
         <label>Введіть ваше ПІБ</label>
        <input type="text" name="fullname" placeholder="ПІБ">
        <label>Виберіть метод оплати</label>
        <br>
        <div>
            <input type="radio" id="Картою_при_отриманні"
             name="delivery" value="Картою_при_отриманні">
            <label for="Картою_при_отриманні">Картою при отриманні</label>
            <br>
            <input type="radio" id="Готівкою_при_отриманні"
             name="delivery" value="Готівкою_при_отриманні">
            <label for="Готівкою_при_отриманні">Готівкою при отриманні</label>

  </div>
  <br>
        <label>Адреса доставки</label>
        <input type="text" name="adress" placeholder="Адреса">
        <label>Введіть кількість товару</label>
        <input type="text" name="count" placeholder="Кількість">
        <button type="submit">Купити</button>
    </form>

</body>
</html>
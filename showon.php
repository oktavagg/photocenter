<?php
  session_start();
    require_once 'connectbuys.php';

$id = $_POST['idoforder'];

$sql = "SELECT * FROM buys WHERE id = $id";

$result = $connect2->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>Продукт: " . $row["product"]. "<br>Номер телефону: " . $row["phonenumber"]. "<br>Адреса доставки: " . $row["adress"]. "<br>Спосіб доставки: " . $row["delivery"]. "<br>Кількість: " . $row["count"]. "<br> ПІБ отримувача: ". $row["full_name"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
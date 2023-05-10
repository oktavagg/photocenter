<?php
  session_start();
    require_once 'vendor/connect.php';
    require_once 'connectbuys.php';
if (!$_SESSION['user']) {
    header('Location: /');
}

$fullname = $_SESSION['user']['full_name'];

$sql = "SELECT * FROM buys WHERE full_name = '$fullname'";

$result = $connect2->query($sql);
echo "Всі ваші замовлення: ";

if ($result->num_rows > 0) 
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]."<br>";
    }

?>
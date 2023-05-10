<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if (!error_get_last()) {

    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $text = $_POST['text'];
    $file = $_FILES['myfile'];
    
    
    $title = "Заголовок письма";
    $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Почта:</b> $email<br><br>
    <b>Сообщение:</b><br>$text
    ";
    
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 1;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['data']['debug'][] = $str;};
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'oktavovich1377@gmail.com';
    $mail->Password = '137731002Qq3301';
    $mail->setFrom('oktavovich1377@gmail.com', 'oktavovich1377'); 
    
    $mail->addAddress('oktavagg@gmail.com');  
    
    if (!empty($file['name'][0])) {
        for ($i = 0; $i < count($file['tmp_name']); $i++) {
            if ($file['error'][$i] === 0) 
                $mail->addAttachment($file['tmp_name'][$i], $file['name'][$i]);
        }
    }
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    
    

    if ($mail->send()) {
        $data['result'] = "success";
        $data['info'] = "Відправлено!";
    } else {
        $data['result'] = "error";
        $data['info'] = "Відправлено!";
    }
    
} else {
    $data['result'] = "error";
    $data['info'] = "Помилка";
    $data['desc'] = error_get_last();
}

header('Content-Type: application/json');
echo json_encode($data);

?>
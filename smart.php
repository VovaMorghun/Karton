<?php

$phone = $_POST['user_phone'];

require_once '/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'vov4ikm1@gmail.com';
$mail->Password = 'asdfghjk';

// От кого
$mail->setFrom('vov4ikm1@gmail.com', 'vov4ik');        

// Кому
$mail->addAddress('asdf@maillist.in', 'Иван Петров');

// Тема письма
$mail->Subject = 'Новая заявка с сайта';

// Тело письма
$body ='Пользователь оставил свои данные <br>
Телефон: '. $phone .''
;
$mail->msgHTML($body);

// Приложение
$mail->addAttachment(__DIR__ . '/image.jpg');

if(!$mail->send()){
    echo 'ERROR';
}else{
header('Location: thanckyou.php');
};
?>
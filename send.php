<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];


if (empty($name) && empty($phone) && empty($message)) {
    $title = "Новая заявка на рассылку";
    $body = "
    <h2>Новая заявка на рассылку</h2>
    <b>Почта:</b><br>$email
    ";
} elseif (($name) && ($phone) && ($email)) {
    $title = "Письмо с модалки";
    $body = "
    <h2>Письмо с модалки</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Почта:</b> $email<br><br>
    <b>Сообщение:</b><br>$message
    ";
} elseif (($name) && ($phone)) {
    $title = "Письмо с футера";
    $body = "
    <h2>Письмо с футера</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message
    ";
};

// Формирование самого письма


// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'seuin54@gmail.com'; // Логин на почте
    $mail->Password   = 'msrgjcvffgdcjwng'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('seuin54@gmail.com', 'Дмитрий Минеев'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('seuin11122@mail.ru');  

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.php');
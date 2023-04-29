<?php

echo "loadet", $_POST['name'],  $_POST['tel'];
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';


// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$tel = $_POST['tel'];
$pmodelphone = $_POST['clientModelPhone'];
$pservice = $_POST['clientService'];
$pprice = $_POST['clientPrice'];
// Формирование самого письма
$title = "Заголовок письма";
$body = "
<h2>Заявка на ремонт. Скорее перезвони!</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $tel<br><br>
<b>Модель телефона: $pmodelphone </b><br>
<b>Услуга: $pservice</b><br>
<b>Цена: $pprice</b>
";


$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'iphone33.ru'; // Логин на почте
    $mail->Password   = 'gbclqgiscqkcdbrl'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('iphone33.ru@yandex.ru', 'Заявка на ремонт с сайт'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('iphone33.ru@yandex.ru');  

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {
    $result = "success";
    header('Location: /thank-you.html/ ');
} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);



?>

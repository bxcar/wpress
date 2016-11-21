<?php

//$sendto  = 'seo@makintour.com, shakrov@ukr.net, marketing@makintour.com'; //Адреса, куда будут приходить письма
$sendto  = 'malanchukdima@mail.ru'; //Адреса, куда будут приходить письма

$phone  = $_POST['phone'];
$name  = $_POST['name'];

// Формирование заголовка письма

$subject  = '[Новая заявка - Coral Travel г. Борисполь]';
//$headers  = "From: ".$name." \r\n";
//$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg = "Новая заявка - Coral Travel г. Борисполь\r\n";
$msg .= "Имя: ".$name."\r\n";
$msg .= "Телефон: ".$phone."\r\n";

// отправка сообщения
if(mail($sendto, $subject, $msg)) {
    echo "true";
} else {
    echo "false";
}
?>
<?php
function complete_mail() {

$name =  htmlspecialchars($_POST['name']);
$kolvo =  htmlspecialchars($_POST['qty']);
$email =  htmlspecialchars($_POST['mail']);
$tel =  htmlspecialchars($_POST['phone']);
// echo "<h1>ФИО: $name<br />Кол-во: $kolvo<br />Емэйл: $email<br />Телефон: $tel</h1>";

$sourceurl =  $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$title = "Новая заявка с сайта " . $sourceurl;


$nowgod = date(Y);
$message = 'ФИО: '.$name.'
Количество: '.$kolvo.'
Контактный телефон: '.htmlspecialchars($_POST['phone']).'
Контактный email: '.$email.'
Со страницы: '.$sourceurl;
$message = iconv("UTF-8","KOI8-R",$message);
$title = iconv("UTF-8","KOI8-R",$title);

$to1 = '4blacktop@gmail.com';
$to2 = 'reklamabelor@yandex.ru';

$subject = '=?KOI8-R?B?' . base64_encode($title) . "?=";
$message = rtrim(chunk_split(base64_encode($message),512,"\r\n"));

// $headers = 'From: ' . $email . "\r\n" .
// 'Reply-To: ' .$email. "\r\n" .
// 'Return-Path: ' . $email . "\r\n" .
$headers = 'X-Priority: 3' . "\r\n" .
'X-Mailer: PHP/' . phpversion() .
'MIME-Version: 1.0' . "\r\n" .
'Content-Transfer-Encoding: base64' . "\r\n" .
'Content-Type: text/plain; charset=koi8-r;' . "\r\n";

// if (mail($to1, $subject, $message, $headers)) {
// echo '<h3>Спасибо за заказ!<br />Заявка отправлена, менеджер свяжется с Вами в ближайшее время.</h3><!--<br /><a href="" onClick="history.back()">Назад</a>-->';	}
// else {	echo 'Спасибо! Ваша заявка НЕ отправлена.<br /><a href="" onClick="history.back()">Назад</a>';	}

// дублируем
mail($to1, $subject, $message, $headers);
mail($to2, $subject, $message, $headers);

if ($email) mail($email, $subject, $message, $headers);
// mail($to3, $subject, $message, $headers);
}
?>
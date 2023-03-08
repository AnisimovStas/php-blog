<?php



$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

$error = '';
if (strlen($username) <= 3) {
    $error = 'Введите имя';
} elseif (strlen($email) <= 3) {
    $error = 'Введите email';
} elseif (strlen($mess) <= 3) {
    $error = 'Введите сообщение';
}
if ($error != '') {
    echo $error;
    exit();
}
$myEmail = 'anisimov-stas.stas@yandex.ru';
$subject = "=?utf-8?B?" . base64_encode("Новое сообщение с сайта") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
mail($myEmail, $subject, $mess, $headers);
echo 'Готово';

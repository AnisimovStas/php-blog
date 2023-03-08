<?php
// $login = $_POST['login'];
// $pass = $_POST['password'];
// $login = trim(htmlspecialchars($_POST['login']));
// // $pass = trim(htmlspecialchars($_POST['password']));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

$error = '';
if (strlen($login) <= 3) {
    $error = 'Введите логин';
} elseif (strlen($pass) <= 3) {
    $error = 'Введите пароль';
}
if ($error != '') {
    echo $error;
    exit();
}
$hash = 'dfhdfgklGFSGhgfdlrfhsf';
$pass = md5($pass . $hash);

require('../mysql/mysql_connect.php');


$sql = 'SELECT id FROM `users` WHERE login = ? && password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $pass]);

$user = $query->fetch(PDO::FETCH_LAZY);

if ($user->id == 0) {
    echo 'Такого пользователя не существует';
} else {
    setcookie('loginCookie', $login, time() + 3600 * 24 * 30, '/');
    echo 'Готово';
}

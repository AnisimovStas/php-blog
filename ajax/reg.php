<?php

// $username = $_POST['username'];
// $email =$_POST['email'];
// $login=$_POST['login'];
// $pass = $_POST['password'];
// $username = trim(htmlspecialchars($_POST['username']));
// $email =trim(htmlspecialchars($_POST['email']));
// $login=trim(htmlspecialchars($_POST['login']));
// $pass = trim(htmlspecialchars($_POST['password']));




$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

$error = '';
if (strlen($username) <= 3) {
    $error = 'Введите имя';
} elseif (strlen($email) <= 3) {
    $error = 'Введите email';
} elseif (strlen($login) <= 3) {
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
$sql = 'INSERT INTO users(username, email, login, password) VALUES (?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $pass]);

echo 'Готово';

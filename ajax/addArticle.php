
<?php


$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$text = trim(filter_var($_POST['text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

$error = '';
if (strlen($title) <= 3) {
    $error = 'Введите название статьи';
} elseif (strlen($intro) <= 5) {
    $error = 'Введите вводный текст';
} elseif (strlen($text) <= 5) {
    $error = 'Введите текст статьи';
} 
if ($error != '') {
    echo $error;
    exit();
}

require('../mysql/mysql_connect.php');
$sql = 'INSERT INTO articles(title, intro, text, date, author) VALUES (?,?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, time(),$_COOKIE['loginCookie']]);

echo 'Готово';

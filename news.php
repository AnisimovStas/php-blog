<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <?php
    require_once('mysql_connect.php');
    $sql = "SELECT * FROM articles WHERE id = :id";
    $id = $_GET['id'];
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $article = $query->fetch(PDO::FETCH_OBJ);

    ?>
    <title> <?php echo $article->title ?> </title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main id="content" class="container m-auto row g-5">
        <div class="col-md-8">
            <div class="jumbotron ">
                <h1><?= $article->title ?></h1>
                <p><b>Автор статьи: <mark><?= $article->author ?> </mark> </b></p>
                <p><?= $article->intro ?></p>
                <br>
                <p><?= $article->text ?></p>
                <?php
                $date = date('H:i ', $article->date);
                $date .= date('d ', $article->date);
                $array = ["Января", "февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
                $date .= $array[date('n', $article->date) - 1];
                $date .= date(' Y', $article->date);
                ?>

                <p> <b>Время публикации: </b><?= $date ?></p>
            </div>
            <h3 class="mt-3"> Комментарии:</h3>
            <form action="/news.php?id=<?= $_GET['id'] ?>" method='post'>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" value="<?= $_COOKIE['loginCookie'] ?>" id="username" placeholder="Введите имя пользователя">
                    <label for="username">Имя пользователя</label>
                </div>
                <div class="form-floating">
                    <textarea type="text" class="form-control" name="mess" id="mess" placeholder="Введите комментарий"></textarea>
                    <label for="mess">Комментарии</label>
                </div>
                <button type="submit" class="w-100 btn btn-lg btn-warning mb-3" id="sendMess">Добавить комментарий</button>
            </form>
            <?php
            if ($_POST['username'] != '' && $_POST['mess'] != '') {
                $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
                $mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

                $sql = 'INSERT INTO comments(username, mess, articleId) VALUES (?,?,?)';
                $query = $pdo->prepare($sql);
                $query->execute([$username, $mess, $_GET['id']]);
            }
            $sql = 'SELECT * FROM comments WHERE articleId = :id ORDER BY id DESC';
            $query = $pdo->prepare($sql);
            $query->execute(['id' => $_GET['id']]);
            $comments = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($comments as $comment) {
                echo "<div class='alert alert-info mb-12'>
                <h4>$comment->username</h4> 
                <p>$comment->mess</p>
                </div>";
            }
            ?>
        </div>
        <?php require './blocks/aside.php' ?>
    </main>
    <div> <?php require './blocks/footer.php' ?> </div>
</body>

</html>
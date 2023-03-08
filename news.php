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

              <p>  <b>Время публикации: </b><?= $date ?></p>

            </div>

        </div>
        <?php require './blocks/aside.php' ?>
    </main>
    <div class="absolute"> <?php require './blocks/footer.php' ?> </div>
</body>

</html>
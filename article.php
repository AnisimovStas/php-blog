<?php
if ($_COOKIE['loginCookie'] == '') {
    header('location: /reg.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <title>Добавление статьи </title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main class="container mt-5  ">
        <form>
            <h1 class="h3 mb-3 text-center fw-normal">Добавление статьи </h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="title" placeholder="Введите заголовок">
                <label for="title">Заголовок статьи</label>
            </div>
            <div class="form-floating">
                <textarea type="text" class="form-control" name="intro" id="intro" placeholder="Введите вводную часть"></textarea>
                <label for="intro">Вводная часть</label>
            </div>
            <div class="form-floating">
                <textarea type="text" class="form-control" name="text" id="text" placeholder="Введите текст"></textarea>
                <label for="text">Текст статьи</label>
            </div>

            <div class="alert alert-danger testing" id="alert"> </div>
            <button class="w-100 btn btn-lg btn-warning" id="sendArticle" type="button">Добавить</button>
        </form>
    </main>
    <div class="absolute">
        <?php require './blocks/footer.php' ?> </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $('#sendArticle').click(function() {
            let title = $('#title').val();
            let intro = $('#intro').val();
            let text = $('#text').val();
            $.ajax({
                url: 'ajax/addArticle.php',
                type: 'POST',
                cache: false,
                data: {
                    'title': title,
                    'intro': intro,
                    'text': text
                },
                dataType: "HTML",
                success: function(data) {
                    if (data == 'Готово') {
                        $('#sendArticle').text('Статья добавлена в блог');
                        $('#sendArticle').css('background-color', 'green');
                        $('#sendArticle').css('color', 'white');
                        $('#alert').hide();
                    } else {
                        $('#alert').show();
                        $('#alert').text(data);
                    }
                }
            })

        });
    </script>
</body>

</html>